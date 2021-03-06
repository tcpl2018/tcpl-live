<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Partners</title>
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
<div class="clearfix"></div>
<section class="cmn-padd career-banner-cover case-studies-banner-cover-bg valigncenter">
  <div class="container">
    <div class="row banner-content">
      <h1>Be Among the Ambitious</h1>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd whts-new avsi-car">
  <?php 
      $getAllWhatsNews = $this->site_mdl->getAllWhatsNew();
      //test($getAllCasestudies);
      $ClassActv="";
      $ClassActv="active";
      $dataSlideTo="0";
      $myCarousel = "1";
      // $myCarousel = "0";
      foreach ($getAllWhatsNews as $getAllWhatsNew) { 
      if($myCarousel==1){
    ?>
  <div id="myCarousel<?php echo $myCarousel;?>" class="carousel slide" data-ride="carousel"> 
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    
    <!-- Wrapper for slides -->

    <div class="carousel-inner">
    
      <div class="item active">
        <div class="container">
          <div class="col-md-6">
            <figure> <img src="<?php echo EVENT_SHOW_PATH.$getAllWhatsNew['Wnew_photo'];?>" alt="chatbot image"> </figure>
          </div>
          <div class="col-md-6">
            <div class="wts-new-txt">
              <h2><img src="images/team-cln.png" alt="blue dots"> What's New</h2>
              <p class="sub-txt"><?php echo substr($getAllWhatsNew['Wnew_caption'],0,40);?></p>
              <p><?php echo echoStr($getAllWhatsNew['Wnew_desc']);?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    <!-- Left and right controls --> 
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"><img src="images/slider-arrow.png" alt="slider arrow"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"><img src="images/slider-arrow.png" alt="slider arrow"></span> <span class="sr-only">Next</span></a>
  </div>
  <?php }else{?>
  <div id="myCarousel<?php echo $myCarousel;?>" class="carousel slide" data-ride="carousel"> 
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    
    <!-- Wrapper for slides -->

    <div class="carousel-inner">
    
      <div class="item">
        <div class="container">
          <div class="col-md-6">
            <figure> <img src="<?php echo EVENT_SHOW_PATH.$getAllWhatsNew['Wnew_photo'];?>" alt="chatbot image"> </figure>
          </div>
          <div class="col-md-6">
            <div class="wts-new-txt">
              <h2><img src="images/team-cln.png" alt="blue dots"> What's New</h2>
              <p class="sub-txt"><?php echo substr($getAllWhatsNew['Wnew_caption'],0,40);?></p>
              <p><?php echo echoStr($getAllWhatsNew['Wnew_desc']);?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    <!-- Left and right controls --> 
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"><img src="images/slider-arrow.png" alt="slider arrow"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"><img src="images/slider-arrow.png" alt="slider arrow"></span> <span class="sr-only">Next</span></a>
  </div>
  <?php } $myCarousel++; } ?>
</section>


<div class="clearfix"></div>
<section class="cmn-padd rel-solutions part-tech partners-sec clearfix" >
  <div class="container">
    <div class="solutions-inner clearfix">
      <h2 class="cmn-hdr">
        
        <span class="line-text">Technology Used / Partners</span>
      </h2>
      
       <div class="comp-logo-bx clearfix" style="padding-top: 30px">
        <div class="col-md-4">
          <div class="part-tech-text-box valigncenter">
            <p>Infrastructure Solutions</p>
          </div>
        </div>
        <div class="col-md-8">
          <div class="part-logo-cmn-box">
            <div class="valigncenter">
              
               <?php
                $getPartners = $this->site_mdl->getAllPartners();
                //test($getEvents);
                foreach($getPartners as $dataPartner){
               ?>  
              <img src="<?php echo PARTNERS_SHOW_PATH.$dataPartner['prtnr_photo']; ?>" alt="acer logo">
              <?php } ?>
            </div> 
          </div>
          <a href="partners-inner.html">See More <img src="images/arrow-icon.png" alt="arrow icon" style="height: 10px"></a>
        </div>
       </div>
       <div class="comp-logo-bx clearfix">
        <div class="col-md-4">
          <div class="part-tech-text-box valigncenter">
            <p>Apps & Mobility</p>
          </div>
        </div>
        <div class="col-md-8">
          <div class="part-logo-cmn-box">
            <div class="valigncenter">
              <img src="images/alteryx-logo.png" alt=" logo">
              <img src="images/alteryx-logo.png" alt=" logo">
              <img src="images/alteryx-logo.png" alt=" logo">
              <img src="images/alteryx-logo.png" alt=" logo">
              <img src="images/alteryx-logo.png" alt=" logo">
            </div>
            <a href="#">See More <img src="images/arrow-icon.png" alt="arrow icon" style="height: 10px"></a> 
          </div>
        </div>
       </div>
       <div class="comp-logo-bx clearfix">
        <div class="col-md-4">
          <div class="part-tech-text-box valigncenter">
            <p>Cloud Services</p>
          </div>
        </div>
        <div class="col-md-8">
          <div class="part-logo-cmn-box">
            <div class="valigncenter">
              <img src="images/alteryx-logo.png" alt=" logo">
              <img src="images/alteryx-logo.png" alt=" logo">
              <img src="images/alteryx-logo.png" alt=" logo">
              <img src="images/alteryx-logo.png" alt=" logo">
              <img src="images/alteryx-logo.png" alt=" logo">
            </div> 
          </div>
          <a href="#">See More <img src="images/arrow-icon.png" alt="arrow icon" style="height: 10px"></a>
        </div>
       </div>
       <div class="comp-logo-bx clearfix">
        <div class="col-md-4">
          <div class="part-tech-text-box valigncenter">
            <p>Business Analytics</p>
          </div>
        </div>
        <div class="col-md-8">
          <div class="part-logo-cmn-box">
            <div class="valigncenter">
              <img src="images/alteryx-logo.png" alt=" logo">
              <img src="images/alteryx-logo.png" alt=" logo">
              <img src="images/alteryx-logo.png" alt=" logo">
              <img src="images/alteryx-logo.png" alt=" logo">
              <img src="images/alteryx-logo.png" alt=" logo">
            </div> 
          </div>
          <a href="#">See More <img src="images/arrow-icon.png" alt="arrow icon" style="height: 10px"></a>
        </div>
       </div>
       <div class="comp-logo-bx clearfix" style="border: none; padding-bottom: 0">
        <div class="col-md-4">
          <div class="part-tech-text-box valigncenter">
            <p>Managed Services</p>
          </div>
        </div>
        <div class="col-md-8">
          <div class="part-logo-cmn-box">
            <div class="valigncenter">
              <img src="images/alteryx-logo.png" alt=" logo">
              <img src="images/alteryx-logo.png" alt=" logo">
              <img src="images/alteryx-logo.png" alt=" logo">
              <img src="images/alteryx-logo.png" alt=" logo">
              <img src="images/alteryx-logo.png" alt=" logo">
            </div>
            <a href="#">See More <img src="images/arrow-icon.png" alt="arrow icon" style="height: 10px"></a> 
          </div>
        </div>
       </div>
      
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd whts-new cust-view insights">
  <div class="container">
    <h2 class="cmn-hdr">
      
      <span class="line-text">What Our Customer Says</span>
    </h2>
  </div>
  <div id="myCarousel" class="carousel slide container" data-ride="carousel"> 
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <div class="row">
          <div class="col-md-4">
            <div class="user-say">
              <div class="blue-box">
                <p>The dedicated effort by your team has helped us fine tune the analytical dashboards so that end-users can see the considerable business value in it.</p>
              </div>
              <p><img src="images/user-pic.png" alt="user pic"></p>
              <p class="user-name">Mr. ABC <br>
                <span>Sr. Vice President IT</span></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="user-say">
              <div class="blue-box">
                <p>The dedicated effort by your team has helped us fine tune the analytical dashboards so that end-users can see the considerable business value in it.</p>
              </div>
              <p><img src="images/user-pic.png" alt="user pic"></p>
              <p class="user-name">Mr. ABC <br>
                <span>Sr. Vice President IT</span></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="user-say">
              <div class="blue-box">
                <p>The dedicated effort by your team has helped us fine tune the analytical dashboards so that end-users can see the considerable business value in it.</p>
              </div>
              <p><img src="images/user-pic.png" alt="user pic"></p>
              <p class="user-name">Mr. ABC <br>
                <span>Sr. Vice President IT</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="item ">
        <div class="row">
          <div class="col-md-4">
            <div class="user-say">
              <div class="blue-box">
                <p>The dedicated effort by your team has helped us fine tune the analytical dashboards so that end-users can see the considerable business value in it.</p>
              </div>
              <p><img src="images/user-pic.png" alt="user pic"></p>
              <p class="user-name">Mr. ABC <br>
                <span>Sr. Vice President IT</span></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="user-say">
              <div class="blue-box">
                <p>The dedicated effort by your team has helped us fine tune the analytical dashboards so that end-users can see the considerable business value in it.</p>
              </div>
              <p><img src="images/user-pic.png" alt="user pic"></p>
              <p class="user-name">Mr. ABC <br>
                <span>Sr. Vice President IT</span></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="user-say">
              <div class="blue-box">
                <p>The dedicated effort by your team has helped us fine tune the analytical dashboards so that end-users can see the considerable business value in it.</p>
              </div>
              <p><img src="images/user-pic.png" alt="user pic"></p>
              <p class="user-name">Mr. ABC <br>
                <span>Sr. Vice President IT</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="row">
          <div class="col-md-4">
            <div class="user-say">
              <div class="blue-box">
                <p>The dedicated effort by your team has helped us fine tune the analytical dashboards so that end-users can see the considerable business value in it.</p>
              </div>
              <p><img src="images/user-pic.png" alt="user pic"></p>
              <p class="user-name">Mr. ABC <br>
                <span>Sr. Vice President IT</span></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="user-say">
              <div class="blue-box">
                <p>The dedicated effort by your team has helped us fine tune the analytical dashboards so that end-users can see the considerable business value in it.</p>
              </div>
              <p><img src="images/user-pic.png" alt="user pic"></p>
              <p class="user-name">Mr. ABC <br>
                <span>Sr. Vice President IT</span></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="user-say">
              <div class="blue-box">
                <p>The dedicated effort by your team has helped us fine tune the analytical dashboards so that end-users can see the considerable business value in it.</p>
              </div>
              <p><img src="images/user-pic.png" alt="user pic"></p>
              <p class="user-name">Mr. ABC <br>
                <span>Sr. Vice President IT</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Left and right controls --> 
    <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"><img src="images/slider-arrow.png" alt="slider arrow"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"><img src="images/slider-arrow.png" alt="slider arrow"></span> <span class="sr-only">Next</span> </a>--> </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd get-in-touch">
  <div class="container">
    <div class="clearfix">
      <div class="git-txt col-md-12">
        <h2 class="txt">See What You can do with 
          your data in 14 Days</h2>
        <div class="get-in-touch-form">
          <input type="text"  class="form-control" placeholder="Full Name">
          <input type="tel"  class="form-control" placeholder="Work Phone">
          <input type="email"  class="form-control" placeholder="Work Email">
          <button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-info white-btn">Get In Touch</button>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
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

});
	</script>
</body>
</html>