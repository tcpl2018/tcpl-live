<?php
$date_time = date("d-m-Y h:i:sa");
if(isset($_POST['action']) && $_POST['action'] == "contact1"){
//echo "<pre>"; print_r($_POST) ;  echo "</pre>";exit();
  $Name = $_POST[ 'name' ];
  $message = $_POST[ 'message'];
if(empty($_POST['name'])){
  $_SESSION['msgs'] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Enter your name</b></div>';
}elseif(empty($_POST['email'])){
  $_SESSION['msgs'] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Enter your email</b></div>';
}elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  $_SESSION['msgs'] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Enter your valid email</b></div>';
}elseif(empty($_POST['phone'])){
  $_SESSION['msgs'] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Enter valid phone no.</b></div>';
}elseif(!preg_match('/[2-9]{2}\d{8}/', $_POST['phone'])) {
       $_SESSION['msgs'] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Min 10 Numeric Value!</b></div>';
}elseif(empty($_POST['no_of_employes'])){
  $_SESSION['msgs'] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Select No. of Emloyees</b></div>';
}elseif(empty($_POST['solutions_name'])){
  $_SESSION['msgs'] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Select Solutions</b></div>';
}else{
$mailTo = 'social@teamcomputers.com,sandeep.saini@teamcomputers.com,salim.ansari@teamcomputers.com';
//$mailTo = 'salim.ansari@teamcomputers.com';
//$mailCC = ADMIN_EMAIL_CC;
//Mail Configuration
$mailSubject= "Inquiry from Teamcomputers website: CTA Landing Page ".$date_time."";
$mailBodyHeader= "The Details are given below:";
$mailBodyFooter= "<b>Regards<br>Support Team<br>Team Computers Pvt. Ltd. </b>";
/////////////////////////////////////////////////////////////
//Mail Sender
$mailFromName = $_POST['name'];
$mailFrom = $_POST['email'];
/////////////////////////////////////////////////////////////
//Mail Body
$mailBody = "
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Email Template</title>
<style type='text/css'>
body{
    color:#000;
    font-size:14px;
    margin:5px;
    font-family: 'Montserrat', sans-serif;
}
</style>
</head>
<body>
<table width='700' border='0' cellspacing='0' cellpadding='4'>
  <tr>
    <th colspan='2' align='left' scope='col'>{$mailBodyHeader}</th>
  </tr>
  <tr>
    <th align='left' scope='row'>&nbsp;</th>
    <td align='left'>&nbsp;</td>
  </tr>
  <tr>
    <th width='138' align='left' valign='top' scope='row'>Name</th>
    <td align='left' valign='top'>: ".$_POST['name']."</td>
  </tr>
  <tr>
    <th width='138' align='left' valign='top' scope='row'>Email</th>
    <td align='left' valign='top'>: ".$_POST['email']."</td>
  </tr>
  <tr>
    <th width='138' align='left' valign='top' scope='row'>Contact No.</th>
    <td align='left' valign='top'>: ".$_POST['phone']."</td>
  </tr>
  <tr>
    <th width='138' align='left' valign='top' scope='row'>Job Title</th>
    <td align='left' valign='top'>: ".$_POST['job_titile']."</td>
  </tr>
   <tr>
    <th width='138' align='left' valign='top' scope='row'>Web Url</th>
    <td align='left' valign='top'>: ".$_POST['web_url']."</td>
  </tr>
   <tr>
    <th width='138' align='left' valign='top' scope='row'>No of Employees</th>
    <td align='left' valign='top'>: ".$_POST['no_of_employes']."</td>
  </tr>
   <tr>
    <th width='138' align='left' valign='top' scope='row'>Solutions Name</th>
    <td align='left' valign='top'>: ".$_POST['solutions_name']."</td>
  </tr>
  <tr>
    <th align='left' valign='top' scope='row'>Message</th>
    <td align='left' valign='top'>: ".$_POST['message']."</td>
  </tr>
  <tr>
    <th align='left' valign='top' scope='row'>IP Address</th>
    <td align='left' valign='top'>: " . $_SERVER[ 'REMOTE_ADDR' ] . "</td>
  </tr>
  <br>
  <tr>
    <td colspan='2' align='left' valign='top'>{$mailBodyFooter}</td>
  </tr>  
</table>
</body>
</html>
";
/////////////////////////////////////////////////////////////
//Mail Header
$mailHeader = 'MIME-Version: 1.0'."\r\n";
$mailHeader .= "From: $mailFromName <$mailFrom>\r\n";
$mailHeader .= "Reply-To: $mailFrom\r\n";
$mailHeader .= "Return-Path: $mailFrom\r\n";
//$mailHeader .= "CC: $mailCC\r\n";
$mailHeader .= "BCC: $mailBCC\r\n";
$mailHeader .= 'X-Mailer: PHP'.phpversion()."\r\n";
$mailHeader .= 'Content-Type: text/html; charset=utf-8'."\r\n";
/////////////////////////////////////////////////////////////
//Email to Admin
if(mail($mailTo, $mailSubject, $mailBody, $mailHeader)){
//$sql = "INSERT INTO contact_email(cnt_name,cnt_phnno,cnt_email,cnt_message,status) VALUES('".$_POST['name']."','".$_POST['contact']."','".$_POST['email']."','".$_POST['message']."',1)";
//runQuery($db,$sql);
  echo "<script>window.location.href='https://www.teamcomputers.com/contact-success';</script>";
 }else{
$_SESSION['msgs'] = '<div class="alert-box error" style="font-size:14px;"><span>Error: </span><b>Error While Sending Mail, Please Try After Sometime</b></div>';
 }
} }
?>
<?php 
define('WP_USE_THEMES', false);
require('case-study/wp-blog-header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Qlik Busienss Intelligence & Analytics | Qlik Elite Partner, India | Team Computers</title>
<meta name="description" content="Team Computers is the Rank 1 Qlik Partner in India. With 1500 project successfull delivered, 300  happy customers, 13+ years of experience in providing business solutions for businesses of all sizes across industries. And successfully executed projects in India, South East Asia and the USA." />
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
<!-- fancy box css -->
<link href="css/jquery.fancybox.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">
<link href="css/style-responsive.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.png"/>
<style>
  label.error {
    color: #FF0000;
    font-size: 14px;
    font-weight: 500;
    transform: none;
    position: absolute;
    right: 0;
}
</style>
</head>
<body>
<?php include 'include/header.php';?>
<section class="career-banner-cover qlik-landing valigncenter">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-7 col-xs-12">
				<div class="banner-text align-left">
					<h1>Qlik Elite Partner in India</h1>
					 <h2>300+ businesses across industries <span class="break-line">made smarter with Analytics.</span>
					</h2>
					<img src="images/qlik-partner-logo.png" alt="qlik partner"/>
				</div>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 qlik-landing-form">
       <div class="cta-form">
        <div class="form">
          <form id="contact-form" name="contact" method="post" class="contact-form">
            <?php echo msgs();?>
            
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="form-group pmd-textfield">
                  <input placeholder="Name *" type="text" class="form-control" name="name" value="<?php if(isset($_POST['name']) && !empty($_POST['name'])){ echo $_POST['name']; }?>" autocomplete="off" id="Name">
                </div>
              </div>
			  <div class="col-md-12 col-xs-12">
                <div class="form-group pmd-textfield">
                  <input placeholder="Email *" type="email" class="form-control" id="email" name="email" value="<?php if(isset($_POST['email']) && !empty($_POST['email'])){ echo $_POST['email']; }?>" autocomplete="off">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group pmd-textfield">
				  <input placeholder="Phone Number *" type="text" class="form-control" maxlength="10" pattern="\d{10}" name="phone" value="<?php if(isset($_POST['phone']) && !empty($_POST['phone'])){ echo $_POST['phone']; }?>"   number="true" id="phone" autocomplete="off">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="form-group pmd-textfield">
				  <input placeholder="Job Title" class="form-control" name="job_titile" value="<?php if(isset($_POST['job_titile']) && !empty($_POST['job_titile'])){ echo $_POST['job_titile']; }?>">
                </div>
              </div>
			  <div class="col-md-12 col-xs-12">
                <div class="form-group pmd-textfield">
				  <input placeholder="Website URL" class="form-control" id="web_url" name="web_url">
                </div>
              </div>
            </div>
		    <div class="row">
              <div class="col-md-12">
                <div class="form-group pmd-textfield">
				  <select class="select-simple form-control pmd-select2" id="no_of_employes" name="no_of_employes">
                  <option value="" disabled selected hidden>No. of employees *</option>
                  <option value ="0-100">0-100</option>
                  <option value ="100-500">100-500</option>
                  <option value ="500-1000">500-1000</option>
                  <option value ="1000-5000">1000-5000</option>
                  <option value ="5000+">5000+</option>
                  </select>
                </div>
              </div>
			  <div class="col-md-12">
                <div class="form-group pmd-textfield">
				  <select class="form-control" id="solutions_name" name="solutions_name">
                  <option value ="" disabled selected hidden>Solutions *</option>
                  <option value ="Infrastructure Solutions">Infrastructure Solutions</option>
                  <option value ="Cloud Solutions">Cloud Solutions</option>
                  <option value ="Business Analytics">Business Analytics</option>
                  <option value ="Business Apps">Business Apps</option>
                  <option value ="Enterprise Mobile Apps">Enterprise Mobile Apps</option>
                  <option value ="Managed Services">Managed Services</option>
                  <option value ="Others">Others</option>
                  </select>
  
                </div>
              </div>
            </div>
			<div class="row">
              <div class="col-md-12">
                <div class="form-group pmd-textfield">
					<textarea placeholder="Tell us in words..." class="form-control" id="message" name="message" rows="3"><?php if(isset($_POST['message']) && !empty($_POST['message'])){ echo $_POST['message']; }?></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="g-recaptcha" data-sitekey="6LdJHBUTAAAAAC0fo7UoDW7NqM1UNMtN-hX1DSa1"></div>
                <div class="button-group" style="text-align: center;">
                  <button type="submit" name="action" id="contact-submit" value="contact1" class="btn btn-info btn-yellow">Get in Touch</button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <a href="privacy-policy" target="_blank"><sup>*</sup> Read Privacy Policy</a>
        </div>
      </div>
		</div>  
  </div>
</section>
<div class="clearfix"></div>
<!--Customer Testimonial Section-->
<section class="cmn-padd testimonial-section">
	<div class="container">
		<h2 class="apple-brief-title text-center">
			<span class="line-text">What Our Customers say</span>
		</h2>
		
		<div class="thumbnail-slider-container"> 
		   <!--Thumbnail Slider Start--> 
		   <div id="thumbnailSlider-ba" class="thumbnail-slider owl-carousel"> 
			  <div class="item"> 
				 <div class="testimonial-thumb">
					<img src="images/testimonial/shafiq-anjum.jpg" alt="">
				</div> 
			  </div>
			  <div class="item"> 
				 <div class="testimonial-thumb">
					<img src="images/testimonial/chetan-agarwal.jpg" alt="">
				</div>
			  </div> 
			  <div class="item"> 
				 <div class="testimonial-thumb">
					<img src="images/testimonial/ananthanarayanan.jpg" alt="">
				</div>
				</div> 
		</div>
<!--Thumbnail Slider End--> 
			 <!--Navigation Links For the Main Items--> 
			 <div class="slider-controls"> 
			  <a class="slider-left" href="javascript:;"><span><i class="fa fa-x fa-angle-left"></i></span></a> 
			  <a class="slider-right" href="javascript:;"><span><i class="fa fa-x fa-angle-right"></i></span></a> 
		   </div>
</div>		   
		<!--Main Slider Container--> 
		<div class="slider-container"> 
		   <!--Main Slider Start--> 
			<div id="slider-ba" class="slider owl-carousel"> 
				<div class="item"> 
					<div class="testimonial-card">
						<p class="testimonial-content">
						From the perspectives of business satisfaction and data accuracy,  I can say that we are very  confident and very comfortable with the deployment of  Analytics, by Team Computers.
						</p>
						<div class="testimonial-info">
							<p class="customer-name">Shafiq Anjum - Ex VP- IT</p>
							<p class="customer-profession"><img src="images/videocon-telecom-logo.png" alt=""/></p>
						</div>
					</div> 
				</div> 
				<div class="item"> 
					<div class="testimonial-card">
						<p class="testimonial-content">
						If there is a single reason by why SAP shop or any other should go with Qlik - its a speed of delivery and you can literally do in a few weeks what it probably take you an year.
						</p>
						<div class="testimonial-info">
							<p class="customer-name">Chetan Agarwal - CIO</p>
							<p class="customer-profession"><img src="images/jspl-logo.png"></p>
						</div>
					</div> 
				</div>
				<div class="item"> 
					<div class="testimonial-card">
						<p class="testimonial-content">
						QlikView has given our senior management a holistic view of our business. Decisions are now made time based on concrete evidence. As a result, our business has grown by 17 percent over the last two years and we are now ranked #2 in the market, which is fantastic given the current economic landscape of India. 
						</p>
						<div class="testimonial-info">
							<p class="customer-name">V Ananthanarayanan - AVP (Business Insights) </p>
							<p class="customer-profession"><img src="images/hdfc-life-logo.png"></p>
						</div>
					</div> 
				</div>
			</div> 
		   <!--Main Slider End-->
		</div> 
		
	</div>
</section>

<div class="clearfix"></div>
<section class="cmn-padd google-service-section">
	<div class="container-fluid faq-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-5 qlik-faq-content">
					<h3 class="apple-brief-title">Are you happy with your Qlik Performance?</h3>
					<ul>
						<li> Is the performance of your dashboards not optimized?
						</li>
						<li> Are your Qlik projects regularly being overrun?</li>
						<li>Does your current partner possess the domain expertise to understand your business and make recommendations?</li>
						<li>Is the adoption of Qlik within your organization low?</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>	
<!--Qlik feature Section-->
<section class="cmn-padd apple-inner-page google-partner-feature">
	<section class="apple-brief text-center">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="apple-brief-title">
						<span class="line-text no-dot">
							Leverage our expertise on Qlik
						</span>
					</h2>
					<div class="row qlik-expertise">
						<div class="col-md-3 col-sm-6 col-xs-6 expertise-feature">
							<span class="break-line">1500 </span>
							<span class="break-line">PROJECTS </span> 
							<span class="text-lite">successfully delivered</span>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 expertise-feature">
							<span class="break-line">300 </span>
							<span class="break-line">CUSTOMERS </span> 
							<span class="text-lite">Satisfied</span>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 expertise-feature">
							<span class="break-line">13 years for </span>
							<span class="break-line">businesses </span> 
							<span class="text-lite">of all sizes across industries</span>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 expertise-feature">
							<span class="break-line">India, </span>
							<span class="break-line">South East Asia </span> 
							<span class="text-lite">and the USA</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>
<div class="clearfix"></div>
<!--Qlik service Section-->	
<section class="google-service-section">
	<div class="container">
		<h2 class="sec-hd">Services (How Team helps on your data journey)</h2>
		<div id="service-slider" class="service-slider owl-carousel owl-theme">
			<div class="item">
				<div class="service-card deployment-card">
					<div class="service-header">
						<img src="images/qlik-consulting-service.png" alt="">
					</div>
					<div class="service-title">
						<h4>Business Consulting</h4>
					</div>
					<div class="service-content">
						Define your analytics roadmap and the KPIs you should be looking at! Qlik Specialized for Insurance, Auto and NBFC Analytics.
					</div>
				</div>
			</div>
			<div class="item">
				<div class="service-card change-management-card">
					<div class="service-header">
						<img src="images/qlik-data-service.png" alt="">
					</div>
					<div class="service-title">
						<h4>Data Services</h4>
					</div>
					<div class="service-content">
						Deploy a data warehouse or data lake for your structured and unstructured data. Transform your data into a single source of truth using our data integration, quality, cleansing and modelling (ETL) services. 
					</div>
				</div>
			</div>
			<div class="item">
				<div class="service-card training-workshop-card">
					<div class="service-header">
						<img src="images/qlik-deployment-service.png" alt="">
					</div>
					<div class="service-title">
						<h4>Development and <span class="break-line">Deployment</span></h4>
					</div>
					<div class="service-content">
						With 200+ certified experts, made boardroom ready through a 360 degree training at the Institute of Business Intelligence bringing to you deep domain expertise and technical expertise.
					</div>
				</div>
			</div>
			<div class="item">
				<div class="service-card managed-service-card">
					<div class="service-header">
						<img src="images/google-managed-services-report-icon.png" alt="">
					</div>
					<div class="service-title">
						<h4>Production Support</h4>
					</div>
					<div class="service-content">
						Applications up and running 24*7 through proactive support. Reduce ticket volumes and the total cost of ownership through SLA based managed services. This includes incident and problem management, batch support, release support and version control and configurations, server tuning, enhancements and management. 
					</div>
				</div>
			</div>
			<div class="item">
				<div class="service-card analytic-card">
					<div class="service-header">
						<img src="images/qlik-migration-service.png" alt="">
					</div>
					<div class="service-title">
						<h4>Migration Services</h4>
					</div>
					<div class="service-content">
						Move from you existing setup to Qlik, or from Qlikview to Qlik Sense smoothly and seamlessly so that your users are quick up and running on their new platform. 
					</div>
				</div>
			</div>
			<div class="item">
				<div class="service-card chatbot-card">
					<div class="service-header">
						<img src="images/google-training-workshop.png" alt="">
					</div>
					<div class="service-title">
						<h4>Adoption and Training</h4>
					</div>
					<div class="service-content">
						We provide Training and Workshops built and customized for your businesses, to increase the consumption of BI, fuel the culture of self service or train your analytics team to leverage the Qlik platform to the fullest.
					</div>
				</div>
			</div>
			<div class="item">
				<div class="service-card chatbot-card">
					<div class="service-header">
						<img src="images/qlik-audit-service.png" alt="">
					</div>
					<div class="service-title">
						<h4>Audit Services</h4>
					</div>
					<div class="service-content">
						A complete health checkup for your existing Qlik Setup for performance fine tuning, uninterrupted and timely data refresh, visual enhancements and to bridge the gap between best practices and your current set up.
					</div>
				</div>
			</div>
		</div>
	</div>		
</section>
<div class="clearfix"></div>
<!--Qlik casestudy Section-->	
<section class="cmn-padd qlik casestudy-std-format hidden-xs">
	<div class="container main-cs-slider-container">
		<div id="main-cs-slider" class="owl-carousel">
			<div class="item">
				<div class="row">
					<div class="col-sm-5 col-xs-12">
				<div class="case-study-featured-image-section video">
					<div class="featured-image">
						<img src="https://www.teamcomputers.com/uploads/casestudy/case_study_thumbnail_thumbnailimage_1513100191.jpg" alt="">
					</div>
					<div class="case-study-featured-logo">
						<img src="https://www.teamcomputers.com/uploads/casestudy/case_study_client_clientlogo_1513110345.jpg" alt="HDFC">
					</div>
				</div>	
			</div>
					<div class="col-sm-7 col-xs-12">
				<div class="case-study-featured-content">
					<p class="case-study-sub-title">
						Customer Success Story
					</p>
					<h2 class="case-study-title">
						HDFC Life improves customer response time by 50% with QLIKVIEW
					</h2>
					<p class="case-study-content">
						To meet their objective and to inculcate the habit of storing and sharing information centrally within the organization, HDFC Life needed a business intelligence solution with the intuition to aid strategic decision making. Team Computers partnered with Qlik to make this happen.
					</p>
					
					<div class="case-study-cta text clearfix">
						<a  href="https://www.teamcomputers.com/case-studies-inner?caseid=125">Read More</a>
					</div>
				</div>
			</div>
				</div>
			</div>
			<div class="item">
				<div class="row">
			<div class="col-sm-5 col-xs-12">
				<div class="case-study-featured-image-section">
					<div class="featured-image">
						<img src="https://www.teamcomputers.com/uploads/casestudy/case_study_thumbnail_thumbnailimage_1513110172.jpg" alt="">
					</div>
					<div class="case-study-featured-logo">
						<img src="https://www.teamcomputers.com/uploads/casestudy/case_study_client_clientlogo_1513110172.jpg" alt="IFFCO Tokio">
					</div>
				</div>	
			</div>
			<div class="col-sm-7 col-xs-12">
				<div class="case-study-featured-content">
					<p class="case-study-sub-title">
						Customer Success Story
					</p>
					<h2 class="case-study-title">
						IFFCO Tokio gets daily visibility of their business with Analytics
					</h2>
					<p class="case-study-content">
						Troubled with the lack of visibility into their business and the resulting customer dissatisfaction, IFFCO Tokio decided to adopt analytics and mould a better tomorrow.
					</p>
					
					<div class="case-study-cta text clearfix">
						<a  href="https://www.teamcomputers.com/case-studies-inner?caseid=124">Read More</a>
					</div>
				</div>
			</div>
		</div>
			</div>
			<div class="item">
				<div class="row">
			<div class="col-sm-5 col-xs-12">
				<div class="case-study-featured-image-section">
					<div class="featured-image">
						<img src="https://www.teamcomputers.com/uploads/casestudy/case_study_thumbnail_thumbnailimage_1513109522.jpg" alt="">
					</div>
					<div class="case-study-featured-logo">
						<img src="https://www.teamcomputers.com/uploads/casestudy/case_study_client_clientlogo_1513109502.jpg" alt="SRF">
					</div>
				</div>	
			</div>
			<div class="col-sm-7 col-xs-12">
				<div class="case-study-featured-content">
					<p class="case-study-sub-title">
						Customer Success Story
					</p>
					<h2 class="case-study-title">
						Power of visibility with Analytics
					</h2>
					<p class="case-study-content">
						The absence of meaningful insights in key areas, finance, sales and purchase, was curbing the growth of the business. The introduction of analytics using Qlik was a step forward in the right direction.
					</p>
					
					<div class="case-study-cta text clearfix">
						<a  href="https://www.teamcomputers.com/case-studies-inner?caseid=119">READ MORE</a>
					</div>
				</div>
			</div>
		</div>
			</div>
			<div class="item">
				
				<div class="row">
			<div class="col-sm-5 col-xs-12">
				<div class="case-study-featured-image-section">
					<div class="featured-image">
						<img src="https://www.teamcomputers.com/uploads/casestudy/case_study_thumbnail_thumbnailimage_1513162874.jpg" alt="">
					</div>
					<div class="case-study-featured-logo">
						<img src="https://www.teamcomputers.com/uploads/casestudy/case_study_client_clientlogo_1513162874.jpg" alt="Maruti Suzuki">
					</div>
				</div>	
			</div>
			<div class="col-sm-7 col-xs-12">
				<div class="case-study-featured-content">
					<p class="case-study-sub-title">
						Customer Success Story
					</p>
					<h2 class="case-study-title">
						India's leading car manufacturer uncovers hidden value with Qlik
					</h2>
					<p class="case-study-content">
						Sales at automotive firms are driven by a network of dealers spread across the country. For the effective monitoring and growth of the business, it is imperative that both employees at and dealers are empowered with the ability to ask questions and receive answers instantly about their sales funnel (Enquiry, Bookings, and Sales).
					</p>
					
					<div class="case-study-cta text clearfix">
						<a  href="https://www.teamcomputers.com/case-studies-inner?caseid=161">READ MORE</a>
					</div>
				</div>
			</div>
		</div>
			</div>
			<div class="item">
				<div class="row">
			<div class="col-sm-5 col-xs-12">
				<div class="case-study-featured-image-section">
					<div class="featured-image">
						<img src="https://www.teamcomputers.com/uploads/casestudy/case_study_thumbnail_thumbnailimage_1513109657.jpg" alt="">
					</div>
					<div class="case-study-featured-logo">
						<img src="https://www.teamcomputers.com/uploads/casestudy/case_study_client_clientlogo_1513109631.jpg" alt="">
					</div>
				</div>	
			</div>
			<div class="col-sm-7 col-xs-12">
				<div class="case-study-featured-content">
					<p class="case-study-sub-title">
						Customer Success Story
					</p>
					<h2 class="case-study-title">
						Identifying profitable apparel lines and seasons best-sellers made easy
					</h2>
					<p class="case-study-content">
						Ritu Kumar is a leading fashion house in India, ruling the high-end couture retail space. Analytics is deployed to help management take timely and data backed decisions and predictive analytics form the base for future strategic initiatives.
					</p>
					
					<div class="case-study-cta text clearfix">
						<a href="https://www.teamcomputers.com/case-studies-inner?caseid=120">Read More</a>
					</div>
				</div>
			</div>
		</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-7 col-md-push-5">
				<div class="related-case-study-slider">
			<h4>More Success Stories</h4>
			<div id="related-case-study" class="owl-carousel">
				<!--<div class="item">
					<div class="related-case-study-card">
						<img src="https://www.teamcomputers.com/uploads/casestudy/case_study_thumbnail_thumbnailimage_1513100191.jpg" alt="" class="related-cs-image">
						<div class="related-cs-title-box">
							<p>HDFC Life improves customer response time by 50% with QLIKVIEW</p>
						</div>
					</div>
				</div>-->
				<div class="item">
					<div class="related-case-study-card">
						<a href="https://www.teamcomputers.com/case-studies-inner?caseid=124">
						<img src="https://www.teamcomputers.com/uploads/casestudy/case_study_thumbnail_thumbnailimage_1513110172.jpg" alt="" class="related-cs-image">
						<div class="related-cs-title-box">
							<p>IFFCO Tokio gets daily visibility of their business with Analytics</p>
						</div>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="related-case-study-card">
						<a href="https://www.teamcomputers.com/case-studies-inner?caseid=119">
						<img src="https://www.teamcomputers.com/uploads/casestudy/case_study_thumbnail_thumbnailimage_1513109522.jpg" alt="" class="related-cs-image">
						<div class="related-cs-title-box">
							<p>Power of visibility with Analytics</p>
						</div>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="related-case-study-card">
						<a href="https://www.teamcomputers.com/case-studies-inner?caseid=161">
						<img src="https://www.teamcomputers.com/uploads/casestudy/case_study_thumbnail_thumbnailimage_1513162874.jpg" alt="" class="related-cs-image">
						<div class="related-cs-title-box">
							<p>India's leading car manufacturer uncovers hidden value with Qlik</p>
						</div>
						</a>
					</div>
				</div>
				<div class="item">
					<div class="related-case-study-card">
						<a href="https://www.teamcomputers.com/case-studies-inner?caseid=120">
						<img src="https://www.teamcomputers.com/uploads/casestudy/case_study_thumbnail_thumbnailimage_1513109657.jpg" alt="" class="related-cs-image">
						<div class="related-cs-title-box">
							<p>Identifying profitable apparel lines and seasons best-sellers made easy</p>
						</div>
						</a>	
					</div>
				</div>
			</div>
		   <div class="slider-controls"> 
			  <a class="slider-left" href="javascript:;"><span><i class="fa fa-x fa-arrow-left"></i></span></a> 
			  <a class="slider-right" href="javascript:;"><span><i class="fa fa-x fa-arrow-right"></i></span></a> 
		   </div>
		</div>
			</div>
		</div>
	
	</div>
</section>
<section class="cmn-padd qlik casestudy-std-format visible-xs">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 col-xs-12">
				<div class="case-study-featured-image-section video">
					<div class="featured-image">
							<img src="https://www.teamcomputers.com/uploads/casestudy/case_study_thumbnail_thumbnailimage_1513100191.jpg" alt="">
					</div>
					<div class="case-study-featured-logo">
						<img src="https://www.teamcomputers.com/uploads/casestudy/case_study_client_clientlogo_1513110345.jpg" alt="DTDC">
					</div>
				</div>	
			</div>
			<div class="col-sm-7 col-xs-12">
				<div class="case-study-featured-content">
					<p class="case-study-sub-title">
					Customer Success Story
					</p>
					<h2 class="case-study-title">
					HDFC Life improves customer response time by 50% with QLIKVIEW
					</h2>
					<p class="case-study-content">
					To meet their objective and to inculcate the habit of storing and sharing information centrally within the organization, HDFC Life needed a business intelligence solution with the intuition to aid strategic decision making. Team Computers partnered with Qlik to make this happen. 
					</p>
					<div class="case-study-cta video clearfix">
					<a href="https://www.teamcomputers.com/case-studies-inner?caseid=125">Read More</a>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-7 col-md-push-5 related-case-study-slider">
					
				<h4>More Success Stories</h4>
				<div class="related-case-study-card">
					<a href="https://www.teamcomputers.com/case-studies-inner?caseid=119">
					<img src="https://www.teamcomputers.com/uploads/casestudy/case_study_thumbnail_thumbnailimage_1513109522.jpg" alt="" class="related-cs-image">
					<div class="related-cs-title-box">
						<p>Power of visibility with Analytics</p>
					</div>
					</a>
				</div>
				<div class="related-case-study-card">
					<a href="https://www.teamcomputers.com/case-studies-inner?caseid=161">
					<img src="https://www.teamcomputers.com/uploads/casestudy/case_study_thumbnail_thumbnailimage_1513162874.jpg" alt="" class="related-cs-image">
					<div class="related-cs-title-box">
						<p>India's leading car manufacturer uncovers hidden value with Qlik</p>
					</div>
					</a>
				</div>
				<div class="related-case-study-card">
					<a href="https://www.teamcomputers.com/case-studies-inner?caseid=120">
					<img src="https://www.teamcomputers.com/uploads/casestudy/case_study_thumbnail_thumbnailimage_1513109657.jpg" alt="" class="related-cs-image">
					<div class="related-cs-title-box">
						<p>Identifying profitable apparel lines and seasons best-sellers made easy</p>
					</div>
					</a>	
				</div>
			</div>
		</div>
	</div>
</section>
	
<!--Qlik product Section-->	
<section class="cmn-padd solutions use-cases section-name google-section">
	<div class="container">
  		<h2 class="cmn-hdr">
      		<span class="line-text">Products</span>
    	</h2>
   		<div class="mar-to clearfix row">
			<div class="col-sm-3"> <!-- required for floating -->
			<!-- Nav tabs -->
				<a href="#" class="nav-tabs-dropdown btn btn-block btn-primary">Tabs</a>
				<ul class="nav nav-tabs tabs-left" id="nav-tabs-wrapper">
					<li class="active"><a href="#qliksense" data-toggle="tab">Qlik Sense</a>
					</li>
					<li><a href="#qlikview" data-toggle="tab">Qlikview</a></li>
					<li><a href="#datamarket" data-toggle="tab">Qlik DataMarket </a></li>
					<li><a href="#nprinting" data-toggle="tab">Qlik Nprinting</a></li>
					<li><a href="#geoanalytic" data-toggle="tab">Qlik GeoAnalytics</a></li>
				</ul>
			</div>
			<div class="col-sm-9">
				<!-- Tab panes -->
				<div class="tab-content google-partner-content clearfix">
					<!---Qlik sense-->
					<div class="tab-pane active" id="qliksense">
						<div class="clearfix">
							<div class="row">
								<div class="col-xs-12">
									<img class="img-responsive" src="images/qlik-sense-logo.png" alt="">
								</div>
							</div>
							<br/>
							<p>Get the total flexibility of analytics whether it be guided, embedded to self service. Create and collaborate on any device. Use advanced and interactive visualizations to get insights from your data and share it with your teams to drive innovation together. </p>
							<div class="row">
								<ul class="col-xs-12">
									<li class="featured-list-icon"><strong>Leverage your existing IT investments</strong><span class="break-line">Whether you’re planning to deploy Qlik on-prem, in the cloud or anywhere in between securely. Easily scale in the future without affecting performance or move to a new platform. Add the layer of security and governance your business demands.
									</span>
									</li>
									<li class="featured-list-icon"><strong>Build a data culture</strong><span class="break-line">Use the Qlik Sense unified hub to find and share analytic apps securely. Create guide stories of your insights without leaving the app and share by exporting to popular file formats.</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!---Qlik view-->
					<div class="tab-pane " id="qlikview">
						<div class="clearfix">
							<div class="row">
								<div class="col-xs-12">
									<img class="img-responsive" src="images/qlik-view-logo.png" alt="">
								</div>
							</div>
							<br/>
							<p>Guide your users to data discovery with Qlikview Guided Analytics that are both highly customizable and super secure.</p>
							<div class="row">
								<ul class="col-xs-12">
									<li class="featured-list-icon"><strong>Guided Analytics</strong><span class="break-line">Guide your employees towards taking data driven decisions with the help of pre-built applications, with complete control of dashboards, design, navigation and UI combined with enterprise level governance and security. 
									</span>
									</li>
									<li class="featured-list-icon"><strong>Build and Deploy</strong><span class="break-line">Create apps as per your business needs by combining all your data sources with Qlikview scripting and the Qlikview Workbench. Give your users the power to access these by standalone apps or integration into your business applications.</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!---Qlik data market-->
					<div class="tab-pane " id="datamarket">
						<div class="clearfix">
							<div class="row">
								<div class="col-xs-12">
									<img class="img-responsive" src="images/qlik-datamarket-logo.png" alt="">
								</div>
							</div>
							<br/>
							<p>Combine your internal data with Qlik ready to use external data to add perspective to your data to gain better insights.</p>
							<div class="row">
								<ul class="col-xs-12">
									<li class="featured-list-icon"><strong>Data as a Service </strong><span class="break-line">Qlik DataMarket offer a large variety of data sets on a pay per call basis do you can choose from a wide range of data packages as and when you chose to use them. This external data can be used to gain new insights into markets, customer behaviour and industry trends.
									</span>
									</li>
									<li class="featured-list-icon"><strong>Comprehensive Data Library</strong><span class="break-line">Data gathered from a wide variety of data providers and contains demographic, currency, weather, economic and business data provided through a cloud based data service. Updated on a regular basis, some of the curated data sets are available for free to get you started.</span>
									</li>
									<li class="featured-list-icon"><strong>Complete Integration with Qlik Sense and Qlikview</strong><span class="break-line">Data from the DataMarket can be directly pulled into your Qlik application. It is as easy as pulling your internal sources, and no advanced skill sets are required. </span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!---Qlik NPrint-->
					<div class="tab-pane " id="nprinting">
						<div class="clearfix">
							<div class="row">
								<div class="col-xs-12">
									<img class="img-responsive" src="images/qlik-nprinting-logo.png" alt="">
								</div>
							</div>
							<br/>
							<p>Distribute the reports you create on Qlikview and Qlik Sense using Qlik’s advanced reporting and distribution system. 
							</p>
							<div class="row">
								<ul class="col-xs-12">
									<li class="featured-list-icon"><strong>Popular Report Formats</strong><span class="break-line">Reports can be generated in popular formats including Power point, Excel, Word and HTML Formats. 
									</span>
									</li>
									<li class="featured-list-icon"><strong>Delivery of reports right to the user’s inbox</strong><span class="break-line">Automatic scheduling, generation and delivery of reports customized to the user. The Newsstand portal allows for subscription to reports in a secured way.</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!---Qlik data geolocation-->
					<div class="tab-pane " id="geoanalytic">
						<div class="clearfix">
							<div class="row">
								<div class="col-xs-12">
									<img class="img-responsive" src="images/qlik-geoanalytics-logo.png" alt="">
								</div>
							</div>
							<br/>
							<p>Reveal geographic relationships in your data through Qlik’s mapping capabilities to make better location-related decisions. </p>
							<div class="row">
								<ul class="col-xs-12">
									<li class="featured-list-icon"><strong>More than a good looking map </strong><span class="break-line">Efficiently understand and analyze geo-spatial relationships by aggregating operations and drill down from regions to sub regions in maps. Use animation control for time series and events to view year on year changes in your data.
									</span>
									</li>
									<li class="featured-list-icon"><strong>Geographic Data in any format </strong><span class="break-line">Qlik can connect and pull geodata from flat files, databases and web service. It also integrates with external GIS sources such as ESRI.</span>
									</li>
									<li class="featured-list-icon"><strong>The answer to your location related use cases</strong><span class="break-line">Route operations for your sales force, optimize the travel costs between your warehouses and suppliers and oversee service coverage across regions with Qlik GeoAnalytics.</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
	  	</div>
	</div>
</section>
<div class="clearfix"></div>
<div class="clearfix"></div>
<!--Qlik CTA Section-->	
<section class="cmn-padd get-in-touch cta1 google-biz-head">
	<div class="container">
		<div class="clearfix row apple-bu">
			<div class="git-txt col-xs-12 text-center">
				<h2>See what you can do with 
					<span class="break-line">your data in 7 days</span>
				</h2>
				<a href="cta-landing" class="btn pmd-btn-raised pmd-ripple-effect btn-info white-btn">Contact Us
				</a>
			</div>
		</div>
	</div>
</section>
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
<!-- Fancybox JS -->
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 4000);
        </script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
  <script type="text/javascript" src="js/jQueryValidation.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
	  
    $( "#contact-form" ).validate( {
      rules: {
        name: {
          required: true,
          minlength: 5,
        },
        email: {
          required: true,
          email: true,
        },
        phone: {
          required: true,
          number: true,
          minlength: 10,
          maxlength: 10
        },
        solutions_name: {
          required: true,
        },
        no_of_employes:{
          required: true,
        }

      }
    } );
	var baslider = $('#slider-ba');
  // reference for thumbnail items
  var bathumbnailSlider = $('#thumbnailSlider-ba');
  //transition time in ms
  var duration = 500;

  // carousel function for main slider
  baslider.owlCarousel({
   loop:false,
   nav:false,
   mouseDrag: false,
   autoHeight: true,
	  center:false, 
	dots: false,  
	startPosition: 0,
   items:1,
  }).on('changed.owl.carousel', function (e) {
   //On change of main item to trigger thumbnail item
   bathumbnailSlider.trigger('to.owl.carousel', [e.item.index, duration, true]);
  });

  // carousel function for thumbnail slider
  bathumbnailSlider.owlCarousel({
   loop:false,
   center:false, //to display the thumbnail item in center
   nav:false,
   dots: false,
	  startPosition: 0,
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
   baslider.trigger('to.owl.carousel', [$(this).index(), duration, true]);

  }).on('changed.owl.carousel', function (e) {
   // On change of thumbnail item to trigger main item
   baslider.trigger('to.owl.carousel', [e.item.index, duration, true]);
  });
	//These two are navigation for main items
  $('.slider-right').click(function() {
   baslider.trigger('next.owl.carousel');
  });
  $('.slider-left').click(function() {
   baslider.trigger('prev.owl.carousel');
});
$('#thumbnailSlider-ba .owl-item').eq(0).addClass('here');
	$('#thumbnailSlider-ba .owl-item').on('click', function(){
	$('#thumbnailSlider-ba .owl-item.here').removeClass('here');
	$(this).addClass('here');
});
$('#slider-ba .owl-item').on('changed.owl.carousel', function(e){
	$('#thumbnailSlider-ba .owl-item.here').removeClass('here');
	$(this).addClass('here');
});
});



  </script>
<script type="text/javascript">
$('.pmd-tabs').pmdTab();
		
		$('.mar-to .nav-tabs-dropdown').each(function(i, elm) {

		$(elm).text($(elm).next('ul').find('li.active a').text());

		});

		$('.mar-to .nav-tabs-dropdown').on('click', function(e) {

		e.preventDefault();

		$(e.target).toggleClass('open').next('ul').slideToggle();

		});

		$('.mar-to  #nav-tabs-wrapper a[data-toggle="tab"]').on('click', function(e) {

		e.preventDefault();

		$(e.target).closest('ul').hide().prev('a').removeClass('open').text($(this).text());

		});
	</script>	
</body>
</html>
