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
                    'image' => $product->image,
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
                        @include('components.testimonial',[
                            'name' => 'Tania Andrew',
                            'position' => 'CEO, Company Name',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        ])
                    </div>
                    <div class="swiper-slide">
                        @include('components.testimonial', [
                            'name' => 'John Doe',
                            'position' => 'CTO, Company Name',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        ])
                    </div>
                    <div class="swiper-slide">
                        @include('components.testimonial', [
                            'name' => 'Jane Doe',
                            'position' => 'COO, Company Name',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        ])
                    </div>
                    <div class="swiper-slide">
                        @include('components.testimonial', [
                            'name' => 'Tania Andrew',
                            'position' => 'CEO, Company Name',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        ])
                    </div>
                    <div class="swiper-slide">
                        @include('components.testimonial', [
                            'name' => 'John Doe',
                            'position' => 'CTO, Company Name',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        ])
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
                <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/mlogo/ANC-60077.png" alt="Brand Logo" class="h-24" />
            </div>
            <div class="flex justify-center items-center">
                <img src="data:image/png;base64,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" alt="Brand Logo" class="h-16" />
            </div>
            <div class="flex justify-center items-center">
                <img src="https://mitrausahaindoglobal.com/wp-content/themes/muichamp/asset/662/08/mui-logo.png" alt="Brand Logo" class="h-16" />
            </div>
            <div class="flex justify-center items-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYNpkCVS6Hei9BTM3_OGyq5HGcOMGem8LhIw&s" alt="Brand Logo" class="h-32" />
            </div>
            <div class="flex justify-center items-center">
                <img src="https://media.suara.com/pictures/653x366/2022/03/02/pt-asuransi-binagriya-upakara-profil-dan-alamat-lengkap.jpg" alt="Brand Logo" class="h-16" />
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
                    <a href="https://maps.app.goo.gl/BaV28TKMDFVKeqTeA" class="inline-block px-6 py-3 bg-green-400 hover:bg-green-500 text-white font-bold rounded-lg shadow-lg transition">
                        Kunjungi Toko
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End CTA Section -->


@endsection
