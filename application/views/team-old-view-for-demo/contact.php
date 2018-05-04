
<?php
$date_time = date("d-m-Y h:i:sa");
if(isset($_POST['action']) && $_POST['action'] == "contact1"){
//echo "<pre>"; print_r($_POST) ;  echo "</pre>";exit();
	$Name = $_POST[ 'name' ];
	$message = $_POST[ 'message'];
if(empty($_POST['name'])){
	$_SESSION['msgs'] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Please Enter Your Name</b></div>';
}elseif(empty($_POST['email'])){
	$_SESSION['msgs'] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Please Enter Your Email</b></div>';
}elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	$_SESSION['msgs'] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Please Enter Your Valid Email</b></div>';
}elseif(empty($_POST['phone'])){
	$_SESSION['msgs'] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Please Enter Valid Phone No.</b></div>';
}elseif(!preg_match('/[2-9]{2}\d{8}/', $_POST['phone'])) {
       $_SESSION['msgs'] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Enter Min 10 Numeric Value!</b></div>';
} elseif(empty($_POST['message'])){
	$_SESSION['msgs'] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Please write message</b></div>';
}elseif(empty($_POST['letters_code'])){
	$_SESSION['msgs'] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Please Enter Captcha Code</b></div>';
}elseif(isset($_POST["letters_code"]) && ($_SESSION["6_letters_code"]!=$_POST["letters_code"]))
{
	$_SESSION['msgs'] = '<div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b>Please Enter Correct Captcha Code</b></div>';
}else{
$mailTo = 'social@teamcomputers.com,sandeep.saini@teamcomputers.com,salim.ansari@teamcomputers.com';
//$mailTo = 'salim.ansari@teamcomputers.com';
//$mailCC = ADMIN_EMAIL_CC;
//Mail Configuration
$mailSubject= "Inquiry from Teamcomputers website: Contact Us Page ".$date_time."";
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

    <td align='left' valign='top'>: ".$_POST['name']."</td>

  </tr>

  <tr>

    <th width='138' align='left' valign='top' scope='row'>Email</th>

    <td align='left' valign='top'>: ".$_POST['email']."</td>

  </tr>

  <tr>

    <th width='138' align='left' valign='top' scope='row'>Contact No.</th>

    <td align='left' valign='top'>: ".$_POST['phone']."</td>

  </tr><tr>

    <th width='138' align='left' valign='top' scope='row'>Organisation</th>

    <td align='left' valign='top'>: ".$_POST['organisation']."</td>

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
  echo "<script>window.location.href='/contact-success';</script>";
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
<title>Contact Team Computers</title>
<meta name="description" content="To get any information required for IT solutions, get in touch with us." />
<meta name="robots" content="index, follow" />
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

    <style>

  .career-form .ap-btn {
    /* display: block; */
    position: relative;
    padding: 10px 20px;
    border-radius: 5px;
    border: 1px solid #00aac4;
    color: #fff;
    text-align: center;
    font-family: 'Open Sans',sans-serif;
    font-size: 16px;
    font-weight: 600;
	background-color: #00aac4;
    text-transform: uppercase;
    transition: all .3s ease-in-out;
}
    .cr-btn:hover, .career-form .ap-btn:hover {
    background-color: #f0f0f0;
    color: #00aac4;
    box-shadow: 0 2px 15px rgba(0,0,0,.5);
}
	
	.location-map iframe{
	width: 100%;
	display: block;
	pointer-events: none;
	position: relative; /* IE needs a position other than static */
}
.location-map iframe.clicked{
	pointer-events: auto;
}	
  </style>
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
		<h1 class="col-md-12">Contact Us</h1>
    </div>
  </section>
  <section class="find-job">
    <div class="container">
      <div class="row">
        <div class="all-emp cont-d clearfix">
          <div class="container clearfix">
             <div class="row">
              <div class="col-md-8 clearfix">
                <div class="main-txt">
                  <p style="text-align: left;">To know more about our work or in case of any query, get in touch. <br> We will get back to you.</p>
                </div>
                <div class="hd-off-det clearfix">
                	<div class="col-md-5 col-xs-12 address lpadding0">
                		<h1>Head Office</h1>
                		<p>Team Computers Pvt. Ltd.<br>No.1, Mohammadpur<br>Bhikaji Cama Place<br>New Delhi – 110066<br>India</p>
                	</div>
                	<div class="col-md-7 col-xs-12 cont-det">
                		<h1>Contact</h1>
                		<p>Contact
Toll Free: 1800 102 4200 / 1800 11 4200<br>Ph: +91 (11) 4200 4200,  Fax: +91 (11) 4200 4206</p><p>customercare@teamcomputers.com<br>careers@teamcomputers.com<br>
</p>
                	</div>	
                </div>
                <div class="location-map col-xs-12">
                	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112131.92428055007!2d77.11713402083609!3d28.56607998617609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1d85daaaaaab%3A0x41ba390c2686dd89!2sTeam+Computers-+Infrastructure+Solutions!5e0!3m2!1sen!2sin!4v1489994829637" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-md-4 col-xs-12">
              <div class="career-form cont-form">
              <div class="cont-form">
              	<h1 class="career-form-hd">Leave a message</h1>
              	
              	<form id="contact" name="contact" method="post">
						  <?php echo msgs();?>
						
                          <div class="form-group pmd-textfield pmd-textfield-floating-label bmargin0">
                            <label for="Full Name" class="control-label">Full Name<sup style="color: red">*</sup></label>
                            <input type="text" name="name" value="<?php if(isset($_POST['name']) && !empty($_POST['name'])){ echo $_POST['name']; }?>" class="form-control">
							  
                          </div>

                          <div class="form-group pmd-textfield pmd-textfield-floating-label bmargin0">
                            <label for="Email" class="control-label">Email<sup style="color: red">*</sup></label>
                            <input type="email" class="form-control"  name="email" value="<?php if(isset($_POST['email']) && !empty($_POST['email'])){ echo $_POST['email']; }?>"  email="true">
                           
                          </div>
                          <div class="form-group pmd-textfield pmd-textfield-floating-label bmargin0">
							  <label for="Phone" class="control-label">Phone<sup style="color: red">*</sup></label>
                            <input class="form-control" type="text" maxlength="10" pattern="\d{10}" name="phone" value="<?php if(isset($_POST['phone']) && !empty($_POST['phone'])){ echo $_POST['phone']; }?>"   number="true">
							 
                          </div>


                          <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <label for="current company" class="control-label">Your Organisation</label>
                            <input  name="organisation" value="<?php if(isset($_POST['organisation']) && !empty($_POST['organisation'])){ echo $_POST['organisation']; }?>" class="form-control" type="text">
<!--                            <span id="cur-comp"><?php echo $_SESSION['msgsCaptcha'];?></span>-->
                          </div>
                          
                          
                           
<!--
                           <div class="form-group">
												<label>Select a Solution<sup style="color:red; font-size:14px;">*</sup></label>
												<select class="form-control" name="enquiry">
													<option selected="" value="">Select a Solution</option>
													<option value="Infrastructure_Solutions" <?php if($_POST[ 'enquiry']=="Infrastructure_Solutions" ) echo "selected"; ?>>Infrastructure Solutions</option>
													<option value="Apps_and_Mobility" <?php if($_POST[ 'enquiry']=="Apps_and_Mobility" ) echo "selected"; ?>>Apps & Mobility</option>
													<option value="Cloud_Services" <?php if($_POST[ 'enquiry']=="Cloud_Services" ) echo "selected"; ?>>Cloud Services</option>
													<option value="Business_Analytics" <?php if($_POST[ 'enquiry']=="Business_Analytics" ) echo "selected"; ?>>Business Analytics</option>
													<option value="Managed_Services" <?php if($_POST[ 'enquiry']=="Managed_Services" ) echo "selected"; ?>>Managed Services</option>
													<option value="Others" <?php if($_POST[ 'enquiry']=="Others" ) echo "selected"; ?>>Others</option>
												</select>
											</div>
-->
                           
                           <div class="form-group">
                            <label class="control-label">Your Message<sup style="color: red">*</sup></label>
                            <textarea name="message" class="form-control" rows="4" ><?php if(isset($_POST['message']) && !empty($_POST['message'])){ echo $_POST['message']; }?></textarea>
                          </div>
                           
                           
                           <div class="form-group">
							   <label for="name error" class="nameLabel"><img src="captcha/captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' style="border: 1px solid #00aac4;vertical-align: middle;margin-right: 10px;margin-bottom: 10px;"><a href='javascript: refreshCaptcha();'><span style="color: #65757D;"><i class="fa fa-refresh" aria-hidden="true"></i> Refresh here</span></a></label>
                        
                          <input type="text" class="form-control" id="letters_code" name="letters_code" value="<?php if(isset($_POST['letters_code']) && !empty($_POST['letters_code'])){ echo $_POST['letters_code']; }?>" maxlength="7" placeholder="Enter Captcha..">
                      
                            
                  		</div>
                         
                          
                          
                          
                          
                          
                          <div class="form-group clearfix">

                            <!--          <a class="ap-btn width100p" href="#">Submit</a>-->
                            <button type="submit" name="action" value="contact1" class="ap-btn width100p">Submit</button>

                          </div>
                        </form>
              	</div>
              	</div>
              </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
<section class="cmn-hd all-ofc clearfix">
      <h1>Locations</h1>
      <div class="container">
      <div class="col-md-12 clearfix">
      <div class="row">
      <div class="col-md-3 col-sm-4 col-xs-12 delhi-loc cmn-st">
      	<div class="ofc-loc-img">
      		<img src="<?php echo BASE_URL_IMG;?>city-img/delhi.jpg" alt="Delhi location image" class="width100p">
      	</div>
      	<div class="ofc-det">
      		<h2>Delhi <a href="https://goo.gl/maps/fQ3uPQFsmq92" target="_blank">Route Map</a></h2>
      		<address>
      			No. 1 Mohammadpur<br>Bhikaji Cama Place<br>  New Delhi–110066
<br>
Ph:011-42004200<br><br><br>
      		</address>
      	</div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-12 gurugram-loc cmn-st">
      	<div class="ofc-loc-img">
      		<img src="<?php echo BASE_URL_IMG;?>city-img/gurugram.jpg" alt="gurugram location image" class="width100p">
      	</div>
      	<div class="ofc-det">
      		<h2>Gurugram <a href="https://goo.gl/maps/8wLTCkWN1Ck" target="_blank">Route Map</a></h2>
      		<address>
      			A Square Building, Plot no. 278 <br> Phase 2, Udhyog Vihar<br>  Gurugram-122002<br>
Ph:0124-3835700<br><br><br>
      		</address>
      	</div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-12 mumbai-loc cmn-st">
      	<div class="ofc-loc-img">
      		<img src="<?php echo BASE_URL_IMG;?>city-img/mumbai.jpg" alt="Mumbai location image" class="width100p">
      	</div>
      	<div class="ofc-det">
      		<h2>Mumbai <a href="https://goo.gl/maps/QXhNcMM8SMP2" target="_blank">Route Map</a></h2>
      		<address>
      			Radha Rani Silk Mill Compound <br> 30 Parsi Panchayat Road<br> Andheri (East) Mumbai-400069
<br>
Ph:022-33016200<br><br><br>
      		</address>
      	</div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-12 bangalore-loc cmn-st">
      	<div class="ofc-loc-img">
      		<img src="<?php echo BASE_URL_IMG;?>city-img/bangalore.jpg" alt="bangalore location image" class="width100p">
      	</div>
      	<div class="ofc-det">
      		<h2>Bengaluru <a href="https://goo.gl/maps/tTeASUEzXQp" target="_blank">Route Map</a></h2>
      		<address>
				Oxford Towers #810 & 811 <br> 7<sup>th</sup> Floor, Old Airport Road <br>  Bengaluru-560008<br>
Ph:080-30745400<br><br><br>
      		</address>
      	</div>
      </div> 
      <div class="col-md-3 col-sm-4 col-xs-12 kolkata-loc cmn-st">
      	<div class="ofc-loc-img">
      		<img src="<?php echo BASE_URL_IMG;?>city-img/kolkata.jpg" alt="gurugram location image" class="width100p">
      	</div>
      	<div class="ofc-det">
      		<h2>Kolkata</h2>
      		<address>
      			PS Srijan Corporate Park<br>
            1413, 14th Floor, Tower 1, Block GP,<br>
            Salt Lake City Sector - 5<br>
            Kolkata- 700091<br>
            Phone No:- 033-40571000
      		</address>
      	</div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-12 chennai-loc cmn-st">
      	<div class="ofc-loc-img">
      		<img src="<?php echo BASE_URL_IMG;?>city-img/chennai.jpg" alt="Chennai location image" class="width100p">
      	</div>
      	<div class="ofc-det">
      		<h2>Chennai <a href="https://goo.gl/maps/4W4BxSENURz" target="_blank">Route Map</a></h2>
      		<address>
      			No-27, Sait Colony, <br> 1<sup>st</sup> Floor, IST Street<br>  Egmore, Chennai-600008<br>
Ph:044-30291000<br><br><br>
      		</address>
      	</div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-12 pune-loc cmn-st">
      	<div class="ofc-loc-img">
      		<img src="<?php echo BASE_URL_IMG;?>city-img/pune.jpg" alt="Pune location image" class="width100p">
      	</div>
      	<div class="ofc-det">
      		<h2>Pune</h2>
      		<address>
      			Sadhana Apartment, Premises No. 2, <br> 1<sup>st</sup> Floor, 2076, Sadashiv Peth <br>Vijaynagar colony <br> Pune, Maharashtra-411030<br>
Ph: 020-65800122<br><br><br>
      		</address>
      	</div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-12 jaipur-loc cmn-st">
      	<div class="ofc-loc-img">
      		<img src="<?php echo BASE_URL_IMG;?>city-img/jaipur.jpg" alt="Jaipur location image" class="width100p">
      	</div>
      	<div class="ofc-det">
      		<h2>Jaipur</h2>
      		<address>
      			Office No. 508, 5<sup>th</sup> Floor  <br> Big Benn, Swage Farm <br>  New Sanganer Road <br>Jaipur-302019, Rajasthan<br>
Ph:0141-4107848<br><br><br>
      		</address>
      	</div>
      </div>
      
      <!--<div class="col-md-3 col-sm-4 col-xs-12 guwahati-loc">
      	<div class="ofc-loc-img">
      		<img src="<?php echo BASE_URL_IMG;?>city-img/guwahati.jpg" alt="Guwahati location image" class="width100p">
      	</div>
      	<div class="ofc-det">
      		<h2>Guwahati</h2>
      		<address>
      			

No. 21, P.B. Road<br>Near MM Choudhury Bhavan <br> Rehabari, Guwahati - 781008<br>
Ph:09707553940<br><br><br><br><br>
      		</address>
      	</div>
      </div>-->
      <!--<div class="col-md-3 col-sm-4 col-xs-12 pondicherry-loc">
      	<div class="ofc-loc-img">
      		<img src="images/city-img/pondicherry.jpg" alt="Pondicherry location image" class="width100p">
      	</div>
      	<div class="ofc-det">
      		<h2>Pondicherry</h2>
      		<address>
      			Plot No. 25, Kabirlar Nagar  <br> ECR Road <br>  Pondicherry-605008<br>
Ph:09790380380<br><br><br><br><br>
      		</address>
      	</div>
      </div>-->
      <!--<div class="col-md-3 col-sm-4 col-xs-12 dehradun-loc">
      	<div class="ofc-loc-img">
      		<img src="<?php echo BASE_URL_IMG;?>city-img/dehradun.jpg" alt="Dehradun location image" class="width100p">
      	</div>
      	<div class="ofc-det">
      		<h2>Dehradun</h2>
      		<address>
      			#164, Bank Colony  <br> Ajabpur Kalan  <br>  Dehradun-248001<br>
Ph:09412954547<br><br><br><br><br>
      		</address>
      	</div>
      </div>-->
      <div class="col-md-3 col-sm-4 col-xs-12 hyderabad-loc cmn-st">
      	<div class="ofc-loc-img">
      		<img src="<?php echo BASE_URL_IMG;?>city-img/hyderabad.jpg" alt="Hyderabad location image" class="width100p">
      	</div>
      	<div class="ofc-det">
      		<h2>Hyderabad <a href="https://goo.gl/maps/i363suNZkho" target="_blank">Route Map</a></h2>
      		<address>
      			Plot No. 77/78, Pagah Colony <br> S.P Road  <br> Secundrebad-500003<br>
Ph:040-27905801<br><br><br>
      		</address>
      	</div>
      </div>
      
      <div class="col-md-3 col-sm-4 col-xs-12 ahmedabad-loc cmn-st">
      	<div class="ofc-loc-img">
      		<img src="<?php echo BASE_URL_IMG;?>city-img/ahmedabad.jpg" alt="Ahmedabad location image" class="width100p">
      	</div>
      	<div class="ofc-det">
      		<h2>Ahmedabad</h2>
      		<address>
      			Office No. 1004-B 10<sup>th</sup> Floor <br> Synergy, Next to Vodafone House<br>  Corporate Road, Prahlad Nagar<br>Ahmedabad-380015 <br>
Ph:079-40023272 <br><br><br>
      		</address>
      	</div>
      </div>
      <!--<div class="col-md-3 col-sm-4 col-xs-12 noida-loc">
      	<div class="ofc-loc-img">
      		<img src="<?php echo BASE_URL_IMG;?>city-img/noida.jpg" alt="Noida location image" class="width100p">
      	</div>
      	<div class="ofc-det">
      		<h2>Noida</h2>
      		<address>
      			 G-86, Sector-63 <br>  Noida-201301<br>
Ph:0120-2541253<br><br><br>
      		</address>
      	</div>
      </div>-->
      </div>
      </div>
      </div>
</section>
</div>

<?php include("include/footer.php");?>
<!-- jquery JS --> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 

<!-- Bootstrap js --> 
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 

<!-- Propeller min js --> 
<script type="text/javascript" src="http://propeller.in/assets/js/propeller.min.js"></script> 

<!-- Propeller textfield js --> 
<script type="text/javascript" src="http://propeller.in/components/textfield/js/textfield.js"></script> 

<script type="text/javascript" src="<?php echo BASE_URL_JS;?>custom.js"></script>
<script src="<?php echo BASE_URL_JS; ?>validate.js"></script>
 <script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>

  <script>
    $('.location-map')
	.click(function(){
			$(this).find('iframe').addClass('clicked')})
	.mouseleave(function(){
			$(this).find('iframe').removeClass('clicked')});
  </script>

</body>
</html>
