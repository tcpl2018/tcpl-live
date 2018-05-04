<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Managed Services, IT Infrastructure Management, India | Team Computers</title>
<meta name="description" content="Team Computers helps your business achieve Zero IT incidence. We re-imagine your managed services to achieve minimum disruption with maximum business output." />
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
  <div class="banner ms-main">
    <div class="container banner-text-cvr ">
    <div class="banner-text col-md-6 col-sm-6 col-xs-12">
      <h1>Managed Services, <br>
IT Infrastructure Management</h1>
        <h2>Always up and running</h2> 
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
  <?php  } } ?>

		
	</div>
	</div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd insights">
  <div class="container">
    <div class="insight-inner clearfix">
      <h2 class="sec-hd">Minimum disruption. Maximum business. </h2>
      <div class="row">
        <div class="col-md-2 col-xs-12 col-sm-4 in-cmn-box">
          <div class="insight-cmn-bx box1">
            <div class="insights-icon clearfix">
              <p><span>Fast and <br> easy roll <br> outs </span> </p>
              <p>Maximize business 
continuity, minimize loss. Get IT management services with unmatched scale across India, 24X7 remote support, the latest in technology & robust security.</p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-xs-12 col-sm-4 in-cmn-box">
          <div class="insight-cmn-bx box2">
            <div class="insights-icon clearfix">
              <p>Peace <br> of mind</p>
              <p>Outsource your IT management worries with our assured incident reduction, Low TAT, transparency in operations & audit adherence. Your satisfaction guaranteed.</p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-xs-12 col-sm-4 in-cmn-box">
          <div class="insight-cmn-bx box3">
            <div class="insights-icon clearfix">
              <p>Focus on <br> innovation Process</p>
              <p>Relieve your IT team from mundane and repetitive tasks. Continuously automate processes so that your IT team can focus on the tasks that matter. </p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-xs-12 col-sm-4 in-cmn-box">
          <div class="insight-cmn-bx box4">
            <div class="insights-icon clearfix">
              <p>Reduce <br> cost </p>
              <p>Predict your costs before you incur them so that you don’t spend extra. IT managed services optimized.</p>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-xs-12 col-sm-4 in-cmn-box">
          <div class="insight-cmn-bx box5">
            <div class="insights-icon clearfix">
              <p>Be <br> environment <br> friendly </p>
              <p>Cut down the use of paper. Make your company greener and more sustainable with our Managed Printing solutions.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd rel-solutions clearfix">
	<div class="container">
		<div class="solutions-inner clearfix">
			<h2 class="cmn-hdr">
				<span class="line-text">Partners</span>
			</h2>
			<div id="partner-carousel" class="owl-carousel owl-theme">
				<div class="item part-tech-cmn-box valigncenter">
					<figure> <img src="images/xerox-logo.png" alt="Xerox Logo"> </figure>
				</div>
				<div class="item part-tech-cmn-box valigncenter">
					<figure> <img src="images/samsung-logo.png" alt="Samsung Logo"> </figure>
				</div>
				<div class="item part-tech-cmn-box valigncenter">
					<figure> <img src="images/konica-minolta-logo.png" alt="Konica Minolta Logo"> </figure>
				</div>
				<div class="item part-tech-cmn-box valigncenter">
					<figure> <img src="images/kyocera-logo.png" alt="Kyocera Logo"> </figure>
				</div>
			</div>
		</div>
	</div>
</section>
<hr>
<div class="clearfix"></div>
<section class="cmn-padd solutions">
  <div class="container">
    <div class="solutions-inner clearfix">
      <h2 class="cmn-hdr">
        <span class="line-text">Solutions</span>
      </h2>
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12 main-cmn-box">
			<a href="managed-services-eums">
          <div class="automative-box sol-cmn-box">
            <div class="sol-cmn-box-inner clearfix"> 
             <div class="sol-img-cvr valigncenter">
             <i>
				 <svg class="govern-icon" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77.92 65.08"><title>End user managed Services</title><path class="stroke" d="M68.87,66.47S84.16,51.93,86.78,56.33a4.8,4.8,0,0,1,.94,1.85,3.81,3.81,0,0,1-1.38,4.45C83,65,76.67,69.57,73.61,72.84,62.29,84.94,46.35,81,46.35,81c-6.22.1-17.22-9.36-26.15-5.34a3.82,3.82,0,0,1-5.12-2.05l-2.76-6.83a3.83,3.83,0,0,1,1.51-4.67c4.5-2.81,13.34-8.12,16.65-8.63,4.51-.7,12.43,2.3,19.4,6.25S62.81,61,67.53,65s-11,7.56-14.26,6.9-6-3.33-9-3" transform="translate(-11.04 -17.52)"/><path class="stroke blue-color-stroke" d="M59.05,54a.68.68,0,0,1-.83.48l-3.64-.93a.68.68,0,0,1-.5-.83L54.72,50a1,1,0,0,0-.41-1l-1.93-1.23a1,1,0,0,0-1.1.07l-2.15,1.72a.69.69,0,0,1-1-.09l-2.4-2.89a.69.69,0,0,1,.08-1L48,43.83a1,1,0,0,0,.27-1.07l-.85-2.12a1,1,0,0,0-.92-.6l-2.76.13a.69.69,0,0,1-.72-.64l-.24-3.75a.69.69,0,0,1,.64-.73l2.75-.22a1,1,0,0,0,.84-.71l.57-2.21a1,1,0,0,0-.41-1l-2.3-1.52a.69.69,0,0,1-.21-.95l2-3.17a.69.69,0,0,1,.94-.21l2.35,1.43A1,1,0,0,0,51,26.4l1.76-1.46a1,1,0,0,0,.28-1.06l-1-2.58a.7.7,0,0,1,.39-.89L56,19a.69.69,0,0,1,.89.38L57.91,22a1,1,0,0,0,.94.59l2.27-.15a1,1,0,0,0,.86-.7L62.7,19a.7.7,0,0,1,.84-.49l3.64.93a.69.69,0,0,1,.5.83L67,23a1,1,0,0,0,.41,1l1.92,1.22a1,1,0,0,0,1.1-.06l2.16-1.73a.69.69,0,0,1,1,.1L76,26.43a.69.69,0,0,1-.09,1l-2.09,1.79a1,1,0,0,0-.27,1.07l.84,2.12a1,1,0,0,0,.93.59l2.75-.13a.71.71,0,0,1,.73.65L79,37.24a.68.68,0,0,1-.63.73l-2.75.22a1,1,0,0,0-.85.71l-.56,2.21a1,1,0,0,0,.4,1l2.31,1.52a.69.69,0,0,1,.2.94l-2,3.17a.69.69,0,0,1-.95.22l-2.35-1.44a1,1,0,0,0-1.1.08L69,48.07a1,1,0,0,0-.28,1.07l1,2.58a.69.69,0,0,1-.39.89L65.79,54a.68.68,0,0,1-.89-.38l-1.06-2.54a1,1,0,0,0-.93-.59l-2.28.15a1,1,0,0,0-.85.69Z" transform="translate(-11.04 -17.52)"/><circle class="stroke blue-color-stroke" cx="49.84" cy="18.99" r="8.78"/></svg></i></div>
              <p>End User Managed Services</p>
              <button type="button" class="btn pmd-btn-outline btn-default"> Explore <i class="fa fa-angle-right" aria-hidden="true"></i></button>
            </div>
          </div></a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 main-cmn-box">
			<a href="managed-services-dcnm">
          <div class="automative-box sol-cmn-box">
            <div class="sol-cmn-box-inner clearfix"> 
             <div class="sol-img-cvr valigncenter">
				 <i>
				 <svg class="govern-icon" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 57.54 63.16"><title>Data Center and Network Management</title><path class="stroke blue-color-stroke" d="M40.64,79.67a.51.51,0,0,1-.35.62l-2.7.77a.53.53,0,0,1-.64-.35l-.59-2a.76.76,0,0,0-.65-.51L34,78.16a.76.76,0,0,0-.69.46l-.74,1.92a.53.53,0,0,1-.66.3l-2.63-1a.52.52,0,0,1-.31-.66l.68-1.94a.74.74,0,0,0-.23-.79l-1.33-1a.74.74,0,0,0-.83,0l-1.73,1.12a.53.53,0,0,1-.71-.15L23.28,74a.51.51,0,0,1,.13-.71l1.69-1.17a.76.76,0,0,0,.28-.78l-.46-1.64a.76.76,0,0,0-.64-.51l-2.06-.11a.53.53,0,0,1-.49-.54l.11-2.8a.51.51,0,0,1,.53-.49l2.06,0a.74.74,0,0,0,.68-.46l.59-1.6a.76.76,0,0,0-.22-.79l-1.6-1.3a.52.52,0,0,1-.08-.72l1.73-2.2a.51.51,0,0,1,.72-.09l1.64,1.25a.74.74,0,0,0,.82,0l1.42-.94a.77.77,0,0,0,.29-.77l-.53-2a.51.51,0,0,1,.36-.62l2.7-.77a.52.52,0,0,1,.63.35l.59,2a.76.76,0,0,0,.65.51l1.7.07a.75.75,0,0,0,.69-.46L38,54.85a.53.53,0,0,1,.66-.3l2.63,1a.5.5,0,0,1,.31.65l-.68,1.95a.76.76,0,0,0,.23.79L42.44,60a.72.72,0,0,0,.82,0L45,58.88a.53.53,0,0,1,.71.15l1.56,2.33a.51.51,0,0,1-.14.71l-1.69,1.17a.76.76,0,0,0-.28.78l.46,1.64a.77.77,0,0,0,.65.51l2.05.11a.53.53,0,0,1,.49.54l-.11,2.8a.51.51,0,0,1-.53.49l-2.06,0a.74.74,0,0,0-.68.46l-.59,1.6a.76.76,0,0,0,.22.79l1.6,1.3a.51.51,0,0,1,.08.72L45,77.14a.51.51,0,0,1-.72.09L42.64,76a.74.74,0,0,0-.82,0l-1.42.94a.77.77,0,0,0-.29.77Z" transform="translate(-20.73 -18.92)"/><circle class="stroke" cx="35.27" cy="67.69" r="6.56" transform="translate(-36.64 -7.87) rotate(-14.58)"/><circle class="stroke" cx="47.72" cy="49.48" r="1.54"/><path class="fill" d="M76.27,20.92V57.45H60.75V20.92H76.27m.57-2H60.17a1.43,1.43,0,0,0-1.42,1.43V58a1.43,1.43,0,0,0,1.42,1.43H76.84A1.43,1.43,0,0,0,78.27,58V20.35a1.43,1.43,0,0,0-1.43-1.43Z" transform="translate(-20.73 -18.92)"/><line class="stroke" x1="39.07" y1="10.81" x2="56.04" y2="10.81"/><line class="stroke" x1="39.07" y1="20.44" x2="56.04" y2="20.44"/><line class="stroke" x1="39.07" y1="30.06" x2="56.04" y2="30.06"/><line class="stroke" x1="45.41" y1="5.07" x2="50.14" y2="5.07"/><line class="stroke" x1="45.41" y1="15.37" x2="50.14" y2="15.37"/><line class="stroke" x1="45.41" y1="25.17" x2="50.14" y2="25.17"/><line class="stroke" x1="45.41" y1="35.3" x2="50.14" y2="35.3"/><line class="stroke" x1="47.78" y1="40.54" x2="47.78" y2="47.69"/><line class="stroke" x1="28.63" y1="49.48" x2="46.17" y2="49.48"/></svg></i></div>
              <p>Data Center and Network Management</p>
              <button type="button" class="btn pmd-btn-outline  btn-default"> Explore <i class="fa fa-angle-right" aria-hidden="true"></i></button>
            </div>
          </div></a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 main-cmn-box">
			<a href="managed-services-mps">
          <div class="automative-box sol-cmn-box">
            <div class="sol-cmn-box-inner clearfix"> 
             <div class="sol-img-cvr valigncenter">
				 <i>
				 <svg class="govern-icon" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65.93 63.97"><title>Managed Print Services</title><polyline class="stroke" points="14.28 47.41 1 47.41 1 13.28 64.93 13.28 64.93 47.41 51.65 47.41"/><path class="fill blue-color-fill" d="M66.69,56.93V80H33.31V56.93H66.69m2-2H31.31V82H68.69V54.93Z" transform="translate(-17.04 -18.01)"/><line class="fill" x1="8.57" y1="37.91" x2="57.36" y2="37.91"/><path class="fill blue-color-fill" d="M66.69,20V30.3H33.31V20H66.69m2-2H31.31V32.3H68.69V18Z" transform="translate(-17.04 -18.01)"/><line class="fill" x1="47.55" y1="23.64" x2="57.36" y2="23.64"/></svg></i></div>
              <p>Managed Print Services</p>
              <button type="button" class="btn pmd-btn-outline btn-default"> Explore <i class="fa fa-angle-right" aria-hidden="true"></i></button>
            </div>
          </div></a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 main-cmn-box">
			<a href="managed-services-mbbf">
          <div class="automative-box sol-cmn-box">
            <div class="sol-cmn-box-inner clearfix"> 
             <div class="sol-img-cvr valigncenter">
				 <i>
				 <svg class="govern-icon" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50.57 64.11"><title>Multi Brand Hardware Break Fix</title><path class="stroke blue-color-stroke" d="M40.2,81.16a6.76,6.76,0,0,1-6.76-6.76v-29a14.39,14.39,0,0,1-7.73-12.8A14.56,14.56,0,0,1,35.08,19.1a.67.67,0,0,1,.91.62V31.66a4.22,4.22,0,0,0,8.43,0V19.72a.68.68,0,0,1,.29-.55.66.66,0,0,1,.61-.07,14.55,14.55,0,0,1,9.37,13.54A14.39,14.39,0,0,1,47,45.44v29A6.76,6.76,0,0,1,40.2,81.16Z" transform="translate(-24.71 -18.05)"/><path class="stroke" d="M63.28,57.53v19c0,2.44,2.47,4.43,5.5,4.43s5.51-2,5.51-4.43v-19l-5.51-8.79Z" transform="translate(-24.71 -18.05)"/><polygon class="stroke" points="40.82 7.67 44.08 11.54 47.32 7.66 46.1 1.1 42.01 1.11 40.82 7.67"/><line class="stroke" x1="44.02" y1="31.05" x2="44.02" y2="11.01"/></svg></i></div>
              <p>Multi Brand Hardware<br> Break-Fix (AMC)</p>
              <button type="button" class="btn pmd-btn-outline btn-default"> Explore <i class="fa fa-angle-right" aria-hidden="true"></i></button>
            </div>
          </div></a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 main-cmn-box">
			<a href="managed-services-sas">
          <div class="automative-box sol-cmn-box">
            <div class="sol-cmn-box-inner clearfix"> 
             <div class="sol-img-cvr valigncenter">
				 <i>
				 <svg class="govern-icon" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 67.51 64.6"><title>Staff Augmentation Services</title><path class="fill blue-color-fill" d="M65.31,20a8.54,8.54,0,1,1-8.54,8.54A8.55,8.55,0,0,1,65.31,20m0-2A10.54,10.54,0,1,0,75.85,28.51,10.57,10.57,0,0,0,65.31,18Z" transform="translate(-16.42 -17.97)"/><path class="fill blue-color-fill" d="M36.69,20a8.54,8.54,0,1,1-8.54,8.54A8.55,8.55,0,0,1,36.69,20m0-2A10.54,10.54,0,1,0,47.23,28.51,10.57,10.57,0,0,0,36.69,18Z" transform="translate(-16.42 -17.97)"/><path class="stroke" d="M45.33,44.13H27.24s-9.82.71-9.82,10V72H24" transform="translate(-16.42 -17.97)"/><line class="stroke" x1="7.98" y1="42.4" x2="7.98" y2="64.6"/><path class="stroke" d="M76.38,72h6.55V54.1c0-9.26-9.83-10-9.83-10H55.72s-9.83.71-9.83,10V72h6.56" transform="translate(-16.42 -17.97)"/><line class="stroke" x1="36.46" y1="42.4" x2="36.46" y2="64.6"/><line class="stroke" x1="59.82" y1="42.4" x2="59.82" y2="64.6"/><line class="stroke" x1="48.9" y1="40.9" x2="48.9" y2="26.32"/><line class="stroke" x1="20.28" y1="40.9" x2="20.28" y2="26.32"/></svg></i></div>
              <p>Staff Augmentation Services</p>
              <button type="button" class="btn pmd-btn-outline btn-default"> Explore <i class="fa fa-angle-right" aria-hidden="true"></i></button>
            </div>
          </div></a>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>

<?php 
          $getAllCasestudies = $this->site_mdl->getMainCasestudy_managed_services();
          foreach ($getAllCasestudies as $getAllCasestudy) {
              if(isset($getAllCasestudy) == "Managed Services" && empty($getAllCasestudy['sub_solution_name']) && empty($getAllCasestudy['vertical'])){
        ?>

<section class="cmn-padd case-studies">
  <div class="container">
    <div class="bookmyshow row clearfix">
      <div class="bms-img col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6"> <img src="<?php echo CASE_STUDY_SHOW_PATH.$getAllCasestudy['case_thumbnail_image']; ?>" alt="Image"> </div>
	  <div class="bms-txt col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
        <div class="bms-txt-inner">
          <div class="p-cover">
            <p>CASE STUDY</p>
            <h2><?php echo echoStr(substr($getAllCasestudy['case_name'],0,70));?></h2>
            <p class="txt hidden-xs"><?php echo echoStr(substr($getAllCasestudy['case_overview'],0,310));?></p>
             <a href="case-studies-inner?caseid=<?php echo $getAllCasestudy['case_id']; ?>" class="btn pmd-btn-raised pmd-ripple-effect btn-info">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } } ?>

<!-- <div class="clearfix"></div>
<section class="cmn-padd rel-solutions mas-sec">
  <div class="container">
    <div class="solutions-inner clearfix">
      <h2 class="cmn-hdr">
        <span class="line-text">See how we are moving Managed Services</span>
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
</section> -->
<div class="clearfix"></div>
<section class="cmn-padd get-in-touch cta1">
  <div class="container">
    <div class="clearfix">
      <div class="git-txt col-md-5">
        <h2>For IT at the speed of business.</h2>
        <a href="cta-landing" class="btn pmd-btn-raised pmd-ripple-effect btn-info white-btn">Get In Touch</a>
      </div>
      <div class="imac-ipad-img col-md-7"> <img src="images/cta-images/3L0A2557.png" alt="BU Contact person">
        <div class="soc-info"> <img src="images/cta-arr.png" alt="CTA arrow">
          <div class="key-con-txt">
            <p>Ankush Sharma</p>
            <p>Business Head,<br> Managed Services</p>
            <ul>
              <!--<li><a href="#"><i class="fa fa-phone"></i></a></li>-->
              <li><a href="mailto:ankush.sharma@teamcomputers.com"><i class="fa fa-envelope"></i></a></li>
<li><a href="https://www.linkedin.com/in/ankush-sharma-10997215/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
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
