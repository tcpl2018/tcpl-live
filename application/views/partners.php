<?php 
$page_name = 'partners';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Partners | Team Computers</title>
<meta name= "description" content= "We partner with leading brands to provide best in class IT infrastructure solutions with maximum leverage" />
<meta name= "robots" content= "index, follow">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="fonts/fontello/css/fontello.css" rel="stylesheet">
<!-- Bootstrap css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="css/propeller.min.css" rel="stylesheet">
<!-- Owl carousel css -->
<link href="css/owl.carousel.min.css" rel="stylesheet">
<link href="css/owl.theme.default.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/style-responsive.css" rel="stylesheet">
</head>
<body>
<?php include 'include/header.php';?>
<div class="clearfix"></div>
<section class="cmn-padd career-banner-cover case-studies-banner-cover-bg valigncenter header-min-hei">
  <div class="container">
    <div class="header-min-hei banner-content">
      <h1>The best of Technology</h1>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="whts-new cmn-padd">
  <div class="container">
    <h2 class="cmn-hdr">
      <span class="line-text">What's New</span>
    </h2>
    <div id="whats-new" class="owl-carousel owl-theme"> 
    <!-- Wrapper for slides -->

    <?php 
      $getAllWhatsNews = $this->site_mdl->getAllWhatsNew();
      //test($getAllCasestudies);
      
      // $myCarousel = "0";
      foreach ($getAllWhatsNews as $getAllWhatsNew) {
          if(isset($getAllWhatsNew['Wnew_type']) && $getAllWhatsNew['Wnew_type'] == "partner"){?>
    <div class="item bor-bot clearfix">
      <div class="col-md-6 col-sm-6">
        <figure> <img src="<?php echo EVENT_SHOW_PATH.$getAllWhatsNew['Wnew_photo'];?>" alt="chatbot image" class="img-responsive"> </figure>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="wts-new-txt">
          <p><?php echo $getAllWhatsNew['Wnew_caption'];?></p>
          <p class="hidden-xs"><?php echo echoStr($getAllWhatsNew['Wnew_desc']);?></p>
        
          <?php 
if(isset($getAllWhatsNew['Wnew_redirect_url']) && !empty($getAllWhatsNew['Wnew_redirect_url'])){?>
          <a type="button" href="<?php echo echoStr($getAllWhatsNew['Wnew_redirect_url']);?>" class="btn pmd-btn-outline sub-btn btn-default" target="_blank">Read More</a>
<?php }else{ ?>
<button type="button" class="btn pmd-btn-outline sub-btn btn-default" style="display: none;">Read More</button>
<?php } ?>
        </div>
      </div>
    </div>
    <?php } } ?>
  </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd featured-partner-section part-tech partners-sec">
	<div class="container">
		<h2 class="cmn-hdr">
        	<span class="line-text">Featured Partners</span>
      	</h2>
		<div class="featured-partner owl-carousel owl-theme">
			<div class="item col-md-3 col-sm-4 col-xs-12 featured-partner-box">
				<a href="apple-partner" class="featured-partner-logo link">
					<img src="images/Partners-logo/INS/Mobility/Apple-ASI.png" alt="apple authorised system integrator">
				</a>
			</div>
			<div class="item col-md-3 col-sm-4 col-xs-12 featured-partner-box">
				<a href="google-cloud-partner" class="featured-partner-logo link">
					<img src="images/Partners-logo/INS/Cloud/google-cloud.png" alt="apple authorised system integrator">
				</a>
			</div>
			<div class="item col-md-3 col-sm-4 col-xs-12 featured-partner-box">
				<a href="qlik-elite-partner-india" class="featured-partner-logo link">
					<img src="images/Partners-logo/BA/Qlik---Elite-Partner.png" alt="Qlik Elite Partner">
				</a>
			</div>
			<div class="item col-md-3 col-sm-4 col-xs-12 featured-partner-box">
				<a href="alteryx-partner-india" class="featured-partner-logo link">
					<img src="images/Partners-logo/BA/Alteryx---Master-reseller.png" alt="Alteryx Partner">
				</a>
			</div>
		</div>
	</div>
</section>	
<section class="cmn-padd rel-solutions part-tech partners-sec clearfix" >
  <div class="container">
    <div class="solutions-inner clearfix">
      <h2 class="cmn-hdr">
        <span class="line-text">Partners</span>
      </h2>
      <div class="comp-logo-bx-wrapper">
        <div class="comp-logo-bx clearfix">
          <div class="col-md-4 part-tech-text-box">
            <p>Infrastructure Solutions</p>
          </div>
          <div class="col-md-8 part-logo-cmn-box">
            <?php 
          $getAllCasestudies = $this->site_mdl->getAllPartnersINS();
          foreach ($getAllCasestudies as $getAllCasestudy) {
        ?>
        <img src="<?php echo PARTNERS_SHOW_PATH.$getAllCasestudy['prtnr_photo']; ?>" alt="Partner logo">
        <?php } ?>
          </div>
        </div>
      </div>
      
       <div class="comp-logo-bx-wrapper">
        <div class="comp-logo-bx clearfix">
          <div class="col-md-4 part-tech-text-box">
            <p>Business Analytics</p>
          </div>
          <div class="col-md-8 part-logo-cmn-box">
            <?php 
          $getAllCasestudies = $this->site_mdl->getAllPartnersBusinessAnalytics();
          foreach ($getAllCasestudies as $getAllCasestudy) {
        ?>
        <img src="<?php echo PARTNERS_SHOW_PATH.$getAllCasestudy['prtnr_photo']; ?>" alt="Partner logo">
        <?php } ?>
          </div>
        </div>
      </div>
      <div class="comp-logo-bx-wrapper">
        <div class="comp-logo-bx clearfix">
          <div class="col-md-4 part-tech-text-box">
            <p>Cloud Services</p>
          </div>
          <div class="col-md-8 part-logo-cmn-box">
            <?php 
          $getAllCasestudies = $this->site_mdl->getAllPartnersCloud();
          foreach ($getAllCasestudies as $getAllCasestudy) {
        ?>
        <img src="<?php echo PARTNERS_SHOW_PATH.$getAllCasestudy['prtnr_photo']; ?>" alt="Partner logo">
        <?php } ?>
          </div>
        </div>
      
      </div>
     
      <div class="comp-logo-bx-wrapper">
        <div class="comp-logo-bx clearfix">
          <div class="col-md-4 part-tech-text-box">
            <p>Managed Services</p>
          </div>
          <div class="col-md-8 part-logo-cmn-box">
            <?php 
          $getAllCasestudies = $this->site_mdl->getAllPartnersManagedServices();
          foreach ($getAllCasestudies as $getAllCasestudy) {
        ?>
        <img src="<?php echo PARTNERS_SHOW_PATH.$getAllCasestudy['prtnr_photo']; ?>" alt="Partner logo">
        <?php } ?>
          </div>
        </div>
       
      </div>
      <div class="comp-logo-bx-wrapper">
        <div class="comp-logo-bx clearfix">
          <div class="col-md-4 part-tech-text-box">
            <p>Business Apps</p>
          </div>
          <div class="col-md-8 part-logo-cmn-box">
            <?php 
          $getAllCasestudies = $this->site_mdl->getAllPartnersBusinessApps();
          foreach ($getAllCasestudies as $getAllCasestudy) {
        ?>
        <img src="<?php echo PARTNERS_SHOW_PATH.$getAllCasestudy['prtnr_photo']; ?>" alt="Partner logo">
        <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php /*<section class="cmn-padd rel-solutions part-tech partners-sec clearfix" >
  <div class="container">
    <div class="solutions-inner clearfix">
      <h2 class="cmn-hdr">
        <span class="line-text">Partners</span>
      </h2>
      <div class="comp-logo-bx-wrapper">
        <div class="comp-logo-bx clearfix">
          <div class="col-md-4 part-tech-text-box">
            <p>Infrastructure Solutions</p>
          </div>
          <div class="col-md-8 part-logo-cmn-box">
            <?php 
          $getAllCasestudies = $this->site_mdl->getAllPartnersINS();
          foreach ($getAllCasestudies as $getAllCasestudy) {
        ?>
        <img src="<?php echo PARTNERS_SHOW_PATH.$getAllCasestudy['prtnr_photo']; ?>" alt="Partner logo">
        <?php } ?>
          </div>
        </div>
      </div>
      
       <div class="comp-logo-bx-wrapper">
        <div class="comp-logo-bx clearfix">
          <div class="col-md-4 part-tech-text-box">
            <p>Business Analytics</p>
          </div>
          <div class="col-md-8 part-logo-cmn-box">
            <?php 
          $getAllCasestudies = $this->site_mdl->getAllPartnersBusinessAnalytics();
          foreach ($getAllCasestudies as $getAllCasestudy) {
        ?>
        <img src="<?php echo PARTNERS_SHOW_PATH.$getAllCasestudy['prtnr_photo']; ?>" alt="Partner logo">
        <?php } ?>
          </div>
        </div>
      </div>
      <div class="comp-logo-bx-wrapper">
        <div class="comp-logo-bx clearfix">
          <div class="col-md-4 part-tech-text-box">
            <p>Cloud Services</p>
          </div>
          <div class="col-md-8 part-logo-cmn-box">
            <?php 
          $getAllCasestudies = $this->site_mdl->getAllPartnersCloud();
          foreach ($getAllCasestudies as $getAllCasestudy) {
        ?>
        <img src="<?php echo PARTNERS_SHOW_PATH.$getAllCasestudy['prtnr_photo']; ?>" alt="Partner logo">
        <?php } ?>
          </div>
        </div>
      
      </div>
     
      <div class="comp-logo-bx-wrapper">
        <div class="comp-logo-bx clearfix">
          <div class="col-md-4 part-tech-text-box">
            <p>Managed Services</p>
          </div>
          <div class="col-md-8 part-logo-cmn-box">
            <?php 
          $getAllCasestudies = $this->site_mdl->getAllPartnersManagedServices();
          foreach ($getAllCasestudies as $getAllCasestudy) {
        ?>
        <img src="<?php echo PARTNERS_SHOW_PATH.$getAllCasestudy['prtnr_photo']; ?>" alt="Partner logo">
        <?php } ?>
          </div>
        </div>
       
      </div>
      <div class="comp-logo-bx-wrapper">
        <div class="comp-logo-bx clearfix">
          <div class="col-md-4 part-tech-text-box">
            <p>Business Apps</p>
          </div>
          <div class="col-md-8 part-logo-cmn-box">
            <?php 
          $getAllCasestudies = $this->site_mdl->getAllPartnersBusinessApps();
          foreach ($getAllCasestudies as $getAllCasestudy) {
        ?>
        <img src="<?php echo PARTNERS_SHOW_PATH.$getAllCasestudy['prtnr_photo']; ?>" alt="Partner logo">
        <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> */ ?>
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
		 $('.read-more').on('click', function () {
			var text = $(this).text();
			if (text==='See More') {
				$(this).text('See Less');
			} else {
				$(this).text('See More');
			}
		});
		
		$('#myCarousel, #myCarousel1').carousel({
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
$('.featured-partner').owlCarousel({
    loop:false,
    margin:10,
    nav:false,
	dots: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});
});
	</script>
</body>
</html>