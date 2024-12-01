<a href="{{ route('products.show', ['slug' => $slug]) }}" class="cursor-pointer relative flex flex-col bg-white shadow-sm border border-slate-200 rounded-lg w-64 hover:shadow-md transition-shadow">
    <div class="relative h-32 m-2.5 overflow-hidden text-white rounded-md">
        <img src="https://images.unsplash.com/photo-1499696010180-025ef6e1a8f9?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1470&amp;q=80" alt="{{ $name }}" class="w-full h-full object-cover" />
    </div>
    <div class="p-4">
        <div class="flex items-center mb-2">
            <h6 class="text-slate-800 text-lg font-semibold">
                {{ $name }}
            </h6>
        </div>
        <p class="text-slate-600 leading-normal font-light text-sm md:text-center">
            {{ $description }}
        </p>
    </div>
    <div class="group inline-flex flex-wrap justify-center items-center gap-2 mb-2">
        <span class="text-slate-800 font-semibold text-lg">
            {{ $price }}
        </span>
    </div>
    <div class="px-4 pb-4 pt-0 mt-2">
        <button
            class="w-full rounded-md bg-green-400 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-600 focus:shadow-none active:bg-green-600 hover:bg-green-600 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            type="button">
            Pesan Sekarang
        </button>
    </div>
</a>
