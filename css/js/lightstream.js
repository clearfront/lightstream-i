//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});


/*
//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Fade all panels
$('.boxContainer').mouseover(function(){
	$('.boxContainer').stop(true).animate({opacity: 0.3},500);
$(this).stop(true).animate({opacity: 1});

});
*/

$('.lightGallery').mouseout(function() {
	//$('.boxContainer').stop(true).animate({opacity: 1},500);
}); 
 

// Show contact form
$( ".contact-button" ).on( "click", function() {
   $(".contact-form").slideDown('slow');
}); 
$( ".close-contact" ).on( "click", function() {
   $(".contact-form").slideUp('slow');
});

// Start animations
$(window).scroll(function() {
	$('#animatedElement').each(function(){
	var imagePos = $(this).offset().top;

	var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+400) {
			$(this).addClass("slideUp");
		}
	});
});



$('.work-item a').mouseover(function() {
	//$(".content").hide();
    //$(this).find(".content").show();
 //}).mouseout(function() {
    //$(this).find(".content").hide();
});
$('.work-item a img').mouseout(function() {
	//$(".content").hide();
});



/* 
$('img').load(function() {
    $(this).data('height', this.height);
}).bind('mouseenter mouseleave', function(e) {
    $(this).stop().animate({
        height: $(this).data('height') * (e.type === 'mouseenter' ? 1.5 : 1)
    });
});
*/