$(function(){

  // image slider

  var carousel = $('.carousel');
  var carSlide = carousel.find('.carousel-box');
  var right    = $('#right-arrow');
  var left     = $('#left-arrow');

  var i = 2;

  left.on('click', function(){

    i--;

    carousel.animate({"margin-left" : "+=100%"}, function(){

      if (i === 1) {
        i = 5;

        carousel.css("margin-left" , "-400%");
      }

    });

    return false;
  });

  right.on('click', function(){

    i++;

    carousel.animate({"margin-left" : "-=100%"}, function(){

      if (i === carSlide.length) {

        i = 2;

        carousel.css("margin-left" , "-100%");
      }

    });

    return false;
  });

  // SIGN IN MODAL HANDLER

  var signIn        = $('.signIn');
  var overlayModal  = $('.overlay');
  var signInSection = $('#sign-in');
  var closeModal    = $('#sign-in .close-btn');
  var formRegister  = $('#registracia');
  var formSignIn    = $('#prihlasenie');
  var registerBtn   = $('#back-to-register');
  var signInBtn     = $('#back-to-signIn');
  var body          = $('body');

  signIn.on('click', function() {
    overlayModal.css('display', 'flex');
    body.addClass('overflow-hidden');

    return false;
  });

  closeModal.on('click', function() {
    overlayModal.css('display', 'none');
    body.removeClass('overflow-hidden');

    return false;
  });

  registerBtn.on('click', function(){
    formSignIn.hide();
    formRegister.show();

    return false;
  });

  signInBtn.on('click', function(){
    formSignIn.show();
    formRegister.hide();

    return false;
  });

});