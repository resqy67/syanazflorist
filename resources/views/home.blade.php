@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    @include('components.hero')
    <!-- End Hero Section -->

    <!-- Feature Card -->
    <div class="py-16 bg-gray-100">
        <h2 class="text-center text-3xl font-bold mb-8">Mengapa Memilih Kami?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto container">
            @include('components.feature-card', [
                'title' => 'Desain Unik',
                'description' => 'Kami menyediakan desain papan bunga yang unik dan menarik.',
            ])
            @include('components.feature-card', [
                'title' => 'Harga Terjangkau',
                'description' => 'Kami menyediakan papan bunga dengan harga terjangkau.',
            ])
            @include('components.feature-card', [
                'title' => 'Pelayanan Ramah',
                'description' => 'Kami memberikan pelayanan yang ramah dan profesional.',
            ])
        </div>
    </div>
    <!-- End Feature Card -->

    <!-- Product Section -->
    <div class="py-16 bg-white">
        <h2 class="text-center text-3xl font-bold mb-8">Produk Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto container">
            <!-- Product Card -->
            @foreach ($products as $product)
                @include('components.product-card', [
                    'id' => $product->id,
                    'name' => $product->name,
                    'description' => $product->description,
                    'price' => 'Rp. ' . number_format($product->price, 0, ',', '.'),
                ])
            @endforeach
            <!-- End Product Card -->
        </div>
    </div>
    <!-- End Product Section -->

    <!-- Testimonial Section -->
    <div class="py-16 bg-gray-100">
        <h2 class="text-center text-3xl font-bold mb-6">Apa Kata Pelanggan Kami?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto container">
            <!-- Testimonial Card -->
            @include('components.testimonial')
            @include('components.testimonial')
            @include('components.testimonial')
        </div>
    </div>
    <!-- End Testimonial Section -->
@endsection
