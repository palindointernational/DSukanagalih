<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .swiper-button-next,
        .swiper-button-prev {
            color: #ff7112;
            transition: 0.2s;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            transform: scale(1.2);
        }

        .swiper {
            padding-bottom: 40px;
        }

        .swiper-pagination {
            bottom: 0px !important;
        }

        .swiper-pagination-bullet {
            background: #d1d5db;
            opacity: 1;
        }

        .swiper-pagination-bullet-active {
            background: #ff7112;
        }
    </style>

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body>
    <nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-default">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="img/logo.png" class="h-7" alt="Flowbite Logo">
                <span class="self-center text-xl text-heading font-semibold whitespace-nowrap">SANUBARI</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="text-white bg-orange-500 hover:bg-orange-700 box-border border border-transparent focus:ring-4 focus:ring-blue-300 shadow-xs font-medium leading-5 rounded-lg text-sm px-3 py-2 focus:outline-none">Get
                    started</button>
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
                        <a href="#"
                            class="block py-2 px-3 text-orange-500 bg-brand rounded-sm md:bg-transparent md:text-fg-brand md:p-0"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">Donation</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">News</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">Gallery</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- hero section --}}
    <section
        class="relative mt-12 bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-dark bg-blend-multiply">
        <div class="p-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1
                class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl dark:text-white">
                We invest in the world’s potential</h1>
            <p class="mb-8 text-lg font-normal text-white lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">Here at
                Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and
                drive economic growth.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-orange-500 hover:bg-orange-700 focus:ring-4 focus:ring-blue-300 dark:focus:ring-orange-500">
                    Get started
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a href="#"
                    class="py-3 px-5 sm:ms-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-orange-500 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Learn more
                </a>
            </div>
        </div>
    </section>
    {{-- info --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="p-8 mx-auto max-w-screen-xl">
            <div class="grid gap-8 mb-6 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1">
                <div
                    class="flex flex-col items-center bg-white rounded-lg shadow-sm md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800">
                    <div class="flex items-top justify-center w-full h-40 md:w-48">
                        <span class="flaticon-donation-1 text-orange-500 text-6xl"></span>
                    </div>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Make Donation
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </div>
                <div
                    class="flex flex-col items-center bg-white rounded-lg shadow-sm md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800">
                    <div class="flex items-top justify-center w-full h-40 md:w-48">
                        <span class="flaticon-charity text-orange-500 text-6xl"></span>
                    </div>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Become A
                            Volunteer</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </div>
                <div
                    class="flex flex-col items-center bg-white rounded-lg shadow-sm md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800">
                    <div class="flex items-top justify-center w-full h-40 md:w-48">
                        <span class="flaticon-donation text-orange-500 text-6xl"></span>
                    </div>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Sponsorship
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- donation --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="p-8 mx-auto max-w-screen-xl ">
            <h2 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white text-center">Penggalangan Mendesak</h2>
            <p class="mb-6 text-lg font-normal text-gray-700 dark:text-gray-400 text-center">Your donation can make a
                real
                difference in the lives of those in need.</p>
            <div class="relative">
                <div
                    class="pointer-events-none absolute left-0 top-0 h-full w-15 
                bg-gradient-to-r from-white to-transparent z-10 dark:from-gray-900">
                </div>
                <div
                    class="pointer-events-none absolute right-0 top-0 h-full w-115
                bg-gradient-to-l from-white to-transparent z-10 dark:from-gray-900">
                </div>
                <div class="swiper donationSwiper">
                    <div class="swiper-wrapper mb-12">
                        <div class="swiper-slide">
                            {{-- <div class="grid gap-3 mb-6 xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2"> --}}
                            <div class="bg-white-soft block max-w-sm border border-default rounded-lg shadow-xs mt-8">
                                <a href="#">
                                    <img class="rounded-t-lg" src="/img/photo/cause-1.jpg" alt="" />
                                </a>
                                <div class="p-4">
                                    <a href="#">
                                        <h5
                                            class="mb-3 text-2xl font-semibold tracking-tight text-gray-900 hover:text-orange-500">
                                            Streamlining your
                                            design
                                            process today.</h5>
                                    </a>
                                    <div class="flex flex-cols items-center justify-between">
                                        <div>
                                            <span class="mb-2 text-gray-400 text-sm">Terkumpul</span>
                                            <h5 class="mb-4 text-2xl font-bold text-orange-500">10.000 <sup
                                                    class="text-sm">KG</sup>
                                            </h5>
                                        </div>
                                        <div>
                                            <p class="text-gray-600 text-sm">Dari <span class="font-semibold">100.000
                                                    KG</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full">
                                        <div class="bg-orange-500 text-xs mb-6 font-medium text-white text-center p-0.5 leading-none rounded-full h-2 flex items-center justify-center"
                                            style="width: 45%"></div>
                                    </div>
                                    <div class="flex flex-cols items-center justify-between">
                                        <div>
                                            <p class="text-gray-600 text-sm font-semibold">136<span
                                                    class="font-normal">Donasi</span>
                                            </p>
                                        </div>
                                        <div>
                                            <p class="text-gray-600 text-sm font-semibold">23<span
                                                    class="font-normal">Hari
                                                    lagi</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white-soft block max-w-sm border border-default rounded-lg shadow-xs mt-8">
                                <a href="#">
                                    <img class="rounded-t-lg" src="/img/photo/cause-1.jpg" alt="" />
                                </a>
                                <div class="p-4">
                                    <a href="#">
                                        <h5
                                            class="mb-3 text-2xl font-semibold tracking-tight text-gray-900 hover:text-orange-500">
                                            Streamlining your
                                            design
                                            process today.</h5>
                                    </a>
                                    <div class="flex flex-cols items-center justify-between">
                                        <div>
                                            <span class="mb-2 text-gray-400 text-sm">Terkumpul</span>
                                            <h5 class="mb-4 text-2xl font-bold text-orange-500">10.000 <sup
                                                    class="text-sm">KG</sup>
                                            </h5>
                                        </div>
                                        <div>
                                            <p class="text-gray-600 text-sm">Dari <span class="font-semibold">100.000
                                                    KG</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full">
                                        <div class="bg-orange-500 text-xs mb-6 font-medium text-white text-center p-0.5 leading-none rounded-full h-2 flex items-center justify-center"
                                            style="width: 45%"></div>
                                    </div>
                                    <div class="flex flex-cols items-center justify-between">
                                        <div>
                                            <p class="text-gray-600 text-sm font-semibold">136<span
                                                    class="font-normal">Donasi</span>
                                            </p>
                                        </div>
                                        <div>
                                            <p class="text-gray-600 text-sm font-semibold">23<span
                                                    class="font-normal">Hari
                                                    lagi</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white-soft block max-w-sm border border-default rounded-lg shadow-xs mt-8">
                                <a href="#">
                                    <img class="rounded-t-lg" src="/img/photo/cause-1.jpg" alt="" />
                                </a>
                                <div class="p-4">
                                    <a href="#">
                                        <h5
                                            class="mb-3 text-2xl font-semibold tracking-tight text-gray-900 hover:text-orange-500">
                                            Streamlining your
                                            design
                                            process today.</h5>
                                    </a>
                                    <div class="flex flex-cols items-center justify-between">
                                        <div>
                                            <span class="mb-2 text-gray-400 text-sm">Terkumpul</span>
                                            <h5 class="mb-4 text-2xl font-bold text-orange-500">10.000 <sup
                                                    class="text-sm">KG</sup>
                                            </h5>
                                        </div>
                                        <div>
                                            <p class="text-gray-600 text-sm">Dari <span class="font-semibold">100.000
                                                    KG</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full">
                                        <div class="bg-orange-500 text-xs mb-6 font-medium text-white text-center p-0.5 leading-none rounded-full h-2 flex items-center justify-center"
                                            style="width: 45%"></div>
                                    </div>
                                    <div class="flex flex-cols items-center justify-between">
                                        <div>
                                            <p class="text-gray-600 text-sm font-semibold">136<span
                                                    class="font-normal">Donasi</span>
                                            </p>
                                        </div>
                                        <div>
                                            <p class="text-gray-600 text-sm font-semibold">23<span
                                                    class="font-normal">Hari
                                                    lagi</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white-soft block max-w-sm border border-default rounded-lg shadow-xs mt-8">
                                <a href="#">
                                    <img class="rounded-t-lg" src="/img/photo/cause-1.jpg" alt="" />
                                </a>
                                <div class="p-4">
                                    <a href="#">
                                        <h5
                                            class="mb-3 text-2xl font-semibold tracking-tight text-gray-900 hover:text-orange-500">
                                            Streamlining your
                                            design
                                            process today.</h5>
                                    </a>
                                    <div class="flex flex-cols items-center justify-between">
                                        <div>
                                            <span class="mb-2 text-gray-400 text-sm">Terkumpul</span>
                                            <h5 class="mb-4 text-2xl font-bold text-orange-500">10.000 <sup
                                                    class="text-sm">KG</sup>
                                            </h5>
                                        </div>
                                        <div>
                                            <p class="text-gray-600 text-sm">Dari <span class="font-semibold">100.000
                                                    KG</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full">
                                        <div class="bg-orange-500 text-xs mb-6 font-medium text-white text-center p-0.5 leading-none rounded-full h-2 flex items-center justify-center"
                                            style="width: 45%"></div>
                                    </div>
                                    <div class="flex flex-cols items-center justify-between">
                                        <div>
                                            <p class="text-gray-600 text-sm font-semibold">136<span
                                                    class="font-normal">Donasi</span>
                                            </p>
                                        </div>
                                        <div>
                                            <p class="text-gray-600 text-sm font-semibold">23<span
                                                    class="font-normal">Hari
                                                    lagi</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination mt-18"></div>
                <div class="swiper-button-prev text-orange-500"></div>
                <div class="swiper-button-next text-orange-500"></div>
            </div>
        </div>
    </section>
    {{-- galery --}}
    <section class="bg-gray-100 dark:bg-gray-800">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <h2 class="mb-6 text-2xl font-bold text-gray-900 dark:text-white">Gallery</h2>


            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-base"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-base"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-base"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-base"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-base"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-base"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-base"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-base"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-base"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-base"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-base"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-base"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- footer --}}
    <footer class="bg-gray-900 dark:bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="https://flowbite.com/" class="flex items-center">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-7 me-3" alt="FlowBite Logo" />
                        <span class="text-white self-center text-2xl font-semibold whitespace-nowrap">Flowbite</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white uppercase">Resources</h2>
                        <ul class="text-white font-medium">
                            <li class="mb-4">
                                <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                            </li>
                            <li>
                                <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white uppercase">Follow us</h2>
                        <ul class="text-white font-medium">
                            <li class="mb-4">
                                <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                            </li>
                            <li>
                                <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white uppercase">Legal</h2>
                        <ul class="text-white font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-default sm:mx-auto lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-white sm:text-center">© 2023 <a href="https://flowbite.com/"
                        class="hover:underline">Flowbite™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-white hover:text-white">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-white hover:text-white ms-5">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M18.942 5.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.586 11.586 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3 17.392 17.392 0 0 0-2.868 11.662 15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.638 10.638 0 0 1-1.706-.83c.143-.106.283-.217.418-.331a11.664 11.664 0 0 0 10.118 0c.137.114.277.225.418.331-.544.328-1.116.606-1.71.832a12.58 12.58 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM8.678 14.813a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.929 1.929 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-white hover:text-white ms-5">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-white hover:text-white ms-5">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12.006 2a9.847 9.847 0 0 0-6.484 2.44 10.32 10.32 0 0 0-3.393 6.17 10.48 10.48 0 0 0 1.317 6.955 10.045 10.045 0 0 0 5.4 4.418c.504.095.683-.223.683-.494 0-.245-.01-1.052-.014-1.908-2.78.62-3.366-1.21-3.366-1.21a2.711 2.711 0 0 0-1.11-1.5c-.907-.637.07-.621.07-.621.317.044.62.163.885.346.266.183.487.426.647.71.135.253.318.476.538.655a2.079 2.079 0 0 0 2.37.196c.045-.52.27-1.006.635-1.37-2.219-.259-4.554-1.138-4.554-5.07a4.022 4.022 0 0 1 1.031-2.75 3.77 3.77 0 0 1 .096-2.713s.839-.275 2.749 1.05a9.26 9.26 0 0 1 5.004 0c1.906-1.325 2.74-1.05 2.74-1.05.37.858.406 1.828.101 2.713a4.017 4.017 0 0 1 1.029 2.75c0 3.939-2.339 4.805-4.564 5.058a2.471 2.471 0 0 1 .679 1.897c0 1.372-.012 2.477-.012 2.814 0 .272.18.592.687.492a10.05 10.05 0 0 0 5.388-4.421 10.473 10.473 0 0 0 1.313-6.948 10.32 10.32 0 0 0-3.39-6.165A9.847 9.847 0 0 0 12.007 2Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-white hover:text-white ms-5">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 2a10 10 0 1 0 10 10A10.009 10.009 0 0 0 12 2Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.093 20.093 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM10 3.707a8.82 8.82 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.755 45.755 0 0 0 10 3.707Zm-6.358 6.555a8.57 8.57 0 0 1 4.73-5.981 53.99 53.99 0 0 1 3.168 4.941 32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.641 31.641 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM12 20.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 15.113 13a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        new Swiper(".donationSwiper", {
            slidesPerView: 3.5,
            spaceBetween: 20,

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>

</html>
