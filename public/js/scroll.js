var lastScrollTop = 0;
var animationInProgress = false;

window.addEventListener("scroll",function() {
    var st = window.scrollY || document.documentElement.scrollTop;

    if (st > lastScrollTop) {
        // Scroll verso il basso
        logoSparisci(true);
    } else {
        // Scroll verso l'alto
        logoSparisci(false);
    }

    lastScrollTop = st <= 0 ? 0 : st; // Impedisci valori negativi
});

window.logoSparisci = function(scrollDown)  {
    var logo = document.getElementById("logo");
    var nav = document.getElementById("nav");

    if (scrollDown) {
        logo.style.opacity = "0";
        logo.style.transition = "opacity 1s";
        riduciAltezzaGradualmente(nav);
    } else {
        if (!animationInProgress) {
            aumentaAltezzaGradualmente(nav);
            animationInProgress = true;

            setTimeout(function() {
                logo.style.transition = "opacity 1s";
                logo.style.opacity = "1";
            }, 1500);
        }
    }
}

window.riduciAltezzaGradualmente = function(div) {
    var altezza = div.offsetHeight;
    var altezzaFinale = 0; // Altezza finale desiderata
    var duration = 2000; // Durata dell'animazione in millisecondi
    var start = performance.now();

    function animate(currentTime) {
        var progress = currentTime - start;
        var passi = 150; // 150 passi

        altezza = Math.max(altezzaFinale, div.offsetHeight - (altezza / passi) * (progress / duration));
        div.style.height = altezza + "px";

        if (progress < duration) {
            requestAnimationFrame(animate);
        } else {
            animationInProgress = false;
        }
    }

    requestAnimationFrame(animate);
}

window.aumentaAltezzaGradualmente = function(div) {
    var altezza = div.offsetHeight;
    var altezzaOriginale = 150;
    var duration = 2000; // Durata dell'animazione in millisecondi
    var start = performance.now();

    function animate(currentTime) {
        var progress = currentTime - start;
        var passi = 150; // 150 passi

        altezza = Math.min(altezzaOriginale, altezza + ((altezzaOriginale - altezza) / passi) * (progress / duration));
        div.style.height = altezza + "px";

        if (progress < duration) {
            requestAnimationFrame(animate);
        }
    }

    requestAnimationFrame(animate);
}