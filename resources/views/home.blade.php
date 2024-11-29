@extends('layouts.app')

@section('content')
    @include('components.hero')
    <div class="py-16 bg-gray-100">
        <h2 class="text-center text-3xl font-bold mb-8">Mengapa Memilih Kami?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto container">
            {{-- <div class="flex flex-row gap-8 max-w-6xl mx-auto container"> --}}
            <!-- Feature Card -->
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

    <!-- Product Section -->
    <div class="py-16 bg-white">
        <h2 class="text-center text-3xl font-bold mb-8">Produk Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto container">
            <!-- Product Card -->
            {{-- @include('components.product-card')
            @include('components.product-card')
            @include('components.product-card') --}}
        </div>

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
@endsection
