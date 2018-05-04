<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Enterprise Business Software & Application, India | Team Computers</title>
<meta name="description" content="One software for all enterprise functions. Streamline all proccess like supply chain, sales, manufacturing, distribution, customer service and many more with Team Computers Business Software." />
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
  <div class="banner bapps-main">
    <div class="container banner-text-cvr ">
    <div class="banner-text col-md-6 col-sm-6 col-xs-12">
      <h1>Business Apps Services <br>
& Solutions</h1>
        <h2>Building your <br>
digital nervous system</h2> 
      <a href="cta-landing" type="button" class="btn pmd-btn-outline pmd-ripple-effect btn-primary">Try it now</a>
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
			<span class="line-text">Products</span>
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
<section class="cmn-padd insights">
  <div class="container">
    <div class="insight-inner clearfix">
      <h2 class="sec-hd">Solutions for Enterprise 
Application & Business Software</h2>
      <div class="row">
        <div class="col-md-2 col-xs-12 col-sm-4 in-cmn-box">
          <div class="insight-cmn-bx box1">
            <div class="insights-icon clearfix">
              <p><span>Full<br>
                Lifecycle<br>
                Management</span> </p>
              <p>Analyse, Design, Implement, Test and Integrate your systems whether it’s ERP, CRM, HRMS, DMS or specialised SAAS products.</p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-xs-12 col-sm-4 in-cmn-box">
          <div class="insight-cmn-bx box2">
            <div class="insights-icon clearfix">
              <p>Customize</p>
              <p>Build applications according to business needs, processes or your current Application infrastructure.</p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-xs-12 col-sm-4 in-cmn-box">
          <div class="insight-cmn-bx box3">
            <div class="insights-icon clearfix">
              <p>Business <br> Process <br> Automation </p>
              <p>Use your resources efficiently by saving time, energy and money.</p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-xs-12 col-sm-4 in-cmn-box">
          <div class="insight-cmn-bx box4">
            <div class="insights-icon clearfix">
              <p>Compatibility </p>
              <p>Migrate your data with full compatibility, through software upgrades.</p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-xs-12 col-sm-4 in-cmn-box">
          <div class="insight-cmn-bx box5">
            <div class="insights-icon clearfix">
              <p>Support <br> Services </p>
              <p>Make use of our maintenance and support services provided both remotely and on premises.</p>
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
			<a href="business-apps-oil-and-gas">
          <div class="automative-box sol-cmn-box">
            <div class="sol-cmn-box-inner clearfix"> 
             <div class="sol-img-cvr valigncenter">
             <i>
				 	<svg class="govern-icon" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61.39 66.66"><title>oil and gas</title><path class="stroke blue-color-stroke" d="M37.93,57c-1.77,1.87-5.37,6.58-5.37,9a5.32,5.32,0,1,0,10.61,0C43.17,63.32,39.62,58.75,37.93,57Z" transform="translate(-19.3 -16.84)"/><path class="stroke" d="M7.64,1.09H29.69a6.64,6.64,0,0,1,6.64,6.64V65.66a0,0,0,0,1,0,0H1a0,0,0,0,1,0,0V7.73A6.64,6.64,0,0,1,7.64,1.09Z"/><path class="stroke" d="M55.72,53.41s6.16,0,8.14,0c2.19,0,3.75,2.41,3.81,5.48.08,4.63,0,10.47.17,14.74.13,2.93,2.12,6,5.82,6.07,2.84.06,5.73-3.34,5.73-6.28,0-3.35.31-37.22.31-40s-9.51-12.73-12.37-16" transform="translate(-19.3 -16.84)"/><rect class="stroke blue-color-stroke" x="7.55" y="8.63" width="21.93" height="13.71" rx="1.19" ry="1.19"/><circle class="stroke" cx="55" cy="16.46" r="4.86"/></svg>
				 </i></div>
              <p>Oil & Gas</p>
              <button type="button" class="btn pmd-btn-outline btn-default"> Explore <i class="fa fa-angle-right" aria-hidden="true"></i> </button>
            </div>
          </div></a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 main-cmn-box">
			<a href="business-apps-construction">
          <div class="automative-box sol-cmn-box">
            <div class="sol-cmn-box-inner clearfix"> 
             <div class="sol-img-cvr valigncenter">
				 <i>
				 	<svg class="govern-icon" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.9 68"><title>construction</title><path class="stroke blue-color-stroke" d="M34.16,17.53H51a1.93,1.93,0,0,1,1.93,1.93V31.84A1.93,1.93,0,0,1,51,33.77H36.1a1.93,1.93,0,0,1-1.93-1.93V17.53A0,0,0,0,1,34.16,17.53Z"/><line class="stroke" x1="39.94" y1="33.72" x2="39.94" y2="57.22"/><line class="stroke" x1="46.97" y1="33.72" x2="46.97" y2="57.22"/><rect class="stroke" x="15.06" y="57.05" width="40.83" height="9.95"/><path class="stroke blue-color-stroke" d="M55.72,34.06,25,17.65a1.29,1.29,0,0,0-1.66.4l-.56.79a1.29,1.29,0,0,0,.34,1.81l32.6,21.82Z" transform="translate(-21.55 -16.5)"/><path class="stroke" d="M27.87,24l.34,24.24s3.44.75,3.94,2.58a3.62,3.62,0,0,1-2,4.63c-2.17.92-3.94-.57-4.86-1.83" transform="translate(-21.55 -16.5)"/><line class="stroke" x1="3.46" y1="28.98" x2="9.8" y2="28.98"/></svg>
				 </i></div>
              <p>Construction</p>
              <button type="button" class="btn pmd-btn-outline  btn-default"> Explore <i class="fa fa-angle-right" aria-hidden="true"></i> </button>
            </div>
          </div></a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 main-cmn-box">
			<a href="business-apps-manufacturing">
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
          <a href="business-apps-pharma">
			<div class="automative-box sol-cmn-box">
            <div class="sol-cmn-box-inner clearfix"> 
             <div class="sol-img-cvr valigncenter">
				 <i>
				 	<svg class="govern-icon" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.95 67.5"><title>pharma</title><rect class="stroke" x="1" y="21.43" width="37.95" height="45.07" rx="3.43" ry="3.43"/><rect class="stroke" x="7.67" y="12.68" width="24.6" height="8.76"/><path class="stroke" d="M8.83,1h22.3a5.08,5.08,0,0,1,5.08,5.08v6.39a0,0,0,0,1,0,0H3.74a0,0,0,0,1,0,0V6.08A5.08,5.08,0,0,1,8.83,1Z"/><line class="stroke blue-color-stroke" x1="19.97" y1="36.06" x2="19.97" y2="51.87"/><line class="stroke blue-color-stroke" x1="12.07" y1="43.97" x2="27.88" y2="43.97"/></svg>
				 </i></div>
              <p>Pharma</p>
              <button type="button" class="btn pmd-btn-outline btn-default"> Explore <i class="fa fa-angle-right" aria-hidden="true"></i> </button>
            </div>
          </div></a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 main-cmn-box">
			<a href="business-apps-chemicals">
          <div class="automative-box sol-cmn-box">
            <div class="sol-cmn-box-inner clearfix"> 
             <div class="sol-img-cvr valigncenter">
				 <i>
				 	<svg class="govern-icon" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96.8 66.4"><title>chemicals</title><path class="stroke" d="M23.68,83c6.71,0,13.81-.16,18.06-.49,1.93-.14,8.37-1.11,4.75-6.14s-13.31-20.28-14-29c-.34-4.46.28-20.38,0-20.1H17.7c-.28-.28.33,15.64,0,20.1-.65,8.75-10.33,24-14,29s2.81,6,4.75,6.14c4.25.33,11.34.47,18,.49Z" transform="translate(-1.65 -17.6)"/><line class="stroke" x1="10.62" y1="9.63" x2="36.3" y2="9.63"/><line class="stroke blue-color-stroke" x1="7.27" y1="51.7" x2="39.65" y2="51.7"/><line class="stroke" x1="64.72" y1="1" x2="88.17" y2="1"/><line class="stroke blue-color-stroke" x1="74.21" y1="55.72" x2="77.56" y2="55.72"/><line class="cls-2" x1="65.84" y1="55.72" x2="69.19" y2="55.72"/><line class="stroke blue-color-stroke" x1="82.59" y1="55.72" x2="85.94" y2="55.72"/><line class="stroke blue-color-stroke" x1="17.82" y1="59.07" x2="21.17" y2="59.07"/><line class="stroke blue-color-stroke" x1="9.44" y1="59.07" x2="12.79" y2="59.07"/><line class="stroke blue-color-stroke" x1="26.19" y1="59.07" x2="29.54" y2="59.07"/><line class="stroke blue-color-stroke" x1="34.01" y1="59.07" x2="37.36" y2="59.07"/><path class="stroke" d="M78.1,83c6.33,0,19.36-6.33,19.36-20.47S83.31,42.05,83.31,42.05V18.6H72.14V42.05S58,48.38,58,62.53,71,83,77.35,83Z" transform="translate(-1.65 -17.6)"/><line class="stroke blue-color-stroke" x1="57.28" y1="49.95" x2="94.5" y2="49.95"/></svg>
				 </i></div>
              <p>Chemicals</p>
              <button type="button" class="btn pmd-btn-outline btn-default"> Explore <i class="fa fa-angle-right" aria-hidden="true"></i> </button>
            </div>
          </div></a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 main-cmn-box">
			<a href="business-apps-legal">
          <div class="automative-box sol-cmn-box">
            <div class="sol-cmn-box-inner clearfix"> 
             <div class="sol-img-cvr valigncenter">
				 <i>
				 	<svg class="govern-icon" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77.92 65.71"><title>legal</title><path class="stroke blue-color-stroke" d="M25.22,25.46a1.64,1.64,0,0,0-2.9.06C19.26,31.6,12.17,46.1,12,50.48c-.1,3.33,2.34,10.66,11.34,11.33S36.21,55.14,36,49.48C35.91,44.93,28.49,31.26,25.22,25.46Z" transform="translate(-11.04 -17.14)"/><path class="stroke" d="M50,22.39s-10.24,9.25-26.5,2.25" transform="translate(-11.04 -17.14)"/><path class="stroke blue-color-stroke" d="M74.78,25.46a1.64,1.64,0,0,1,2.9.06C80.74,31.6,87.83,46.1,88,50.48c.1,3.33-2.34,10.66-11.34,11.33S63.79,55.14,64,49.48C64.09,44.93,71.51,31.26,74.78,25.46Z" transform="translate(-11.04 -17.14)"/><path class="stroke" d="M50,22.39s10.07,9.25,26,2.25" transform="translate(-11.04 -17.14)"/><line class="stroke" x1="38.92" y1="1" x2="38.92" y2="55"/><rect class="stroke" x="22" y="55.25" width="33.85" height="9.46"/><line class="stroke blue-color-stroke" x1="1" y1="33.33" x2="24.67" y2="33.33"/><line class="stroke blue-color-stroke" x1="53.25" y1="33.33" x2="76.92" y2="33.33"/></svg>
				 </i></div>
              <p>Legal</p>
              <button type="button" class="btn pmd-btn-outline btn-default"> Explore <i class="fa fa-angle-right" aria-hidden="true"></i> </button>
            </div>
          </div></a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 main-cmn-box">
			<a href="business-apps-fmcg">
          <div class="automative-box sol-cmn-box">
            <div class="sol-cmn-box-inner clearfix"> 
             <div class="sol-img-cvr valigncenter">
				 <i>
				 	<svg class="govern-icon" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65.95 68"><title>FMCG</title><polyline class="stroke" points="19.58 21.36 19.58 1 45.3 1 45.3 21.36"/><polyline class="stroke" points="38.9 21.36 38.9 9.47 58.23 9.47 58.23 21.36"/><polyline class="stroke blue-color-stroke" points="1 9.62 11.96 9.62 11.96 50.13"/><path class="stroke blue-color-stroke" d="M28.17,38h53l-10,28.5H28s-9.63-.48-9.44,5.55,9.62,5,9.62,5H65.08" transform="translate(-16.21 -16.5)"/><circle class="stroke" cx="22.33" cy="62.47" r="4.53"/><circle class="stroke" cx="44.78" cy="62.47" r="4.53"/></svg>
				 </i></div>
              <p>FMCG</p>
              <button type="button" class="btn pmd-btn-outline btn-default"> Explore <i class="fa fa-angle-right" aria-hidden="true"></i> </button>
            </div>
          </div></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <div class="clearfix"></div>
<section class="cmn-padd case-studies">
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
</section> -->
<div class="clearfix"></div>
<section class="rel-solutions part-tech clearfix cmn-padd">
	<div class="container">
		<div class="solutions-inner clearfix">
			<h2 class="cmn-hdr">
				<span class="line-text">Partners</span>
			</h2>
			<div id="partner-carousel" class="owl-carousel owl-theme">
				<div class="item part-tech-cmn-box">
					<figure> <img src="images/Partners-logo/BAPPS/Microsoft-Gold.png" alt="microsoft gold"> </figure>
				</div>
			</div>
		</div>
	</div>
</section>
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
<section class="cmn-padd get-in-touch cta1">
  <div class="container">
    <div class="clearfix">
      <div class="git-txt col-md-5">
        <h2>Make your business digital, from the core.</h2>
        <a href="cta-landing" class="btn pmd-btn-raised pmd-ripple-effect btn-info white-btn">See How</a>
      </div>
      <div class="imac-ipad-img col-md-7"> <img src="images/cta-images/UT9A6967.png" alt="cta contact image">
        <div class="soc-info"> <img src="images/cta-arr.png" alt="CTA arrow">
          <div class="key-con-txt">
            <p>Pranab Paul</p>
            <p>Director, Business Apps</p>
            <ul>
              <!--<li><a href="#"><i class="fa fa-phone"></i></a></li>-->
              <li><a href="mailto:pranab@kockpit.in"><i class="fa fa-envelope"></i></a></li>
              <li><a href="https://www.linkedin.com/in/pranab-paul-2b868618/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd rel-solutions rel-sol2 see-next see-next">
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
