@include('frontend.partials.header')
@include('frontend.partials.navbar')
<section class="bg-white mt-4">
    <div class="flex flex-col justify-center items-center px-8 py-8 mx-auto min-h-screen">

        <div class="max-w-2xl w-full bg-neutral-primary-soft p-6 border border-default rounded-lg shadow-xs text-center">

            <h1 class="text-2xl mb-2 font-bold text-gray-900">
                Terima Kasih! 🎉
            </h1>

            <p class="text-sm text-gray-500 mb-6">
                Terima kasih telah berpartisipasi dalam program donasi ini.
                Dukungan Anda sangat berarti bagi mereka yang membutuhkan.
            </p>

            <h5 class="text-lg mb-6 font-semibold text-gray-900">
                Silakan kirimkan donasi sesuai dengan jumlah yang telah Anda isi.
            </h5>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left mb-8">

                <div>
                    <span class="text-gray-400 text-sm">Jumlah Donasi Anda</span>
                    <h5 class="font-extrabold text-2xl mt-1">
                        {{ number_format($donationReg->quantity, 0, ',', '.') }} {{ $donation->unit }}
                    </h5>
                </div>

                <div>
                    <span class="text-gray-400 text-sm">Alamat Pengiriman</span>
                    <h5 class="font-semibold mt-1">
                        {{ $donation->delivery_address }}
                    </h5>
                </div>

                <div>
                    <span class="text-gray-400 text-sm">Lokasi di Google Maps</span>
                    <a href="https://www.google.com/maps?q={{ $donation->latitude }},{{ $donation->longitude }}"
                        target="_blank" class="block font-semibold text-orange-500 hover:underline mt-1">
                        Buka Google Maps
                    </a>
                </div>

            </div>

            <a href="{{ url('/') }}"
                class="block text-center text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:ring-orange-300 shadow-xs font-medium rounded-lg text-sm px-4 py-3 w-full">
                Kembali ke Halaman Utama
            </a>

        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

<script>
    window.onload = function() {

        const duration = 3 * 1000;
        const end = Date.now() + duration;

        (function frame() {
            confetti({
                particleCount: 5,
                angle: 60,
                spread: 70,
                origin: {
                    x: 0
                }
            });

            confetti({
                particleCount: 5,
                angle: 120,
                spread: 70,
                origin: {
                    x: 1
                }
            });

            if (Date.now() < end) {
                requestAnimationFrame(frame);
            }
        }());

    }
</script>
@include('frontend.partials.footer')
