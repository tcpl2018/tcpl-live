<?php
$date_time = date("d-m-Y h:i:sa");
if(isset($_POST['action']) && $_POST['action'] == "contact1"){
//echo "<pre>"; print_r($_POST) ;  echo "</pre>";exit();
  $Name = $_POST[ 'name' ];
  $message = $_POST[ 'message'];
if(empty($_POST['name'])){
  $_SESSION['msgs'] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Enter your name</b></div>';
}elseif(empty($_POST['email'])){
  $_SESSION['msgs'] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Enter your email</b></div>';
}elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  $_SESSION['msgs'] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Enter your valid email</b></div>';
}elseif(empty($_POST['phone'])){
  $_SESSION['msgs'] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Enter valid phone no.</b></div>';
}elseif(!preg_match('/[2-9]{2}\d{8}/', $_POST['phone'])) {
       $_SESSION['msgs'] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Min 10 Numeric Value!</b></div>';
}elseif(empty($_POST['no_of_employes'])){
  $_SESSION['msgs'] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Select No. of Emloyees</b></div>';
}elseif(empty($_POST['solutions_name'])){
  $_SESSION['msgs'] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Select Solutions</b></div>';
}else{
$mailTo = 'social@teamcomputers.com,sandeep.saini@teamcomputers.com,salim.ansari@teamcomputers.com';
//$mailTo = 'salim.ansari@teamcomputers.com';
//$mailCC = ADMIN_EMAIL_CC;
//Mail Configuration
$mailSubject= "Inquiry from Teamcomputers website: CTA Landing Page ".$date_time."";
$mailBodyHeader= "The Details are given below:";
$mailBodyFooter= "<b>Regards<br>Support Team<br>Team Computers Pvt. Ltd. </b>";
/////////////////////////////////////////////////////////////
//Mail Sender
$mailFromName = $_POST['name'];
$mailFrom = $_POST['email'];
/////////////////////////////////////////////////////////////
//Mail Body
$mailBody = "
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Email Template</title>
<style type='text/css'>
body{
    color:#000;
    font-size:14px;
    margin:5px;
    font-family: 'Montserrat', sans-serif;
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
    <td align='left' valign='top'>: ".$_POST['name']."</td>
  </tr>
  <tr>
    <th width='138' align='left' valign='top' scope='row'>Email</th>
    <td align='left' valign='top'>: ".$_POST['email']."</td>
  </tr>
  <tr>
    <th width='138' align='left' valign='top' scope='row'>Contact No.</th>
    <td align='left' valign='top'>: ".$_POST['phone']."</td>
  </tr>
  <tr>
    <th width='138' align='left' valign='top' scope='row'>Job Title</th>
    <td align='left' valign='top'>: ".$_POST['job_titile']."</td>
  </tr>
   <tr>
    <th width='138' align='left' valign='top' scope='row'>Web Url</th>
    <td align='left' valign='top'>: ".$_POST['web_url']."</td>
  </tr>
   <tr>
    <th width='138' align='left' valign='top' scope='row'>No of Employees</th>
    <td align='left' valign='top'>: ".$_POST['no_of_employes']."</td>
  </tr>
   <tr>
    <th width='138' align='left' valign='top' scope='row'>Solutions Name</th>
    <td align='left' valign='top'>: ".$_POST['solutions_name']."</td>
  </tr>
  <tr>
    <th align='left' valign='top' scope='row'>Message</th>
    <td align='left' valign='top'>: ".$_POST['message']."</td>
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
$mailHeader = 'MIME-Version: 1.0'."\r\n";
$mailHeader .= "From: $mailFromName <$mailFrom>\r\n";
$mailHeader .= "Reply-To: $mailFrom\r\n";
$mailHeader .= "Return-Path: $mailFrom\r\n";
//$mailHeader .= "CC: $mailCC\r\n";
$mailHeader .= "BCC: $mailBCC\r\n";
$mailHeader .= 'X-Mailer: PHP'.phpversion()."\r\n";
$mailHeader .= 'Content-Type: text/html; charset=utf-8'."\r\n";
/////////////////////////////////////////////////////////////
//Email to Admin
if(mail($mailTo, $mailSubject, $mailBody, $mailHeader)){
//$sql = "INSERT INTO contact_email(cnt_name,cnt_phnno,cnt_email,cnt_message,status) VALUES('".$_POST['name']."','".$_POST['contact']."','".$_POST['email']."','".$_POST['message']."',1)";
//runQuery($db,$sql);
  echo "<script>window.location.href='https://www.teamcomputers.com/contact-success';</script>";
 }else{
$_SESSION['msgs'] = '<div class="alert-box error" style="font-size:14px;"><span>Error: </span><b>Error While Sending Mail, Please Try After Sometime</b></div>';
 }
} }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Consult an Expert | Team Computers</title>
<meta name= "description" content= "Make use of our 30 years of experience in IT across Infrastructure, Apps, Analytics and Managed Services. Consult an Expert Now!" />
<meta name= "robots" content= "index, follow">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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
<style>
  label.error {
    color: #FF0000;
    font-size: 14px;
    font-weight: 500;
    transform: none;
    position: absolute;
    right: 0;
}
</style>

</head>
<body>
<?php include 'include/header.php';?>
<div class="clearfix"></div>
<section class="cmn-padd career-banner-cover cta-banner">
 <!--<img class="man-img hidden-xs" src="images/man-img.png" alt="man img">-->
  <div class="container">
    <div class="row banner-content">
     <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
     	<h2>Make use of our 30 years of experience in IT across Infrastructure, Apps, Analytics and Managed Services.</h2>
		 <ul class="clearfix">
		 	<li><img src="images/cmmi-logo.png" alt="cmmi logo"></li>
			 <li><img src="images/itil-logo.png" alt="itil logo"></li>
		 </ul>
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
      <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
       <div class="cta-form">
        <div class="form">
          <form id="contact-form" name="contact" method="post" class="contact-form">
            <?php echo msgs();?>
            
            <div class="row">
              <div class="col-md-6 col-xs-12">
                <div class="form-group pmd-textfield">
                  <input placeholder="Name *" type="text" class="form-control" name="name" value="<?php if(isset($_POST['name']) && !empty($_POST['name'])){ echo $_POST['name']; }?>" autocomplete="off" id="Name">
                </div>
              </div>
			  <div class="col-md-6 col-xs-12">
                <div class="form-group pmd-textfield">
                  <input placeholder="Email *" type="email" class="form-control" id="email" name="email" value="<?php if(isset($_POST['email']) && !empty($_POST['email'])){ echo $_POST['email']; }?>" autocomplete="off">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group pmd-textfield">
				  <input placeholder="Phone Number *" type="text" class="form-control" maxlength="10" pattern="\d{10}" name="phone" value="<?php if(isset($_POST['phone']) && !empty($_POST['phone'])){ echo $_POST['phone']; }?>"   number="true" id="phone" autocomplete="off">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-xs-12">
                <div class="form-group pmd-textfield">
				  <input placeholder="Job Title" class="form-control" name="job_titile" value="<?php if(isset($_POST['job_titile']) && !empty($_POST['job_titile'])){ echo $_POST['job_titile']; }?>">
                </div>
              </div>
			  <div class="col-md-6 col-xs-12">
                <div class="form-group pmd-textfield">
				  <input placeholder="Website URL" class="form-control" id="web_url" name="web_url">
                </div>
              </div>
            </div>
		    <div class="row">
              <div class="col-md-12">
                <div class="form-group pmd-textfield">
				  <select class="select-simple form-control pmd-select2" id="no_of_employes" name="no_of_employes">
                  <option value="" disabled selected hidden>No. of employees *</option>
                  <option value ="0-100">0-100</option>
                  <option value ="100-500">100-500</option>
                  <option value ="500-1000">500-1000</option>
                  <option value ="1000-5000">1000-5000</option>
                  <option value ="5000+">5000+</option>
                  </select>
                </div>
              </div>
			  <div class="col-md-12">
                <div class="form-group pmd-textfield">
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
            </div>
			<div class="row">
              <div class="col-md-12">
                <div class="form-group pmd-textfield">
					<textarea placeholder="Tell us in words..." class="form-control" id="message" name="message" rows="3"><?php if(isset($_POST['message']) && !empty($_POST['message'])){ echo $_POST['message']; }?></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="g-recaptcha" data-sitekey="6LdJHBUTAAAAAC0fo7UoDW7NqM1UNMtN-hX1DSa1"></div>
                <div class="button-group" style="text-align: center;">
                  <button type="submit" name="action" id="contact-submit" value="contact1" class="btn btn-info btn-yellow">Get in Touch</button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <a href="privacy-policy" target="_blank"><sup>*</sup> Read Privacy Policy</a>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd val-us valigncenter cta-page">
  <div class="container">
      <div class="company-data">
        <div class="valigncenter row" style="flex-wrap: wrap;">
          <div class="col-md-2 col-xs-12"><a href="#"> 
            
            Crores INR Turnover<br>
            <br>
            <span>800</span><span class="blue-color">+</span></a></div>
          <div class="col-md-2 col-xs-12"><a href="#"> 
            Support Locations<br>
            <br>
            <span>250</span><span class="blue-color">+</span></a></div>
          <div class="col-md-2 col-xs-12"><a href="#"> 
            Offices<br>
            <br>
            <span>25</span><span class="blue-color">+</span></a></div>
          <div class="col-md-2 col-xs-12"><a href="#"> 
            Customers<br>
            <br>
            <span>1800</span><span class="blue-color">+</span></a></div>
          <div class="col-md-2 col-xs-12"><a href="#"> 
            Employees<br>
            <br>
            <span>1800</span><span class="blue-color">+</span></a></div>
          <div class="col-md-2 col-xs-12"><a href="#"> 
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
  <script type="text/javascript" src="js/jQueryValidation.js"></script>
  <script>
    $( "#contact-form" ).validate( {
      rules: {
        name: {
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
        solutions_name: {
          required: true,
        },
        no_of_employes:{
          required: true,
        }

      }
    } );
  </script>
  <!-- <script type="text/javascript">
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
  </script> -->
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