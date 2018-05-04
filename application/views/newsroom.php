<?php 
$page_name = 'newsroom';
$getNewsrooms = $this->site_mdl->getAllNewsroom();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Newsroom | Team Computers</title>
<meta name="description" content="Keep track of latest events, happenings, news, & press releases from Team Computers. Stay connected!" />
<meta name="robots" content="index, follow">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="fonts/fontello/css/fontello.css" rel="stylesheet">
<!-- Bootstrap css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="css/propeller.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/style-responsive.css" rel="stylesheet">	
</head>

<body>
<?php include 'include/header.php';?>
<section class="cmn-padd career-banner-cover newsroom-banner-cover-bg valigncenter">
  <div class="container">
    <div class="row banner-content">
      <h1>Imagine. Design. Build & Operate.</h1>
    </div>
  </div>
  <div class="banner-menu">
    <div class="container">
      <div class="row">
        <ul class="clearfix valigncenter" style="flex-wrap: wrap;">
          <li><a href="about-company"><img src="images/company-icon.png" alt="company icon"> Company</a></li>
          <li class="active"><a href="newsroom"><img src="images/newsroom-icon.png" alt="newsroom icon"> Newsroom</a></li>
          <li><a href="impact"><img src="images/impact-icon.png" alt="impact icon"> Impact</a></li>
          <li><a href="contact"><img src="images/contact-icon.png" alt="contact icon"> Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd rel-solutions newsrooms-sec">
  <div class="container">
    <div class="solutions-inner clearfix">
      <h2 class="cmn-hdr">
        <span class="line-text">Newsroom</span>
      </h2>
      <div class="row">
 <?php
          foreach ($getNewsrooms as $getNewsroom) {
        ?>
      <div class="col-md-6 col-sm-6 col-xs-12 newsroom-box-cvr scale-anm">
      <div class="rel-cmn-box newsroom-box">
      	<figure>
      		<img src="<?php echo EVENT_SHOW_PATH.$getNewsroom['evnt_photo']; ?>" alt="Newsroom Image">
      	
      	<figcaption>
      		<span><?php echo substr($getNewsroom['evnt_caption'],0);?></span>  
      		<span><?php echo ucfirst(substr($getNewsroom['evnt_type'],0,20));?> | <?php echo substr($getNewsroom['evnt_location'],0,20);?></span>
      	</figcaption></figure>
      </div>
     </div>
     <?php } ?>
     </div>
     <div class="btn-box" style="text-align: center; margin-top: 20px"> 
            <button type="button" class="btn pmd-ripple-effect btn-default load-more"> See more <img src="images/arrow-icon.png" alt="arrow icon" style="height: 10px"></button >
     </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!--<section class="cmn-padd rel-solutions key-con">
  <div class="container">
    <div class="solutions-inner clearfix">
      <h2 class="sec-hd"><img src="images/team-cln.png" alt="blue line"> Key Contact</h2>
      <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="part-tech-cmn-box">
      	<figure>
      		<img src="images/head-pic.png" alt="Business Analytics Head">
      	</figure>
      	
      </div>
     </div>
     <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="key-con-txt">
      	<p>Jatin Sawhney</p>
     	<p>Director, Business Analytics</p>
     	<div class="newsrm-led-soc">
            <ul>
              <li><a href="#"><i class="fa fa-phone"></i></a></li>
              <li><a href="#"><i class="fa fa-envelope"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
      </div>
     </div>
    
     </div>
    </div>
  </div>
</section>-->
<div class="clearfix"></div>
<?php include 'include/footer.php';?>
<!-- jQuery before Propeller.js --> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/propeller.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.1/bootstrap-slider.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.0/masonry.pkgd.min.js"></script>
<!-- Owl carousel css -->
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
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
			var size_li = $(".newsroom-box-cvr").size();
				x=6;
				$('.newsroom-box-cvr:lt('+x+')').fadeIn('slow');
				$('.load-more').click(function () {
					x= (x+3 <= size_li) ? x+3 : size_li;
					$('.newsroom-box-cvr:lt('+x+')').fadeIn('slow');
					if(x == size_li){
						$(this).parent().fadeOut('slow');
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