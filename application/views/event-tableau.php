<?php
//$page_name = 'contact';

$timezone = new DateTimeZone("Asia/Kolkata" );
$date = new DateTime();
$date->setTimezone($timezone );

// Get Days, Hour, Minute, Seconds from target date
$start  = date_create('2018-04-19');
$end 	= date_create(); // Current time and date
$diff  	= date_diff( $start, $end);

// echo  $diff->y . ' years, ';
// echo  $diff->m . ' months, ';
$diff->d . ' days, ';
$diff->h . ' hours, ';
$diff->i . ' minutes, ';
$diff->s . ' seconds';


//$currentServerDateTime = $date->format( 'l, jS F, Y H:i:s A' );
 
// $date1=date_create("2018-02-01,02:00:00");
// $date2=date_create("2018-01-19,05:02:00");
// $diff=date_diff($date1,$date2);
// echo $diff->format("%R%a");



//$date2 = $date->format( 'Y-m-d' );

//$date1 = "2018-02-09";


// $inputSeconds = strtotime($date1);


// $diff = abs(strtotime($date2) - strtotime($date1));

// $years = floor($diff / (365*60*60*24));
// $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
// $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
// $sec = floor($days * 86400);
 

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/favicon.png"/>
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Tableau Test Drive</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="fonts/fontello/css/fontello.css" rel="stylesheet">
	<!-- Bootstrap css-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="css/propeller.min.css" rel="stylesheet">
	<!-- Owl carousel css -->
	<link href="css/owl.carousel.min.css" rel="stylesheet">
	<link href="css/owl.theme.default.min.css" rel="stylesheet">
	<!-- fancy box css -->
	<link href="css/jquery.fancybox.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/style-responsive.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
	<style>
	label.error {
		color: #FF0000;
		font-size: 14px;
		font-weight: 500;
	}
	a:link {
    color: black;

	}
	/* visited link */
	a:visited {
	    color: blue;

	}
	/* mouse over link */
	a:hover {
	    color: blue;
	    text-decoration: none;
    	border-bottom: 1px solid green;
	}

	/* selected link */
	a:active {
	    color: black;
	}

</style>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KDW47BN');</script>
<!-- End Google Tag Manager -->
</head>

<body>

	<?php include 'include/header-event-alteryx.php';?>

	<section class="cmn-padd career-banner-cover alt-eve-cover-bg valigncenter">
		<div class="container">
			<div class="banner-content eve-ban-con">
				<h1>
					<!--<span>Friday | 23rd February, 2018 | 2 pm - 6 pm | Gurugram</span> -->
				<span><!-- Friday | 13th April, 2018 | 2 pm - 6 pm | Delhi<br> -->Thursday | 19th April, 2018 | 2 pm - 6 pm | Mumbai</span>
		  Build a Data Culture with Tableau 
		  </h1>
				<div id="wrapping">
					<div id="clock-ticker" class="clearfix">
						<div class="block">
							<span class="flip-top" id="numdays"><?php echo $diff->d; ?></span>
							<span class="flip-btm"></span>
							<div class="label">Days</div>
						</div>
						<div class="block">
							<span class="flip-top" id="numhours"><?php echo $diff->h; ?></span>
							<span class="flip-btm"></span>
							<div class="label">Hours</div>
						</div>
						<div class="block">
							<span class="flip-top" id="nummins"><?php echo $diff->i; ?></span>
							<span class="flip-btm"></span>
							<div class="label">Mins</div>
						</div>
						<div class="block">
							<span class="flip-top" id="numsecs"><?php echo $diff->s; ?></span>
							<span class="flip-btm"></span>
							<div class="label sec">Secs</div><br>
						</div>
					</div>
				</div>
				<button type="button" onclick="location.href='#BookYourSeat';" class="btn pmd-btn-outline pmd-ripple-effect btn-info">Book Your Seat</button>
			</div>
		</div>
	</section>
	<div class="clearfix"></div>
	<section class="cmn-padd get-in-tch key-con eve-alt-txt cmn-box">
		<div class="container">
			<h2 class="cmn-hdr">
		<span class="line-text">Behind every good decision is data</span>
			</h2>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="eve-det" style="font-family: 'roboto', sans-serif">
						<div class="main-p" style="font-family: 'roboto', sans-serif">
							<p>Getting the right data culture is imperative. Well, and what better way to achieve this than empowering your data scientists and business users with tools that allow them to get answers from their data, at lightning fast speed.</p>
							<p>Join us at our office to see first-hand how Tableau can help ask new questions, spot trends and help make data driven decisions on the fly with confidence.</p>
							<p style="margin-top:30px; margin-bottom:0"><strong>Now being held fortnightly!</strong>
							</p>
						</div>
						<div class="btn-box">
							<button type="button" class="btn pmd-ripple-effect btn-default" onclick="location.href='#BookYourSeat';"> Book Your Seat </button>
							<button type="button" onclick="location.href='#eventSpeakers';" class="btn pmd-ripple-effect btn-default"> Meet the Speaker </button>
						</div>



						<!--			  <p style="font-style: italic">As the seats are on first come first serve basis, please register at the earliest.</p>-->

					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<img src="images/event-lap-img.png" alt="laptop image" class="img-responsive">
				</div>

			</div>
			<div class="row eve-sub-sec">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<h3>Who should attend:</h3>
                    <ul>
						<li>Do you face a heavy reliance on your MIS team for your data needs?</li>
						<li>Do you struggle with frustratingly slow or insufficient reports?</li>
						<li>Are you spending hours in accumulating and formatting reports and have no energy left to gather insights?</li>
						<li>Do you have inadequate business intelligence tools for your needs?</li>
					</ul>
					<p>If your answer to the above questions is yes, then this Workshop is for you!</p>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<h3>Why Should you attend:</h3>

					<p>During the Test Drive, we will introduce you to Tableau and answer any questions you may have about its capabilities. You'll see first hand why Tableau is different from other data analytics solutions. You will also learn how to:</p>
					<ul>
						<li>Connect to your data and visualize your queries, all without writing a single line of code.</li>
						<li>Design and build great looking and impactful dashboards and reports.</li>
						<li>Quickly analyze, visualize and share information and publish your results.</li>
					</ul>


					<!--			  <p style="font-style: italic">As the seats are on first come first serve basis, please register at the earliest.</p>-->
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="down-sec">
						<p style="font-size:30px; margin-bottom:0px; color:#414141; font-we
                          500;"><strong>What do you need to do?</strong>
						</p>
						<p style="margin-top: 0px"><a href="https://www.tableau.com/products/trial?id=50492" style="color:#00abc5; font-weight:600" target="_blank">Download the 14-day free Tableau trial </a> and follow along with the live demonstration. </p>
					</div>
				</div>
			</div>


		</div>
	</section>
	<div class="clearfix"></div>
	<section class="we-are-hiring we-are-hiring-cmn valigncenter eve-testi get-in-tch">
		<div class="container">
			<div class="banner-content">
				<h2>Tableau makes it easy to make sense of my data, with so many marketing campaigns on, it's impossible to keep track of my KPIs without it.
      </h2>
				<p><span>-  Esha Tulsiani, Manager, ITC.</span><a style="margin: 0px!important;" name="eventSpeakers"></a>
				</p>
			</div>
		</div>
	</section>
	<div class="clearfix"></div>

	<section class="cmn-padd  key-con feedback-sec">

		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-lg-8">
					<h2 class="cmn-hdr1">
		      <span class="line-text" style="margin-left:0">Event Speakers</span>
	       </h2>
				
					<div class="speakers-det">
						<div class="row">
							<div class="col-md-4 col-xs-12">
								<img style="width: 190px;" src="images/Prithviraj-Chavan.png" alt="speker image">
							</div>
							<div class="col-md-8 col-xs-12 spek-det-txt">
								<p>Prithviraj Chavan</p>
								<p>Senior Tableau Consultant and Account Manager</p>
								<p style="line-height:1.5">Prithviraj is a skilled resource in Tableau handling both sales & pre-sales for Team Computers. He works with customers to ensure that a decision support project is delivered in accordance with customers’ expectations by understanding the desired solution and proving with the solution directed towards solving the pain point. He is Tableau partner sales certified.</p>
								<ul class="soc-icon-box eve-hd clearfix">
									<li><a href="https://www.facebook.com/prithviraj2cool?fref=search" target="_blank"><i class="fa fa-facebook"></i></a>
									</li>
									<!--					<li><a href="https://twitter.com/_teamcomputers" target="_blank"><i class="fa fa-twitter"></i></a></li>-->
									<li><a href="https://in.linkedin.com/in/prithvirajchavan" target="_blank"><i class="fa fa-linkedin"></i></a>
									</li>
									<!--					<li><a href=""><i class="demo-icon icon-gplus"></i></a></li>-->
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-lg-4">
					<p style="font-size:15px; font-weight:600; margin-bottom:40px;">Feedback received on our workshops</p>
					<div class="bar-cover">
						<div class="barWrapper">
							<span class="progressText"><B>Overall Rating</B></span>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
									<span class="popOver" data-toggle="tooltip" data-placement="top" title="8"> </span>
								</div>
							</div>
						</div>
						<div class="barWrapper">
							<span class="progressText"><B>Quality of Content</B></span>
							<div class="progress ">
								<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="">
									<span class="popOver" data-toggle="tooltip" data-placement="top" title="8"> </span>
								</div>

							</div>
						</div>
						<div class="barWrapper">
							<span class="progressText"><B>Quality of Trainer</B></span>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
									<span class="popOver" data-toggle="tooltip" data-placement="top" title="8"> </span>
								</div>
							</div>
						</div>
						<div class="barWrapper">
							<span class="progressText"><B>Usefulness of Tableau</B></span>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
									<span class="popOver" data-toggle="tooltip" data-placement="top" title="9"> </span>
								</div>
							</div>
						</div>
					</div>
				</div><a style="margin: 0px!important;" name="BookYourSeat"></a>
			</div>
		</div>
	</section>
	<div class="clearfix"></div>
	<section class="cmn-padd get-in-tch key-con cmn-box">
		<div class="container">
			<h2 class="cmn-hdr">
		<span class="line-text">Book your seat</span>
	</h2>
		
			<div class="row">
				<div class="col-md-7 col-sm-6 col-xs-12">
					<div class="map-sec">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120635.09205751197!2d72.84696175286555!3d19.114383232820288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xba189008e3a0878d!2sTeam+Computers+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1516617528301" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

						<h2>Gurugram</h2>
						<p>A Square Building, Plot no. 278, 2<sup>nd</sup> floor <br>
						Phase 2, Udhyog Vihar<br>
						Gurugram-122002<br>
						0124 - 3835700<br>
						<b><a tabindex="-1" href="https://www.google.co.in/maps/place/Team+Computers+Private+Limited/@28.508891,77.0852403,17z/data=!3m1!4b1!4m5!3m4!1s0x390d195b180061c3:0xbc2dc26222ba3801!8m2!3d28.508891!4d77.087429" style="border: 1px solid #000;padding: 3px;" target="_blank">Route Map</a></b>

					</p>
						


						<h2>Mumbai</h2>

						<p style="margin-bottom:0">Radha Rani Silk Mill Compound, 30 Parsi Panchayat Road, Andheri East, Jijamata Colony, Andheri East, Mumbai, Maharashtra 400069</p>
					</div>

				</div>
				<div class="col-md-5 col-sm-6 col-xs-12">
					<div class="con-form-cover eve-form-cover">
						<div class="cta-form" style="position: relative">
							<p>As the seats are on first come first serve basis, please register at the earliest.</p>
							<div class="form">
								<form id="contact" name="contact" method="post" class="contact-form" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>">
									<?php foreach ($errors as $error) { ?>
									<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b> <?php echo $error ; ?> </b></div>
            						<?php  }?>

									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" id="name" name="name" value="<?php if(isset($_POST['name']) && !empty($_POST['name'])){ echo $_POST['name']; }?>" autocomplete="off" placeholder="Name *">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input type="email" class="form-control" id="email" name="email" value="<?php if(isset($_POST['email']) && !empty($_POST['email'])){ echo $_POST['email']; }?>" autocomplete="off" placeholder="Email *">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" maxlength="10" pattern="\d{10}" id="phone" name="phone" value="<?php if(isset($_POST['phone']) && !empty($_POST['phone'])){ echo $_POST['phone']; }?>" number="true" autocomplete="off" placeholder="Phone Number *">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input class="form-control" name="company" id="company" value="<?php if(isset($_POST['company']) && !empty($_POST['company'])){ echo $_POST['company']; }?>" placeholder="Company Name">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input class="form-control" id="industry" name="industry" value="<?php if(isset($_POST['industry']) && !empty($_POST['industry'])){ echo $_POST['industry']; }?>" placeholder="Industry">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input class="form-control" name="job_titile" id="job_titile" value="<?php if(isset($_POST['job_titile']) && !empty($_POST['job_titile'])){ echo $_POST['job_titile']; }?>" placeholder="Job Title">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<div class="form-group" style="margin-bottom:15px;">
												<select class="form-control selectpicker" name="location_date" id="location_date">
													<!-- <optgroup label="Gurugram"> -->
														<!-- <option>Mumbai - 9th February, 2018</option> -->
														<!-- <option value="Gurugram - 23rd February, 2018">Gurugram - 23rd February, 2018</option>
													</optgroup> -->
													<!-- <optgroup label="Delhi">
														<option value="Delhi - 13th April, 2018">Delhi - 13th April, 2018</option>
													</optgroup> -->
													<optgroup label="Mumbai">
														<option value="Mumbai - 19th April, 2018">Mumbai - 19th April, 2018</option>
													</optgroup>
													
												</select>
											</div>
										</div>
									</div>

									<div class="row">
              <div class="col-md-12 bmargin0">
                <div class="form-group">
                  <div class="g-recaptcha" data-sitekey="6LdJHBUTAAAAAC0fo7UoDW7NqM1UNMtN-hX1DSa1" style="transform:scale(0.84);transform-origin:0 0"></div>
                </div>
              </div>
            </div>










									<!-- <div class="row">
				  <div class="col-md-12">
					<div class="form-group">
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
				</div> -->
									<!-- <div class="row">
				  <div class="col-md-12">
					<div class="form-group">
						<textarea class="form-control" id="message" name="message" placeholder="Requirement, in words?" rows="3"><?php if(isset($_POST['message']) && !empty($_POST['message'])){ echo $_POST['message']; }?></textarea>
					</div>
				  </div>
				</div> -->
									<div class="row">
										<div class="col-md-12">
											<!--					<div class="g-recaptcha" data-sitekey="6LdJHBUTAAAAAC0fo7UoDW7NqM1UNMtN-hX1DSa1" style="max-width:100%"></div>-->
											<div class="button-group" style="text-align: center;">
												<button type="submit" name="action" id="contact-submit" value="contact1" class="btn btn-info btn-yellow">Register Now</button>
											</div>
										</div>
									</div>
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="clearfix"></div>
	<section class="query-sec">

		<p>Self-service analytics for everyone.<br>Join Now!</p>
		<p>We're happy to answer any questions you may have. In case of any queries/concerns, please write to <strong>tahera.bharmal@teamcomputers.com</strong> or call <strong>+91 9637295165</strong>
		</p>
		<a href="#BookYourSeat" class="btn pmd-btn-raised pmd-ripple-effect btn-info white-btn">Book Your Seat</a>

	</section>
	<div class="clearfix"></div>
	<section class="val-in-act cmn-padd eve-gallery">
		<div class="container">
			<h2 class="cmn-hdr">
		<span class="line-text">Event Gallery</span>
	</h2>
		
		</div>
		<div id="video-carousel" class="owl-carousel owl-theme event-alteryx-img">
			<div class="item">
				<div class="video-wrapper">
					<a class="video-thumb" data-fancybox href="images/event-alteryx/img1.jpg">
					<img src="images/event-alteryx/img1.jpg" alt="event image">
				</a>
				
				</div>
			</div>
			<div class="item">
				<div class="video-wrapper">
					<a class="video-thumb" data-fancybox href="images/event-alteryx/img2.jpg">
					<img src="images/event-alteryx/img2.jpg" alt="event image">
				</a>
				
				</div>
			</div>
			<div class="item">
				<div class="video-wrapper">
					<a class="video-thumb" data-fancybox href="images/event-alteryx/img3.jpg">
					<img src="images/event-alteryx/img3.jpg" alt="event image">
				</a>
				
				</div>
			</div>
			<div class="item">
				<div class="video-wrapper">
					<a class="video-thumb" data-fancybox href="images/event-alteryx/img4.jpg">
					<img src="images/event-alteryx/img4.jpg" alt="event image">
				</a>
				
				</div>
			</div>
			<div class="item">
				<div class="video-wrapper">
					<a class="video-thumb" data-fancybox href="images/event-alteryx/img5.jpg">
					<img src="images/event-alteryx/img5.jpg" alt="event image">
				</a>
				
				</div>
			</div>
			<div class="item">
				<div class="video-wrapper">
					<a class="video-thumb" data-fancybox href="images/event-alteryx/img6.jpg">
					<img src="images/event-alteryx/img6.jpg" alt="event image">
				</a>
				
				</div>
			</div>
			<div class="item">
				<div class="video-wrapper">
					<a class="video-thumb" data-fancybox href="images/event-alteryx/img7.jpg">
					<img src="images/event-alteryx/img7.jpg" alt="event image">
				</a>
				
				</div>
			</div>
			<div class="item">
				<div class="video-wrapper">
					<a class="video-thumb" data-fancybox href="images/event-alteryx/img8.jpg">
					<img src="images/event-alteryx/img8.jpg" alt="event image">
				</a>
				
				</div>
			</div>
			<div class="item">
				<div class="video-wrapper">
					<a class="video-thumb" data-fancybox href="images/event-alteryx/img9.jpg">
					<img src="images/event-alteryx/img9.jpg" alt="event image">
				</a>
				
				</div>
			</div>
			<div class="item">
				<div class="video-wrapper">
					<a class="video-thumb" data-fancybox href="images/event-alteryx/img10.jpg">
					<img src="images/event-alteryx/img10.jpg" alt="event image">
				</a>
				
				</div>
			</div>
			<div class="item">
				<div class="video-wrapper">
					<a class="video-thumb" data-fancybox href="images/event-alteryx/img11.jpg">
					<img src="images/event-alteryx/img11.jpg" alt="event image">
				</a>
				
				</div>
			</div>
			<div class="item">
				<div class="video-wrapper">
					<a class="video-thumb" data-fancybox href="images/event-alteryx/img12.jpg">
					<img src="images/event-alteryx/img12.jpg" alt="event image">
				</a>
				
				</div>
			</div>
			<div class="item">
				<div class="video-wrapper">
					<a class="video-thumb" data-fancybox href="images/event-alteryx/img13.jpg">
					<img src="images/event-alteryx/img13.jpg" alt="event image">
				</a>
				
				</div>
			</div>
		</div>
	</section>
	<div class="clearfix"></div>
	<!--<section class="rel-solutions part-tech clearfix cmn-padd">
	<div class="container">
		<div class="solutions-inner clearfix">
			<h2 class="cmn-hdr">
				<span class="line-text">Customers</span>
			</h2>
			<div id="partner-carousel" class="owl-carousel owl-theme">
				<div class="item part-tech-cmn-box">
					<figure> <img src="images/Partners-logo/INS/EUC/Acer-Business-Partner.png" alt="Acer Business Partner"> </figure>
				</div>
				<div class="item part-tech-cmn-box">
					<figure> <img src="images/Partners-logo/INS/EUC/Apple-ASI.png" alt="Apple ASI"> </figure>
				</div>
				<div class="item part-tech-cmn-box">
					<figure> <img src="images/Partners-logo/INS/EUC/Dell-Titanium.png" alt="Dell Titanium"> </figure>
				</div>
        <div class="item part-tech-cmn-box">
          <figure> <img src="images/Partners-logo/INS/AVSI/Cisco.png" alt="Cisco"> </figure>
        </div>
				<div class="item part-tech-cmn-box">
					<figure> <img src="images/Partners-logo/INS/EUC/HP-Gold.png" alt="HP Gold"> </figure>
				</div>
				<div class="item part-tech-cmn-box">
					<figure> <img src="images/Partners-logo/INS/EUC/Lenovo-premium.png" alt="Lenovo premium"> </figure>
				</div>
				<div class="item part-tech-cmn-box">
					<figure> <img src="images/Partners-logo/INS/EUC/Microsoft-ADR.png" alt="Microsoft ADR"> </figure>
				</div>
			</div>
		</div>
	</div>
</section>-->
	<div class="clearfix"></div>


	<?php include 'include/footer.php';?>
	<!-- jQuery before Propeller.js -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/propeller.min.js"></script>
	<!-- Owl carousel js -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<!-- Fancybox JS -->
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.1/bootstrap-slider.min.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script type="text/javascript" src="js/jQueryValidation.js"></script>
	<!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> -->
	<script>
		$( "#contact1" ).validate( {
			rules: {
				firstName: {
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
				location - date: {
					required: true,
				}
			}
		} );
	</script>
	<!-- load captcha image-->
	<script language='JavaScript' type='text/javascript'>
		function refreshCaptcha() {
			var img = document.images[ 'captchaimg' ];
			img.src = img.src.substring( 0, img.src.lastIndexOf( "?" ) ) + "?rand=" + Math.random() * 1000;
		}
	</script>
	<script>
		$( document ).ready( function () {
			$( '#myCarousel' ).carousel( {
				interval: 10000
			} )
			$( '.fdi-Carousel .item' ).each( function () {
				var next = $( this ).next();
				if ( !next.length ) {
					next = $( this ).siblings( ':first' );
				}
				next.children( ':first-child' ).clone().appendTo( $( this ) );
				if ( next.next().length > 0 ) {
					next.next().children( ':first-child' ).clone().appendTo( $( this ) );
				} else {
					$( this ).siblings( ':first' ).children( ':first-child' ).clone().appendTo( $( this ) );
				}
			} );
			$( '[data-fancybox]' ).fancybox( {
				youtube: {
					controls: 0,
					showinfo: 0
				}
			} );
			$( function () {
				$( '[data-toggle="tooltip"]' ).tooltip( {
					trigger: 'manual'
				} ).tooltip( 'show' );
			} );

			// $( window ).scroll(function() {   
			// if($( window ).scrollTop() > 10){  // scroll down abit and get the action   
			$( ".progress-bar" ).each( function () {
				each_bar_width = $( this ).attr( 'aria-valuenow' );
				$( this ).width( each_bar_width + '%' );
			} );

			//  }  
			// });


		} );
	</script>
	<script type="text/javascript">
		$( document ).ready( function () {
			var theDaysBox = $( "#numdays" );
			var theHoursBox = $( "#numhours" );
			var theMinsBox = $( "#nummins" );
			var theSecsBox = $( "#numsecs" );

			var refreshId = setInterval( function () {
				var currentSeconds = theSecsBox.text();
				var currentMins = theMinsBox.text();
				var currentHours = theHoursBox.text();
				var currentDays = theDaysBox.text();

				if ( currentSeconds == 0 && currentMins == 0 && currentHours == 0 && currentDays == 0 ) {
					// if everything rusn out our timer is done!!
					// do some exciting code in here when your countdown timer finishes

				} else if ( currentSeconds == 0 && currentMins == 0 && currentHours == 0 ) {
					// if the seconds and minutes and hours run out we subtract 1 day
					theDaysBox.html( currentDays - 1 );
					theHoursBox.html( "23" );
					theMinsBox.html( "59" );
					theSecsBox.html( "59" );
				} else if ( currentSeconds == 0 && currentMins == 0 ) {
					// if the seconds and minutes run out we need to subtract 1 hour
					theHoursBox.html( currentHours - 1 );
					theMinsBox.html( "59" );
					theSecsBox.html( "59" );
				} else if ( currentSeconds == 0 ) {
					// if the seconds run out we need to subtract 1 minute
					theMinsBox.html( currentMins - 1 );
					theSecsBox.html( "59" );
				} else {
					theSecsBox.html( currentSeconds - 1 );
				}
			}, 1000 );
		} );
	</script>
	<!-- start fb share script -->
	<div id="fb-root"></div>
	<script>
		( function ( d, s, id ) {
			var js, fjs = d.getElementsByTagName( s )[ 0 ];
			if ( d.getElementById( id ) ) return;
			js = d.createElement( s );
			js.id = id;
			js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
			fjs.parentNode.insertBefore( js, fjs );
		}( document, 'script', 'facebook-jssdk' ) );
	</script>

	<script src="//platform.linkedin.com/in.js" type="text/javascript">
		lang: en_US
	</script>

	<!-- end fb share script -->
	<!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> -->
<script>
// just for the demos, avoids form submit

$( "#contact" ).validate({
  rules: {
    name: {
      required: true,
      minlength: 3,
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
    company: {
      required: true,
    },
    job_titile:{
    	required:true,
    },
    industry: {
      required: true,
    },
    location_date: {
      required: true,
    }
  }
});
</script>
<script>
// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</body>

</html>