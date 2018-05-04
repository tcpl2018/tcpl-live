
	$(document).ready(function(){
		$('.menu-icon').click(function(){
			$('.navbar-fixed-top').show();
			$('.nav-collapse').addClass('in');
		});
		$('#mobile-menu-topnav .menu-item1').click(function(){
		$('#mobile-menu-topnav .team-mob-sub-menu').slideToggle();
	});	
		$('#mobile-menu-topnav .menu-item2').click(function(){
		$('#mobile-menu-topnav #team-mob-work-menu').slideToggle();
	});	
	});

$(document).ready(function($){
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

});
$(document).ready(function(){
	$(".intro__arrow").on('click',function() {
    $('html, body').animate({
        'scrollTop' : $("#first-section").position().top
    },500);
});
	});

$(document).ready(function(){
	var $animated = $('.animated li');
var $window = $(window);

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);

  $.each($animated, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);

    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
      (element_top_position <= window_bottom_position)) {
      $element.addClass('view');
    } 
  });
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');
});

$(document).ready(function(){
	var $animation_elements = $('.animation-element');
var $window = $(window);

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);

  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);

    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
      (element_top_position <= window_bottom_position)) {
      $element.addClass('in-view');
    } 
  });
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');
});

$(document).ready(function(){
  $('#myCarousel').carousel({
   interval: 3000
  });
		$('#mobile-menu-topnav .menu-item:first-child').click(function(){
		$('#mobile-menu-topnav .team-sub-menu').slideToggle();
	});
		$(function() {
              $(".counter").countimator();
            });
		});