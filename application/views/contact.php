<?php
$page_name = 'contact';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Contact | Team Computers</title>
<meta name= "description" content= "Let's get in touch for any query. We'd love to hear from you! " />
<meta name= "robots" content= "index, follow">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="fonts/fontello/css/fontello.css" rel="stylesheet">
<!-- Bootstrap css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="css/propeller.min.css" rel="stylesheet">
<!-- Owl carousel css -->
<link href="css/owl.carousel.min.css" rel="stylesheet">
<link href="css/owl.theme.default.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/style-responsive.css" rel="stylesheet">	
<link href="css/dev.css" rel="stylesheet"> 
<link rel="shortcut icon" href="images/favicon.png"/>

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
    <div class="banner-content">
      <h1>Imagine. Design. Build & Operate.</h1>
    </div>
  </div>
  <div class="banner-menu">
    <div class="container">
      	<ul class="clearfix valigncenter" style="flex-wrap: wrap;">
          <li><a href="about-company"><img src="images/company-icon.png" alt="company icon"> Company</a></li>
          <li><a href="newsroom"><img src="images/newsroom-icon.png" alt="newsroom icon"> Newsroom</a></li>
          <li><a href="impact"><img src="images/impact-icon.png" alt="impact icon"> Impact</a></li>
          <li class="active"><a href="contact"><img src="images/contact-icon.png" alt="contact icon"> Contact</a></li>
        </ul>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd get-in-tch key-con cmn-padd">
  <div class="container">
      <h2 class="cmn-hdr">
        <span class="line-text">Let's get in touch</span>
      </h2>
      <div class="col-md-7 col-sm-6 col-xs-12">
        <div class="location-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112131.92428055007!2d77.11713402083609!3d28.56607998617609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1d85daaaaaab%3A0x41ba390c2686dd89!2sTeam+Computers-+Infrastructure+Solutions!5e0!3m2!1sen!2sin!4v1489994829637" style="border:0; width: 100%; height: 280px" allowfullscreen=""></iframe>
          <div class="address">
                		<h1>Head Office</h1>
                		<p>No.1, Mohammadpur, Bhikaji Cama Place<br>New Delhi – 110066 India</p>
                		<ul>
                			<li style="padding-left: 50px"><img src="images/phone.png" alt="phone icon"><span>1800 102 4200 <br> 1800 11 4200</span></li>
                			<li style="padding-left: 60px"><img src="images/mail.png" alt="mail-icon"><span><a href="mailto:customercare@teamcomputers.com">customercare@teamcomputers.com</a><br> <a href="mailto:careers@teamcomputers.com">careers@teamcomputers.com</a></span></li>
                		</ul>
                	</div>
        </div>
      </div>
      <div class="col-md-5 col-sm-6 col-xs-12">
        <div class="con-form-cover">
          <div class="con-form">
            
            <!-- Start Contact form -->
            <form enctype="multipart/form-data" id="contact" name="contact" method="post" action="" class="contact-form">
            <!-- <?php foreach ($errors as $error) { ?> -->
            <div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b> <?php echo $errors ; ?> </b></div>
           <!--  <?php  }?> -->
            

            <div class="row">
              <div class="col-md-12">
                <div class="form-group bmargin0">
                  <input type="text" class="form-control" autocomplete="off" name="name" id="name" placeholder="Full Name*">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group bmargin0">
                  <input type="email" class="form-control" autocomplete="off" id="email" name="email" email="true" placeholder="Email Address*">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 bmargin0">
                <div class="form-group">
                  <input type="text" class="form-control" autocomplete="off" maxlength="10" pattern="\d{10}" name="phone" id="phone" number="true" placeholder="Phone Number*">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 bmargin0">
                <div class="form-group">
                  <input type="text" class="form-control" autocomplete="off" name="message" rows="6" cols="5" placeholder="Wite your message here">
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
            
          
            <div class="row">
              <div class="col-md-12">
                <div class="">
            <button type="submit" name="action" value="contact" class="btn pmd-btn-outline pmd-ripple-effect btn-primary">Submit</button>
            
          </div>
              </div>
            </div>
          </form>
            <!-- End Contact form -->

          </div>
        </div>
      </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd heroes-at-team cmn-padd">
	<div class="container">
		<h2 class="cmn-hdr">
			<span class="line-text">Other Locations</span>
		</h2>
		<div id="location-carousel" class="owl-carousel owl-theme">
			<div class="item">
               
				<div class="location-card loc-cmn-crd">
					<img src="images/gur-loc-img.jpg" alt="gurugram ofc image">
					<div class="loc-txt">
					<h2>Gurugram</h2>
					<p>A Square Building, Plot no. 278, 2<sup>nd</sup> floor <br>
						Phase 2, Udhyog Vihar<br>
						Gurugram-122002</p>
						<p>0124 - 3835700</p>
						</div>
				</div>
           	  
            </div>
            <div class="item">
               
				<div class="location-card loc-cmn-crd">
					<img src="images/mum-loc-img.jpg" alt="mumbai ofc image">
					<div class="loc-txt">
					<h2>Mumbai</h2>
					<p>Radha Rani Silk Mill Compound <br>
          30 Parsi Panchayat Road<br>
          Andheri (East) Mumbai-400069 </p>
					<p>022- 33016200</p>
						</div>
				</div>
           	  
            </div>
            <div class="item">
               
				<div class="location-card loc-cmn-crd">
					<img src="images/ben-loc-img.jpg" alt="bengaluru ofc image">
					<div class="loc-txt">
					<h2>Bengaluru</h2>
					<p>Oxford Towers #810 & 811 <br>
7th Floor, Old Airport Road <br>
Bengaluru-560008</p>
						<p>080- 40151818</p>
						</div>
				</div>
           	  
            </div>
			
		</div>	
	</div>
      </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd we-are-hiring we-are-hiring-cmn valigncenter">
  <div class="container">
    <div class="banner-content">
      <h2>"Team is an organization that builds entrepreneurs."<br>
        <span> - Henry, ex-team member and co-founder, Black Magic Toners.</span></h2>
      <a href="open-positions" class="btn pmd-btn-raised pmd-ripple-effect btn-info">We're hiring</a>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd leaders-at-team cmn-padd">
	<div class="container">
		<h2 class="cmn-hdr">
			<span class="line-text">Key Contact</span>
		</h2>
		<div id="hero-carousel" class="owl-carousel owl-theme">
			<div class="item">
              
        <div class="bus-ana-dep led-cmn-st">
      		<img src="images/ba-hd.png" alt="business analytics head image">
      		<h3>JATIN SAWHNEY</h3>
      		<p>Director, Business Analytics</p>
      		<div class="led-soc-prof">
      			<ul>
					<!--<li><a href="#"><i class="fa fa-facebook"></i></a></li>
      				<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
					<li><a href="mailto:jatin@teamcomputers.com"><i class="fa fa-envelope"></i></a></li>
      				<li><a target="_blank" href="https://www.linkedin.com/in/jatin13jan/"><i class="fa fa-linkedin"></i></a></li>
      				<!--<li><a href="#"><i class="demo-icon icon-gplus"></i></a></li>-->
      			</ul>
      		</div>
      	</div>
      
            </div>
			<div class="item">
              
        <div class="bus-ana-dep led-cmn-st">
      		<img src="images/md-pic.png" alt="t:eam MD image">
      		<h3>RANJAN CHOPRA</h3>
      		<p>Managing Director</p>
      		<div class="led-soc-prof">
      			<ul>
      				<li><a target="_blank" href="https://www.facebook.com/ranjan.chopra1"><i class="fa fa-facebook"></i></a></li>
					<li><a href="mailto:ranjan.chopra@teamcomputers.com"><i class="fa fa-envelope"></i></a></li>	
					<li><a target="_blank" href="https://www.linkedin.com/in/ranjan-chopra-8974016/"><i class="fa fa-linkedin"></i></a></li>
      				<!--<li><a href="#"><i class="fa fa-twitter"></i></a></li>
      				<li><a href="#"><i class="demo-icon icon-gplus"></i></a></li>-->
      			</ul>
      		</div>
      	</div>
      
            </div>
			<div class="item">
              
        <div class="bus-ana-dep led-cmn-st">
      		<img src="images/ins-hd.png" alt="ins head image">
      		<h3>MAHESH TOMAR</h3>
      		<p>Director, INS</p>
      		<div class="led-soc-prof">
      			<ul>
      				<li><a target="_blank" href="https://www.facebook.com/search/top/?q=Mahesh%20Tomar%20Director%2C%20Team%20Computers"><i class="fa fa-facebook"></i></a></li>
      				<li><a href="mailto:maheshtomar@teamcomputers.com"><i class="fa fa-envelope"></i></a></li>
      				<li><a href="https://www.linkedin.com/in/maheshtomar/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
      				<!--<li><a href="#"><i class="demo-icon icon-gplus"></i></a></li>-->
      			</ul>
      		</div>
      	</div>
      
            </div>
		</div>	
	</div>
      </div>
  </div>
</section>
<div class="clearfix"></div>
<?php include 'include/footer.php';?>
<!-- jQuery before Propeller.js --> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 

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
    
    captcha: {
      url : true
    }


  }
});
</script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/propeller.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.1/bootstrap-slider.min.js"></script> 
<!-- Owl carousel css -->
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!-- load captcha image-->
 <script language='JavaScript' type='text/javascript'>
function refreshCaptcha(){
  var img = document.images['captchaimg'];
  img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
<!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> -->
<script src='https://www.google.com/recaptcha/api.js'></script>

</body>
</html>