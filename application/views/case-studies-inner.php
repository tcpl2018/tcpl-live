<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Case Studies | <?php echo echoStr(substr($innerData[0]['case_name'],0,80));?></title>
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
<section class="career-banner-cover cs-inner-banner-cover-bg">
  <div class="container">
    <div class="row banner-content">
     <div class="col-md-7 col-sm-7 col-xs-12">
	  <div id="outer">
     	<h1><?php echo echoStr(substr($innerData[0]['case_name'],0,80));?></h1></div>
    <?php if(isset($innerData[0]['case_overview']) && !empty($innerData[0]['case_overview'])){?>
    <p> <?php echo echoStr($innerData[0]['case_overview']);?></p> <?php }else{ ?>
    <p style="display: none;"></p>
  <?php } ?>
    <ul><?php if(isset($innerData[0]['case_client_image']) && !empty($innerData[0]['case_client_image'])){?>
      <li><span>Client</span><br><img style="max-width: 130px;max-height:100%;" src="<?php echo CASE_STUDY_SHOW_PATH.$innerData[0]['case_client_image']; ?>" alt="Client Logo"></li>
      <?php }else{?>
      <li style="display: none;"><span>Client</span><br><img src="images/parle-logo.png" alt="Client Logo"></li>
      <?php }?>
      <li><span style="margin-bottom: 10px;">Sector & Location</span><br><span><?php echo substr($innerData[0]['case_sector_name'],0,40);?></span></li>
    </ul>
     </div>
      <div class="col-md-5 col-sm-5 col-xs-12 cs-img-mn-cv">
      	<div class="cs-img-cvr">
      		<img src="<?php echo CASE_STUDY_SHOW_PATH.$innerData[0]['case_thumbnail_image']; ?>" alt="Image" class="img-responsive">
      	</div>
      </div>
      
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd val-us valigncenter cs-inn-rec">
  <div class="container">
    <div class="row">
      <div class="valigncenter" style="flex-wrap: wrap;">
        
        <div class="col-md-3 col-sm-3 col-xs-12"><span style="padding-left: 23px;"> <?php echo substr($innerData[0]['case_four_boxed_upperblock_1'],0,30);?></span>
          <br>
          <span><?php echo substr($innerData[0]['case_four_boxed_lowerblock_1'],0,30);?></span></div>
        <div class="col-md-3 col-sm-3 col-xs-12"><span> <?php echo substr($innerData[0]['case_four_boxed_upperblock_2'],0,30);?></span>
          <br>
          <span><?php echo substr($innerData[0]['case_four_boxed_lowerblock_2'],0,30);?>
</span></div>
        <div class="col-md-3 col-sm-3 col-xs-12"><span> <?php echo substr($innerData[0]['case_four_boxed_upperblock_3'],0,30);?></span>
          <br>
         <span> <?php echo substr($innerData[0]['case_four_boxed_lowerblock_3'],0,30);?>
</span></div>
        <div class="col-md-3 col-sm-3 col-xs-12"><span> <?php echo substr($innerData[0]['case_four_boxed_upperblock_4'],0,30);?></span>
          <br>
          <span><?php echo substr($innerData[0]['case_four_boxed_lowerblock_4'],0,30);?>
</span></div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd cs-sb-sec cmn-padd">
  <div class="container">
    <div class="row clearfix">
     <div class="cs-cmn-bx-cvr">
      <div class="col-md-5 col-sm-4 col-xs-12">
      	<div class="cs-sb-img-cvr">
      		<img src="images/challenges-img.png" alt="challenges img">
      	</div>
      </div>
      <div class="col-md-7 col-sm-8 col-xs-12">
      	<div class="cs-sb-img-cvr-txt">
      		<h2 class="cmn-hdr"><span class="line-text">Challenges</span></h2>
          <?php echo echoStr($innerData[0]['case_desc']);?>
      	</div>
      </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd cs-sb-sec cmn-padd sb-li-bg">
  <div class="container">
    <div class="cs-cmn-bx-cvr valigncenter">
       <h2><?php echo echoStr(substr($innerData[0]['case_center_boxed_content'],0,500));?></h2>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd cs-sb-sec cmn-padd">
  <div class="container">
    <div class="row clearfix">
     <div class="cs-cmn-bx-cvr">
      <div class="col-md-5 col-sm-4 col-xs-12">
      	<div class="cs-sb-img-cvr">
      		<img src="images/our-sol-img.png" alt="our solution img">
      	</div>
      </div>
      <div class="col-md-7 col-sm-8 col-xs-12">
      	<div class="cs-sb-img-cvr-txt">
      		<h2 class="cmn-hdr"><span class="line-text">Our Solution</span></h2>
          <?php echo echoStr($innerData[0]['case_our_solutions']);?>
      	</div>
      </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<?php 
if(isset($innerData[0]['case_txt_testimonial_author']) && !empty($innerData[0]['case_txt_testimonial_author'])){?>
<section class="cmn-padd cs-sb-sec cmn-padd sb-li-bg">
  <div class="container">
    <div class="cs-cmn-bx-cvr testi valigncenter">
       <h2><?php echo echoStr($innerData[0]['case_testimonial']);?>
       <!-- <img src="images/quotation-mark-quote.png" alt="quotation mark" class="img-qte1">
       <img src="images/quotation-mark-quote.png" alt="quotation mark" class="img-qte2"> -->
       </h2>
       <p>- <?php echo echoStr($innerData[0]['case_txt_testimonial_author']);?></p>
       <?php }else{?>
       <section class="cmn-padd cs-sb-sec cmn-padd sb-li-bg" style="display: none;">
  <div class="container">
    <div class="cs-cmn-bx-cvr testi valigncenter">
       <h2><?php echo echoStr($innerData[0]['case_testimonial']);?>
       <img src="images/quotation-mark-quote.png" alt="quotation mark" class="img-qte1">
       <img src="images/quotation-mark-quote.png" alt="quotation mark" class="img-qte2">
       </h2>
       <p>- <?php echo echoStr($innerData[0]['case_txt_testimonial_author']);?></p>
      </div>
  </div>
</section>
<?php } ?>
      </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd cs-sb-sec cmn-padd">
  <div class="container">
    <div class="row clearfix">
     <div class="cs-cmn-bx-cvr">
      <div class="col-md-5 col-sm-4 col-xs-12">
      	<div class="cs-sb-img-cvr">
      		<img src="images/result-img.png" alt="result img">
      	</div>
      </div>
      <div class="col-md-7 col-sm-8 col-xs-12">
      	<div class="cs-sb-img-cvr-txt">
      		<h2 class="cmn-hdr"><span class="line-text">Result</span></h2>
      		<?php echo echoStr($innerData[0]['case_result']);?>
      	</div>
      </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd get-in-touch form">
  <div class="container">
    <div class="clearfix">
      <div class="git-txt col-xs-12">
        <h2 class="txt">See how we can optimize your business.</h2>
        <div class="get-in-touch-form form" style="text-align: center">
          <!--<input type="text"  class="form-control" placeholder="Full Name">
          <input type="tel"  class="form-control" placeholder="Work Phone">
          <input type="email"  class="form-control" placeholder="Work Email">-->
          <a href="cta-landing" class="btn pmd-btn-raised pmd-ripple-effect btn-info white-btn">Get In Touch</a>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!--<section class="cmn-padd rel-solutions rel-sol2 see-next">
  <div class="container">
    <div class="solutions-inner clearfix">
      <h2 class="cmn-hdr">
        <span class="line-text">Other Case Studies</span>
      </h2>
      <div class="valigncenter rel-cmn-box-cvr">
        <div class="rel-cmn-box">
          <figure> <img src="images/inf-sol.jpg" alt="infrastructure solutions"> 
          <figcaption> Infrastructure <br>
            Solutions <img src="images/arr-box.png" alt="arrow icon"> </figcaption></figure>
        </div>
        <div class="rel-cmn-box">
          <figure> <img src="images/cloud-ser.jpg" alt="Cloud Services"> 
          <figcaption> Cloud <br>
            Services <img src="images/arr-box.png" alt="arrow icon"> </figcaption></figure>
        </div>
        <div class="rel-cmn-box">
          <figure> <img src="images/apps-and-mob.jpg" alt="Apps & Mobility"> 
          <figcaption> Apps & <br>
            Mobility <img src="images/arr-box.png" alt="arrow icon"> </figcaption></figure>
        </div>
        <div class="rel-cmn-box">
          <figure> <img src="images/man-ser.jpg" alt="Managed Services"> 
          <figcaption> Managed <br>
            Services <img src="images/arr-box.png" alt="arrow icon"> </figcaption></figure>
        </div>
      </div>
    </div>
  </div>
</section>-->
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
			if ($(window).width() >= 768) {
		resize_to_fit($('#outer'), $('#outer h1'));
		function resize_to_fit(outer, inner) {
		while(inner.height() > outer.height()) {
		var fontsize = parseInt(inner.css('font-size')) - 1;
		inner.css('font-size', fontsize);
		// some browsers(chrome) the min font return value is 12px
		if(fontsize <= 1 || parseInt(inner.css('font-size')) >= fontsize+1)
			break;
		}
		}
		}
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