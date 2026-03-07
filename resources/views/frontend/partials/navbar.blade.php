<body>
    <nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-default">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="img/logo.png" class="h-7" alt="Flowbite Logo">
                <span class="self-center text-xl text-heading font-semibold whitespace-nowrap">SANUBARI</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                @guest
                    <a href="{{ route('login') }}"
                        class="text-white bg-orange-500 hover:bg-orange-700 border border-transparent shadow-xs font-medium rounded-lg text-sm px-3 py-2">
                        Masuk
                    </a>
                @endguest

                @auth
                    <div class="relative">
                        <button id="userDropdownButton" data-dropdown-toggle="userDropdown"
                            class="flex p-2 items-center space-x-3 text-sm rounded-full focus:ring-2 focus:ring-gray-200">

                            <div
                                class="w-6 h-6 flex items-center justify-center rounded-full bg-orange-500 text-white font-semibold uppercase">
                                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                            </div>

                            <!-- Nama -->
                            <span class="text-gray-700 font-medium hidden md:block">
                                {{ auth()->user()->name }}
                            </span>
                        </button>

                        <!-- Dropdown -->
                        <div id="userDropdown"
                            class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44">

                            <div class="px-4 py-3">
                                <span class="block text-sm text-gray-900">{{ auth()->user()->name }}</span>
                                <span class="block text-sm text-gray-500 truncate">{{ auth()->user()->email }}</span>
                            </div>
                            {{-- {{ route('mydashboard', ['id' => Auth::id(), 'name' => Auth::user()->name]) }} --}}
                            <div class="px-4 py-3">
                                <a href="#" class="block text-sm text-gray-900">Donasi Saya</a>
                            </div>

                            <ul class="py-2">
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit"
                                            class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                            Keluar
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endauth
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-body rounded-base md:hidden hover:bg-neutral-secondary-soft hover:text-heading focus:outline-none focus:ring-2 focus:ring-neutral-tertiary"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M5 7h14M5 12h14M5 17h14" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-default rounded-base bg-neutral-secondary-soft md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-neutral-primary">
                    <li>
                        <a href="{{ route('home') }}"
                            class="block py-2 px-3 text-orange-500 bg-brand rounded-sm md:bg-transparent md:text-fg-brand md:p-0"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">Tentang</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">Donasi</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">Galeri</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">Berita</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
