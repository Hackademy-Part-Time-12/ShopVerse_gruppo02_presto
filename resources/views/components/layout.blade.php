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

    {{-- Scafolding --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>ShopVerse</title>
</head>

<body>
    <x-pointer/>
    <x-navbar/>


    <div class="min-vh-100 mt-5 pt-5">
        <div class="pt-5 mt-5">
            {{ $slot }}

        </div>


    </div>

</body>

<x-script/>
<x-footer/>
</html>
