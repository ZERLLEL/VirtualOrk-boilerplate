$(document).ready(function() {



  $(window).scroll(function(e){
    var scroll = $(window).scrollTop();

    if(scroll > 500){
      $('.navmenu').addClass('pfix')
    } else {
      $('.navmenu').removeClass('pfix')

    }
  });
});
