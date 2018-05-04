<?php
//$page_name = 'contact';

$timezone = new DateTimeZone("Asia/Kolkata" );
$date = new DateTime();
$date->setTimezone($timezone );

// Get Days, Hour, Minute, Seconds from target date

//next 15th feb, 2018
$start  = date_create('2018-04-26');
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


// $date2 = $date->format( 'Y-m-d' );
// $date1 = "2018-02-01";

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
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Workshop on Data Blending and Modelling Using Alteryx</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="fonts/fontello/css/fontello.css" rel="stylesheet">
	<link rel="shortcut icon" href="images/favicon.png"/>
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
				<h1><span>Thursday | 10th May, 2018 | 2 pm - 6 pm | Mumbai</span> 
				<span>Monday | 28th May, 2018 | 2 pm - 6 pm | Bangalore</span>
          Workshop on Data Blending and Modelling Using Alteryx 
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
		<span class="line-text">The world is one big data problem</span>
			</h2>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="eve-det" style="font-family: 'roboto', sans-serif">
						<div class="main-p" style="font-family: 'roboto', sans-serif">
							<p>Data is no good until it gives you actionable insights. Well, here's your chance to learn how to extract insights from your data without writing code that extracts the life out of you.</p>
							<p>Join us at our office to see first-hand how the Alteryx Analytics Platform allows data scientists and citizen users alike to break the barriers to insight by eliminating manual and mundane data preparation and blending processes.</p>
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
						<li>Are you tasked with bringing multiple data sources together?</li>
						<li>Do you struggle with frustratingly slow or insufficient reports?</li>
						<li>Are you spending hours writing code repetitively to generate these reports?</li>
						<li>Do you have inadequate business intelligence tools for your business users?</li>
					</ul>
					<p>If your answer to the above questions is yes, then this Workshop is for you!</p>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<h3>Why Should you attend:</h3>

					<p>During the Workshop, we will introduce you to Alteryx and answer any questions you may have about its capabilities. You'll see first hand why Alteryx is different from other data analytics solutions. You will also learn how to:</p>
					<ul>
						<li>Simplify and automate the process of reporting, blending and analyzing your data.</li>
						<li>Connect, cleanse and join data fro multiple sources</li>
						<li>Create workflows on demand using new data</li>
						<li>Perform predictive, statistical and spatial analytics without writing code.</li>
					</ul>


					<!--			  <p style="font-style: italic">As the seats are on first come first serve basis, please register at the earliest.</p>-->
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="down-sec">
						<p style="font-size:30px; margin-bottom:0px; color:#414141; font-we
                          500;"><strong>What do you need to do?</strong>
						</p>
						<p style="margin-top: 0px"><a href="https://www.alteryx.com/resources/free-14-day-trial" style="color:#00abc5; font-weight:600" target="_blank">Download the 14-day free Alteryx trial </a> and follow along with the live demonstration. </p>
					</div>
				</div>
			</div>


		</div>
	</section>
	<div class="clearfix"></div>
	<section class="we-are-hiring we-are-hiring-cmn valigncenter eve-testi get-in-tch">
		<div class="container">
			<div class="banner-content">
				<h2>With Alteryx, work becomes so fast, efficient and simple. We are constantly looking for newer things in terms of analysis, data-          processing, integration and Alteryx always has a solution. In our 3 years of journey so far, Team Computers has always been the            guiding hand in supporting us in our initiatives. 
      </h2>
				<p style="max-width:600px"><img src="images/vishruth-pic.png" alt="vishurath pic">&nbsp;&nbsp; <span>- Vishruth Reddy, Senior Analyst, Fidelity International.</span><a style="margin: 0px!important;" name="eventSpeakers"></a>
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
								<img src="images/eve-sp-img.png" alt="speker image">
							</div>
							<div class="col-md-8 col-xs-12 spek-det-txt">
								<p>Nitish Salve</p>
								<p>Alteryx Certified Consultant</p>
								<p style="line-height:1.5">With over 5 years of experience working on Alteryx, Nitish has in depth hands on experience on a large range of analytical techniques including Sentiment Analysis, Clustering, Time Series, Logistic and Linear regression, PCA and Sampling. He is an MSc in Statistics by education.</p>
								<ul class="soc-icon-box eve-hd clearfix">
									<li><a href="https://www.facebook.com/nitish.salve.7" target="_blank"><i class="fa fa-facebook"></i></a>
									</li>
									<!--					<li><a href="https://twitter.com/_teamcomputers" target="_blank"><i class="fa fa-twitter"></i></a></li>-->
									<li><a href="https://www.linkedin.com/in/nitish-salve-39065818" target="_blank"><i class="fa fa-linkedin"></i></a>
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
							<span class="progressText"><B>Usefulness of Alteryx</B></span>
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
						<iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d112204.42971141996!2d77.10448594776233!3d28.49795906870756!3m2!1i1024!2i768!4f13.1!2m1!1steamcomputers!5e0!3m2!1sen!2sin!4v1516259394592" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						<h2>Bangalore</h2>

						<p>Oxford Towers, Unit 810 & 811, 7th Floor, Old Airport Road, Opp. Leela Palace, Bengaluru, Karnataka 560008</p>

						<h2>Mumbai</h2>

						<p style="margin-bottom:0">Radha Rani Silk Mill Compound, 30 Parsi Panchayat Road, Andheri East, Jijamata Colony, Andheri East, Mumbai, Maharashtra 400069</p>
					</div>

				</div>
				<div class="col-md-5 col-sm-6 col-xs-12">
					<div class="con-form-cover eve-form-cover">
						<div class="cta-form" style="position: relative">
							<p>As the seats are on first come first serve basis, please register at the earliest.</p>
							<div class="form">
								<form id="contact" name="contact2" method="post" class="contact-form" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>">
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
													<optgroup label="Bangalore">
														
													
														<option value="Bangalore - 26th April, 2018">Bangalore - 26th April, 2018</option>
														<option value="Bangalore - 10th May, 2018">Bangalore - 10th May, 2018</option>
														<option value="Bangalore - 24th May, 2018">Bangalore - 24th May, 2018</option>
														<option value="Bangalore - 7th June, 2018">Bangalore - 7th June, 2018</option>
														<option value="Bangalore - 21st June, 2018">Bangalore - 21st June, 2018</option>
													</optgroup>
													<optgroup label="Mumbai">
														
														
														
														
														
														
														<option value="Mumbai - 27th April, 2018">Mumbai - 27th April, 2018</option>
														<option value="Mumbai - 11th May, 2018">Mumbai - 11th May, 2018</option>
														<option value="Mumbai - 25th May, 2018">Mumbai - 25th May, 2018</option>
														<option value="Mumbai - 8th June, 2018">Mumbai - 8th June, 2018</option>
														<option value="Mumbai - 22nd June, 2018">Mumbai - 22nd June, 2018</option>
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
												<button type="submit" name="action" id="contact-submit" value="contact2" class="btn btn-info btn-yellow">Register Now</button>
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

		<p>This is your chance to learn Data Blending and Modelling from Experts!</p>
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
	<!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> -->
	<script type="text/javascript" src="js/jQueryValidation.js"></script>
	<!-- <script>
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
	</script> -->
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