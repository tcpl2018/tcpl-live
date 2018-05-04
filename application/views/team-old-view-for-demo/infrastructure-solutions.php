<?php
//$url = $_SERVER['REQUEST_URI'];
// Code to post emails
//$inputName = '';
//$inputLName = '';
//$inputEmail = '';
//$inputContact = '';
//$enquiry = '';
//$inputFurther = '';
$date_time = date( "d-m-Y h:i:sa" );

if ( isset( $_POST[ 'action' ] ) && $_POST[ 'action' ] == "Submit" ) {
	//echo "<pre>"; print_r($_POST) ;  echo "</pre>";exit();


	////////////////[Send Enquiry to the Admin]//////////////////////
	////////////////Mail Receiver////////////////////////////////
	/////////////////$mailTo = ADMIN_EMAIL_TO Team Computers Pvt for Testing..
	$mailTo = 'salim.ansari@teamcomputers.com,gaurav.wadhawan@teamcomputers.com';
	//$mailTo = 'salim.ansari@teamcomputers.com';
	//////////////////////////////////////';
	//$mailTo = 'salim.ansari@teamcomputers.com,social@teamcomputers.com';
	//$mailCC = 'social@teamcomputers.com';
	//$mailBCC = 'social@teamcomputers.com';
	/////////////////////////////////////////////////////////////
	//Mail Configuration
	$mailSubject = "Inquiry from Teamcomputers website: Infrastructure Solutions " . $date_time . "";
	$mailBodyHeader = "The Details are given below:";
	$mailBodyFooter = "<b>Regards<br>Support Team<br>Team Computers Pvt. Ltd. </b>";
	/////////////////////////////////////////////////////////////
	//Mail Sender
	$mailFromName = $_POST[ 'inputName' ];
	$mailFrom = $_POST[ 'inputEmail' ];
	/////////////////////////////////////////////////////////////
	///////////////////////Mail Body/////////////////////////////
	$mailBody = "
      <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
        <html xmlns='http://www.w3.org/1999/xhtml'>
          <head>
            <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
            <title>Email Template</title>
              <style type='text/css'>
                body{
                  color:#000;
                  font-family:Arial, Helvetica, sans-serif;
                  font-size:12px;
                  margin:5px;
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
            <th width='138' align='left' valign='top' scope='row'>First Name</th>
            <td align='left' valign='top'>: " . $_POST[ 'inputName' ] . "</td>
          </tr>
          <tr>
            <th align='left' valign='top' scope='row'>Email Address</th>
            <td align='left' valign='top'>: " . $_POST[ 'inputEmail' ] . "</td>
          </tr>
          <tr>
            <th align='left' valign='top' scope='row'>Contact Number</th>
            <td align='left' valign='top'>: " . $_POST[ 'inputContact' ] . "</td>
          </tr>
		  <tr>
            <th align='left' valign='top' scope='row'>Organisation</th>
            <td align='left' valign='top'>: " . $_POST[ 'organisation' ] . "</td>
          </tr>
		  <tr>
            <th align='left' valign='top' scope='row'>Enquiry for</th>
            <td align='left' valign='top'>: " . $_POST[ 'enquiry' ] . "</td>
          </tr>
		  <tr>
            <th align='left' valign='top' scope='row'>Message</th>
            <td align='left' valign='top'>: " . $_POST[ 'inputFurther' ] . "</td>
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
      "; // End mail body///
	/////////////////////////////////////////////////////////////
	////////////////////Mail Header//////////////////////////////
	$mailHeader = 'MIME-Version: 1.0' . "\r\n";
	$mailHeader .= "From: $mailFromName <$mailFrom>\r\n";
	$mailHeader .= "Reply-To: $mailFrom\r\n";
	$mailHeader .= "Return-Path: $mailFrom\r\n";
	//$mailHeader .= "CC: $mailCC\r\n";
	$mailHeader .= "BCC: $mailBCC\r\n";
	$mailHeader .= 'X-Mailer: PHP' . phpversion() . "\r\n";
	$mailHeader .= 'Content-Type: text/html; charset=utf-8' . "\r\n";
	/////////////////////////////////////////////////////////////
	//Email to Admin
	if ( mail( $mailTo, $mailSubject, $mailBody, $mailHeader ) ) {
		//			   $sql = "INSERT INTO form_contactus SET(name,lname,email,contact,enquiry,message,status) VALUES('".$_POST['Name']."','".$_POST['LastName']."','".$_POST['email']."','".$_POST['phoneNumber']."','".$_POST['enquiry']."','".$_POST['Message']."',1)";
		//			  runQuery($db,$sql);
		//			  = mysql_query("INSERT INTO form_contactus(name,status) VALUES('".$_POST['Name']."',1), $db_selected");
		//runQuery($db_selected,$sql);
		//exit;
		/*$_SESSION['msgs'] = "<div class='success'>Contact Form Successfully Submitted</div>";*/
		echo "<script>window.location.href='/infrastructure-solutions-success';</script>";

	} else {
		echo "<script> alert('Message Delivery failed..., Try after some time.');</script>";
	}
}
/////End Code to post comments////
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>IT Infrastructure solutions &amp; consulting services, Enterprise business solutions | Team Computers</title>
	<meta name="description" content="We provide Infrastructure solutions and consulting services: Networks, Data Center Built & Virtualization, Collaboration & Surveillance, Computing devices. Visit us."/>
	<meta name="keywords" content="IT Infrastructure solutions,Infrastructure consulting services, IT Consulting services, Enterprise consulting solutions, Enterprise business solutions,"/>
	<meta name="robots" content="index, follow"/>
	<link rel="canonical" href="http://www.teamcomputers.com"/>
	<link rel="shortcut icon" href="../image/favicon.png"/>

	<!-- font awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Roboto:300,400,500,700,900" rel="stylesheet">
	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Custom styles -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<link rel="stylesheet" href="<?php echo BASE_URL_CSS; ?>reset.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL_CSS; ?>style.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL_CSS; ?>style-responsive.min.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<?php include("include/analyticstracking.php"); ?>
	<header>
		<div id="inner-header" class="clearfix">
			<?php include("include/inc_nav.php");?>
			<!-- end .navbar -->
		</div>
	</header>
	<div class="clearfix"></div>
	<div class="body-content innner-body-con">
		<section class="solutions-banner clearfix">
			<div class="container">
				<h1 class="col-md-12">Infrastructure Solutions</h1>
			</div>
		</section>
		<section class="about-sol">
			<div class="col-md-8">
				<div class="row">
					<div class="abt-ent-sol">
						<div class="container">
							<div class="col-md-8 col-md-offset-1">
								<p>From selecting the right server, ensuring that you don’t run out of storage and taking care of email systems to ensuring that the network has adequate bandwidth so that all applications including video run smoothly.<br>From implementing HD quality video conferencing solution from google, Polycom or CISCO to building a digital classroom, studio or video wall solution.<br>From building a state-of-the-art wired of wireless campus to ensuring that the audio, lighting, acoustics is optimized in all areas.<br>From building your own data center including not just the IT systems but the civil work, video surveillance or migrating an existing application to the Amazon, Microsoft Azure or Google Cloud.</p><br>
								<a href="/infrastructure-solutions-contact-form" class="btn btn-lg btn-info" role="button">Get in touch</a>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="white-bg">
						<div class="fc-line"> <img src="<?php echo BASE_URL_IMG; ?>fc-line.png"> </div>
						<div class="en-sol-img"> <img src="<?php echo BASE_URL_IMG; ?>enterprise_inside-top.jpg" alt="enterprise solutions image"> </div>
					</div>
				</div>
			</div>
		</section>
		<section class="ty-sol clearfix">
			<div class="col-md-8 col-sm-8 padding0 bg-col tpadding50 bpadding30 clearfix">
				<div class="sub-sol clearfix">
					<div class="col-md-10 col-md-offset-1">
						<h2>Collaboration Solutions</h2>
						<p>Collaboration is not just one device talking to other, it is much more. Collaboration happens when ideas come together. It can happen in boardrooms, conference halls, classrooms, video studios or anywhere. We bring together the best-in-class infrastructure and technology for your ideas to take shape with the right audio, video and digital whiteboard solutions.</p>
						<div class="col-md-12 solutions">
							<div class="row">
								<ul>
									<li><span>Classrooms, Studios, Boardrooms and Video Wall solutions</span>
									</li>
									<li><span>Real time collaboration - Audio, Video & Digital Whiteboard solutions</span>
									</li>
									<li><span>Digital Signage Solutions</span>
									</li>
									<li><span>Google Polycom & CISCO Video Conferencing solutions</span>
									</li>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="sub-sol clearfix sub-sol1">
					<div class="col-md-10 col-md-offset-1">
						<h2>Data Center Built & Maintain Virtualization</h2>
						<p>Design, Configure, Build & Integrate are the four key points we keep in mind before executing a solution. Handling data in the best manner means, less burden on business finances, as additional storage comes with additional cost. We design Data Center solutions to match your context.</p>
						<div class="col-md-7 solutions">
							<div class="row">
								<ul>
									<li><span>Data Protection</span>
									</li>
									<li><span>Backup & High Availability</span>
									</li>
									<li><span>Disaster Recovery</span>
									</li>
									<li><span>Power & Cooling</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-5 technologies">
							<div class="row">
								<ul><br>
									<li><span>Networking & Communication</span>
									</li>
									<li><span>Network Management & Automation</span>
									</li>
									<li><span>Intelligent Structured cabling Solution</span>
									</li>
									<li><span>Routing / Switching / Wireless Services</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="sub-sol clearfix">
					<div class="col-md-10 col-md-offset-1">
						<h2>Surveillance & Access Control solutions</h2>
						<p>Stay at ease and secured with our surveillance and security solutions.</p>
						<div class="col-md-12 solutions">
							<div class="row">
								<ul>
									<li><span>Network Security</span>
									</li>
									<li><span>Endpoint Security</span>
									</li>
									<li><span>Command Centre</span>
									</li>
									<li><span>Asset Management</span>
									</li>
									<li><span>Access & Identity Management</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="sub-sol clearfix">
					<div class="col-md-10 col-md-offset-1">
						<h2>Mobility & Computing solutions</h2>
						<p>From selecting the right android, Google chrome, iOS device or a notebook which runs the desired version of operating system.</p>
						<div class="col-md-12 solutions">
							<div class="row">
								<ul>
									<li><span>Desktop/ Notebook/ Thinclient</span>
									</li>
									<li><span>PDA/ Smartphone/ Tablets</span>
									</li>
									<li><span>iPads, iPhones</span>
									</li>
									<li><span>Chromebooks</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 tpadding100 clearfix">
				<div class="row">
					<div class="white-bg">
						<div class="testimonial-sec" style="padding-top: 0">
							<!--<p><img src="<?php echo BASE_URL_IMG; ?>double-quotes.png" class="start-qoute">Lorem ipsum dolor sit amet, consectetuer adipiscing<br> elit, sed diam nonummy nibh euismod tincidunt ut <br> laoreet dolore magna aliquam erat volutpat. Ut wisi <br> enim ad minim veniam.<img src="<?php echo BASE_URL_IMG; ?>double-quotes.png" class="end-qoute"><br><br>
- ABC XYZ, DEF Company</p>-->
						</div>
						<div class="case-studies" style="margin-top: -70px">
							<h2>Case studies</h2>
							<a href="<?php echo BASE_URL_IMG; ?>case-studies/mattress manufacturer.pdf" target="_blank">Adopting advanced IT technology, India's largest mattress manufacturer</a>
							<a href="<?php echo BASE_URL_IMG; ?>case-studies/international embassy.pdf" target="_blank">Collaboration and security project, International Embassy</a>
						</div>
						<div class="client-sec clearfix">
							<div class="col-md-10 col-xs-12">
								<div class="row">
									<h2>Clients</h2>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG; ?>clients-logo/enterprise/hdfc bank.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG; ?>clients-logo/enterprise/home credit.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG; ?>clients-logo/enterprise/boi.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG; ?>clients-logo/enterprise/airtel.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG; ?>clients-logo/enterprise/ttsl.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG; ?>clients-logo/enterprise/ola.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG; ?>clients-logo/enterprise/maruti.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG; ?>clients-logo/enterprise/icici bank.png" class="img-responsive">
									</div>

									<div class="clearfix"></div>
									<a href="our-team">See all our clients</a>
								</div>
							</div>

						</div>
						<div class="industries-sec clearfix">
							<div class="col-md-9 col-sm-12">
								<div class="row">
									<h2>Industries</h2>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="row">
											<ul>
												<li><span>BFSI (Private)</span>
												</li>
												<li><span>Manufacuring</span>
												</li>
												<li><span>Retail</span>
												</li>
												<li><span>Telecom</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="row">
											<ul>
												<li><span>IT</span>
												</li>
												<li><span>ITES</span>
												</li>
												<li><span>PSU Banks/PSUs</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="partners-sec clearfix">
							<div class="col-md-10">
								<div class="row">
									<h2>Partners</h2>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG; ?>partners-logo/enterprise/acer.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG; ?>partners-logo/enterprise/apple.png" class="img-responsive">
									</div>
									<!--<div class="col-md-3">
   			<img src="<?php echo BASE_URL_IMG; ?>partners-logo/enterprise/aws.png" class="img-responsive">
   		</div>-->
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG; ?>partners-logo/enterprise/cisco.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG; ?>partners-logo/enterprise/creston.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG; ?>partners-logo/enterprise/dell.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG; ?>partners-logo/enterprise/emerson.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG; ?>partners-logo/enterprise/hp.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG; ?>partners-logo/enterprise/ibm.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG; ?>partners-logo/enterprise/lenovo.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG; ?>partners-logo/enterprise/polycom.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG; ?>partners-logo/enterprise/samsung.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG; ?>partners-logo/enterprise/schneider.png" class="img-responsive">
									</div>
									<div class="clearfix"></div>
									<a href="our-team">See all our partners</a>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="con-now-cover">
			<div class="con-now">
				<div class="container">
					<h1><em>Get in touch with our Infrastructure expert.</em><br><br> <a href="/infrastructure-solutions-contact-form" class="btn btn-lg btn-info" role="button">Consult now</a></h1>
				</div>
			</div>
		</section>
		<section class="other-sol">
			<div class="container">
				<div class="row">
					<h1>Related Solutions</h1>
					<div class="col-md-3 col-sm-6 cmn-mar col-xs-12">
						<div class="rel-cmn-bx">
							<a href="business-analytics"> <img src="<?php echo BASE_URL_IMG; ?>analytics.jpg" alt="other solution image" class="img-responsive">
          <h2>Business <br> Analytics</h2></a>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 cmn-mar col-xs-12">
						<div class="rel-cmn-bx">
							<a href="cloud-services"> <img src="<?php echo BASE_URL_IMG; ?>movingtocloud_inside.jpg" alt="other solution image" class="img-responsive">
			 <h2>Cloud <br> Services</h2></a>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 cmn-mar col-xs-12">
						<div class="rel-cmn-bx">
							<a href="apps-and-mobility"> <img src="<?php echo BASE_URL_IMG; ?>apps-and-mobility.jpg" alt="other solution image" class="img-responsive">
			 <h2>Apps & <br> Mobility</h2></a>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 cmn-mar col-xs-12">
						<div class="rel-cmn-bx">
							<a href="managed-services"> <img src="<?php echo BASE_URL_IMG; ?>managed-services.jpg" alt="other solution image" class="img-responsive">
			 <h2>Managed <br> Services</h2></a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<?php include("include/footer.php");?>
	<div class="form-group" style="margin: 0">
		<button class="g-recaptcha" data-sitekey="6Le3cB8UAAAAAL1oq7FWoNkpYFsKGdWbZOGimJes" data-callback="YourOnSubmitFn" style="display: none;">
							</button>
	
	</div>
	<!-- jquery JS -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Bootstrap js -->
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL_JS; ?>custom.min.js"></script>
	<script language='JavaScript' type='text/javascript'>
		function refreshCaptcha() {
			var img = document.images[ 'captchaimg' ];
			img.src = img.src.substring( 0, img.src.lastIndexOf( "?" ) ) + "?rand=" + Math.random() * 1000;
		}
	</script>
</body>

</html>