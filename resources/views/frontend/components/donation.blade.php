<section class="bg-white">
    <div class="p-8 mx-auto max-w-screen-xl ">
        <h2 class="mb-2 text-3xl font-bold text-gray-900 text-center">Penggalangan Mendesak</h2>
        <p class="mb-6 text-lg font-normal text-gray-700 text-center">Your donation can make a
            real
            difference in the lives of those in need.</p>
        <div class="relative">
            <div
                class="pointer-events-none absolute left-0 top-0 h-full w-15 
                bg-gradient-to-r from-white to-transparent z-10">
            </div>
            <div
                class="pointer-events-none absolute right-0 top-0 h-full w-115
                bg-gradient-to-l from-white to-transparent z-10">
            </div>
            <div class="swiper donationSwiper">
                <div class="swiper-wrapper mb-12">
                    @foreach ($donations as $donation)
                        <div class="swiper-slide">
                            <div class="bg-white-soft block max-w-sm border border-default rounded-lg shadow-xs mt-8">
                                <img class="rounded-t-lg" src="storage/{{ $donation->image }}"
                                    alt="{{ $donation->image }}" />
                                <div class="p-4">
                                    <a href="{{ route('donationDetail', $donation->slug) }}">
                                        <h5
                                            class="mb-3 text-2xl font-semibold tracking-tight text-gray-900 hover:text-orange-500">
                                            {{ Str::limit($donation->title, 35) }}
                                        </h5>
                                    </a>
                                    <div class="flex flex-cols items-center justify-between">
                                        <div>
                                            <span class="mb-2 text-gray-400 text-sm">Terkumpul</span>
                                            <h5 class="mb-4 text-2xl font-bold text-orange-500">
                                                {{ number_format($donation->registrations_sum_quantity, 0, ',', '.') }}
                                                <sup class="text-sm">{{ $donation->unit }}</sup>
                                            </h5>
                                        </div>
                                        <div>
                                            <p class="text-gray-600 text-sm">Dari <span
                                                    class="font-semibold">{{ number_format($donation->target_quantity, 0, ',', '.') }}
                                                    {{ $donation->unit }}</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full">
                                        <div class="bg-orange-500 text-xs mb-6 font-medium text-white text-center p-0.5 leading-none rounded-full h-2 flex items-center justify-center"
                                            style="width: {{ $progress }}%"></div>
                                    </div>
                                    <div class="flex flex-cols items-center justify-between">
                                        <div>
                                            <p class="text-gray-600 text-sm font-semibold">
                                                {{ $donation->registrations_count }} <span
                                                    class="font-normal">Donasi</span>
                                            </p>
                                        </div>
                                        <div>
                                            <p class="text-gray-600 text-sm font-semibold">{{ $daysLeft }} <span
                                                    class="font-normal">Hari
                                                    lagi</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper-pagination mt-18"></div>
            <div class="swiper-button-prev text-orange-500"></div>
            <div class="swiper-button-next text-orange-500"></div>
        </div>
    </div>
</section>
