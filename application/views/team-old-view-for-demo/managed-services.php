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
	$mailSubject = "Inquiry from Teamcomputers website: Managed Services " . $date_time . "";
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
		echo "<script>window.location.href='/managed-services-success';</script>";

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
	<title>Infrastructure Managed Services | Incident free experience | MPS | Automation | Team computers</title>
	<meta name="description" content="Our philosophy is to have no incidents in IT. We help enteprises to optimize IT with ideas, automations & tools. We're redefining customer experience. Do visit us."/>
	<meta name="keywords" content="Infrastructure Managed Services, managed services, MPS, automation services"/>
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
	<link rel="stylesheet" href="<?php echo BASE_URL_CSS;?>reset.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL_CSS;?>style.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL_CSS;?>style-responsive.min.css">
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
				<h1 class="col-md-12">Managed Services</h1>
			</div>
		</section>
		<section class="about-sol">
			<div class="col-md-8">
				<div class="row">
					<div class="abt-ent-sol">
						<div class="container">
							<div class="col-md-8 col-md-offset-1">
								<p>The current philosophy of doing business in managed services is to respond to incidents. The question we are asking is, why do incidents in IT have to occur. Our philosophy is to give the end-user an incident free experience. We analyzed reasons behind incidents in IT and concluded that major categories of incidents can be resolved by just being proactive. We set up processes that give us the root cause of incidents, and then we take up from there so that, that incident never occurs.</p><br>
								<a href="/managed-services-contact-form" class="btn btn-lg btn-info" role="button">Ask subject expert</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="white-bg">
						<div class="fc-line"> <img src="<?php echo BASE_URL_IMG;?>fc-line.png"> </div>
						<div class="en-sol-img"> <img src="<?php echo BASE_URL_IMG;?>managedservice_inside.jpg" alt="enterprise solutions image"> </div>
					</div>
				</div>
			</div>
		</section>
		<section class="ty-sol clearfix">
			<div class="col-md-8 col-sm-8 padding0 bg-col tpadding100 bpadding30 clearfix">
				<div class="sub-sol clearfix sub-sol1">
					<div class="col-md-10 col-md-offset-1">
						<h2>We offer the following services:</h2>

						<div class="col-md-6 solutions">
							<div class="row">
								<ul>
									<li><span>Managed Services</span>
									</li>
									<li><span>AMC/Break-fix</span>
									</li>
									<li><span>IT Support on Cloud</span>
									</li>
									<li><span>Hiring IT Professionals</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 solutions">
							<div class="row">
								<ul>
									<li><span>Managed Printing Services</span>
									</li>
									<li><span>Mobile Device Management</span>
									</li>
									<li><span>Audit, Shifting and Custom projects</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="sub-sol clearfix bpadding0">
					<div class="col-md-10 col-md-offset-1">
						<div class="col-md-12">
							<div class="row">
								<h2>Managed Services</h2>
								<p>Organizations today need manpower and technology resources that could not only maintain and manage their IT infrastructure, but also manage the dynamic expectations their businesses have from IT. With almost all operations getting automated, it’s critical for them to keep the infrastructure up and running.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="sub-sol bpadding0 clearfix">
					<div class="col-md-10 col-md-offset-1">
						<div class="col-md-12">
							<div class="row">
								<h2>Managed Print Services</h2>
								<h3>We make printing secure, green and waste-free.</h3>
								<p>Today, printing happens to be an important and critical part of most businesses. At the same time, printing costs constitute a significant part of the total cost. Our Managed Print Services (MPS) are designed to manage all the printing needs of organizations in the most efficient and cost-effective manner.</p>

								<div class="col-md-6">
									<div class="row">
										<ul>
											<li><span>Pay per print - zero Capex solution</span>
											</li>
											<li><span>Guaranteed cost and waste reduction</span>
											</li>
											<li><span>Software Controlled & highly secure printing</span>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-6">
									<ul>
										<li><span>Multifunction Printers</span>
										</li>
										<li><span>Scanners and Accessories</span>
										</li>
										<li><span>Secure and Mobile Printing</span>
										</li>
									</ul>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="sub-sol clearfix bpadding0">
					<div class="col-md-10 col-md-offset-1">
						<div class="col-md-12">
							<div class="row">
								<h2>Annual Maintenance Services</h2>
								<p>Businesses today are highly dependent on IT. Any interruption in IT means loss of productivity and in many cases loss of revenues. Our hardware break-fix services not only ensure maximum possible availability of infrastructure with the help of preventive maintenance services, but also help bring the infrastructure back in the running mode as quickly as possible.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="sub-sol clearfix bpadding0">
					<div class="col-md-10 col-md-offset-1">
						<div class="col-md-12">
							<div class="row">
								<h2>Staff Augmentation Services</h2>
								<p>Every organization today needs technology resources to build and sustain its IT set-up. However, the biggest challenge that most organizations face today is finding the right resources, training them and retaining them.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="sub-sol clearfix">
					<div class="col-md-10 col-md-offset-1">
						<div class="col-md-12">
							<div class="row">
								<h2>Professional Services</h2>
								<p>We provide certified and experienced professionals for help-desk management, project management and IT infrastructure support.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 tpadding100 clearfix">
				<div class="row">
					<div class="white-bg">
						<div class="testimonial-sec" style="padding-top: 0">
							<p><img src="<?php echo BASE_URL_IMG;?>double-quotes.png" class="start-qoute">Team Computers is partner to our business IT<br> operations and our current engagement with<br> them is for managing the end user equipments’<br> across our branch offices, in the country. The<br> association with them is nearing a decade and<br> we are delighted with their overall services. We<br> wish them all success.<img src="<?php echo BASE_URL_IMG;?>double-quotes.png" class="end-qoute"><br><br> - Asst General Manager, City Union Bank</p>
						</div>
						<!--<div class="case-studies">
   		<a href="<?php echo BASE_URL_IMG;?>case-studies/Maruti Suzuki.1.pdf" target="_blank">Smart showroom, Maruti Suzuki</a>
  		<a href="<?php echo BASE_URL_IMG;?>case-studies/Novartis.pdf" target="_blank">More product detailing, Novartis India</a>
   	</div>-->
						<div class="client-sec clearfix">
							<div class="col-md-10">
								<div class="row">
									<h2>Clients</h2>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG;?>clients-logo/managed-services/aon.png" class="img-responsive">
									</div>
									<!--<div class="col-md-3">
   			<img src="<?php echo BASE_URL_IMG;?>clients-logo/managed-services/bluedart.png" class="img-responsive">
   		</div>
   		
   		</div>-->
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG;?>clients-logo/managed-services/dalmia.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG;?>clients-logo/managed-services/kpmg.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG;?>clients-logo/managed-services/ginger hotels.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG;?>clients-logo/managed-services/HDB.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG;?>clients-logo/managed-services/indian coast guard.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG;?>clients-logo/managed-services/pnb housing.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG;?>clients-logo/managed-services/tv today.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG;?>clients-logo/managed-services/rivigo.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG;?>clients-logo/managed-services/vishal megamart.png" class="img-responsive">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-3">
										<img src="<?php echo BASE_URL_IMG;?>clients-logo/managed-services/XL catlin.png" class="img-responsive">
									</div>
									<div class="clearfix"></div>
									<a href="our-team">See all our clients</a>
								</div>
							</div>

						</div>
						<div class="industries-sec clearfix">
							<div class="col-md-9">
								<div class="row">
									<h2>Industries</h2>
									<div class="col-md-6">
										<div class="row">
											<ul>
												<li><span>Construction</span>
												</li>
												<li><span>Automobile</span>
												</li>
												<li><span>Insurance</span>
												</li>
												<li><span>Media</span>
												</li>
												<li><span>Consulting</span>
												</li>
												<li><span>Hospitality</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<ul>
												<li><span>Government/PSU</span>
												</li>
												<li><span>Education</span>
												</li>
												<li><span>IT</span>
												</li>
												<li><span>Banking</span>
												</li>
												<li><span>Manufacturing</span>
												</li>
												<li><span>Electronics</span>
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
		<section class="con-now-cover">
			<div class="con-now">
				<div class="container">
					<h1><em>Get in touch with our Managed Services expert.</em><br><br> <a href="/managed-services-contact-form" class="btn btn-lg btn-info" role="button">Consult now</a></h1>
				</div>
			</div>
		</section>
		<section class="other-sol">
			<div class="container">
				<div class="row">
					<h1>Related Solutions</h1>
					<div class="col-md-3 col-sm-6 cmn-mar col-xs-12">
						<div class="rel-cmn-bx">
							<a href="business-analytics"> <img src="<?php echo BASE_URL_IMG;?>analytics.jpg" alt="other solution image" class="img-responsive">
          <h2>Business <br> Analytics</h2></a>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 cmn-mar col-xs-12">
						<div class="rel-cmn-bx">
							<a href="cloud-services"> <img src="<?php echo BASE_URL_IMG;?>movingtocloud_inside.jpg" alt="other solution image" class="img-responsive">
			 <h2>Cloud <br> Services</h2></a>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 cmn-mar col-xs-12">
						<div class="rel-cmn-bx">
							<a href="infrastructure-solutions"> <img src="<?php echo BASE_URL_IMG;?>enterprise_inside.jpg" alt="other solution image" class="img-responsive">
			 <h2>Infrastructure <br> Solutions</h2></a>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 cmn-mar col-xs-12">
						<div class="rel-cmn-bx">
							<a href="apps-and-mobility"> <img src="<?php echo BASE_URL_IMG;?>apps-and-mobility.jpg" alt="other solution image" class="img-responsive">
			 <h2>Apps & <br> Mobility</h2></a>
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
	<script type="text/javascript" src="<?php echo BASE_URL_JS;?>custom.min.js"></script>
	<script language='JavaScript' type='text/javascript'>
		function refreshCaptcha() {
			var img = document.images[ 'captchaimg' ];
			img.src = img.src.substring( 0, img.src.lastIndexOf( "?" ) ) + "?rand=" + Math.random() * 1000;
		}
	</script>
</body>

</html>