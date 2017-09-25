/* Jquery Portfolio wall by Mohamed Abo El-Ghranek - fb.com/midoghranek no need to plugins */

$(document).ready(function(){

  $('.hidden').css('display','none');

  $( "#filter button" ).each(function() {

    $(this).on("click", function(){

         var filter = $(this).attr('class');

      if ( $(this).attr('class') == 'all' ) {
         $('.hidden').contents().appendTo('#posts').hide().show('slow');
         $( "#filter button" ).removeClass('active');
         $(this).addClass('active');
         $("#filter button").attr("disabled", false);
         $(this).attr("disabled", true);
      }
      else {
         $('.post').appendTo('.hidden');
         $('.hidden').contents().appendTo('#posts').hide().show('slow');
         $('.post:not(.' + filter + ')').appendTo('.hidden').hide('slow');
         $( "#filter button" ).removeClass('active');
         $(this).addClass('active');
         $("#filter button").attr("disabled", false);
         $(this).attr("disabled", true);
      };

      });

  });

});


jQuery(function($){

  //Lorsque vous cliquez sur un lien de la classe poplight
  $('a.poplight').on('click', function() {
    var popID = $(this).data('rel'); //Trouver la pop-up correspondante
    var popWidth = $(this).data('width'); //Trouver la largeur

    //Faire apparaitre la pop-up et ajouter le bouton de fermeture
    $('#' + popID).fadeIn().css({ 'width': popWidth}).prepend('<a href="#" class="close"><span class="btn_close" title="Close Window" alt="Close" />❌</span></a>');

    //Récupération du margin, qui permettra de centrer la fenêtre - on ajuste de 80px en conformité avec le CSS
    var popMargTop = ($('#' + popID).height() + 80) / 2;
    var popMargLeft = ($('#' + popID).width() + 80) / 2;

    //Apply Margin to Popup
    $('#' + popID).css({
      'margin-top' : -popMargTop,
      'margin-left' : -popMargLeft
    });

    //Apparition du fond - .css({'filter' : 'alpha(opacity=80)'}) pour corriger les bogues d'anciennes versions de IE
    $('body').append('<div id="fade"></div>');
    $('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();

    return false;
  });


  //Close Popups and Fade Layer
  $('body').on('click', 'a.close, #fade', function() { //Au clic sur le body...
    $('#fade , .popup_block').fadeOut(function() {
      $('#fade, a.close').remove();
  }); //...ils disparaissent ensemble

    return false;
  });


});
