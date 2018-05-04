<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="3;url=https://www.teamcomputers.com/analytics-event" />
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Success Page - Team Computers Pvt. Ltd.</title>
	<link rel="shortcut icon" href="../image/favicon.png"/>
	<!-- font awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Roboto:300,400,500,700,900" rel="stylesheet">
	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Custom styles -->

	<link rel="stylesheet" href="<?php echo BASE_URL_CSS; ?>reset.css">
	<link rel="stylesheet" href="<?php echo BASE_URL_CSS; ?>style.css">
	<link rel="stylesheet" href="<?php echo BASE_URL_CSS; ?>style-responsive.css">
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
			<?php include("include/inc_nav.php"); ?>
			<!-- end .navbar -->
		</div>
	</header>s
	<div class="clearfix"></div>
	<div class="body-content innner-body-con">
		<!--<section class="solutions-banner clearfix">
    <div class="container">
		<h1>Thank You</h1>
    </div>
  </section>-->

		<section class="thank-you" style="margin-bottom: 20px;">
			<div class="container">
				<div class="row">
					<div class="thank-img-bx">
						<i class="fa fa-check"></i>
					</div>
					<h1 class="col-md-12">Thank you!</h1>
					<p>Your submission is received and we will contact you soon.</p>
					<p>You will be redirected back in 3 seconds...</p>
				</div>
			</div>
		</section>


	</div>
	    
	<footer style="position: absolute;right: 0;bottom: 0;left: 0;">
		<div class="footer-top-sec clearfix">
			<div class="container">
				<div class="row">
					<ul class="col-md-8 footer-menu">
						<li><a href="contact">Contact</a>
						</li>
						<li><a href="event">Events</a>
						</li>
						<!--<li><a href="#">Blog</a></li>-->
						<li><a href="careers">Careers</a>
						</li>
					</ul>
					<ul class="col-md-4 social-box">
						<li><a href="https://www.glassdoor.co.in/Overview/Working-at-Team-Computers-EI_IE512355.11,25.htm" target="_blank" title="Glassdoor"><img src="<?php echo BASE_URL_IMG; ?>glassdoor-logo.png" alt="glassdoor logo"></a>
						</li>
						<li><a href="https://www.facebook.com/ConnectwithTeam/" class="facbook-box cmn-prop" target="_blank"></a>
						</li>
						<li><a href="https://www.linkedin.com/company/team-computers" class="linkedin-box cmn-prop" target="_blank"></a>
						</li>
						<li><a href="https://www.youtube.com/user/teamcomputerschannel" class="youtube-box cmn-prop" target="_blank"></a>
						</li>
						<li><a href="https://twitter.com/_teamcomputers" class="twitter-box cmn-prop" target="_blank"></a>
						</li>
					</ul>
					<ul class="col-md-12 lgl-pp">
						<li><a href="legal-disclaimer">Legal Disclaimer</a>
						</li>
						<li><a href="privacy-policy">Privacy Policy</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-bottom-sec">
			<p>Team Computers Pvt. Ltd. © <?php echo date('Y');?> &nbsp; | &nbsp; All rights reserved.</p>
		</div>
	</footer>
	<!-- jquery JS -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Bootstrap js -->
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<!-- Propeller textfield js -->
	<script type="text/javascript" src="http://propeller.in/components/textfield/js/textfield.js"></script>

	<script type="text/javascript" src="<?php echo BASE_URL_JS; ?>custom.js"></script>
</body>

</html>