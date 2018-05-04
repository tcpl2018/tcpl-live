<?php
if(isset($_POST['work_email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "sandeep.saini@teamcomputers.com, piyush.jain@teamcomputers.com";
    $email_subject = "Enquiry for Samsung s9/s9+";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['full_name']) ||
        !isset($_POST['work_phone']) ||
        !isset($_POST['work_email']) ||
        !isset($_POST['company_name']) ||
        !isset($_POST['employee_no'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $full_name = $_POST['full_name']; // required
    $work_phone = $_POST['work_phone']; // required
    $work_email = $_POST['work_email']; // required
	$job_title = $_POST['job_title']; // not required
	$web_url = $_POST['web_url']; // not required
    $company_name = $_POST['company_name']; // required
    $employee_no = $_POST['employee_no']; // required
	$user_query = $_POST['user_query']; // not required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$work_email)) {
    $error_message .= 'Enter a valid email address.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$full_name)) {
    $error_message .= 'Enter a valid name.<br />';
  }

	if(!preg_match($string_exp,$company_name)) {
    $error_message .= 'Enter a valid company name.<br />';
  }
 
  //if(!preg_match('/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/', $work_phone)) {
    //$error_message .= 'Enter a valid phone number.<br />';
 // }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Full Name: ".clean_string($full_name)."\n";
    $email_message .= "Work Phone: ".clean_string($work_phone)."\n";
    $email_message .= "Work Email: ".clean_string($work_email)."\n";
	$email_message .= "Job Title: ".clean_string($job_title)."\n";
	$email_message .= "Website URL: ".clean_string($web_url)."\n";
	$email_message .= "Company Name: ".clean_string($company_name)."\n";
    $email_message .= "No of Employees: ".clean_string($employee_no)."\n";
	$email_message .= "Tell Us in Words...: ".clean_string($user_query)."\n";
 
// create email headers
$headers = 'From: '.$work_email."\r\n".
'Reply-To: '.$work_email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Contact Success - Teamcomputers</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<meta http-equiv="refresh" content="3;url=http://www.teamcomputers.com" />
<!--Google Icon Font-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="fonts/fontello/css/fontello.css" rel="stylesheet">
<!-- Propeller css -->
<link href="css/propeller.min.css" rel="stylesheet">
<!-- Owl carousel css -->
<link href="css/owl.carousel.min.css" rel="stylesheet">
<link href="css/owl.theme.default.min.css" rel="stylesheet">
<!-- fancy box css -->
<link href="css/jquery.fancybox.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/style-responsive.css" rel="stylesheet">
</head>
 <body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src=""https://www.googletagmanager.com/ns.html?id=GTM-KDW47BN""
height=""0"" width=""0"" style=""display:none;visibility:hidden""></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php include 'include/header.php';?>
<div class="clearfix"></div>
<section class="cmn-padd career-banner-cover cta-banner">
 <!--<img class="man-img hidden-xs" src="images/man-img.png" alt="man img">-->
  <div class="container">
    <div class="row banner-content">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="col-lg-offset-3" style="margin-top: 100px;">
    <h2 style="color: #000;">Thank you!</h2>
          <p>Your submission is received and we will contact you soon.</p>
          <p>You will be redirected back in 3 seconds...</p>
    <!--<div class="company-data">
        <div class="valigncenter row">
			<div class="employees col-md-4 col-sm-4 col-xs-12" ><a href="#">
            <b>Support Location</b>
            <span>250</span><span class="blue-color">+</span></a></div>
          <div class="offices col-md-4 col-sm-4 col-xs-12"><a href="#"> 
            <b>Offices</b>
            <span>25</span><span class="blue-color">+</span></a></div>
          <div class="customers col-md-4 col-sm-4 col-xs-12"><a href="#"> 
            <b>Customers</b>
            <span>1800</span><span class="blue-color" style="margin-right: 0">+</span></a></div>
          </div>
      </div>-->
    </div>
     </div>
		<div class="cmn-padd val-us valigncenter">
</div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd val-us valigncenter cta-page">
  <div class="container">
      <div class="company-data">
        <div class="valigncenter row" style="flex-wrap: wrap;">
          <div class="col-md-2 col-xs-6"><a href="#"> 
            
            Crores INR Turnover<br>
            <br>
            <span>650</span><span class="blue-color">+</span></a></div>
          <div class="col-md-2 col-xs-6"><a href="#"> 
            Support Locations<br>
            <br>
            <span>250</span><span class="blue-color">+</span></a></div>
          <div class="col-md-2 col-xs-6"><a href="#"> 
            Offices<br>
            <br>
            <span>25</span><span class="blue-color">+</span></a></div>
          <div class="col-md-2 col-xs-6"><a href="#"> 
            Customers<br>
            <br>
            <span>1800</span><span class="blue-color">+</span></a></div>
          <div class="col-md-2 col-xs-6"><a href="#"> 
            Employees<br>
            <br>
            <span>1500</span><span class="blue-color">+</span></a></div>
          <div class="col-md-2 col-xs-6"><a href="#"> 
            Years of Service<br>
            <br>
            <span>30</span><span class="blue-color">+</span></a></div>
        </div>
      </div>
  </div>
</section>
<div class="clearfix"></div>
<?php include 'include/footer.php';?>
<!-- jQuery before Propeller.js --> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/propeller.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.1/bootstrap-slider.min.js"></script> 
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script> 
<!-- Owl carousel css -->
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<!-- Fancybox JS -->
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<!-- home page js -->
<script type="text/javascript" src="js/typed.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!-- auto popup box -->
        <script type="text/javascript">
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 4000);
        </script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
  <script type="text/javascript">
    $( '#contact-form' ).bootstrapValidator( {
      //        live: 'disabled',
      message: 'This value is not valid',
      feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
      },
      fields: {

        
        
        name: {
          validators: {
            notEmpty: {
              message: 'The Name is required and cannot be empty'
            }
          }
        },
        

        phone: {
          validators: {
            notEmpty: {
              message: 'The phone number is required'
            },
            regexp: {
              message: 'The phone number can only contain min 10 digits. Spaces, -, (, ), +, . are not allowed',
              regexp: /^[0-9\s\-()+\.]+$/,
              regexp: /^\s*-?[0-9]{10,14}\s*$/
            }

          }
        },
        email: {
          validators: {
            notEmpty: {
              message: 'The email address is required'
            },
            emailAddress: {
              message: 'The email address is not valid'
            }
          }
        }
        // Message: {
        // validators: {
        // notEmpty: {
        // message: 'The Message is required and cannot be empty'
        //  }
        // }
        // }
      }
    } );
  </script>
<script>
	$('.grid').masonry({
  // options... 
  itemSelector: '.grid-item',
  
});
	</script> 
<script>
		$(document).ready(function () {
    $('#myCarousel, #myCarousel1').carousel({
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
	</script>
  
</body>
</html>
<?php
 
}
?>