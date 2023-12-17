 $(document).ready(function() {
    // Monitora gli eventi di input e cambio per i campi del modulo
    $('.input-cart-number').on('keyup change', function() {
      updateCardNumber();
    });

    $('#card-holder').on('keyup change', function() {
      updateCardHolder();
    });

    $('#card-expiration-month, #card-expiration-year').change(function() {
      updateCardExpirationDate();
    });

    $('#card-ccv').on('focus', function() {
      $('.credit-card-box').addClass('hover');
    }).on('blur', function() {
      $('.credit-card-box').removeClass('hover');
    }).on('keyup change', function() {
      updateCardCCV();
    });

    // Funzione per aggiornare il numero della carta
    function updateCardNumber() {
      var cardNumber = '';
      $('.input-cart-number').each(function() {
        cardNumber += $(this).val() + ' ';
        if ($(this).val().length == 4) {
          $(this).next().focus();
        }
      });

      $('.credit-card-box .number').html(cardNumber);
    }

    // Funzione per aggiornare il titolare della carta
    function updateCardHolder() {
      var cardHolder = $('#card-holder').val();
      $('.credit-card-box .card-holder div').html(cardHolder);
    }

    // Funzione per aggiornare la data di scadenza della carta
    function updateCardExpirationDate() {
      var month = $('#card-expiration-month option:selected').val();
      var year = $('#card-expiration-year').val().substr(2, 2);
      $('.card-expiration-date div').html(month + '/' + year);
    }

    // Funzione per aggiornare il CCV della carta
    function updateCardCCV() {
      $('.ccv div').html($('#card-ccv').val());
    }
  });
