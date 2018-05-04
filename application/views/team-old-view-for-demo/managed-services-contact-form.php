<?php
$date_time = date( "d-m-Y h:i:sa" );
if ( isset( $_POST[ 'action' ] ) && $_POST[ 'action' ] == "contact1" ) {
	//echo "<pre>"; print_r($_POST) ;  echo "</pre>";exit();
	$Name = $_POST[ 'name' ];
	$message = $_POST[ 'message'];
	if (empty($Name)) {
		$_SESSION[ 'msgs' ] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Please Enter Your Name</b></div>';
	}elseif ( empty( $_POST[ 'phone' ] ) ) {
		$_SESSION[ 'msgs' ] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Please Enter Valid Phone No.</b></div>';
	} elseif ( !preg_match( '/[2-9]{2}\d{8}/', $_POST[ 'phone' ] ) ) {
		$_SESSION[ 'msgs' ] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Enter Min 10 Numeric Value!</b></div>';
	} elseif ( empty( $_POST[ 'email' ] ) ) {

		$_SESSION[ 'msgs' ] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Please Enter Your Email</b></div>';

	} elseif ( !filter_var( $_POST[ 'email' ], FILTER_VALIDATE_EMAIL ) ) {

		$_SESSION[ 'msgs' ] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Please Enter Your Valid Email</b></div>';

	} elseif ( empty( $_POST[ 'enquiry' ] ) ) {

		$_SESSION[ 'msgs' ] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Please Select a Solution Type</b></div>';
	} elseif ( empty( $_POST[ 'message' ] ) ) {

		$_SESSION[ 'msgs' ] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Please write message</b></div>';
	}elseif ( empty( $_POST[ 'letters_code' ] ) ) {

		$_SESSION[ 'msgs' ] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Please Enter Captcha Code</b></div>';

	} elseif ( isset( $_POST[ "letters_code" ] ) && ( $_SESSION[ "6_letters_code" ] != $_POST[ "letters_code" ] ) )

	{

		$_SESSION[ 'msgs' ] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Please Enter Correct Captcha Code</b></div>';

	} else {
		$mailTo = 'social@teamcomputers.com,sandeep.saini@teamcomputers.com,salim.ansari@teamcomputers.com';
		//$mailTo = 'salim.ansari@teamcomputers.com,sandeep.saini@teamcomputers.com';
		//$mailCC = ADMIN_EMAIL_CC;
		//Mail Configuration
		$mailSubject = "Inquiry from Teamcomputers website: Managed Services Page " . $date_time . "";
		$mailBodyHeader = "The Details are given below:";
		$mailBodyFooter = "<b>Regards<br>Support Team<br>Team Computers Pvt. Ltd. </b>";
		/////////////////////////////////////////////////////////////
		//Mail Sender
		$mailFromName = $_POST[ 'name' ];
		$mailFrom = $_POST[ 'email' ];
		/////////////////////////////////////////////////////////////
		//Mail Body
		$mailBody = "
<!DOCTYPE html'>
<html>
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

    <th width='138' align='left' valign='top' scope='row'>Name</th>

    <td align='left' valign='top'>: " . $_POST[ 'name' ] . "</td>

  </tr>

  <tr>

    <th width='138' align='left' valign='top' scope='row'>Email</th>

    <td align='left' valign='top'>: " . $_POST[ 'email' ] . "</td>

  </tr>

  <tr>

    <th width='138' align='left' valign='top' scope='row'>Contact No.</th>

    <td align='left' valign='top'>: " . $_POST[ 'phone' ] . "</td>

  </tr><tr>

    <th width='138' align='left' valign='top' scope='row'>Select a Solution</th>

    <td align='left' valign='top'>: " . $_POST[ 'enquiry' ] . "</td>

  </tr><tr>

    <th width='138' align='left' valign='top' scope='row'>Organisation</th>

    <td align='left' valign='top'>: " . $_POST[ 'organisation' ] . "</td>

  </tr>

  <tr>

    <th align='left' valign='top' scope='row'>Message</th>

    <td align='left' valign='top'>: " . $_POST[ 'message' ] . "</td>
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
			//$sql = "INSERT INTO contact_email(cnt_name,cnt_phnno,cnt_email,cnt_message,status) VALUES('".$_POST['name']."','".$_POST['contact']."','".$_POST['email']."','".$_POST['message']."',1)";
			//runQuery($db,$sql);
			echo "<script>window.location.href='/managed-services-success';</script>";
		} else {

			$_SESSION[ 'msgs' ] = '<div class="alert-box error" style="font-size:14px;"><span>Error: </span><b>Error While Sending Mail, Please Try After Sometime</b></div>';
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Welcome to Team Computers Pvt Ltd</title>
	<link rel="shortcut icon" href="../image/favicon.png"/>

	<!-- font awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Roboto:300,400,500,700,900" rel="stylesheet">
	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Custom styles -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<link rel="stylesheet" href="<?php echo BASE_URL_CSS;?>reset.css">
	<link rel="stylesheet" href="<?php echo BASE_URL_CSS;?>style.css">
	<link rel="stylesheet" href="<?php echo BASE_URL_CSS;?>style-responsive.css">
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
				<h1>Contact <span><em>Managed Services</em></span></h1>
			</div>
		</section>
		<section class="ty-sol inner-cont clearfix">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-8 padding0 bg-col tpadding25 bpadding30 clearfix">
						<div class="sub-sol clearfix sub-sol1">
							<div class="col-md-11">
								<form role="form" id="contact" name="contact" method="post" class="contact-form">
									<?php echo msgs();?>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Name<sup style="color:red; font-size:14px;">*</sup></label>
												<input type="text" id="inputName" name="name" class="form-control" autocomplete="off" placeholder="Name" value="<?php if(isset($_POST['name']) && !empty($_POST['name'])){ echo $_POST['name']; }?>">

											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Phone Number<sup style="color:red; font-size:14px;">*</sup></label>
												<input type="text" id="inputContact" name="phone" number="true" class="form-control" autocomplete="off" placeholder="Phone" value="<?php if(isset($_POST['phone']) && !empty($_POST['phone'])){ echo $_POST['phone']; }?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Email<sup style="color:red; font-size:14px;">*</sup></label>
												<input type="email" id="inputEmail" name="email" email="true" class="form-control" autocomplete="off" placeholder="E-mail" value="<?php if(isset($_POST['email']) && !empty($_POST['email'])){ echo $_POST['email']; }?>" required email="true">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Your Organisation</label>
												<input type="text" id="inputorganization" name="organisation" class="form-control" value="<?php if(isset($_POST['organisation']) && !empty($_POST['organisation'])){ echo $_POST['organisation']; }?>" autocomplete="off" placeholder="Your Organisation">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Select a Solution<sup style="color:red; font-size:14px;">*</sup></label>
												<select class="form-control" name="enquiry">
													<option selected="" value="">Select a Solution</option>
													<option value="Managed_Print_Services" <?php if($_POST[ 'enquiry']=="Managed_Print_Services" ) echo "selected"; ?>>Managed Print Services</option>
													<option value="Incident_free_Managed_Services" <?php if($_POST[ 'enquiry']=="Incident_free_Managed_Services" ) echo "selected"; ?>>Incident free Managed Services</option>
													<option value="Annual_Maintenance_Services" <?php if($_POST[ 'enquiry']=="Annual_Maintenance_Services" ) echo "selected"; ?>>Annual Maintenance Services</option>
													<option value="Staff_Augmentation_or_Professional_Services" <?php if($_POST[ 'enquiry']=="Staff_Augmentation_or_Professional_Services" ) echo "selected"; ?>>Staff Augmentation or Professional Services</option>
													<option value="Others" <?php if($_POST[ 'enquiry']=="Others" ) echo "selected"; ?>>Others</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Message<sup style="color:red; font-size:14px;">*</sup></label>
												<textarea class="form-control textarea" name="message" placeholder="Message" row="2"><?php if(isset($_POST['message']) && !empty($_POST['message'])){ echo $_POST['message']; }?></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-5 capcha-box">
											<div class="form-group">
												<label for="name" class="nameLabel"><img src="captcha/captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' style="border: 1px solid #00aac4;vertical-align: top;margin-right: 10px;"><a href='javascript: refreshCaptcha();'><span style="color: #65757D; font-size: 11px; vertical-align: top; display: inline-block"><i class="fa fa-refresh" aria-hidden="true"></i> Refresh here</span></a></label>
												<input type="text" class="form-control" id="letters_code" name="letters_code" value="<?php if(isset($_POST['letters_code']) && !empty($_POST['letters_code'])){ echo $_POST['letters_code']; }?>" maxlength="7" placeholder="Enter Captcha..">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="button-group">
												<button type="submit" name="action" value="contact1" class="btn btn-primary col-md-3 col-md-offset-2">Submit</button>
												<input type="reset" class="btn btn-danger shape square col-md-3 col-md-offset-2" value="Reset">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 tpadding50 clearfix cli-part-box">
						<div class="row">
							<div class="white-bg">
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
											<div class="col-md-3">
												<img src="<?php echo BASE_URL_IMG;?>clients-logo/managed-services/ginger hotels.png" class="img-responsive">
											</div>
											<div class="col-md-3">
												<img src="<?php echo BASE_URL_IMG;?>clients-logo/managed-services/HDB.png" class="img-responsive">
											</div>
											<div class="col-md-3">
												<img src="<?php echo BASE_URL_IMG;?>clients-logo/managed-services/indian coast guard.png" class="img-responsive">
											</div>
											<div class="col-md-3">
												<img src="<?php echo BASE_URL_IMG;?>clients-logo/managed-services/pnb housing.png" class="img-responsive">
											</div>
											<div class="col-md-3 col-sm-3 col-xs-3">
												<img src="<?php echo BASE_URL_IMG;?>clients-logo/managed-services/tv today.png" class="img-responsive">
											</div>
											<div class="col-md-3 col-sm-3 col-xs-3">
												<img src="<?php echo BASE_URL_IMG;?>clients-logo/managed-services/rivigo.png" class="img-responsive">
											</div>
											<div class="col-md-3">
												<img src="<?php echo BASE_URL_IMG;?>clients-logo/managed-services/vishal megamart.png" class="img-responsive">
											</div>
											<div class="col-md-3">
												<img src="<?php echo BASE_URL_IMG;?>clients-logo/managed-services/XL catlin.png" class="img-responsive">
											</div>
											<div class="clearfix"></div>
											<a href="our-team">See all our clients</a>
										</div>
									</div>

								</div>
								<!--<div class="partners-sec clearfix">
   	<div class="col-md-10">
   		<div class="row">
   		<h2>Partners</h2>
   		<div class="col-md-3">
   			<img src="<?php echo BASE_URL_IMG;?>partners-logo/mobility/airwatch.png" class="img-responsive">
   		</div>
   		<div class="col-md-3">
   			<img src="<?php echo BASE_URL_IMG;?>partners-logo/mobility/apple.png" class="img-responsive">
   		</div>
   		<div class="col-md-3">
   			<img src="<?php echo BASE_URL_IMG;?>partners-logo/mobility/dell.png" class="img-responsive">
   		</div>
   		<div class="col-md-3">
   			<img src="<?php echo BASE_URL_IMG;?>partners-logo/mobility/IBM.png" class="img-responsive">
   		</div>
   		<div class="col-md-3">
   			<img src="<?php echo BASE_URL_IMG;?>partners-logo/mobility/ibm.png" class="img-responsive">
   		</div>
   		<div class="col-md-3">
   			<img src="<?php echo BASE_URL_IMG;?>partners-logo/mobility/lenovo.png" class="img-responsive">
   		</div>
   		<div class="col-md-3">
   			<img src="<?php echo BASE_URL_IMG;?>partners-logo/mobility/MaaS360.png" class="img-responsive">
   		</div>
   		<div class="col-md-3">
   			<img src="<?php echo BASE_URL_IMG;?>partners-logo/mobility/samsung.png" class="img-responsive">
   		</div>
   		<div class="col-md-3">
   			<img src="<?php echo BASE_URL_IMG;?>partners-logo/mobility/SOTI.png" class="img-responsive">
   		</div>
   		<div class="clearfix"></div>
   		<a href="our-partners">See all our partners</a>
   		</div>
   	</div>
   		
   	</div>-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<?php include("include/footer.php");?>

	<!-- BEGIN # MODAL LOGIN -->
	<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<!--<img id="img_logo" src="images/team-logo.png">-->
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				




				</div>

				<!-- Begin # DIV Form -->

				<!-- End # DIV Form -->

			</div>
		</div>
	</div>
	<!-- END # MODAL LOGIN -->
	<!--<div class="form-group">
		<button class="g-recaptcha" data-sitekey="6Le3cB8UAAAAAL1oq7FWoNkpYFsKGdWbZOGimJes" data-callback="YourOnSubmitFn" style="display: none;">
							</button>
	
	</div>-->
	<!-- jquery JS -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Bootstrap js -->
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<!-- Propeller textfield js -->
	<script type="text/javascript" src="http://propeller.in/components/textfield/js/textfield.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL_CSS;?>custom.js"></script>
	<script src="<?php echo BASE_URL_JS; ?>validate.js"></script>
	<script language='JavaScript' type='text/javascript'>
		function refreshCaptcha() {
			var img = document.images[ 'captchaimg' ];
			img.src = img.src.substring( 0, img.src.lastIndexOf( "?" ) ) + "?rand=" + Math.random() * 1000;
		}
	</script>
	<!--
	<script type="text/javascript">
		$( document ).ready( function () {

			$( "#myForm" ).validate();

		} );
	</script>
-->
</body>

</html>