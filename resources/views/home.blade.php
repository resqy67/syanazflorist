@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    @include('components.hero')
    <!-- End Hero Section -->

    <!-- Feature Card -->
    <div class="py-12 bg-gray-100">
        <h2 class="text-center text-3xl font-bold mb-2">Mengapa Memilih Kami?</h2>
        <p class="text-center text-gray-600 mb-8 px-4">Kami memberikan pelayanan terbaik untuk Anda.</p>
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
    <div class="py-12 bg-white">
        <h2 class="text-center text-3xl font-bold mb-2">Produk Kami</h2>
        <p class="text-center text-gray-600 mb-8 px-4">Temukan papan bunga yang sesuai dengan kebutuhan Anda.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto container px-4">
            <!-- Product Card -->
            @foreach ($products as $product)
                @include('components.product-card', [
                    'slug' => $product->slug,
                    'name' => $product->name,
                    'description' => $product->description,
                    'price' => 'Rp. ' . number_format($product->price, 0, ',', '.'),
                ])
            @endforeach
            <!-- End Product Card -->
        </div>
        <div class="flex justify-center">
            <a href="{{ route('products') }}" class=" text-center text-white font-semibold py-2 px-4 border border-transparent rounded-lg inline-block shadow bg-green-400 hover:bg-green-600 transition-colors mt-8">
                Lihat Semua Produk ->
            </a>
        </div>
    </div>
    <!-- End Product Section -->

    <!-- Testimonial Section -->
    <div class="py-16 bg-gray-100">
        <h2 class="text-center text-3xl font-bold mb-2">Ulasan Pelanggan</h2>
        <p class="text-center text-gray-600 mb-4">Apa kata pelanggan setia tentang produk kami.</p>
        <div class="container mx-auto px-4">
            <div class="swiper swiper-container">
                <div class="swiper-wrapper">
                    <!-- Testimonial Card -->
                    <div class="swiper-slide">
                        @include('components.testimonial')
                    </div>
                    <div class="swiper-slide">
                        @include('components.testimonial')
                    </div>
                    <div class="swiper-slide">
                        @include('components.testimonial')
                    </div>
                    <div class="swiper-slide">
                        @include('components.testimonial')
                    </div>
                    <div class="swiper-slide">
                        @include('components.testimonial')
                    </div>
                    <!-- Tambahkan lebih banyak jika diperlukan -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial Section -->

    <!-- Brands Section -->
    <div class="py-12 bg-white">
        <h2 class="text-center text-3xl font-bold mb-2">Mitra Kami</h2>
        <p class="text-center text-gray-600 mb-8 px-4">Kami bekerja sama dengan mitra terbaik untuk memberikan pelayanan terbaik.</p>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 max-w-6xl mx-auto container px-4">
            <!-- Brand Logo -->
            <div class="flex justify-center items-center">
                <img src="https://via.placeholder.com/150" alt="Brand Logo" class="h-16" />
            </div>
            <div class="flex justify-center items-center">
                <img src="https://via.placeholder.com/150" alt="Brand Logo" class="h-16" />
            </div>
            <div class="flex justify-center items-center">
                <img src="https://via.placeholder.com/150" alt="Brand Logo" class="h-16" />
            </div>
            <div class="flex justify-center items-center">
                <img src="https://via.placeholder.com/150" alt="Brand Logo" class="h-16" />
            </div>
            <div class="flex justify-center items-center">
                <img src="https://via.placeholder.com/150" alt="Brand Logo" class="h-16" />
            </div>
            <!-- End Brand Logo -->
        </div>
    </div>
    <!-- End Brands Section -->

    <!-- CTA Section -->
    <div class="bg-gray-100">
        <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            {{-- <img class="w-full rounded-lg shadow-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup.svg" alt="dashboard image"> --}}
            <div id="map" class="w-full h-96 rounded-lg shadow-lg border border-gray-200"></div>
            <div class="mt-4 md:mt-0">
                <h2 class="text-3xl font-bold">Pesan Bunga Mudah dan Cepat Disini!</h2>
                <p class="text-gray-600 mt-4">
                    Kami menyediakan papan bunga dengan desain custom yang unik dan menarik dengan harga terjangkau, pelayanan ramah, tepat waktu, dan siap melayani 24 jam.
                </p>
                <p class="text-gray-600 mt-4">
                    Kunjungi toko kami sekarang dan dapatkan penawaran menarik.
                </p>
                <div class="mt-8">
                    <a href="#" class="inline-block px-6 py-3 bg-green-400 hover:bg-green-500 text-white font-bold rounded-lg shadow-lg transition">
                        Kunjungi Toko
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End CTA Section -->


@endsection
