
$(document).ready(function() {
//funkcija nuvedanti i virsu kai paspaudziamas mygtukas "I virsu".
  $("a[href='#top']").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});
    
    $(document).ready(function(){
	// Galerija
	$('[data-fancybox="gallery1"]').fancybox({
		loop: true,
		animationEffect: "fade",
		animationDuration: 1000,
	});
    //Slider
    var slider = tns({
        container: '.slider-container',
        items: 5,
        slideBy: 'page',
        autoplay: true, 
        mouseDrag: true,
        autoplayButtonOutput: false,
        navPosition: "bottom",
        navAsThumbnails: true,
        controlsText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
    });
});
 
});