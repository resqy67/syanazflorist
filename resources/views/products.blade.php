@extends('layouts.app')

@section('content')
    <!-- Product Section -->
    <div class="bg-white">
        <div class="md:px-32 p-4 bg-green-400">
            <h2 class="text-white mt-2 text-3xl font-bold container mx-auto">Produk Kami</h2>
        </div>
            {{-- buatkan filter produk --}}
            <div class="p-4 bg-green-400">
                <form action="{{ route('products') }}" method="GET" class="container mx-auto">
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="category">
                                Kategori
                            </label>
                            <div class="relative">
                                <select name="category" id="category"
                                    class="block appearance-none w-full bg-white border border-gray-400 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                    <option value="">Semua Kategori</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->slug }}"
                                            {{ request()->get('category') == $category->slug ? 'selected' : ''}}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="search">
                                Cari Produk
                            </label>
                            <input name="search" id="search"
                                class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                type="text" placeholder="Cari produk" value="{{ request()->get('search') }}">
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button
                            class="bg-white text-green-400 font-semibold py-2 px-4 border border-transparent rounded-lg inline-block shadow hover:bg-green-100 transition-colors">
                            Filter
                        </button>
                    </div>
                </form>
            </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 lg:gap-6 max-w-6xl mx-auto container my-8 p-4">
            <!-- Product Card -->
            @if ($products->isEmpty())
            <div class="container mx-auto py-8">
                <p class="text-center text-2xl text-gray-800">Tidak ada produk yang tersedia.</p>
            </div>
            @else
                @foreach ($products as $product)
                    @include('components.product-card', [
                        'category' => $product->category->name,
                        'image' => $product->image,
                        'slug' => $product->slug,
                        'name' => $product->name,
                        'description' => $product->description,
                        'price' => 'Rp. ' . number_format($product->price, 0, ',', '.'),
                    ])
                @endforeach
            @endif
            <!-- End Product Card -->
        </div>
    </div>
    <!-- End Product Section -->
@endsection
