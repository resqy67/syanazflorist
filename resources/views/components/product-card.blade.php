<a href="{{ route('products.show', ['slug' => $slug]) }}" class="cursor-pointer relative flex flex-col bg-white shadow-sm border border-slate-200 rounded-lg w-auto hover:shadow-md transition-shadow">
    <!-- Gambar Produk -->
    <div class="relative h-56 m-2.5 overflow-hidden text-white rounded-md">
        <img src="{{ asset('storage/' . $image) }}" alt="{{ $name }}" class="w-full h-full object-cover" />
    </div>

    <!-- Informasi Produk -->
    <div class="p-4 text-center"> <!-- Tambahkan `text-center` di level dasar -->
        <h6 class="text-slate-800 text-xl font-semibold">
            {{ $name }}
        </h6>
        <p class="text-slate-600 leading-normal font-light mt-2">
            {{ $description }}
        </p>
    </div>

    <!-- Harga Produk -->
    <div class="group my-3 flex justify-center items-center gap-2">
        <span class="text-slate-800 font-semibold text-xl">
            {{ $price }}
        </span>
    </div>

    <!-- Tombol Pesan -->
    <div class="px-4 pb-4 pt-0 mt-2">
        <button
            class="w-full rounded-md bg-green-400 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-600 focus:shadow-none active:bg-green-600 hover:bg-green-600 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            type="button">
            Pesan Sekarang
        </button>
    </div>
</a>
