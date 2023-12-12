export {cambiabackground};


var categoria = document.getElementById("cardcategory")


window.cambiabackground = function() {

    if (document.getElementById('cardcategory').value == "INFORMATICA") {

        categoria.style.backgroundImage = "url('https://i.pinimg.com/originals/4e/d9/55/4ed9551939c4af7745227b184dce4fc6.jpg')";


    }

}

console.log('funzia');