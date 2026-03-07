<!DOCTYPE html>
<html lang="en">
<base href="/public">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }} | {{ $title }}</title>
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flaticon.css">
    <script src="https://cdn.tailwindcss.com"></script>
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
