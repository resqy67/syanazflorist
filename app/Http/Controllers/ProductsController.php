<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use App\Models\categories;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = products::latest()->take(3)->get();
        $categories = categories::all();
        return view('home', compact('products', 'categories'));
    }

    public function products(Request $request)
    {
        $query = products::query();

        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->has('category') && $request->category != '') {
            $query = products::whereHas('category', function ($query) use ($request) {
                $query->where('slug', $request->category);
            });
        }

        $products = $query->get();
        $categories = categories::all();

        return view('products', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = categories::all();
        return view('create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',
            'slug' => 'required|unique:products,slug',
            'category_id' => 'required',
        ]);
        $slug = Str::slug($request->name);
        $request->merge(['slug' => $slug]);

        Products::create($request->all());

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $product = products::with('category')->where('slug', $slug)->firstOrFail();
        $products = products::all();
        $categories = categories::all();
        // dd($products);
        return view('product-detail', compact('product', 'categories', 'products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(products $products)
    {
        //
        $categories = Categories::all();
        return view('edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(products $products)
    {
        //
    }
}
