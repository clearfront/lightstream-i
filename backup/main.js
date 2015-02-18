$(document).ready(function() {
	
	
// carousel
// invoke the carousel


$('#myCarousel').carousel({
  interval: 5000
});



/*
$('#myCarousel').hover(function () {   
  $(this).carousel('pause')   
});  
*/



// Cache the Window object
$window = $(window);           
$('section[data-type="background"]').each(function(){
     var $bgobj = $(this); // assigning the object
                    
      $(window).scroll(function() {
                    
		// Scroll the background at var speed
		// the yPos is a negative value because we're scrolling it UP!								
		var yPos = -($window.scrollTop() / $bgobj.data('speed')); 
		
		// Put together our final background position
		var coords = '50% '+ yPos + 'px';

		// Move the background
		$bgobj.css({ backgroundPosition: coords });
		
     }); // window scroll Ends

 });	

 
	
	
	
// Resize home image
$(function(){
    var windowH = $(window).height();
    var wrapperH = $('.wrapper').height();
    if(windowH > wrapperH) {                            
        $('.wrapper').css({'height':($(window).height())+'px'});
    }                                                                               
    $(window).resize(function(){
        var windowH = $(window).height();
        var wrapperH = $('.wrapper').height();
        var differenceH = windowH - wrapperH;
        var newH = wrapperH + differenceH;
        var truecontentH = $('#truecontent').height();
        if(windowH > truecontentH) {
            $('.wrapper').css('height', (newH)+'px');
        }

    })          
});	
	
	
// slide in menu?
var menustatus = "closed";
$('#button').click(function () {	
   
   if (menustatus == "closed") { 
        $('#right').animate({ marginLeft: 200 }, 'slow', function() {
           // $('#button').html('<img src="img/icons/menuButton.png" width="40" />');
			 $('#right').addClass('hiddenOverflow');
			 menustatus = "open";
        });
		
   }
    
   if (menustatus == "open") { 
        $('#right').animate({ marginLeft: 0 }, 'slow', function() {
           // $('#button').html('<img src="img/icons/menuButton.png" width="40" />');
			$('#right').removeClass('hiddenOverflow');
			 menustatus = "closed";
        });
   }
});



$(window).scroll(function() {
	
	    if (menustatus == "open") { 
        $('#right').animate({ marginLeft: 0 }, 'slow', function() {
		 $('#right').removeClass('hiddenOverflow');
		});
       }
       menustatus = "closed";
	   
		
		if ($('#homePage').length) {
        if ($(window).scrollTop()) {
			
		    $('.homeLogo').fadeOut(500);
			$('footer').fadeIn(500);
			$('#navbar').fadeIn(500);
	
        } else {
			
		    $('.homeLogo').fadeIn(500);
			$('footer').fadeOut(500);
			$('#navbar').fadeOut(500);
        }
		}

});



// Open model 
var $modal = $('#ajax-modal');
$('.ajax .popup').on('click', function(){
	
	
  var page = $(this).find('#pageValue').val();
 
  $('body').modalmanager('loading');
      setTimeout(function(){
		
	   $modal.load('ajaxModal.php?id=' + page, '',  function(){
		
		   
      $modal.modal();
	
    });
  }, 1000);
});
	

// Fade all panels
 $('.boxContainer').mouseover(function(){
   $('.boxContainer').stop(true).animate({opacity: 0.3},500);
   $(this).stop(true).animate({opacity: 1});
   
 });
 
 $('.lightGallery').mouseout(function() {
	  $('.boxContainer').stop(true).animate({opacity: 1},500);
 });
 
 
 $('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});



$(window).scroll(function() {
		$('.animateUp').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("slideUp");
			}
		});
});



// Form validation
 $.validate(); 

});
