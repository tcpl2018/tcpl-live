<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Privacy Policy</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="fonts/fontello/css/fontello.css" rel="stylesheet">
<!-- Bootstrap css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="css/propeller.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>

<body>
<?php include 'include/header.php';?>
<section class="cmn-padd career-banner-cover career-banner-cover-bg valigncenter">
  <div class="container">
    <div class="row banner-content">
      <h1>Make every day unique</h1>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd itdce cmn-padd privacy-policy">
  <div class="container">
    
      <h2 class="cmn-hdr">
        
        <span class="line-text">Privacy Policy</span>
      </h2>
      <p><strong>Team Computers Private Limited (TCPL)</strong> is sensitive to privacy issues on the Internet. We believe it is important you know how we treat the information we receive from you, on the Internet.<br><br>

In general, you can visit TCPL on the World Wide Web without telling us who you are or revealing any information about yourself. Our Web servers collect the domain names, not the e-mail addresses, of visitors. This information is aggregated to measure the number of visits, average time spent on the site, pages viewed, etc. TCPL uses this information to measure the use of our site and to improve the content of its site. Your accessing our site signifies your unconditional consent to allow the collection of your domain names.<br><br>

There are times, however, when we may need information from you, such as your name and address. When information is needed, we will try (but are not obligated) to let you know at the time of collection, how we will use the personal information. Usually, the personal information we collect is used only by us to respond to your inquiry, process an order or allow you to access specific account information. Occasionally, we may make the e-mail addresses, of those who provide information, available to other reputable organizations whose products or services we think you may find interesting. In these cases, you will be offered an opportunity to limit the access of your information. In case we do not receive any response from you to limit the access of your information, it shall be deemed that you consent to such distribution of your information as mentioned above.<br><br>

If you register with one of TCPL business units online, they may use this information to provide you with custom information about TCPL offering in support of your business needs. A technology called cookies may be used to provide you with tailored information. A cookie is a tiny element of data that a web site can send to your browser, which may then be stored on your hard drive so we can recognize you when you return. You may set your browser to notify you when you receive a cookie. Registering with any TCPL business unit online signifies your unconditional consent to receive such cookies.<br><br>

At times we conduct online surveys to better understand the needs and profiles of our visitors. When we conduct a survey, we will try (but are not obligated) to let you know how we will use the information at the time we collect information from you on the Internet.<br><br>

You recognize and understand that there is no compulsion on you to provide us with your personal information and any and all personal information provided by you to us is with your full consent, own decision and desire to provide such personal information. You also understand that we are under no obligation to verify the source from which the personal information about you is provided to us, and they are deemed to be provided by you, unless you demonstrate to us within a period of fifteen days from the date of providing of such information to us, to our satisfaction, that the information was provided to us without your free consent.<br><br>

TCPL Web site may contain links to other sites such as TCPL partners and affiliates. While we try to link only to sites that share our high standards and respect for privacy, we are not responsible for the content or the privacy practices employed by other sites.</p>
    
  </div>
</section>
<?php include 'include/footer.php';?>
<!-- jQuery before Propeller.js --> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/propeller.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.1/bootstrap-slider.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.0/masonry.pkgd.min.js"></script> 
<script>
	$('.grid').masonry({
  // options... 
  itemSelector: '.grid-item',
  
});
	</script> 
<script>
		$(document).ready(function () {
    $('#myCarousel').carousel({
        interval: 10000
    })
    $('.fdi-Carousel .item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this));
        }
        else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });
});
	</script>
	<script>
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
	</script>
</body>
</html>