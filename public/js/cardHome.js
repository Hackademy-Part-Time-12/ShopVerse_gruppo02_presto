document.addEventListener('DOMContentLoaded', function() {
    var cards = document.querySelectorAll(".card1");

    function cambiabackground() {
        if (document.body.classList.contains('home')) {
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
    }

    // Chiamata alla funzione per cambiare il background
    cambiabackground();
});