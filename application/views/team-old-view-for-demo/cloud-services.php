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
	//$mailTo = 'salim.ansari@teamcomputers.com';
	$mailTo = 'salim.ansari@teamcomputers.com,gaurav.wadhawan@teamcomputers.com';
	//$mailTo = 'salim.ansari@teamcomputers.com';
	//////////////////////////////////////';
	//$mailTo = 'salim.ansari@teamcomputers.com,social@teamcomputers.com';
	//$mailCC = 'social@teamcomputers.com';
	//$mailBCC = 'social@teamcomputers.com';
	/////////////////////////////////////////////////////////////
	//Mail Configuration
	$mailSubject = "Inquiry from Teamcomputers website: Cloud Services " . $date_time . "";
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
		echo "<script>window.location.href='/cloud-services-success';</script>";

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
	<title>Cloud Consulting & Migration | Architecturing Cloud Infra | Google Cloud Platform, AWS, Azure | Team computers</title>
	<meta name="description" content="We enable CIOs to scale, speed-up & bring agility in business. We develop solutions around AWS, Google Cloud Platform & Azure to provide the best for you. Visit us."/>
	<meta name="keywords" content="Cloud Consulting, Cloud Migration, Architecturing Cloud Infra, Cloud Solutions for business"/>
	<meta name="robots" content="index, follow"/>
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
		</div>
	</header>
	<div class="clearfix"></div>
	<div class="body-content innner-body-con">
		<section class="solutions-banner clearfix">
			<div class="container">
				<h1 class="col-md-12">Cloud Services</h1>
			</div>
		</section>
		<section class="about-sol">
			<div class="col-md-8">
				<div class="row">
					<div class="abt-ent-sol">
						<div class="container">
							<div class="col-md-8 col-md-offset-1">
								<p>Cloud solutions give you an opportunity to scale, reduce cost, bring speed, flexibility, and mobility for the customers.</p><br>
								<p>We have expertise with:</p>
								<p>- Cloud Consulting & Migration</p>
								<p>- Messaging, Collaboration and Critical Applications on Cloud</p>
								<p>- Sizing and Resizing IT infrastructure on Cloud</p>
								<p>- Architecting and re-Architecting Cloud Infrastructure</p>
								<p>- Cloud Support meeting and more, built for businesses & designed for teams</p><br>
								<p><a href="http://www.teamcomputers.com/googlecloud/" target="_blank" title="teamcomputers.com/googlecloud" class="link">Check our work on Google Cloud Platform here.</a>
								</p>


								<a href="/cloud-services-contact-form" class="btn btn-lg btn-info" role="button">Consult now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="white-bg">
						<div class="fc-line"> <img src="<?php echo BASE_URL_IMG; ?>fc-line.png"> </div>
						<div class="en-sol-img"> <img src="<?php echo BASE_URL_IMG; ?>movingtocloud_inside-top.jpg" alt="enterprise solutions image"> </div>
					</div>
				</div>
			</div>
		</section>
		<section class="ty-sol clearfix">
			<div class="col-md-8 col-sm-8 padding0 bg-col tpadding100 bpadding30 clearfix">
				<div class="sub-sol clearfix sub-sol1">
					<div class="col-md-10 col-md-offset-1">
						<h2>Cloud Consulting</h2>
						<p>The CIOs main concerns lies in helping their businesses scale, bring speed & flexibility and reduce cost. The cloud has potential to deliver much more. Cloud is becoming an important element of what it means to run a business in a digitally active world.</p><br>
						<p>We are in partnership with Amazon Web Services, Microsoft Azure, ORACLE, IBM Softlayer, and Google Cloud Platform.</p>
						<div class="col-md-12 solutions">
							<div class="row">
								<p><br>We are skilled with providing Cloud Consultations on:</p>
								<div class="col-md-6">
									<div class="row">
										<ul>
											<li><span>Computing</span>
											</li>
											<li><span>Storage</span>
											</li>
											<li><span>Mass Mailing</span>
											</li>
											<li><span>VPN & Tunneling</span>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-6">
									<ul>
										<li><span>Auto-Scaling</span>
										</li>
										<li><span>DevOps</span>
										</li>
										<li><span>Virtual Private Cloud</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1" style="margin-top: 30px;">
						<div class="row">
							<div class="col-md-6">
								<h3>Addressable segments:</h3>
								<ul>
									<li><span>Cloud Adopters</span>
									</li>
									<li><span>Fault Tolerance and scalability appellant</span>
									</li>
									<li><span>Performance & Security Optimizers</span>
									</li>
									<li><span>Data Center migrators</span>
									</li>
									<li><span>Cloud First/Native implementers</span>
									</li>
								</ul>
							</div>

							<div class="col-md-6 solutions">
								<div class="row">
									<h3>Business needs & priorities:</h3>
									<ul>
										<li><span>Infrequent and always available Compute Power</span>
										</li>
										<li><span>Scalable Infrastructure</span>
										</li>
										<li><span>Optimized infrastructure cost</span>
										</li>
										<li><span>Faster Provisioning with least human resource</span>
										</li>
										<li><span>Zero-Day Patching & Security</span>
										</li>
										<li><span>Latest and Advances Technology adaptors</span>
										</li>
									</ul>

								</div>
							</div>
						</div>
					</div>



					<div class="col-md-10 col-md-offset-1" style="margin-top: 30px;">
						<div class="row">
							<div class="col-md-6">
								<h3>Our Offerings:</h3>
								<ul>
									<li><span>In-Premise to Cloud migration assessment and reports</span>
									</li>
									<li><span>Cloud Solutions that are day-1 optimized and scalable</span>
									</li>
									<li><span>Advisory service reducing cost and increasing performance of application</span>
									</li>
									<li><span>Customized and Elastic Implementation</span>
									</li>
									<li><span>Dependency/Risk Identification and Mitigation</span>
									</li>
									<li><span>Provide customized cloud stacking services</span>
									</li>
								</ul>
							</div>

							<div class="col-md-6 solutions">
								<div class="row">
									<h3>Things that differentiate us:</h3>
									<ul>
										<li><span>Experienced assessment of complex and multi-datacenter infrastructure</span>
										</li>
										<li><span>Range of supported Cloud technologies, 10+</span>
										</li>
										<li><span>Provided cost optimization to 60+ customers</span>
										</li>
										<li><span>Handling mission critical, real-time service providing customers</span>
										</li>
										<li><span>Delivering cloud service to big enterprises customers</span>
										</li>
										<li><span>Early movers to handle niche and upcoming technologies</span>
										</li>
									</ul><br><br>

								</div>
							</div>
							<p style="margin-top: 50px;"><span>We provide Cloud Managed Services which give our customers 24*7 support, IT infrastructural cost optimization with support leveraging, monitoring, reporting & backup aspirants. We cater to domains like Banking, Finance, Pharmacy, Automobiles.</span>
							</p>
						</div>
					</div>

				</div>


			</div>
			<div class="col-md-4 col-sm-4 tpadding100 clearfix">
				<div class="row">
					<div class="white-bg">
						<div class="testimonial-sec" style="padding-top: 0">
							<p><img src="<?php echo BASE_URL_IMG;?>double-quotes.png" class="start-qoute">I am thankful to Google partner who helped<br> us to successfully achieve digital<br> transformation and move the entire organization<br> to G Suite in the committed time.<img src="<?php echo BASE_URL_IMG;?>double-quotes.png" class="end-qoute"><br><br> - A large two-wheeler manufacturer in India </p>
						</div>
						<div class="case-studies">
							<h2>Case studies</h2>
							<a href="<?php echo BASE_URL_IMG;?>case-studies/panasonic-case-study.pdf" target="_blank">Team Computers assists a prime white goods<br> manufacturer, go digital!</a>
							<a href="<?php echo BASE_URL_IMG;?>case-studies/srei april28.pdf" target="_blank">Enhanced usage of Google Apps, SREI</a>
							<a href="<?php echo BASE_URL_IMG;?>case-studies/dalmia april28.pdf" target="_blank">Moves to digital transformation, Dalmia</a>
						</div>
						<div class="client-sec clearfix">
							<div class="col-md-10">
								<div class="row">
									<h2>Clients</h2>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG;?>clients-logo/cloud-services/ABP.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG;?>clients-logo/cloud-services/Lafarge.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG;?>clients-logo/enterprise/hdfc bank.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG;?>clients-logo/cloud-services/Hero.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG;?>clients-logo/cloud-services/IIFL.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG;?>clients-logo/cloud-services/Panasonic.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG;?>clients-logo/cloud-services/Draft Air.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG;?>clients-logo/cloud-services/Biotech.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG;?>clients-logo/cloud-services/Eventura.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG;?>clients-logo/cloud-services/Magma.png" class="img-responsive">
									</div>
									<div class="clearfix"></div>
									<a href="our-team">See all our clients</a>
								</div>
							</div>

						</div>
						<div class="industries-sec clearfix">
							<div class="col-md-10">
								<div class="row">
									<h2>Industries</h2>
									<div class="col-md-6">
										<div class="row">
											<ul>
												<li><span>Banking</span>
												</li>
												<li><span>Insurance</span>
												</li>
												<li><span>Financial Services</span>
												</li>
												<li><span>Manufacturing</span>
												</li>
												<li><span>IT-ITES</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<ul>
												<li><span>Retail</span>
												</li>
												<li><span>Telecom</span>
												</li>
												<li><span>Real State</span>
												</li>
												<li><span>Media</span>
												</li>
												<li><span>Healthcare</span>
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

									<div class="col-md-6 col-sm-6 col-xs-6">
										<img src="<?php echo BASE_URL_IMG;?>partners-logo/cloud-services/GCP.png" class="img-responsive">
									</div>
									<div class="col-md-4 col-sm-6 col-xs-6">
										<img src="<?php echo BASE_URL_IMG;?>partners-logo/cloud-services/Amazon Web.png" class="img-responsive">
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<img src="<?php echo BASE_URL_IMG;?>partners-logo/cloud-services/Microsoft Azure.png" class="img-responsive">
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
					<h1><em>Get in touch with our Cloud Services expert.</em><br><br> <a href="/cloud-services-contact-form" class="btn btn-lg btn-info" role="button">Consult now</a></h1>
				</div>
			</div>
		</section>
		<section class="other-sol">
			<div class="container">
				<div class="row">
					<h1>Related Solutions</h1>
					<div class="col-md-3 col-sm-6 cmn-mar col-xs-12">
						<div class="rel-cmn-bx">
							<a href="infrastructure-solutions"> <img src="<?php echo BASE_URL_IMG; ?>enterprise_inside.jpg" alt="other solution image" class="img-responsive">
          <h2>Infrastructure <br> Solutions</h2></a>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 cmn-mar col-xs-12">
						<div class="rel-cmn-bx">
							<a href="business-analytics"> <img src="<?php echo BASE_URL_IMG; ?>analytics.jpg" alt="other solution image" class="img-responsive">
			 <h2>Business <br> Analytics</h2></a>
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