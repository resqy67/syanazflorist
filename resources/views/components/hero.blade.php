<div class="relative flex items-center justify-center h-screen">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="{{ asset('storage/background.webp') }}" alt="Background"
            class="w-full h-full object-cover transition-transform duration-500 ease-[cubic-bezier(0.25, 1, 0.5, 1)] transform group-hover:scale-110"  />
        <div class="absolute inset-0 bg-black/50"></div>
    </div>

    <!-- Content -->
    <div class="relative text-center text-white space-y-4">
        <h2 class="text-lg font-semibold">Syanaz Florist</h2>
        <h1 class="text-5xl font-bold">Toko Papan Ucapan Balikpapan</h1>

            <p class="text-lg max-w-2xl">
                Toko bunga online terpercaya di Balikpapan. Kami menyediakan papan bunga dengan desain custom yang unik
                dan menarik dengan harga terjangkau, pelayanan ramah, tepat waktu, dan siap melayani 24 jam.
            </p>
        <a href="/products"
            class="inline-block px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-bold rounded-lg shadow-lg transition">
            Pesan Sekarang
        </a>
    </div>
</div>
