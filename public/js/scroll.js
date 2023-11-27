var lastScrollTop = 0;
var logoOpacityAnimationInProgress = false;
var heightAnimationInProgress = false;

window.onscroll = function() {
    var st = window.scrollY || document.documentElement.scrollTop;

    if (st > lastScrollTop) {
        // Scroll verso il basso
        if (!logoOpacityAnimationInProgress) {
            logoSparisci(true);
        }
    } else {
        if (st === 0) {
            if (!heightAnimationInProgress) {
                logoSparisci(false);
            }
        }
    }

    lastScrollTop = st <= 0 ? 0 : st; // Impedisci valori negativi
};

function logoSparisci(scrollDown) {
    var logo = document.getElementById("logo");
    var nav = document.getElementById("nav");

    if (scrollDown) {
        logo.style.opacity = "0";
        logo.style.transition = "opacity 1s";
        logoOpacityAnimationInProgress = true; // Imposta la variabile di stato
        riduciAltezzaGradualmente(nav);
    } else {
        if (!heightAnimationInProgress) {
            aumentaAltezzaGradualmente(nav);
            heightAnimationInProgress = true; // Imposta la variabile di stato

            setTimeout(function() {
                logo.style.transition = "opacity 1s";
                logo.style.opacity = "1";
                logoOpacityAnimationInProgress = false; // Resetta la variabile di stato
                heightAnimationInProgress = false; // Resetta anche la variabile di stato dell'altezza
            }, 1500);
        }
    }
}

function logoSparisci(scrollDown) {
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

function riduciAltezzaGradualmente(div) {
    var altezza = div.offsetHeight;
    var altezzaOriginale = 0; // Altezza finale desiderata
    var duration = 6000; // Durata dell'animazione in millisecondi (più lunga per renderla più graduale)
    var start = performance.now();

    function easeInOutCubic(t, b, c, d) {
        if ((t /= d / 2) < 1) return c / 2 * t * t * t + b;
        return c / 2 * ((t -= 2) * t * t + 2) + b;
    }

    function animate(currentTime) {
        var progress = currentTime - start;

        altezza = easeInOutCubic(progress, altezza, altezzaOriginale - altezza, duration);
        div.style.height = altezza + "px";

        if (progress < duration) {
            requestAnimationFrame(animate);
        } else {
            div.style.height = altezzaOriginale + "px"; // Imposta l'altezza finale desiderata
            animationInProgress = false;
        }
    }

    requestAnimationFrame(animate);
}



function aumentaAltezzaGradualmente(div) {
    var altezza = div.offsetHeight;
    var altezzaOriginale = 120; // Altezza finale desiderata
    var duration = 6000; // Durata dell'animazione in millisecondi (più lunga per renderla più graduale)
    var start = performance.now();

    function easeInOutCubic(t, b, c, d) {
        if ((t /= d / 2) < 1) return c / 2 * t * t * t + b;
        return c / 2 * ((t -= 2) * t * t + 2) + b;
    }

    function animate(currentTime) {
        var progress = currentTime - start;

        altezza = easeInOutCubic(progress, altezza, altezzaOriginale - altezza, duration);
        div.style.height = altezza + "px";

        if (progress < duration) {
            requestAnimationFrame(animate);
        } else {
            div.style.height = altezzaOriginale + "px"; // Imposta l'altezza finale desiderata
            animationInProgress = false;
        }
    }

    requestAnimationFrame(animate);
}

