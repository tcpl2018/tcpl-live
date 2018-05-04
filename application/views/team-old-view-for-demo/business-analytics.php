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
	$mailSubject = "Inquiry from Teamcomputers website: Business Analytics " . $date_time . "";
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
		echo "<script>window.location.href='/business-analytics-success';</script>";

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
	<title>Business Data Analytics &amp; Visualization Tools | Team Computers</title>
	<meta name="description" content="We do mobile ready analytics for Auto, Insurance, BFSI & other industries. We power our customers with: Tableau, Alteryx, Google & more. Visit us."/>
	<meta name="keywords" content="Business Data Analytics, Data Visualization Tools, BI Tool, Business Intelligence Tool"/>
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
				<h1 class="col-md-12">Business Analytics</h1>
			</div>
		</section>
		<section class="about-sol">
			<div class="col-md-8">
				<div class="row">
					<div class="abt-ent-sol">
						<div class="container">
							<div class="col-md-8 col-md-offset-1">
								<p>Large quantities of structured data are housed in corporate ERP and CRM systems. Similarly, a huge amount of unstructured data is available through digital platforms such as Social media, reports, whitepapers and articles.<br> We help our customers make sense of this data. With an implementation of over 400 projects in the past 10 years in India and overseas, we have supported and enabled our clients in their journey from data to information to actionable insights.
								</p>
								<br>
								<a href="/business-analytics-contact-form" class="btn btn-lg btn-info" role="button">Ask the consultant</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="white-bg">
						<div class="fc-line"> <img src="<?php echo BASE_URL_IMG;?>fc-line.png"> </div>
						<div class="en-sol-img"> <img src="<?php echo BASE_URL_IMG;?>business-analytics.jpg" alt="enterprise solutions image"> </div>
					</div>
				</div>
			</div>
		</section>
		<section class="ty-sol clearfix">
			<div class="col-md-8 col-sm-8 padding0 bg-col tpadding100 bpadding30 clearfix busi-ana">
				<div class="sub-sol clearfix sub-sol1 ba">
					<div class="col-md-10 col-md-offset-1">
						<h1>Unleashing Capabilities: Big Data</h1>
						<h2>Move from lagging indicators to leading indicators</h2>
						<br>
						<img src="<?php echo BASE_URL_IMG;?>ba-diagram.png" class="img-responsive"><br>
						<p>Data capturing is becoming easier and cheaper. The value of data is adding to organization’s growth. Correspondingly, the unstructured data is becoming easily available and ready to be integrated into businesses. <br><br> We bring these varied sources of data together through the best of technologies. This has the power to fuel your journey towards performance improvement.</p><br><br>
					</div>
				</div>
				<div class="sub-sol clearfix sub-sol1 ba ba-h">
					<div class="col-md-11 col-md-offset-1">
						<h1>Process</h1>
						<div class="process-bar"></div>
						<div class="circle-cover">
						<div class="green-circle1"></div>
						<div class="green-circle2"></div>
						<div class="green-circle3"></div>
						<div class="green-circle4"></div>
						</div>
						<div class="col-md-3 col-sm-3">
							<h2>Studying<br> Business Context<br> and IT Setup</h2>
							<ul>
								<li><span>Analytical requirements</span>
								</li>
								<li><span>Study the Hardware, Software & Business Processes</span>
								</li>
								<li><span>Identify Structured & Unstructured data sources</span>
								</li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-3">
							<h2>The Analytical Process</h2>
							<ul>
								<li><span>Bridge Data Gaps by integrating multiple data sources</span>
								</li>
								<li><span>Data Modeling for effective computation</span>
								</li>
								<li><span>Visualization for easy interpretation</span>
								</li>
								<li><span>Security & Governance</span>
								</li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-3">
							<h2>Analytics for a Smarter Workforce</h2>
							<ul>
								<li><span>Drive business by an informed workforce</span>
								</li>
								<li><span>Insights made available on mobile</span>
								</li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-3">
							<h2>Self Learning Solutions</h2>
							<ul>
								<li><span>Personalize your usage patterns</span>
								</li>
								<li><span>Identify multiple external sources that add to the KPIs</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>




			<div class="col-md-4 col-sm-4 tpadding100 clearfix">
				<div class="row">
					<div class="white-bg">
						<div class="testimonial-sec" style="padding-top: 0">
							<p><img src="<?php echo BASE_URL_IMG;?>double-quotes.png" class="start-qoute">The dedicated effort by your team has helped <br>us fine tune the analytical dashboards so that<br> end-users can see the considerable business<br> value in it. fine tune the analytical dashboards <br>so that end-users can see the considerable <br>business value in it.<img src="<?php echo BASE_URL_IMG;?>double-quotes.png" class="end-qoute"><br>
								<br> - Sr. Vice President IT, of the most favorite<br> cars manufacturer of India</p>
						</div>

						<div class="case-studies">
							<h2>Case studies</h2>
							<a href="<?php echo BASE_URL_IMG;?>case-studies/book my show april27.pdf" target="_blank">Analyzing Customer Behavior by Alteryx, Bookmyshow</a>
							<!--<a href="<?php echo BASE_URL_IMG;?>case-studies/Maruti Suzuki India.pdf" target="_blank">Bridging the gaps between stakeholders, Maruti Suzuki India Limited</a>-->
						</div>

						<div class="client-sec clearfix">
							<div class="col-md-10">
								<div class="row">
									<h2>Clients</h2>
									<div class="col-md-3 col-sm-3 col-xs-3"> <img src="<?php echo BASE_URL_IMG;?>clients-logo/analytics/Aditya Birla Group.png" class="img-responsive"> </div>
									<div class="col-md-3 col-sm-3 col-xs-3"> <img src="<?php echo BASE_URL_IMG;?>clients-logo/analytics/Honda.png" class="img-responsive"> </div>
									<div class="col-md-3 col-sm-3 col-xs-3"> <img src="<?php echo BASE_URL_IMG;?>clients-logo/analytics/Escorts.png" class="img-responsive"> </div>
									<div class="col-md-3 col-sm-3 col-xs-3"> <img src="<?php echo BASE_URL_IMG;?>clients-logo/analytics/HDFC Life.png" class="img-responsive"> </div>
									<div class="col-md-3 col-sm-3 col-xs-3"> <img src="<?php echo BASE_URL_IMG;?>clients-logo/analytics/Mahindra.png" class="img-responsive"> </div>
									<div class="col-md-3 col-sm-3 col-xs-3"> <img src="<?php echo BASE_URL_IMG;?>clients-logo/analytics/Maruti Suzuki.png" class="img-responsive"> </div>
									<div class="col-md-3 col-sm-3 col-xs-3"> <img src="<?php echo BASE_URL_IMG;?>clients-logo/analytics/Mercedes Benz.png" class="img-responsive"> </div>
									<div class="col-md-3 col-sm-3 col-xs-3"> <img src="<?php echo BASE_URL_IMG;?>clients-logo/analytics/Dalmia Cement.png" class="img-responsive"> </div>
									<div class="col-md-3 col-sm-3 col-xs-3"> <img src="<?php echo BASE_URL_IMG;?>clients-logo/analytics/valvoline.jpg" class="img-responsive"> </div>
									<div class="col-md-3 col-sm-3 col-xs-3"> <img src="<?php echo BASE_URL_IMG;?>clients-logo/analytics/SBI Life.png" class="img-responsive"> </div>
									<div class="col-md-3 col-sm-3 col-xs-3"> <img src="<?php echo BASE_URL_IMG;?>clients-logo/analytics/Whirlpool.png" class="img-responsive"> </div>
									<div class="col-md-3 col-sm-3 col-xs-3"> <img src="<?php echo BASE_URL_IMG;?>clients-logo/analytics/Pansonic.png" class="img-responsive"> </div>
									<div class="clearfix"></div>
									<a href="our-team">See all our clients</a> </div>
							</div>
						</div>
						<!--<div class="industries-sec clearfix">
   	<div class="col-md-9">
   		<div class="row">
   		<h2>Industries</h2>
   			<div class="col-md-6">
   				<div class="row">
   					<ul>
   						<li><span>Pharmaceutical</span></li>
   						<li><span>Banking</span></li>
   						<li><span>Insurance</span></li>
   						
   					</ul>
   				</div>
   			</div>
   			<div class="col-md-6">
   				<div class="row">
   					<ul>
   						<li><span>Manufacturing</span></li>
   						<li><span>Consumer goods</span></li>
   						
   					</ul>
   				</div>
   			</div>
   		</div>
   	</div>
   		
   	</div>-->
						<div class="partners-sec clearfix">
							<div class="col-md-10">
								<div class="row">
									<h2>Partners & Platforms</h2>
									<div class="col-md-3 col-sm-3 col-xs-3"> <img src="<?php echo BASE_URL_IMG;?>partners-logo/analytics/alteryx.png" class="img-responsive"> </div>
									<div class="col-md-3 col-sm-3 col-xs-3"> <img src="<?php echo BASE_URL_IMG;?>partners-logo/analytics/ibm.png" class="img-responsive"> </div>
									<div class="col-md-3 col-sm-3 col-xs-3"> <img src="<?php echo BASE_URL_IMG;?>partners-logo/analytics/Qlik.png" class="img-responsive"> </div>
									<div class="col-md-3 col-sm-6 col-xs-12"> <img src="<?php echo BASE_URL_IMG;?>partners-logo/analytics/tableau.jpg" class="img-responsive"> </div>
									<div class="clearfix"></div>
									<a href="our-team">See all our partners</a> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="ba-prod">
			<div class="sub-sol clearfix sub-sol1 ba">
				<div class="container">
					<h1>Our Products</h1>
					<div class="col-md-4 col-sm-5 qinsure-cov">
						<a href="https://www.teamcomputers.com/qinsure/"><img src="<?php echo BASE_URL_IMG;?>dashboard-laptop-img.png" class="img-responsive"></a>
					</div>
					<div class="col-md-8 col-sm-7">
						<a href="https://www.teamcomputers.com/qinsure/"><h2 style="padding-top: 30px">Q-insure</h2></a>
						<p><a href="https://www.teamcomputers.com/qinsure/"><span style="color: #00aac4">Q-insure</span></a> is a one stop solution for all the stakeholders to individually and collectively achieve their topline.<br> <br>
It fits smoothly into the existing IT infrastructure and aims to equip all verticals of your business with the visibility they need for guaranteed performance improvement. <br><br>
All of this without the huge investment in terms of time and resources at your end.
						</p>
					</div>
				</div>


			</div>
		</section>
		<section class="ba-prod wht-new">
			<div class="sub-sol clearfix sub-sol1 ba">
				<div class="container">
					<h1>What's New</h1>
					<div class="col-md-4 col-sm-4">
						<img src="<?php echo BASE_URL_IMG;?>phone-keyboard-img.png" class="img-responsive">
						<h2>Analytics on chat</h2>
						<p>Analytics. Anytime. Anywhere.</p>
						<p>Talk to your data directly, no human intervention required.</p>
						<p>A continuously evolving solution to suit your viewing habits and preferences.</p>
					</div>
					<div class="col-md-4 col-sm-4 clearfix">
						<img src="<?php echo BASE_URL_IMG;?>location-with-road.png" class="img-responsive">
						<h2>Enhance your insights with Geoanalytics.</h2>
						<p>Optimize the transport routes to save on logistic costs.</p>
						<p>Identify untapped sales potential by combining demographic data with existing coverage maps.</p>
						<p>Optimize the opening of your bank’s branch sites.</p>
					</div>
					<div class="col-md-4 col-sm-4">
						<img src="<?php echo BASE_URL_IMG;?>wire-img.png" class="img-responsive" style="padding-top: 28px">
						<h2>Complement your transactional data with unstructured data.</h2>
						<p>Combine your internal data with CRM data and external data to anticipate sales and categorize leads into hot, warm and cold.</p>
						<p>Combine demographic and income data with ERP and CRM data to find out where sales potential is maximum.</p>
					</div>
					
				</div>


			</div>
		</section>
		<section class="con-now-cover">
			<div class="con-now">
				<div class="container">
					<h1><em>Get in touch with our Business Analytics expert.</em><br><br> <a href="/business-analytics-contact-form" class="btn btn-lg btn-info" role="button">Consult now</a></h1>
				</div>
			</div>
		</section>
		<section class="other-sol">
			<div class="container">
				<div class="row">
					<h1>Related Solutions</h1>
					<div class="col-md-3 col-sm-3 cmn-mar col-xs-12">
						<div class="rel-cmn-bx">
							<a href="infrastructure-solutions"> <img src="<?php echo BASE_URL_IMG;?>enterprise_inside.jpg" alt="other solution image" class="img-responsive">
          <h2>Infrastructure <br> Solutions</h2></a>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 cmn-mar col-xs-12">
						<div class="rel-cmn-bx">
							<a href="cloud-services"> <img src="<?php echo BASE_URL_IMG;?>movingtocloud_inside.jpg" alt="other solution image" class="img-responsive">
			 <h2>Cloud <br> Services</h2></a>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 cmn-mar col-xs-12">
						<div class="rel-cmn-bx">
							<a href="apps-and-mobility"> <img src="<?php echo BASE_URL_IMG;?>apps-and-mobility.jpg" alt="other solution image" class="img-responsive">
			 <h2>Apps & <br> Mobility</h2></a>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 cmn-mar col-xs-12">
						<div class="rel-cmn-bx">
							<a href="managed-services"> <img src="<?php echo BASE_URL_IMG;?>managed-services.jpg" alt="other solution image" class="img-responsive">
			 <h2>Managed <br> Services</h2></a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<?php include("include/footer.php");?>
	<div class="form-group" style="margin: 0">
		<button class="g-recaptcha" data-sitekey="6Le3cB8UAAAAAL1oq7FWoNkpYFsKGdWbZOGimJes" data-callback="YourOnSubmitFn" style="display: none;"></button>
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