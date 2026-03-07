<aside id="top-bar-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-full transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-white border-e border-default">
        <a href="#" class="flex items-center ps-2.5 mb-5">
            {{-- <img src="" class="h-6 me-3" /> --}}
            <span class="self-center text-lg text-heading font-semibold whitespace-nowrap">&nbsp;</span>
        </a>
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('mydashboard', ['id' => $user->id, 'name' => $user->name]) }}"
                    class="flex items-center px-2 py-1.5 text-body rounded-lg hover:bg-orange-100 hover:text-orange-500 group 
        {{ request()->routeIs('mydashboard') ? 'bg-orange-100 text-orange-500' : 'bg-gray-600' }}">

                    <svg class="w-5 h-5 transition duration-75 group-hover:text-orange-500"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6.025A7.5 7.5 0 1 0 17.975 14H10V6.025Z" />
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13.5 3c-.169 0-.334.014-.5.025V11h7.975c.011-.166.025-.331.025-.5A7.5 7.5 0 0 0 13.5 3Z" />
                    </svg>

                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('mydonation', ['id' => $user->id, 'name' => $user->name]) }}"
                    class="flex items-center px-2 py-1.5 text-body rounded-lg hover:bg-orange-100 hover:text-orange-500 group {{ request()->routeIs('mydashboard') ? 'bg-orange-100 text-orange-500' : 'bg-gray-600' }}">
                    <svg class="shrink-0 w-5 h-5 transition duration-75 group-hover:text-orange-500" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 21v-9m3-4H7.5a2.5 2.5 0 1 1 0-5c1.5 0 2.875 1.25 3.875 2.5M14 21v-9m-9 0h14v8a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-8ZM4 8h16a1 1 0 0 1 1 1v3H3V9a1 1 0 0 1 1-1Zm12.155-5c-3 0-5.5 5-5.5 5h5.5a2.5 2.5 0 0 0 0-5Z" />
                    </svg>

                    <span class="flex-1 ms-3 whitespace-nowrap">Donasi Saya</span>

                </a>
            </li>

        </ul>
    </div>
</aside>
