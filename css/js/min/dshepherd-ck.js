$(window).scroll(function(){$(".navbar").offset().top>50?$(".navbar-fixed-top").addClass("top-nav-collapse"):$(".navbar-fixed-top").removeClass("top-nav-collapse")}),$(function(){$(".page-scroll a").bind("click",function(o){var t=$(this);$("html, body").stop().animate({scrollTop:$(t.attr("href")).offset().top},1500,"easeInOutExpo"),o.preventDefault()})}),$(".boxContainer").mouseover(function(){$(".boxContainer").stop(!0).animate({opacity:.3},500),$(this).stop(!0).animate({opacity:1})}),$(".lightGallery").mouseout(function(){$(".boxContainer").stop(!0).animate({opacity:1},500)});