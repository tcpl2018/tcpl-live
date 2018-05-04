<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Enterprise App Development Services, India | Team Computers</title>
<meta name="description" content="Now it’s time to bring your business on mobile. It’s the smart way to operate your business. Our enterprise App Development Services transform the way you do business to increase productivity & reduce cost" />
<meta name="robots" content="index, follow">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!--Google Icon Font-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="fonts/fontello/css/fontello.css" rel="stylesheet">
<!-- Propeller css -->
<link href="css/propeller.min.css" rel="stylesheet">
<!-- Owl carousel css -->
<link href="css/owl.carousel.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/style-responsive.css" rel="stylesheet">
</head>
<body class="body-content">
<?php include 'include/header.php';?>
<section class="banner-cover">
  <div class="banner mapps-main">
    <div class="container banner-text-cvr ">
    <div class="banner-text col-md-6 col-sm-6 col-xs-12">
      <h1>Enterprise <br> App Development Services</h1>
        <h2>Take your business<br> mobile</h2> 
      <a type="button" href="cta-landing" class="btn pmd-btn-outline pmd-ripple-effect btn-primary">Try it now</a>
    </div>
  </div>
  </div>
  <div class="cta-btn">
    <div class="container clearfix">
      <p>Want to know how this works for you?</p>
      <a href="cta-landing" class="btn pmd-btn-raised pmd-ripple-effect btn-default">Consult Now</a>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd whts-new">
	<div class="container">
		<h2 class="cmn-hdr">
			<span class="line-text">What's New</span>
		</h2>
		<div id="whats-new" class="owl-carousel owl-theme"> 
		<!-- Wrapper for slides -->
		<?php 
      $getAllWhatsNews = $this->site_mdl->getAllWhatsNew();
      foreach ($getAllWhatsNews as $getAllWhatsNew) {
    if(isset($getAllWhatsNew['Wnew_type']) && $getAllWhatsNew['Wnew_type'] == "solution"){?>
		<div class="item bor-bot clearfix">
			<div class="col-md-6">
				<figure> <img src="<?php echo EVENT_SHOW_PATH.$getAllWhatsNew['Wnew_photo'];?>" alt="Image" class="img-responsive"> </figure>
			</div>
			<div class="col-md-6">
				<div class="wts-new-txt">
					<p><?php echo $getAllWhatsNew['Wnew_caption'];?></p>
					<p><?php echo echoStr($getAllWhatsNew['Wnew_desc']);?></p>
          <?php 
    if(isset($getAllWhatsNew['Wnew_redirect_url']) && !empty($getAllWhatsNew['Wnew_redirect_url'])){?>
          <a type="button" href="<?php echo echoStr($getAllWhatsNew['Wnew_redirect_url']);?>" class="btn pmd-btn-outline sub-btn btn-default" target="_blank">Read More</a>
<?php }else{ ?>
<button type="button" class="btn pmd-btn-outline sub-btn btn-default" style="display: none;">Read More</button>
<?php } ?>
        </div>
			</div>
		</div>
<?php } }?>

		
	</div>
	</div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd insights">
  <div class="container">
    <div class="insight-inner clearfix">
      <h2 class="sec-hd">Mobile apps for the smart business.</h2>
      <div class="row">
        <div class="col-md-2 col-xs-12 col-sm-4 in-cmn-box">
          <div class="insight-cmn-bx box1">
            <div class="insights-icon clearfix">
              <p><span>Automation</p>
              <p>Business process 
automation cuts down time and money.</p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-xs-12 col-sm-4 in-cmn-box">
          <div class="insight-cmn-bx box2">
            <div class="insights-icon clearfix">
              <p>Mobility</p>
              <p>Facilitates employees to work from any location at any time.</p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-xs-12 col-sm-4 in-cmn-box">
          <div class="insight-cmn-bx box3">
            <div class="insights-icon clearfix">
              <p>Remote<br> access to <br>data </p>
              <p>Access data from the 
central database any time from any location, through your mobile.</p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-xs-12 col-sm-4 in-cmn-box">
          <div class="insight-cmn-bx box4">
            <div class="insights-icon clearfix">
              <p>Scalable, <br> customizable <br> & Flexible </p>
              <p>Application can be 
tailored to address your requirements and 
integrated with your 
existing server/ERP/CRM making it a seamless transition and providing better user experience.</p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-xs-12 col-sm-4 in-cmn-box">
          <div class="insight-cmn-bx box5">
            <div class="insights-icon clearfix">
              <p>Compatibility</p>
              <p>Apps can be developed for android, ios, .php, .net etc as per the requirements of your organization.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd solutions">
  <div class="container">
    <div class="solutions-inner clearfix">
      <h2 class="cmn-hdr">
        <span class="line-text">Solutions</span>
      </h2>
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12 main-cmn-box">
          <a href="mobile-apps-people-management">
			<div class="automative-box sol-cmn-box">
            <div class="sol-cmn-box-inner clearfix"> 
             <div class="sol-img-cvr valigncenter">
             <i>
				 <svg class="govern-icon" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90.83 65.79"><title>people management</title><circle class="stroke" cx="16.25" cy="28.7" r="7.51"/><path class="stroke" d="M35.27,71.1c0-.3,0-.59,0-.89h0C35.3,61.46,29.75,54.3,23,54.3H17.15c-6.79,0-12.34,7.16-12.34,15.91h0c0,.3,0,.59,0,.89Z" transform="translate(-3.81 -17.21)"/><circle class="stroke" cx="79.67" cy="6.01" r="5.01"/><path class="stroke" d="M93.62,40c0-.2,0-.4,0-.59h0c0-5.84-3.7-10.61-8.22-10.61H81.54c-4.53,0-8.23,4.77-8.23,10.61h0c0,.19,0,.39,0,.59Z" transform="translate(-3.81 -17.21)"/><circle class="stroke" cx="79.67" cy="47.99" r="5.01"/><path class="stroke" d="M93.62,82c0-.2,0-.39,0-.59h0c0-5.83-3.7-10.61-8.22-10.61H81.54c-4.53,0-8.23,4.78-8.23,10.61h0c0,.2,0,.39,0,.59Z" transform="translate(-3.81 -17.21)"/><polyline class="stroke blue-color-stroke" points="68.18 11.02 47.85 11.02 47.85 58.31 66.85 58.31"/><line class="stroke blue-color-stroke" x1="28.84" y1="34.44" x2="46.52" y2="34.44"/></svg></i></div>
              <p>People Management</p>
              <button type="button" class="btn pmd-btn-outline btn-default"> Explore <i class="fa fa-angle-right" aria-hidden="true"></i> </button>
            </div>
          </div></a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 main-cmn-box">
			<a href="mobile-apps-business-processes">
          <div class="automative-box sol-cmn-box">
            <div class="sol-cmn-box-inner clearfix"> 
             <div class="sol-img-cvr valigncenter">
				 <i>
				 <svg class="govern-icon" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.64 66.15"><title>business processes</title><path class="stroke blue-color-stroke" d="M57.91,46.27a8.85,8.85,0,1,1-12.22-2.69h0A8.85,8.85,0,0,1,57.91,46.27Zm4.2,14.47,3.27,1a1.09,1.09,0,0,0,1.28-.53l1.49-2.83a1.08,1.08,0,0,0-.33-1.33L65.09,55a1.8,1.8,0,0,1-.69-1.72,14.07,14.07,0,0,0-.25-5.67,1.83,1.83,0,0,1,.54-1.78l2.53-2.33a1.07,1.07,0,0,0,.18-1.37L65.64,39.4A1.08,1.08,0,0,0,64.32,39l-3.14,1.34a1.83,1.83,0,0,1-1.84-.27,13.94,13.94,0,0,0-5-2.59A1.81,1.81,0,0,1,53,36.09l-.75-3.36a1.07,1.07,0,0,0-1.07-.84L48,32a1.09,1.09,0,0,0-1,1l-.43,3.4a1.83,1.83,0,0,1-1.15,1.46,14.55,14.55,0,0,0-2.51,1.3h0a14.46,14.46,0,0,0-2.24,1.74,1.82,1.82,0,0,1-1.81.43l-3.34-1a1.06,1.06,0,0,0-1.27.53l-1.48,2.81A1.07,1.07,0,0,0,33.08,45l2.74,2.09a1.83,1.83,0,0,1,.69,1.73,14,14,0,0,0,.24,5.66,1.82,1.82,0,0,1-.53,1.78l-2.53,2.32A1.08,1.08,0,0,0,33.51,60l1.75,2.73a1.08,1.08,0,0,0,1.32.42l3.18-1.33a1.81,1.81,0,0,1,1.83.27,14.14,14.14,0,0,0,5,2.59A1.81,1.81,0,0,1,47.91,66l.75,3.36a1.08,1.08,0,0,0,1.09.85l3.19-.15a1.08,1.08,0,0,0,1-1l.44-3.41a1.8,1.8,0,0,1,1.14-1.46,14.21,14.21,0,0,0,4.79-3.06,1.8,1.8,0,0,1,1.83-.42Z" transform="translate(-19.35 -17.2)"/><path class="stroke" d="M56.72,20.48A30.89,30.89,0,0,1,60.3,79.81" transform="translate(-19.35 -17.2)"/><polygon class="fill" points="43.14 55.49 44.41 56.1 41.42 62.32 47.85 64.85 47.33 66.15 39.51 63.07 43.14 55.49"/><path class="stroke" d="M44.4,80.14a30.89,30.89,0,0,1-3.15-59.35" transform="translate(-19.35 -17.2)"/><polygon class="fill" points="19.66 10.69 18.4 10.07 21.43 3.87 15.02 1.3 15.54 0 23.34 3.13 19.66 10.69"/></svg></i></div>
              <p>Business Processes</p>
              <button type="button" class="btn pmd-btn-outline  btn-default"> Explore <i class="fa fa-angle-right" aria-hidden="true"></i> </button>
            </div>
          </div></a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 main-cmn-box">
			<a href="mobile-apps-analytics">
          <div class="automative-box sol-cmn-box">
            <div class="sol-cmn-box-inner clearfix"> 
             <div class="sol-img-cvr valigncenter">
				 <i>
				 <svg class="govern-icon" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 91.67 66.67"><title>analytics</title><circle class="stroke blue-color-stroke" cx="6.5" cy="60.17" r="5.5"/><circle class="stroke blue-color-stroke" cx="85.17" cy="6.5" r="5.5"/><circle class="stroke blue-color-stroke" cx="28.17" cy="31.5" r="5.5"/><circle class="stroke blue-color-stroke" cx="61.5" cy="38.17" r="5.5"/><line class="stroke" x1="9.33" y1="55.67" x2="24.67" y2="36"/><line class="stroke" x1="33.67" y1="31.5" x2="56" y2="38.17"/><line class="stroke" x1="65" y1="33.67" x2="82.33" y2="11"/></svg></i></div>
              <p>Analytics</p>
              <button type="button" class="btn pmd-btn-outline btn-default"> Explore <i class="fa fa-angle-right" aria-hidden="true"></i> </button>
            </div>
          </div></a>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd get-in-touch cta1">
  <div class="container">
    <div class="clearfix">
      <div class="git-txt col-md-5">
        <h2>See our mobility services.</h2>
        <a href="enterprise-mobility-services" class="btn pmd-btn-raised pmd-ripple-effect btn-info white-btn">Here</a>
      </div>
      <div class="imac-ipad-img col-md-7 mob-pics"> <img src="images/mobile-apps-cta-img.png" alt="Mobile apps cta  image">
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!--<section class="cmn-padd case-studies">
  <div class="container">
    <div class="bookmyshow row clearfix">
      <div class="bms-img col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6"> <img src="images/bookmyshow.jpg" alt="book my show image"> </div>
	  <div class="bms-txt col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
        <div class="bms-txt-inner">
          <div class="p-cover">
            <p>CASE STUDY</p>
            <h2>Book my show</h2>
            <p class="txt hidden-xs">With more than 1500 cinemas in 250+ cities and towns throughout India, Mumbai based BookMyShow is India’s biggest online movie and events ticketing brand. It has
              offices in Mumbai, New Delhi, Bangalore, Hyderabad, Chennai, Kolkata and few other cities.</p>
            <button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-info">Read More</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>-->
<div class="clearfix"></div>
<!--<section class="cmn-padd rel-solutions mas-sec">
  <div class="container">
    <div class="solutions-inner clearfix">
      <h2 class="cmn-hdr">
        <span class="line-text">See how we are moving analytics</span>
      </h2>
      <div class="grid">
        <div class="grid-item box">
          <div class="rel-cmn-box">
            <figure> <img src="images/google-cloud-summit.jpg" alt="google cloud summit"> 
            <p>Event</p>
            <figcaption> Google Cloud <br>
              Summit 2017 <img src="images/arrow-icon.png" alt="arrow icon"> </figcaption></figure>
          </div>
        </div>
        <div class="grid-item grid-item--width2 box">
          <div class="rel-cmn-box">
            <figure> <img src="images/event2.jpg" alt="event 2"> 
            <p>Event</p>
            <figcaption> An Evening of <br>
              Discoveries! <img src="images/arrow-icon.png" alt="arrow icon"> </figcaption></figure>
          </div>
        </div>
        <div class="grid-item box grid-item--width3">
          <div class="rel-cmn-box">
            <figure> <img src="images/google-cloud-webinar.jpg" alt="google cloud webinar"> 
            <p>Event</p>
            <figcaption> Google Cloud <br>
              Webinar <img src="images/arrow-icon.png" alt="arrow icon"> </figcaption></figure>
          </div>
        </div>
        <div class="grid-item box grid-item--width2">
          <div class="rel-cmn-box">
            <figure> <img src="images/event5.jpg" alt="event 5"> 
            <p>Event</p>
            <figcaption> Alteryx <br>
              User Group Meet <img src="images/arrow-icon.png" alt="arrow icon"> </figcaption></figure>
          </div>
        </div>
        <div class="grid-item box">
          <div class="rel-cmn-box">
            <figure> <img src="images/event4.jpg" alt="event 4"> 
            <p>Event</p>
            <figcaption> How Iphone Can<br>
              Transform your<br>
              Business. <img src="images/arrow-icon.png" alt="arrow icon"> </figcaption></figure>
          </div>
        </div>
        <div class="grid-item grid-item--width3 box">
          <div class="rel-cmn-box">
            <figure> <img src="images/event6.jpg" alt="event 6"> 
            <p>Event</p>
            <figcaption> Solution <br>
              For Success <img src="images/arrow-icon.png" alt="arrow icon"> </figcaption></figure>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>-->
<div class="clearfix"></div>
<section class="cmn-padd rel-solutions part-tech clearfix">
	<div class="container">
		<div class="solutions-inner clearfix">
			<h2 class="cmn-hdr">
				<span class="line-text">Platforms</span>
			</h2>
			<div id="partner-carousel" class="owl-carousel owl-theme">
				<div class="item part-tech-cmn-box valigncenter">
					<figure> <img src="images/android-logo.png" alt="Android Logo"> </figure>
				</div>
				<div class="item part-tech-cmn-box valigncenter">
					<figure> <img src="images/ios-logo.jpg" alt="IOS Logo"> </figure>
				</div>
				<div class="item part-tech-cmn-box valigncenter">
					<figure> <img src="images/windows-logo.png" alt="Windows Logo"> </figure>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd get-in-touch cta1">
  <div class="container">
    <div class="clearfix">
      <div class="git-txt col-md-5">
        <h2>Business on mobile is business more efficient!</h2>
        <a href="cta-landing" class="btn pmd-btn-raised pmd-ripple-effect btn-info white-btn">Get In Touch</a>
      </div>
      <div class="imac-ipad-img col-md-7"> <img src="images/cta-images/3L0A2988.png" alt="BU Contact person">
        <div class="soc-info"> <img src="images/cta-arr.png" alt="CTA arrow">
          <div class="key-con-txt">
            <p>KP Tiwari</p>
            <p>Business Head,<br> Mobile Apps</p>
            <ul>
              <!--<li><a href="#"><i class="fa fa-phone"></i></a></li>-->
              <li><a href="mailto:kp.tiwari@teamcomputers.com"><i class="fa fa-envelope"></i></a></li>
<li><a href="https://www.linkedin.com/in/kptiwari" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd rel-solutions rel-sol2 see-next">
  <div class="container">
    <div class="solutions-inner clearfix">
      <h2 class="cmn-hdr">
        
        <span class="line-text">See next</span>
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
</section>
<div class="clearfix"></div>
<?php include 'include/footer.php';?>
<!-- jQuery before Propeller.js --> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/propeller.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.1/bootstrap-slider.min.js"></script> 
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script> 
<!-- Owl carousel css -->
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script>
	$(window).load(function(){
    $('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: 5
    });
});
</script>	
</body>
</html>
