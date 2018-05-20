$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    items:1,
    loop:true,
    slidespeed:3000,
    autoplay:true,

});
  $(window).scroll(function() {
  	if ($(document).scrollTop()>186) {
  		$('#nav').addClass('scroll-fix');
  		$('#nav').removeClass('bar');
  		$('#navv').addClass('pad-nav');
  	}
  	else{
  		$('#nav').removeClass('scroll-fix');
  		$('#navv').removeClass('pad-nav');
  		$('#nav').addClass('bar');
  	}

  });
});


