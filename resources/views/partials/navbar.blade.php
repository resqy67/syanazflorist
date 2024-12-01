<nav class="block w-full px-4 py-2 bg-white text-white">
    <div class="container flex flex-wrap items-center justify-between mx-auto text-slate-800">
        <!-- Logo -->
        <a href="/" class="mr-4 block cursor-pointer text-base font-semibold text-slate-800 hover:text-green-600">
            <div class="grid grid-cols-1 gap-4">
                <div class="flex items-center">
                    <img src="{{ asset('logo.png') }}" alt="Syanaz Florist Logo"
                        class="h-16 w-16 md:h-24 md:w-24 lg:h-32 lg:w-32">
                    <div class="flex flex-col">
                        <h5 class="text-lg font-semibold text-slate-800">Syanaz Florist</h5>
                        <h5 class="text-sm font-thin text-slate-800">Karangan Bunga Balikpapan</h5>
                    </div>
                </div>
            </div>
        </a>

        <!-- Navigation Menu -->
        <div id="navMenu" class="hidden lg:block w-full lg:w-auto transition-all duration-300 ease-in-out">
            <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
                <li class="flex items-center p-1 text-sm gap-x-2 text-slate-600">
                    <a href="/" class="flex items-center hover:text-green-600">Beranda</a>
                </li>
                <li class="flex items-center p-1 text-sm gap-x-2 text-slate-600">
                    <a href="/products" class="flex items-center hover:text-green-600">Produk</a>
                </li>
                <li class="flex items-center p-1 text-sm gap-x-2 text-slate-600">
                    <a href="#" class="flex items-center hover:text-green-600">Kontak Kami</a>
                </li>
            </ul>
        </div>

        <!-- Mobile Menu Button -->
        <button id="menuToggle"
            class="relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] select-none rounded-lg text-center align-middle text-xs font-medium uppercase text-inherit transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent lg:hidden"
            type="button">
            <span id="menuIcon" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 transform">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor"
                    stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </span>
            <span id="closeIcon" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 transform hidden">
                <svg class="w-6 h-6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M10.9393 12L6.9696 15.9697L8.03026 17.0304L12 13.0607L15.9697 17.0304L17.0304 15.9697L13.0607 12L17.0303 8.03039L15.9696 6.96973L12 10.9393L8.03038 6.96973L6.96972 8.03039L10.9393 12Z"
                            fill="#000000"></path>
                    </g>
                </svg>
            </span>
        </button>
    </div>
</nav>
