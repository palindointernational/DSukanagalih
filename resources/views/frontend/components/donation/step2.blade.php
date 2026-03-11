@include('frontend.partials.header')
@include('frontend.partials.navbar')
<section class="bg-white mt-4">
    <div class="flex flex-col justify-center items-center px-8 py-8 mx-auto md:h-screen lg:py-0">
        <div class="max-w-2xl w-full bg-neutral-primary-soft  p-6 border border-default rounded-lg shadow-xs">

            <h1 class="text-xl mb-2 font-bold text-center leading-tight tracking-tight text-gray-900 md:text-2xl">
                Formulir Donasi
            </h1>
            <p class="text-sm text-gray-500 text-center mb-8">
                Silakan isi jumlah donasi dan lengkapi data diri untuk melanjutkan proses donasi.
            </p>

            <div class="flex flex-cols items-center justify-between mt-4">
                <div>
                    <span class="mb-2 text-gray-400 text-sm">Terkumpul</span>
                    <h5 class="mb-4 text-2xl font-extrabold text-orange-500">
                        {{ number_format($donation->registrations_sum_quantity, 0, ',', '.') }}
                        <sup class="text-sm">{{ $donation->unit }}</sup>
                    </h5>
                </div>
                <div class="text-center">
                    <span class="mb-2 text-gray-400 text-sm">Kebutuhan</span>
                    <h5 class="font-semibold text-xl">{{ $donation->item_name }}</h5>
                </div>
                <div>
                    <span class="mb-2 text-gray-400 text-sm">Dari</span>
                    <h5 class="font-semibold">{{ number_format($donation->target_quantity, 0, ',', '.') }}
                        {{ $donation->unit }}</h5>
                </div>
            </div>
            <form action="{{ route('donationPost', $donation->slug) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="quantity_display" class="block mb-2.5 text-sm font-medium text-heading">
                        Isi Jumlah Donasi
                    </label>

                    <div class="flex shadow-xs rounded-lg">
                        <input type="text" id="quantity_display" value="1"
                            class="bg-neutral-secondary-medium border border-gray-200 text-heading text-xl font-bold rounded-s-lg block w-full px-3 py-4 placeholder:text-body focus:ring-brand focus:border-brand"
                            required />

                        <input type="hidden" id="quantity" name="quantity" value="1">

                        <span
                            class="inline-flex items-center px-3 text-xl font-bold text-body bg-neutral-tertiary border border-default-medium border-s-0 rounded-e-lg">
                            KG
                        </span>
                    </div>
                </div>
                @guest
                    <div class="text-sm font-medium text-center mb-4 text-body">
                        <a href="{{ route('login') }}" class="text-orange-500 hover:underline">Masuk</a> atau lengkapi data
                        di bawah ini
                    </div>
                @endguest
                <div class="mb-4">
                    <label for="name" class="block mb-2.5 text-sm font-medium text-heading">Nama Lengkap</label>
                    <input type="text" id="name" name="name" value="{{ auth()->user()->name ?? '' }}"
                        placeholder="Isi nama anda atau isi dengan anonim"
                        class="bg-neutral-secondary-medium border border-gray-200 border-default-medium text-heading text-sm rounded-lg focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                        required />
                </div>
                <div class="my-6">
                    <label for="contact" class="block mb-2.5 text-sm font-medium text-heading">Kontak</label>
                    <input type="text" id="contact" name="contact" value="{{ auth()->user()->email ?? '' }}"
                        class="bg-neutral-secondary-medium border border-gray-200 border-default-medium text-heading text-sm rounded-lg focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                        required placeholder="Email/ Nomo Telepon" />
                </div>
                <button type="submit"
                    class="text-white bg-orange-500 box-border border border-transparent hover:bg-orange-500-700 focus:ring-4 focus:ring-orange-300 shadow-xs font-medium leading-5 rounded-lg text-sm px-4 py-2.5 focus:outline-none w-full mb-3">Lanjut
                    Pengiriman</button>
            </form>
        </div>
    </div>
</section>
<script>
    const displayInput = document.getElementById('quantity_display');
    const realInput = document.getElementById('quantity');

    displayInput.addEventListener('input', function() {

        let value = this.value.replace(/\D/g, '');

        if (value) {
            this.value = new Intl.NumberFormat('id-ID').format(value);
            realInput.value = value;
        } else {
            this.value = '';
            realInput.value = '';
        }

    });
</script>
@include('frontend.partials.footer')
