@include('frontend.partials.header')
@include('frontend.partials.navbar')
<section class="py-8 bg-white md:py-16 dark:bg-gray-900 antialiased mt-8">
    <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
        <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
            <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
                <img class="w-full" src="storage/{{ $donation->image }}" alt="{{ $donation->image }}" />
            </div>

            <div class="mt-6 sm:mt-8 lg:mt-0">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                    {{ $donation->title }}
                </h1>

                <div class="flex flex-cols items-center justify-between mt-4">
                    <div>
                        <span class="mb-2 text-gray-400 text-sm">Terkumpul</span>
                        <h5 class="mb-4 text-2xl font-extrabold text-orange-500">
                            {{ number_format($donation->registrations_sum_quantity, 0, ',', '.') }}
                            <sup class="text-sm">{{ $donation->unit }}</sup>
                        </h5>
                    </div>
                    <div>
                        <span class="mb-2 text-gray-400 text-sm">Dari</span>
                        <h5 class="font-semibold">{{ number_format($donation->target_quantity, 0, ',', '.') }}
                            {{ $donation->unit }}</h5>
                    </div>
                </div>
                <div class="w-full bg-gray-200 rounded-full">
                    <div class="bg-orange-500 text-xs mb-6 font-medium text-white text-center p-0.5 leading-none rounded-full h-4 flex items-center justify-center"
                        style="width: {{ $progress }}%">{{ $progress }}%</div>
                </div>
                <div class="flex flex-cols items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm font-semibold">
                            {{ $donation->registrations_count }} <span class="font-normal">Donasi</span>
                        </p>
                    </div>
                    <div>
                        <p class="text-gray-600 text-sm font-semibold">{{ $daysLeft }} <span
                                class="font-normal">Hari
                                lagi</span></p>
                    </div>
                </div>

                <div class="mt-6 sm:gap-4 sm:items-center sm:flex sm:mt-8">
                    <a href="#" title=""
                        class="flex items-center justify-center py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                        role="button">
                        <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17.5 3a3.5 3.5 0 0 0-3.456 4.06L8.143 9.704a3.5 3.5 0 1 0-.01 4.6l5.91 2.65a3.5 3.5 0 1 0 .863-1.805l-5.94-2.662a3.53 3.53 0 0 0 .002-.961l5.948-2.667A3.5 3.5 0 1 0 17.5 3Z" />
                        </svg>

                        Bagikan
                    </a>

                    <a href="{{ route('donationRegister', $donation->slug) }}" title=""
                        class="text-white mt-4 sm:mt-0 bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-orange-500 dark:hover:bg-orange-700 focus:outline-none dark:focus:ring-orange-800 flex items-center justify-center"
                        role="button">
                        Donasi Sekarang
                    </a>
                </div>

                <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />
                <h5 class="text-gray-500 text-lg font-bold mb-2">Kebutuhan</h5>
                <div class="grid grid-cols-[140px_10px_auto] text-gray-500 mb-6">
                    <span>Nama Barang</span>
                    <span>:</span>
                    <span>{{ $donation->item_name }}</span>

                    <span>Kebutuhan</span>
                    <span>:</span>
                    <span>{{ number_format($donation->target_quantity, 0, ',', '.') }}
                    </span>

                    <span>Unit</span>
                    <span>:</span>
                    <span>{{ $donation->unit }}</span>
                </div>
                <h5 class="text-gray-500 text-lg font-bold mb-2">Deskripsi</h5>
                <p class="mb-6 text-gray-500 dark:text-gray-400 text-justify">
                    {{ $donation->description }}
                </p>
            </div>
        </div>
    </div>
</section>

@include('frontend.partials.footer')
