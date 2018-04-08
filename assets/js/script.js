$(document).ready(function() {
checkWidth(true);
$( "header:even" ).removeClass( "hiddenvid" );

function checkWidth(init) {
    var $window_width = $(window).width();
    var $iframe       = $('iframe');
    var $movile       = $('div.movile');

    if ($window_width < 420) {                  // <-- Revisa si el ancho de la ventana es menor a 420
        $iframe.removeAttr('height');
        $movile.removeClass('jFlexaround');
        $iframe.attr('width', '100%');
        $('.VRinfo').addClass('container');
        $('div.slideToggle').removeClass('hidden');
        $('div.slideToggle2').removeClass('hidden');
    } else if ($window_width < 768) {           // <-- Si esta es la primera validación que haces nunca va a remover el Attr (instrucción de la línea 8) porque incluso 419 es menor a 769
        $movile.removeClass('jFlexaround');
        // $iframe.removeAttr('height');
        $iframe.attr('width', '100%');
        $('VRinfo').addClass('container');

    }
    else {

        if (!init) {
            $movile.addClass('jFlexaround');
        }
    }
}

// function checkWidth(init)
// {
//     /*If browser resized, check width again */
//     if ($(window).width() < 769) {
//         $('div.movile').removeClass('jFlexaround');
//         // $('iframe').removeAttr('height');
//         $('iframe').attr('width', '100%');
//     }
//     else if ($(window).width() < 420) {
//       $('iframe').removeAttr('height');
//     }
//     else {
//         if (!init) {
//             $('div.movile').addClass('jFlexaround');
//         }
//     }
// }
// var videoframe = document.getElementById('myVideo');


// setTimeout(function() {
// document.getElementById("myVideo").attr('autoplay');
// }, 3000);

// function autoPlayVideo() {
// $("#myVideo").attr('autoplay', 'true');
//
// }

    // var scrollE = $('div.slideToggle').scrollTop(),
    // scrollEoffset = scrollE.offset().top/2,
    // documentscrollE =$(document);
    //
    // documentscrollE.on('scroll', function(){
    //   if (documentscrollE.scrollTop() > scrollEoffset && scrollE.hasClass('hidden')) scrollE.removeClass('hidden');


    // (function() {
    //
        var aboutEl = $('div.slideToggle'),
            aboutElx = $('div.slideToggle2'),
            aboutElOffset = 400,
            aboutElxOffset = 800,
            documentEl = $(document);

        documentEl.on('scroll', function() {
            if ( documentEl.scrollTop() > aboutElOffset && aboutEl.hasClass('hidden') ) aboutEl.removeClass('hidden');
            else if ( documentEl.scrollTop() > aboutElxOffset && aboutElx.hasClass('hidden') ) aboutElx.removeClass('hidden');
        });



    // if(scroll >= 300){
    //   $('.slideToggle').slideToggle('slow');
    //   $(window).off('slow', doScroll);


    // }



// testing



  $(window).resize(function() {
      checkWidth(false);
  });
});
