<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Cdn font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="\Media\favicon.ico">
    {{-- Scaffolding --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>ShopVerse</title>
</head>

<body class="color position-absolute ">
    <x-navbar />



    {{-- da sistemare visualizzazione messaggio --}}
    @if (session('access.denied'))
        <div>
            <p class="text-danger text-center">{{ session('access.denied') }}</p>
        </div>
    @endif

    <div class="container-fluid min-vh-100 ">
        <div class="my-4 row ">

            {{ $slot }}

        </div>


    </div>
    <x-footer />
 {{--    <div class="col-3 z-3 rounded-pill sticky-bottom mx-2 pb-3 ">
        <button class="btn btn-primary rounded-pill" type="button"
            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
            aria-controls="offcanvasRight"><i class="fa-solid fa-bars"></i>
        </button>

    </div> --}}
</body>

<x-script />

</html>
