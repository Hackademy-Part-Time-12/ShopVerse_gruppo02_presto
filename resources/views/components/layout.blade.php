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

<body class="color">
    <x-navbar />
    {{-- da sistemare visualizzazione messaggio --}}
    @if (session('AccessoNegato'))
        <div class="alert alert-danger my-3  ">
            <p class="text-black text-center">{{ session('AccessoNegato') }}</p>
        </div>
    @endif

    <div class="container-fluid min-vh-100 ">
        <div class="row ">

            {{ $slot }}

        </div>


    </div>
    <x-footer />

</body>

</html>
