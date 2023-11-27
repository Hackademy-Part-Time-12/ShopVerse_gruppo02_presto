window.onscroll = function() { scrollFunction() };

  function scrollFunction() {
    var navbar = document.querySelector('.navbar');

    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      navbar.style.position = 'fixed';
      navbar.style.left = '0';
    } else {
      navbar.style.position = 'static';
    }
  }