<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Careers</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="fonts/fontello/css/fontello.css" rel="stylesheet">
<!-- Bootstrap css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="css/propeller.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/style-responsive.css" rel="stylesheet">	
<style>
label.error {
    color: #FF0000;
    font-size: 14px;
    font-weight: 500;
/*
    line-height: 1.4;
    margin-top: .5em;
*/
}
</style>
</head>
<body>
<?php include 'include/header.php';?>
<section class="cmn-padd career-banner-cover open-pos-cover-bg valigncenter">
  <div class="container">
    <div class="row banner-content">
      <h1>Be Amongs the Ambitious</h1>
    </div>
  </div>
  <div class="banner-menu">
    <div class="container">
      <div class="row">
        <ul class="clearfix valigncenter" style="flex-wrap: wrap;">
          <li><a href="career-work"><img src="images/work.png" alt="work icon"> Work</a></li>
          <li><a href="culture"><img src="images/cup-icon.png" alt="cup icon"> Culture</a></li>
          <li><a href="career-team"><img src="images/team.png" alt="team icon"> Team</a></li>
          <li><a href="open-positions"><img src="images/open-positions.png" alt="open positions icon"> Open Positions</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd job-dec cmn-padd">
  <div class="container">
    <div class="row clearfix">
     
      <div class="col-md-9 col-xs-12">
      <div class="">
       <div class="job-det job-det-bor">
       <div class="det-top-bx">
        <h2 class="cmn-hdr">
            
            <span class="line-text"><?php echo $jobDescription[0]['prod_title']; ?></span>
          </h2>
          <h3>Job Description</h3>
          <p><?php echo echoStr($jobDescription[0]['prod_desc'])  ; ?></p><br>
         <h3>Job Location</h3>
         <p><?php echo $jobDescription[0]['prod_location']; ?></p><br>
         
         <?php if(isset($jobDescription[0]['prod_qualification'])){?>
         <h3>Qualification</h3>
         <?php echo echoStr($jobDescription[0]['prod_qualification'])  ; }else{?>
         <h3 style="display: none;"></h3>
         <?php }?>


         </div>
      </div>
      <div class="form">
          <p>Application Form </p>
          <form enctype="multipart/form-data" id="contact" name="contact" method="post" action="" class="contact-form">
            <?php foreach ($errors as $error) { ?>
            <div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b> <?php echo $error ; ?> </b></div>
            <?php  }?>
            <input type="hidden" name="jc" value="<?php echo $jobDescription[0]['prod_code']; ?>">
                  <input type="hidden" name="jl" value="<?php echo $jobDescription[0]['prod_location']; ?>">
                  <input type="hidden" name="jt" value="<?php echo $jobDescription[0]['prod_title']; ?>">

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" class="form-control" autocomplete="off" name="name" id="name" placeholder="Full Name*">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="email" class="form-control" autocomplete="off" id="email" name="email" email="true" placeholder="Email Address*">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" class="form-control" autocomplete="off" name="phone" id="phone" number="true" placeholder="Phone Number*">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="file" id="up-docs" name="file" class="form-control" >
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" class="form-control" autocomplete="off" id="cur-comp" name="current_company" placeholder="Linkedin Profile">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" class="form-control" autocomplete="off" name="cover_letter" placeholder="How did you hear about this job?">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="g-recaptcha" data-sitekey="6Le4jyIUAAAAAOIVqgkoUoxhpVeQb30RKK2xt9SD" style="transform:scale(0.84);transform-origin:0 0"></div>
                </div>
              </div>
            </div>
            
          
            <div class="row">
              <div class="col-md-12">
                <div class="">
            <button type="submit" name="action" value="contact" class="btn pmd-btn-outline pmd-ripple-effect btn-primary">Submit Application</button>
            
          </div>
              </div>
            </div>
          </form>
        </div>
        </div>
      </div>
      <div class="col-md-3 col-xs-12 job-side-left-sec">
        <div class="job-side-sec">
          <div class="im-int">
            <button type="button" class="btn pmd-btn-outline pmd-ripple-effect btn-primary">I’m Interested</button>
            <!--<button type="button" class="btn pmd-btn-outline pmd-ripple-effect btn-primary">Refer a Friend</button>-->
          </div>
          <div class="share-box">
          	<p>Share this opening with friends</p>
          	<ul>
          		<li><a href="#"><i class="fa fa-twitter tw"></i></a></li>
          		<li><a href="#"><i class="fa fa-facebook fb"></i></a></li>
          		<li><a href="#"><i class="fa fa-linkedin li"></i></a></li>
          		<li><a href="#"><i class="fa fa-envelope mail"></i></a></li>
          	</ul>
          </div>
          <div class="other-jobs">
          	<h2 class="blue-color">Other Jobs:</h2>
          	<div class="job border-bottom">
          		<h3>Enterprise Account Manager</h3>
          		<p><img src="images/map-marker.png" alt="map marker icon"> New Delhi</p>
          	</div>
          	<div class="job border-bottom">
          		<h3>Java Developer</h3>
          		<p><img src="images/map-marker.png" alt="map marker icon"> New Delhi</p>
          	</div>
          	<div class="job border-bottom">
          		<h3>IOS Developer</h3>
          		<p><img src="images/map-marker.png" alt="map marker icon"> New Delhi</p>
          	</div>
          	<div class="job border-bottom">
          		<h3>Technical Consultant</h3>
          		<p><img src="images/map-marker.png" alt="map marker icon"> New Delhi</p>
          	</div>
          	<div class="job">
          		<h3>Internal Sales</h3>
          		<p><img src="images/map-marker.png" alt="map marker icon"> New Delhi</p>
          	</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="exp-n-fres we-are-hiring-cmn clearfix container-fluid">
  <div class="row">
    <div class="exp col-md-6 col-xs-12">
    <h3>For the Experienced</h3>
    <p>Been there / Done that? <br>Click & fill the form.</p>
   <button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-info" data-toggle="modal" data-target="#exampleModal">Apply Here</button>
    </div>
    <div class="fres col-md-6 col-xs-12">

    <h3>For the Fresher</h3>
    <p>Don’t know where to start / Don’t know where to begin?
  Click & fill the form.</p>
   <button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-info" data-toggle="modal" data-target="#exampleModal1">Apply Here</button>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd refer-a-friend cmn-padd">
  <div class="container">
      <h2 class="cmn-hdr">
        <span class="line-text">Refer a Friend</span>
      </h2>
      <p>They might be a perfect fit for our team </p>
      <div class="btn-box valigncenter">
        <button type="button" class="btn pmd-ripple-effect btn-primary tw-btn"><i class="fa fa-twitter"></i> Twitter </button >
        <button type="button" class="btn pmd-ripple-effect btn-primary fb-btn"><i class="fa fa-facebook"></i> Facebook </button >
        <button type="button" class="btn pmd-ripple-effect btn-primary li-btn"><i class="fa fa-linkedin"></i> Linkedin </button >
      </div>
  </div>
</section>
<?php include 'include/footer.php';?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog form-modal" role="document">
    <div class="modal-content">
      <div class="modal-body clearfix">
       <a href="#" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">X</span>
        </a>
		<div class="col-xs-12 exp-box">
			<div class="form-hd">
				<img src="images/fresh-icon.png" alt="fresher icon pic">
				<p><b>Experienced Application Form</b></p>
			</div>
			<form id="exp-form" name="contact" method="post" class="contact-form">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<input type="text" class="form-control" name="Name" autocomplete="off" id="efName" placeholder="Full Name">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<input type="email" class="form-control" name="email" autocomplete="off" id="eemail" placeholder="Email Address">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<input type="text" class="form-control" name="phoneNumber" autocomplete="off" id="ephoneNumber" placeholder="Phone">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<input type="file" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<input type="text" class="form-control" name="LinkedinProfile" autocomplete="off" id="eli-profile" placeholder="Linkedin Profile">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<input type="text" class="form-control" name="source" autocomplete="off" id="esource" placeholder="How did you hear about this job?">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="btn-box">
							<button type="button" class="btn pmd-btn-outline pmd-ripple-effect btn-primary">Submit Application</button>

						</div>
					</div>
				</div>
			</form>
		</div>
		</div>
		</div>
		</div>
		</div>
		
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog form-modal" role="document">
    <div class="modal-content">
      <div class="modal-body clearfix">
       <a href="#" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">X</span>
        </a>
        <div class="col-xs-12 fresh-box">
        <div class="form-hd">
        <img src="images/fresh-icon.png" alt="fresher icon pic">
			<p>Fresher Application Form</p></div>
        	<form  id="fresher-form" name="contact" method="post" class="contact-form">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" class="form-control" name="Name" autocomplete="off" id="ffName" placeholder="Full Name">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" autocomplete="off" id="femail" placeholder="Email Address">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" class="form-control" name="phoneNumber" autocomplete="off" id="fphoneNumber" placeholder="Phone">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="file" class="form-control" >
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" class="form-control" name="source" autocomplete="off" id="fsource" placeholder="How did you hear about this job?">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="btn-box">
            <button type="button" class="btn pmd-btn-outline pmd-ripple-effect btn-primary">Submit Application</button>

			</div>
		</div>
		</div>
		</form>
		</div>

		</div>
		</div>
		</div>
		</div>
<a href="#0" class="cd-top"><img src="images/up-arrow.png" alt="up arrow icon"></a>
<!-- jQuery before Propeller.js --> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/propeller.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.1/bootstrap-slider.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.0/masonry.pkgd.min.js"></script> 
<script>
	$('.grid').masonry({
  // options... 
  itemSelector: '.grid-item',
  
});
	</script> 
<script>
		$(document).ready(function () {
    $('#myCarousel').carousel({
        interval: 10000
    })
    $('.fdi-Carousel .item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this));
        }
        else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });
});
	</script>
	<script>
	$(window).on("scroll", function() {
    if($(window).scrollTop() > 10) {
        $(".navbar-fixed-top").addClass("wh-bg-clr");
    } else {
        
       $(".navbar-fixed-top").removeClass("wh-bg-clr");
    }
});
	$(window).scroll(function(){
  var sticky = $('.header-fixd-btn'),
      scroll = $(window).scrollTop();

  if (scroll >= 710) {
	  sticky.css('display','block');
  } 
  else { 
  sticky.css('display','none');} 
});
		$(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});

});
		$(".job-side-sec .btn").click(function() {
    $('html,body').animate({
        scrollTop: $(".form").css('display','block').offset().top},
        'slow');
});
	</script>
<!-- load captcha image-->
  <script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
  var img = document.images['captchaimg'];
  img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
<!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> -->
<script type="text/javascript" src="js/jQueryValidation.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
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
    
    portfolio_url: {
      url : true
    },
    file: {
      required: true
    }


  }
});
</script>
</body>
</html>