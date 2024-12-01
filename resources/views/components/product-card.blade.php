<a href="{{ route('products.show', ['slug' => $slug]) }}"
    class="cursor-pointer relative flex flex-col w-auto bg-white shadow-sm border border-slate-200 rounded-lg hover:shadow-md transition-shadow">
    <div class="bg-white relative shadow-md rounded-lg overflow-hidden flex flex-col h-full">
        <div class="">
            <img class="w-full h-48 object-cover"
                src="{{ asset('storage/' . $image) }}"
                alt="{{ $name }}">
            <div class="p-4">
                <div class="py-2">
                    <h5 class="text-xs text-gray-600">{{ $category }}</h5>

                </div>
                <h3 class="text-sm font-semibold">{{ $name }}</h3>
                <p class="text-xs text-gray-600">{{ $description }}</p>
            </div>
        </div>
        <div class="mt-auto px-4 pb-4 ">
            <div class="text-center mb-2">
                <span class="text-sm font-bold text-green-500 items-center text-center">{{ $price }}</span>
            </div>
            <button
                class="w-full rounded-md bg-green-400 py-2 px-4 text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-600 focus:shadow-none active:bg-green-600 hover:bg-green-600 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                type="button">
                Lihat Produk
            </button>
        </div>
    </div>
</a>
