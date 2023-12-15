<!DOCTYPE html>
<html lang="en">

<script type="module">

import {cambiabackground} from './resources/cardcategory.js'

</script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Cdn font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="\Media\favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Scaffolding --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>ShopVerse</title>
</head>

<body class="color" onload="window.cambiabackground()">
    <x-navbar />




    {{-- da sistemare visualizzazione messaggio --}}
    @if (session('AccessoNegato'))
    <div class="alert alert-danger my-3  ">
        <p class="text-black text-center">{{ session('AccessoNegato') }}</p>
    </div>
    @endif

    <div class="container-fluid min-vh-100 ">
        <div class=" row justify-content-center ">

            {{ $slot }}

        </div>


    </div>

    <x-footer />





    <script>
var cards = document.querySelectorAll(".card1");

function cambiabackground() {
    cards.forEach(function (card) {
        var nomecategoria = card.querySelector(".categoria50");
        var categoria = card.querySelector(".card__background");

        switch (nomecategoria.innerHTML) {
            case 'Informatica':
                categoria.style.backgroundImage = "url('https://i.pinimg.com/originals/4e/d9/55/4ed9551939c4af7745227b184dce4fc6.jpg')";
                break;

            case 'Elettrodomestici':
                categoria.style.backgroundImage = "url('https://www.firefile.net/Elettrodomestici.png')";
                break;

            case 'Telefoni':
                categoria.style.backgroundImage = "url('https://www.yeppon.it/guide-acquisti/wp-content/uploads/2023/05/shutterstock_2105590691-760x460.jpg')";
                break;

            case 'Arredamento':
                categoria.style.backgroundImage = "url('https://www.firefile.net/Arredamento.jpg')";
                break;

            case 'Motori':
                categoria.style.backgroundImage = "url('https://www.firefile.net/Motori.jpg')";
                break;

            case 'Libri':
                categoria.style.backgroundImage = "url('https://www.firefile.net/Book.jpg')";
                break;

            case 'Giochi':
                categoria.style.backgroundImage = "url('https://www.firefile.net/Gaming.jpg')";
                break;
            // Aggiungi altri casi se necessario
            case 'Sport':
                categoria.style.backgroundImage = "url('https://sportstymecamps.com/wp-content/uploads/2016/06/AdobeStock_55910509.jpeg')";
                break;

         case 'Tempo libero':
                categoria.style.backgroundImage = "url('https://www.medicusinfo.eu/wp-content/uploads/2018/04/tempo-libero-cat.jpg')";
                break;

        case 'Abbigliamento':
                categoria.style.backgroundImage = "url('https://wallpaperaccess.com/full/1272028.jpg')";
                break;


            default:

                // Codice da eseguire se nessun caso corrisponde
                break;
        }
    });
}

// Chiamata alla funzione per cambiare il background



</script>







</body>

</html>
