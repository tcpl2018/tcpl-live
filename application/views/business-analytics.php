<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Business Analytics & Intelligence Solutions, India | Team Computers</title>
<meta name="description" content="Unleash the power of data in your industry. Turn your data into actionable insight through Team's Business Analytics Solutions." />
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
<link href="css/owl.theme.default.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/style-responsive.css" rel="stylesheet">
</head>

<body class="body-content">
<?php include 'include/header.php';?>
<section class="banner-cover">
  <div class="banner analytics-banner">
    <div class="container banner-text-cvr ">
    <div class="banner-text col-md-6 col-sm-6 col-xs-12">
      <h1>Business Analytics <br>
& Intelligence Solutions.</h1>
        <h2>Analytics embedded in <br>
your organization</h2> 
      <a type="button" href="cta-landing" class="btn pmd-btn-outline pmd-ripple-effect btn-primary hidden-xs">Try it now</a>
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
<section class="whts-new cmn-padd">
	<div class="container">
		<h2 class="cmn-hdr">
			<span class="line-text">Happening</span>
		</h2>
		<div id="whats-new" class="owl-carousel owl-theme"> 
		<!-- Wrapper for slides -->
		<?php 
      $getAllWhatsNews = $this->site_mdl->getAllWhatsNew();
      foreach ($getAllWhatsNews as $getAllWhatsNew) {
if(isset($getAllWhatsNew['Wnew_type']) && $getAllWhatsNew['Wnew_type'] == "solution"){?>


		<div class="item bor-bot clearfix">
			<div class="col-md-6 col-sm-6">
				<figure> <img src="<?php echo EVENT_SHOW_PATH.$getAllWhatsNew['Wnew_photo'];?>" alt="Image" class="img-responsive"> </figure>
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
  <?php  } } ?>
	</div>
	</div>
</section>


<div class="clearfix"></div>
<section class="insights cmn-padd">
  <div class="container">
    <div class="insight-inner clearfix">
      <h2 class="sec-hd">From Data, information, actionable insight to culture.</h2>
      <div class="row">
        <div class="col-md-2 col-xs-12 col-sm-4 in-cmn-box">
          <div class="insight-cmn-bx box1">
            <div class="insights-icon clearfix">
              <p><span>Explore<br>
                What's <br>
                Possible</span> </p>
              <p>Craft the future of your 
                business through an 
                analytics strategy grounded in deep domain expertise and years of experience.</p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-xs-12 col-sm-4 in-cmn-box">
          <div class="insight-cmn-bx box2">
            <div class="insights-icon clearfix">
              <p>Unleash<br>
                Data </p>
              <p>Harness the power of data collected by your business and publicly available data to create new dimensions.</p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-xs-12 col-sm-4 in-cmn-box">
          <div class="insight-cmn-bx box3">
            <div class="insights-icon clearfix">
              <p>The Best <br>
                of Technology</p>
              <p>Build the foundation of your business on the best of technology available globally.</p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-xs-12 col-sm-4 in-cmn-box">
          <div class="insight-cmn-bx box4">
            <div class="insights-icon clearfix">
              <p>Data at <br>
                the heart </p>
              <p>Change how the members of your organization think of and interact with data to create a culture of collaboration and data led decision making.</p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-xs-12 col-sm-4 in-cmn-box">
          <div class="insight-cmn-bx box5">
            <div class="insights-icon clearfix">
              <p>Anytime<br>
                Anywhere </p>
              <p>Get insights on the go when you need and across devices. Make faster and better decisions easily.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd featured-partner-section part-tech partners-sec">
	<div class="container">
		<h2 class="cmn-hdr">
        	<span class="line-text">Partners</span>
      	</h2>
		<div class="featured-partner owl-carousel owl-theme">
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
		<br>
		<div class="partner-inner">
			<div class="part-tech-cmn-box">
				<figure> <img src="images/Partners-logo/BA/Tableu---Silver-Partner.png" alt=""> </figure>
			</div>
			<div class="part-tech-cmn-box">
			  <figure> <img src="images/Partners-logo/BA/sas.png" alt=""> </figure>
			</div>
			<div class="part-tech-cmn-box">
				<figure> <img src="images/Partners-logo/BA/Power-BI.png" alt=""> </figure>
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
			<a href="business-analytics-automotive">
          <div class="automative-box sol-cmn-box">
            <div class="sol-cmn-box-inner clearfix"> 
             <div class="sol-img-cvr valigncenter">
             <i>
				<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.94 67.5" class="govern-icon"><title>automotive</title><path class="cls-1" d="M65.7,76.11l0,.07S65.69,76.13,65.7,76.11Z" transform="translate(-16.53 -16.5)"/><path class="fill" d="M23.06,66.15h0a7.22,7.22,0,0,0-2.12,5.36,7.3,7.3,0,0,0,2.17,4.94l.94.94a7.38,7.38,0,0,0,10.27,0l17-17L40,49.17Zm10.06,10a5.68,5.68,0,0,1-7.88,0l-1-1a5.71,5.71,0,0,1-1.64-3.78,5.55,5.55,0,0,1,1.65-4.11L40,51.56l8.86,8.86Z" transform="translate(-16.53 -16.5)"/><path class="fill" d="M76.84,20.76,68.67,25.4v5l-14,13.82,1.19,1.2L69.68,31.79h5.38l4.64-8.17ZM74.08,30.1H70.36V26.39l6.2-3.52,1,1Z" transform="translate(-16.53 -16.5)"/><path class="stroke blue-color-stroke" d="M71.85,82a.58.58,0,0,1-.48,1L68,82.57a12.37,12.37,0,0,1-6.85-3.4A12.55,12.55,0,0,1,57.5,68.86L39.21,50.16l-7.68-7.69a12.48,12.48,0,0,1-10.15-3.59A12.08,12.08,0,0,1,18,32l-.43-3.41a.57.57,0,0,1,1-.48l6.11,6.11,7.4-2,2-7.6-6.11-6.1a.58.58,0,0,1,.48-1l3.41.43a12.41,12.41,0,0,1,6.84,3.4,12.54,12.54,0,0,1,3.62,10.3L68.48,57.89a12.38,12.38,0,0,1,10.14,3.59A12.07,12.07,0,0,1,82,68.36l.43,3.4a.57.57,0,0,1-1,.48l-6.11-6.11-7.66,2.12-2,7.67Z" transform="translate(-16.53 -16.5)"/></svg> 
			 </i></div>
              <p>Automotive</p>
              <button type="button" class="btn pmd-btn-outline btn-default"> Explore <i class="fa fa-angle-right" aria-hidden="true"></i> </button>
            </div>
				</div></a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 main-cmn-box">
			<a href="business-analytics-insurance">
          <div class="automative-box sol-cmn-box">
            <div class="sol-cmn-box-inner clearfix"> 
             <div class="sol-img-cvr valigncenter">
				 <i>
				 	<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 89.51 67.5" class="govern-icon"><title>insurance</title><path class="stroke" d="M72,65.51S89.63,48.7,92.66,53.79a4.44,4.44,0,0,1,.9,1.64,4.94,4.94,0,0,1-1.76,5.88c-4,2.8-10.93,7.89-14.37,11.56-13.08,14-31.51,9.42-31.51,9.42C38.81,82.4,26.31,71.72,16.05,76A4.84,4.84,0,0,1,9.64,73.4L6.76,66.28a5,5,0,0,1,2-6.06c5.3-3.3,15.12-9.17,18.85-9.74C32.79,49.68,42,53.14,50,57.7S65,59.16,70.41,63.79s-12.76,8.74-16.49,8S47,67.91,43.54,68.23" transform="translate(-5.4 -16.5)"/><path class="stroke blue-color-stroke" d="M82,23.74q-6.92-3-13.83-6.16a.72.72,0,0,0-.67,0L53.54,23.75a.47.47,0,0,0-.35.52c0,3.16,0,6.32,0,9.48a20.31,20.31,0,0,0,4,12.06,18.77,18.77,0,0,0,9.83,7,2.22,2.22,0,0,0,1.35,0,18.59,18.59,0,0,0,9.45-6.55,20.37,20.37,0,0,0,4.43-12.77V24.33A.53.53,0,0,0,82,23.74Z" transform="translate(-5.4 -16.5)"/><line class="stroke blue-color-stroke" x1="62.39" y1="1.08" x2="62.39" y2="36.36"/><line class="stroke blue-color-stroke" x1="47.82" y1="17.25" x2="76.93" y2="17.25"/></svg>
				 </i></div>
              <p>Insurance</p>
              <button type="button" class="btn pmd-btn-outline  btn-default"> Explore <i class="fa fa-angle-right" aria-hidden="true"></i> </button>
            </div>
				</div></a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 main-cmn-box">
			<a href="business-analytics-banking">
          <div class="automative-box sol-cmn-box">
			<div class="sol-cmn-box-inner clearfix"> 
             <div class="sol-img-cvr valigncenter">
				 <i>
				 	<svg class="govern-icon" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65.46 67.5"><title>banking</title><path class="stroke" d="M81.7,58.07a1.67,1.67,0,0,1-.51,1.21,46.73,46.73,0,0,1-12,8.13,6.67,6.67,0,0,0-3.42,4l-3.37,11a.88.88,0,0,1-.82.62H57.34a.89.89,0,0,1-.82-.63L55,77.2a2.54,2.54,0,0,0-2.41-1.8H41a2.54,2.54,0,0,0-2.42,1.81l-1.5,5.15a.88.88,0,0,1-.82.63H32.06a.88.88,0,0,1-.82-.62l-.47-1.54A73.26,73.26,0,0,0,21.3,61.5,18.17,18.17,0,0,1,36.49,33.29h25a2.08,2.08,0,0,0,1.28-.45A14,14,0,0,1,69,30.07c.44-.09.91-.16,1.39-.22a1,1,0,0,1,.74.18.66.66,0,0,1,.12.82,14.45,14.45,0,0,0-2,4.61,7.85,7.85,0,0,0,1,5.85,29.73,29.73,0,0,0,5.21,6.3,2.09,2.09,0,0,0,1.39.53h2.65a2.25,2.25,0,0,1,2.25,2.25Z" transform="translate(-17.27 -16.5)"/><path class="stroke blue-color-stroke" d="M52.28,38.12H41.08a2.06,2.06,0,1,0,0,4.11h11.2a2.06,2.06,0,0,0,0-4.11Z" transform="translate(-17.27 -16.5)"/><circle class="cls-1 blue-color-fill" cx="47.98" cy="30.43" r="2.75"/><path class="stroke blue-color-stroke" d="M38.58,29.26s8.44-9,16.11.31" transform="translate(-17.27 -16.5)"/><path class="stroke blue-color-stroke" d="M32.75,24.28s14.54-15.6,27.77.53" transform="translate(-17.27 -16.5)"/></svg>
				 </i></div>
              <p>Banking</p>
              <button type="button" class="btn pmd-btn-outline btn-default"> Explore <i class="fa fa-angle-right" aria-hidden="true"></i> </button>
            </div>
          </div></a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 main-cmn-box">
			<a href="business-analytics-nbfc">
          <div class="automative-box sol-cmn-box">
            <div class="sol-cmn-box-inner clearfix"> 
             <div class="sol-img-cvr valigncenter">
				 <i>
				 	<svg class="govern-icon" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 92.99 66.5"><title>NBFC</title><path class="stroke" d="M72.62,64.87S91,47.43,94.09,52.72c0,0,.43.32,1.12,2.21a4.59,4.59,0,0,1-1.66,5.34C89.5,63.1,82,68.58,78.3,72.5,64.73,87,45.63,82.26,45.63,82.26,38.17,82.38,25,71,14.28,75.87a4.58,4.58,0,0,1-6.13-2.45L4.84,65.23a4.59,4.59,0,0,1,1.81-5.6c5.39-3.37,16-9.74,20-10.35C32,48.45,41.5,52,49.86,56.77S65.36,58.28,71,63.08s-13.23,9.06-17.09,8.26-7.18-4-10.76-3.65" transform="translate(-3.51 -17.5)"/><path class="fill blue-color-fill" d="M52.87,25.76a1.19,1.19,0,1,0,0,2.38H69.29a7.17,7.17,0,0,1-7,5.94H54a1.11,1.11,0,0,0-1.08.74,1.15,1.15,0,0,0,.24,1.29L69.79,52.78a1.18,1.18,0,0,0,1.68,0,1.21,1.21,0,0,0,0-1.68L69,48.58,56.82,36.5h6a9.51,9.51,0,0,0,8.86-8.31h5.94a1.19,1.19,0,0,0,0-2.38H71.72a9.28,9.28,0,0,0-3.17-5.93h9.11a1.19,1.19,0,0,0,0-2.38H52.87a1.19,1.19,0,1,0,0,2.38h9.45a7.12,7.12,0,0,1,7,5.93H52.87Z" transform="translate(-3.51 -17.5)"/><path class="fill blue-color-fill" d="M70.63,52.56a.6.6,0,0,1-.44-.18L53.52,35.7a.57.57,0,0,1-.13-.65.58.58,0,0,1,.56-.4h8.32a7.73,7.73,0,0,0,7.59-6.41l.12-.67H52.87a.64.64,0,0,1-.62-.62.63.63,0,0,1,.42-.58l.2,0H70l-.11-.67a7.74,7.74,0,0,0-7.59-6.42H52.87a.63.63,0,0,1-.62-.61.64.64,0,0,1,.62-.62H77.66a.63.63,0,0,1,.61.62.62.62,0,0,1-.61.61H67l1.18,1a8.75,8.75,0,0,1,3,5.57l.06.51h6.45a.62.62,0,0,1,.61.61.63.63,0,0,1-.61.62H71.21l-.06.5a8.93,8.93,0,0,1-8.33,7.81H55.44l13.1,13,2.53,2.53a.66.66,0,0,1,0,.87A.6.6,0,0,1,70.63,52.56Z" transform="translate(-3.51 -17.5)"/></svg>
                 </i></div>
              <p>NBFC</p>
              <button type="button" class="btn pmd-btn-outline btn-default"> Explore <i class="fa fa-angle-right" aria-hidden="true"></i> </button>
            </div>
				</div></a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 main-cmn-box">
			<a href="business-analytics-manufacturing">
          <div class="automative-box sol-cmn-box">
            <div class="sol-cmn-box-inner clearfix"> 
             <div class="sol-img-cvr valigncenter">
				 <i>
				 	<svg class="govern-icon" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64.41 68"><title>manufacturing</title><path class="stroke blue-color-stroke" d="M36.19,83a.8.8,0,0,1-1,.5l-4.1-1.33a.79.79,0,0,1-.52-1l.93-3a1.14,1.14,0,0,0-.39-1.2L29,75.36a1.15,1.15,0,0,0-1.27,0l-2.59,1.82A.79.79,0,0,1,24,77l-2.54-3.49a.79.79,0,0,1,.17-1.1l2.53-1.91a1.15,1.15,0,0,0,.39-1.2l-.81-2.5a1.14,1.14,0,0,0-1-.74L19.58,66a.79.79,0,0,1-.78-.79V60.9a.8.8,0,0,1,.78-.8l3.17-.05a1.17,1.17,0,0,0,1-.75l.81-2.49a1.17,1.17,0,0,0-.39-1.21l-2.53-1.9a.79.79,0,0,1-.17-1.1L24,49.11a.78.78,0,0,1,1.1-.18l2.59,1.82a1.15,1.15,0,0,0,1.27,0l2.12-1.54A1.16,1.16,0,0,0,31.5,48l-.93-3a.8.8,0,0,1,.52-1l4.1-1.33a.79.79,0,0,1,1,.49l1,3a1.16,1.16,0,0,0,1,.74h2.62a1.15,1.15,0,0,0,1-.74l1-3a.79.79,0,0,1,1-.49L48,44a.79.79,0,0,1,.51,1l-.93,3a1.15,1.15,0,0,0,.4,1.2l2.12,1.54a1.15,1.15,0,0,0,1.26,0L54,48.93a.79.79,0,0,1,1.1.18l2.54,3.49a.78.78,0,0,1-.16,1.1l-2.54,1.9a1.16,1.16,0,0,0-.38,1.21l.81,2.49a1.15,1.15,0,0,0,1,.75l3.17.05a.81.81,0,0,1,.78.8v4.31a.78.78,0,0,1-.78.79l-3.17.06a1.14,1.14,0,0,0-1,.74l-.81,2.5a1.13,1.13,0,0,0,.38,1.2l2.54,1.91a.79.79,0,0,1,.16,1.1L55.07,77a.79.79,0,0,1-1.1.18l-2.59-1.82a1.15,1.15,0,0,0-1.26,0L48,76.91a1.14,1.14,0,0,0-.4,1.2l.93,3a.79.79,0,0,1-.51,1l-4.11,1.33a.78.78,0,0,1-1-.5l-1-3a1.15,1.15,0,0,0-1-.74H38.24a1.17,1.17,0,0,0-1,.74Z" transform="translate(-17.8 -16.5)"/><circle class="stroke" cx="21.76" cy="46.55" r="10.09"/><path class="stroke blue-color-stroke" d="M63.27,49.34a.62.62,0,0,1-.75.44l-3.27-.84a.62.62,0,0,1-.45-.74l.58-2.41a.9.9,0,0,0-.37-.92l-1.73-1.1a.91.91,0,0,0-1,.06l-1.93,1.55a.62.62,0,0,1-.86-.09L51.34,42.7a.63.63,0,0,1,.08-.87l1.88-1.61a.89.89,0,0,0,.24-1l-.75-1.9a.93.93,0,0,0-.84-.54l-2.47.12a.62.62,0,0,1-.65-.58L48.62,33a.62.62,0,0,1,.57-.66l2.47-.2a.91.91,0,0,0,.75-.63l.51-2a.9.9,0,0,0-.36-.92l-2.07-1.36a.62.62,0,0,1-.18-.85l1.8-2.85a.62.62,0,0,1,.85-.19l2.12,1.29a.88.88,0,0,0,1-.07l1.58-1.3a.93.93,0,0,0,.25-1L57,20a.63.63,0,0,1,.35-.8L60.5,18a.62.62,0,0,1,.8.34l1,2.29a.89.89,0,0,0,.84.52l2-.13a.89.89,0,0,0,.76-.62L66.55,18a.62.62,0,0,1,.75-.44l3.27.83a.63.63,0,0,1,.45.75l-.58,2.41a.9.9,0,0,0,.37.92l1.73,1.1a.92.92,0,0,0,1-.06l1.94-1.55a.62.62,0,0,1,.86.09l2.16,2.59a.63.63,0,0,1-.08.87l-1.88,1.61a.89.89,0,0,0-.24,1l.75,1.9a.93.93,0,0,0,.84.54l2.47-.12a.62.62,0,0,1,.65.58l.21,3.36a.62.62,0,0,1-.57.66l-2.47.2a.9.9,0,0,0-.76.63l-.5,2a.89.89,0,0,0,.36.92l2.07,1.36a.62.62,0,0,1,.18.85l-1.8,2.84a.62.62,0,0,1-.85.2l-2.12-1.29a.88.88,0,0,0-1,.07L72.18,44a.91.91,0,0,0-.25,1l.88,2.32a.63.63,0,0,1-.35.8l-3.14,1.24a.62.62,0,0,1-.8-.34l-1-2.29a.91.91,0,0,0-.84-.53l-2,.13a.94.94,0,0,0-.77.63Z" transform="translate(-17.8 -16.5)"/><circle class="stroke" cx="47.11" cy="17.15" r="7.89"/></svg>
				 </i></div>
              <p>Manufacturing</p>
              <button type="button" class="btn pmd-btn-outline btn-default"> Explore <i class="fa fa-angle-right" aria-hidden="true"></i> </button>
            </div>
				</div></a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 main-cmn-box">
			<a href="business-analytics-government">
          <div class="automative-box sol-cmn-box">
            <div class="sol-cmn-box-inner clearfix"> 
             <div class="sol-img-cvr valigncenter">
				 <i>
				    <svg class="govern-icon" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.62 67.5"><title>government</title><path class="stroke blue-color-stroke" d="M50,31.64V18s3.21-.19,4.77,1,3.12,3,7.21,2.92l-.2,6.81s-2.24.49-5.74-1.65-4.48-2.24-5.75-1.85" transform="translate(-18.69 -17)"/><path class="stroke" d="M80.31,83.5V80.31a.8.8,0,0,0-.8-.8H73.93V55.58h5.58a.8.8,0,0,0,.8-.8v-4a.79.79,0,0,0-.37-.67L50.42,31.78a.8.8,0,0,0-.54-.13.81.81,0,0,0-.3.13L20.06,50.1a.79.79,0,0,0-.37.67v4a.8.8,0,0,0,.8.8h5.58V79.51H20.41a.8.8,0,0,0-.72.8V83.5Z" transform="translate(-18.69 -17)"/><circle class="stroke blue-color-stroke" cx="31.31" cy="26.62" r="4.79"/><line class="stroke" x1="7.38" y1="38.58" x2="55.24" y2="38.58"/><line class="stroke blue-color-stroke" x1="18.71" y1="38.77" x2="18.71" y2="62.59"/><line class="stroke blue-color-stroke" x1="43.91" y1="38.77" x2="43.91" y2="62.59"/><line class="stroke" x1="7.38" y1="62.51" x2="55.24" y2="62.51"/></svg>
                 </i>
			 </div>
              <p>Government</p>
              <button type="button" class="btn pmd-btn-outline btn-default"> Explore <i class="fa fa-angle-right" aria-hidden="true"></i> </button>
            </div>
				</div></a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 main-cmn-box">
			<a href="business-analytics-chatbot">
          <div class="automative-box sol-cmn-box">
            <div class="sol-cmn-box-inner clearfix"> 
             <div class="sol-img-cvr valigncenter">
				 <i>
				 	<svg class="govern-icon" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76.93 67.23"><title>chatbot</title><path class="stroke" d="M48.74,59V74.13a.69.69,0,0,1-.69.69H32.54a1,1,0,0,0-.74.33l-6.57,7.24a.7.7,0,0,1-1.2-.32l-1.5-6.48a1,1,0,0,0-1-.78h-8.3a.7.7,0,0,1-.7-.69V51a.71.71,0,0,1,.7-.7H27.28" transform="translate(-11.53 -16.38)"/><path class="stroke" d="M87.47,56a2.69,2.69,0,0,1-2.69,2.69H72.23a1,1,0,0,0-1,.78l-2,8.84a2.69,2.69,0,0,1-4.61,1.21L55,59a1,1,0,0,0-.74-.33H29.94A2.69,2.69,0,0,1,27.25,56V20.07a2.7,2.7,0,0,1,2.69-2.69H84.78a2.7,2.7,0,0,1,2.69,2.69Z" transform="translate(-11.53 -16.38)"/><line class="stroke blue-color-stroke" x1="22.5" y1="13.21" x2="68.17" y2="13.21"/><line class="stroke blue-color-stroke" x1="27.5" y1="21.21" x2="68.17" y2="21.21"/><line class="stroke blue-color-stroke" x1="36.67" y1="31.21" x2="68.17" y2="31.21"/></svg>
				 </i></div>
              <p>Chatbot</p>
              <button type="button" class="btn pmd-btn-outline btn-default"> Explore <i class="fa fa-angle-right" aria-hidden="true"></i> </button>
            </div>
				</div></a>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<?php 
          $getAllCasestudies = $this->site_mdl->getBizAnalyticsMCIndex();
          foreach ($getAllCasestudies as $getAllCasestudy) {
            if(isset($getAllCasestudy) == "Business Analytics" && empty($getAllCasestudy['sub_solution_name'])){
        ?>

<section class="case-studies cmn-padd">
  <div class="container">
    <div class="bookmyshow row clearfix">
      <div class="bms-img col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6"> <img src="<?php echo CASE_STUDY_SHOW_PATH.$getAllCasestudy['case_thumbnail_image']; ?>" alt="book my show image"> </div>
	  <div class="bms-txt col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
        <div class="bms-txt-inner">
          <div class="p-cover">
            <p>CASE STUDY</p>
            <h2><?php echo echoStr(substr($getAllCasestudy['case_name'],0,70));?></h2>
            <p class="txt hidden-xs"><?php echo echoStr(substr($getAllCasestudy['case_overview'],0,215));?>...</p>
            <a type="button" href="case-studies-inner?caseid=<?php echo $getAllCasestudy['case_id']; ?>" class="btn pmd-btn-raised pmd-ripple-effect btn-info">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } }?>

<div class="clearfix"></div>
<section class="rel-solutions cmn-padd">
  <div class="container">
    <div class="solutions-inner clearfix">
      <h2 class="cmn-hdr">
        <span class="line-text">See how we are moving Analytics</span>
      </h2>
      <div class="grid row">

<?php 
        $getAllCasestudies = $this->site_mdl->getAllMediaCaseStudyAnalytics();
        foreach ($getAllCasestudies as $getAllCasestudy) {
        ?>

        <div class="grid-item box col-md-4 col-xs-12">
          <div class="rel-cmn-box">
            <figure> <img src="<?php echo CASE_STUDY_SHOW_PATH.$getAllCasestudy['case_thumbnail_image']; ?>" alt="Image"> 

            <p>CASE STUDY</p>
            <figcaption> <?php echo substr($getAllCasestudy['case_name'],0,50); ?> ...
            	<a href="case-studies-inner?caseid=<?php echo $getAllCasestudy['case_id']; ?>"> <img src="images/arrow-icon.png" alt="arrow icon"></a> </figcaption></figure>
          </div>
        </div>

 <?php }?>
       
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="get-in-touch cta1 cmn-padd">
  <div class="container">
    <div class="clearfix">
      <div class="git-txt col-md-5">
        <h2>See What You can do with 
          your data in 14 Days</h2>
        <a href="cta-landing" class="btn pmd-btn-raised pmd-ripple-effect btn-info white-btn">Get In Touch</a>
      </div>
      <div class="imac-ipad-img col-md-7"> <img src="images/cta-images/jatin-sir.png" alt="BU Contact person">
        <div class="soc-info"> <img src="images/cta-arr.png" alt="CTA arrow">
          <div class="key-con-txt">
            <p>Jatin Sawhney</p>
            <p>Director, Business Analytics</p>
            <ul>
              <!--<li><a href="#"><i class="fa fa-phone"></i></a></li>-->
              <li><a href="mailto:jatin@teamcomputers.com"><i class="fa fa-envelope"></i></a></li>
<li><a href="https://www.linkedin.com/in/jatin13jan/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="rel-solutions rel-sol2 cmn-padd see-next">
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
<script type="text/javascript">
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
</script>	
</body>
</html>