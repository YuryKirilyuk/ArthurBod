jQuery(window).on('load', function () {
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
        jQuery('body').addClass('ios');
	} else{
        jQuery('body').addClass('web');
	}
});


/* ==========================================================================
   When the window is scrolled, do
   ========================================================================== */

jQuery(window).scroll(function() {
	
		
	});

/* ==========================================================================
   When the window is resized, do
   ========================================================================== */

jQuery(window).resize(function() {
		
		
	});




jQuery(function($){

	$('.btn-toggle').click(function(){
		$(this).toggleClass('active');
		$('.menu-container').toggleClass('show');
		return false;
	});

    $('.cta').click(function(){
        $('.btn-toggle').toggleClass('active');
        $('.menu-container').toggleClass('show');
        return false;
    });

    jQuery(document).click(function(event) {
        if (!jQuery(event.target).closest('.menu-container').length) {
            jQuery('.menu-container.show').removeClass('show');
            jQuery('.btn-toggle.active').removeClass('active');
        }
    });


});