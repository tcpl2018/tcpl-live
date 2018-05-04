// JavaScript Document
$(document).ready(function($){
	$(window).on("scroll", function() {
		if($(window).scrollTop() > 10) {
			$(".navbar-fixed-top").addClass("wh-bg-clr");
		} else {
			$(".navbar-fixed-top").removeClass("wh-bg-clr");
		}
	});
	$(window).scroll(function(){
		var sticky = $('.header-fixd-btn'),
		scroll = $(window).scrollTop();

	  if (scroll >= 710) {
		  sticky.css('display','block');
	  } 
	  else { 
	  sticky.css('display','none');} 
	});
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});
	
	//Owl carousel for what's new section
	$('#whats-new').owlCarousel({
		loop:false,
		margin:10,
		nav:true,
		dots:false,
		navText : ['<span><img src="images/slider-arrow.png" alt="slider arrow"></span>','<span><img src="images/slider-arrow.png" alt="slider arrow"></span>'],
		responsive:{
			0:{
				items:1,
				autoHeight:true
			},
			600:{
				items:1,
				autoHeight:true,
			},
			1000:{
				items:2
			}
		}
	})
	
	//Owl carousel for partner section
	$('#partner-carousel').owlCarousel({
    loop:false,
    margin:0,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:4
        }
    }
})
});