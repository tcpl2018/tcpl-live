$(document).ready(function($){$('ul.dropdown-menu [data-toggle=dropdown]').on('click',function(event){event.preventDefault();event.stopPropagation();$(this).parent().siblings().removeClass('open');$(this).parent().toggleClass('open');});$('.dropdown-toggle.disabled').click(function(){var location=$(this).attr('href');window.location.href=location;return false;});$(window).on("scroll",function(){if($(window).scrollTop()>10){$(".navbar-fixed-top").addClass("wh-bg-clr");}else{$(".navbar-fixed-top").removeClass("wh-bg-clr");}});$(window).scroll(function(){var sticky=$('.header-fixd-btn'),scroll=$(window).scrollTop();if(scroll>=710){sticky.css('display','block');}else{sticky.css('display','none');}});var offset=300,offset_opacity=1200,scroll_top_duration=700,$back_to_top=$('.cd-top');$(window).scroll(function(){($(this).scrollTop()>offset)?$back_to_top.addClass('cd-is-visible'):$back_to_top.removeClass('cd-is-visible cd-fade-out');if($(this).scrollTop()>offset_opacity){$back_to_top.addClass('cd-fade-out');}});$back_to_top.on('click',function(event){event.preventDefault();$('body,html').animate({scrollTop:0,},scroll_top_duration);});$('#whats-new').owlCarousel({loop:true,margin:10,nav:true,dots:false,navText:['<span><img src="images/slider-arrow.png" alt="slider arrow"></span>','<span><img src="images/slider-arrow.png" alt="slider arrow"></span>'],responsive:{0:{items:1,autoHeight:true},600:{items:1,autoHeight:true,},1000:{items:1},1280:{items:2}}});
$('#partner-carousel').owlCarousel({loop:false,margin:0,items:10,rewind:false,nav: true,autoplay:false,dots:false,navText:['<span><img src="images/slider-arrow.png" alt="slider arrow"></span>','<span><img src="images/slider-arrow.png" alt="slider arrow"></span>'],responsive:{0:{items:1,nav:true,dots:false,},600:{items:3,},768:{items:3},1000:{items:10},}});
$('#partner-carousel').owlCarousel({loop:false,margin:0,items:10,rewind:false,nav: true,autoplay:true,dots:false,navText:['<span><img src="images/slider-arrow.png" alt="slider arrow"></span>','<span><img src="images/slider-arrow.png" alt="slider arrow"></span>'],responsive:{0:{items:1,nav:true,autoWidth:false,dots:false,},600:{items:3,},768:{items:3},1000:{items:10},}});
$('#partner-carousel1').owlCarousel({loop:false,margin:0,autoplay:true,dots:false,nav:true,navText:['<span><img src="images/slider-arrow.png" alt="slider arrow"></span>','<span><img src="images/slider-arrow.png" alt="slider arrow"></span>'],responsive:{0:{items:1,nav:true,dots:false,},600:{items:3,},768:{items:5},1000:{items:7}}});
$("#history-carousel").owlCarousel({items:1,autoplay:true,nav:true,navText:['<span><img src="images/slider-arrow.png" alt="slider arrow"></span>','<span><img src="images/slider-arrow.png" alt="slider arrow"></span>'],responsive:{0:{items:1,nav:false,}}}).find('.owl-item').each(function(i){var attr=$(this).children().attr('data-year');var element=$('<span>'+attr+'</span>');$('#history-carousel.owl-carousel .owl-dot').eq(i).append(element);});$('#video-carousel').owlCarousel({center:true,items:2,loop:true,autoplay:true,nav:true,dots:false,navText:['<span><img src="images/slider-arrow-white.png" alt="slider arrow"></span>','<span><img src="images/slider-arrow-white.png" alt="slider arrow"></span>'],margin:0,responsive:{320:{items:1,nav:false,},481:{items:2,nav:true,},768:{items:2},1000:{items:2}}});$('#video-carousel').find('.owl-nav').removeClass('disabled');$('#video-carousel').on('changed.owl.carousel',function(event){$(this).find('.owl-nav').removeClass('disabled');});$('#video-carousel').find('.owl-dots').removeClass('disabled');$('#video-carousel').on('changed.owl.carousel',function(event){$(this).find('.owl-dots').removeClass('disabled');});$(function(){function isScrolledIntoView($elem){var docViewTop=$(window).scrollTop();var docViewBottom=docViewTop+$(window).height();var elemTop=$elem.offset().top;var elemBottom=elemTop+$elem.height();return((elemBottom<=docViewBottom)&&(elemTop>=docViewTop));}function count($this){var current=parseInt($this.html(),10);if(isScrolledIntoView($this)&&!$this.data("isCounting")&&current<$this.data('count')){$this.html(++current);$this.data("isCounting",true);setTimeout(function(){$this.data("isCounting",false);count($this);},5);}}$(".map-data span.number-anim").each(function(){$(this).data('count',parseInt($(this).html(),10));$(this).html('0');$(this).data("isCounting",false);});function startCount(){$(".map-data span.number-anim").each(function(){count($(this));});};$(window).scroll(function(){startCount();});startCount();});if($(window).width()<768){$(window).scroll(function(){var sticky=$('.header-fixd-btn'),scroll=$(window).scrollTop();if(scroll>=240){sticky.css('display','block');}else{sticky.css('display','none');}});}else{$(window).scroll(function(){var sticky=$('.header-fixd-btn'),scroll=$(window).scrollTop();if(scroll>=710){sticky.css('display','block');}else{sticky.css('display','none');}});}$('#partner-page-carousel').owlCarousel({loop:false,margin:0,nav:true,navText:['<span><img src="images/slider-arrow.png" alt="slider arrow"></span>','<span><img src="images/slider-arrow.png" alt="slider arrow"></span>'],dots:false,responsive:{0:{items:1,},600:{items:2,},768:{items:2},1000:{items:1}}});$('#hero-carousel').owlCarousel({loop:false,margin:10,nav:true,navText:['<span><img src="images/slider-arrow.png" alt="slider arrow"></span>','<span><img src="images/slider-arrow.png" alt="slider arrow"></span>'],dots:false,responsive:{0:{items:1,},600:{items:3,},768:{items:2},1000:{items:3,nav:true,}}});$('#location-carousel').owlCarousel({loop:false,margin:10,nav:true,navText:['<span><img src="images/slider-arrow.png" alt="slider arrow"></span>','<span><img src="images/slider-arrow.png" alt="slider arrow"></span>'],dots:false,responsive:{0:{items:1,},600:{items:3,},768:{items:2},1000:{items:3,nav:true,}}});$('#intro-carousel').owlCarousel({loop:true,autoplay:true,autoplaySpeed:100,pullDrag:false,touchDrag:false,mouseDrag:false,margin:0,items:1,animateOut:'fadeOut',nav:false,dots:false,navText:['<span><img src="images/slider-arrow.png" alt="slider arrow"></span>','<span><img src="images/slider-arrow.png" alt="slider arrow"></span>'],});
$("#static-text-carousel").owlCarousel({loop:true,autoplay:true,autoplaySpeed:100,pullDrag:false,touchDrag:false,mouseDrag:false,items:1,nav:false,dots:false,animateIn:'slideInDown',animateOut:'slideOutDown'});$(window).load(function(){$('.grid').masonry({itemSelector:'.grid-item',columnWidth:5});$('#faq-carousel').owlCarousel({loop:true,margin:0,nav:true,dots:false,navText:['<span><img src="images/slider-arrow.png" alt="slider arrow"></span>','<span><img src="images/slider-arrow.png" alt="slider arrow"></span>'],responsive:{0:{items:1,autoHeight:true},600:{items:2,autoHeight:true,},1000:{items:3},1280:{items:4}}});
$('#full-width-carousel').owlCarousel({items:1,loop:true,margin:0,nav:true,dots:false,navText:['<span><img src="images/slider-arrow-white.png" alt="slider arrow"></span>','<span><img src="images/slider-arrow-white.png" alt="slider arrow"></span>'],});
$('.landing-page-btn').click(function(){$(this).parent().parent(".banner-anim").addClass('move-up');$(this).parent().parent().parent().parent().find("#faq-carousel").addClass('move-up');$(this).parent().parent().parent().find("h1").addClass('move-up');});
$('#home-partner-carousel').owlCarousel({loop:true,autoplay:true,margin:0,responsive:{0:{items:1,nav:true,dots:false,navText:['<span><img src="images/slider-arrow.png" alt="slider arrow"></span>','<span><img src="images/slider-arrow.png" alt="slider arrow"></span>'],},600:{items:3,nav:true,dots:false,navText:['<span><img src="images/slider-arrow.png" alt="slider arrow"></span>','<span><img src="images/slider-arrow.png" alt="slider arrow"></span>'],},768:{items:5,nav:true,dots:false,navText:['<span><img src="images/slider-arrow.png" alt="slider arrow"></span>','<span><img src="images/slider-arrow.png" alt="slider arrow"></span>'],},1000:{items:5,nav:true,dots:false,navText:['<span><img src="images/slider-arrow.png" alt="slider arrow"></span>','<span><img src="images/slider-arrow.png" alt="slider arrow"></span>'],}}});});$('.leader-btn').click(function(){$('html, body').animate({scrollTop:$('#leader').offset().top},400);});
$('#service-slider').owlCarousel({loop:false,margin:0, nav:true,items:3,rewind:true,autoplay:true,dots:false,navText:['<span><img src="images/slider-arrow.png" alt="slider arrow"></span>','<span><img src="images/slider-arrow.png" alt="slider arrow"></span>'],responsive:{0:{items:1,nav:true,dots:false,autoHeight:true,},600:{items:2,autoHeight:true,},768:{items:2},1025:{items:3}}});
var slider = $('#slider');
  // reference for thumbnail items
  var thumbnailSlider = $('#thumbnailSlider');
  //transition time in ms
  var duration = 500;

  // carousel function for main slider
  slider.owlCarousel({
   loop:false,
   nav:false,
   autoHeight: true,
	  center:true, 
	dots: false,  
	startPosition: 2,
   items:1
  }).on('changed.owl.carousel', function (e) {
   //On change of main item to trigger thumbnail item
   thumbnailSlider.trigger('to.owl.carousel', [e.item.index, duration, true]);
  });

  // carousel function for thumbnail slider
  thumbnailSlider.owlCarousel({
   loop:false,
   center:true, //to display the thumbnail item in center
   nav:false,
   dots: false,
	  startPosition: 2,
   responsive:{
    0:{
     items:3
    },
    1000:{
     items:5
    }
   }
  }).on('click', '.owl-item', function () {
   // On click of thumbnail items to trigger same main item
   slider.trigger('to.owl.carousel', [$(this).index(), duration, true]);

  }).on('changed.owl.carousel', function (e) {
   // On change of thumbnail item to trigger main item
   slider.trigger('to.owl.carousel', [e.item.index, duration, true]);
  });
	//These two are navigation for main items
  $('.slider-right').click(function() {
   slider.trigger('next.owl.carousel');
  });
  $('.slider-left').click(function() {
   slider.trigger('prev.owl.carousel');
  });
var mainSlider = $('#main-cs-slider');
  // reference for thumbnail items
var relatedSlider = $('#related-case-study');
//transition time in ms
var duration1 = 200;

mainSlider.owlCarousel({
	loop:false,
	nav:false,
	 dots: false,
	touchDrag: false,
    mouseDrag: false,
	animateOut: 'fadeOut',
	animateIn: 'fadeIn',
	responsive:{
		0:{
			items:1
		},
		600:{
			items:1
		},
		1000:{
			items:1
		}
	}
})/*.on('changed.owl.carousel', function (e) {
   //On change of main item to trigger thumbnail item
   relatedSlider.trigger('to.owl.carousel', [e.item.index, duration1, true]);
  });
*/							  
relatedSlider.owlCarousel({
	loop:false,
	nav:false,
	rewind: true,
	 dots: false,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:1
		},
		1000:{
			items:2
		}
	}
})/*.on('click', '.owl-item', function () {
   // On click of thumbnail items to trigger same main item
   mainSlider.trigger('to.owl.carousel', [$(this).index(), duration1, true])});
   //.on('changed.owl.carousel', function (e) {
   // On change of thumbnail item to trigger main item
   //mainSlider.trigger('to.owl.carousel', [e.item.index, duration1, true]);
  //});
  $('.related-case-study-slider .owl-item').eq(0).addClass('here');
	$('.related-case-study-slider .owl-item').on('click', function(){
	$('.related-case-study-slider .owl-item.here').removeClass('here');
	$(this).addClass('here');
	
});*/
	 //These two are navigation for main items
  $('.slider-right').click(function() {
   relatedSlider.trigger('next.owl.carousel');
  });
  $('.slider-left').click(function() {
   relatedSlider.trigger('prev.owl.carousel');
  });
 if ($('body').hasClass('pmd-body-open')) {
        $('html, body')
            // Needed to remove previously bound handlers
            .off('touchstart touchmove') 
            .on('touchstart touchmove', function (e) {
                e.preventDefault();
            });
    } else {
        $('html, body')
            .off('touchstart touchmove') 
            .on('touchstart touchmove', function (e) {});
    }
});