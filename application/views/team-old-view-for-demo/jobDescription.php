<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Welcome to Team Computers Pvt Ltd</title>

  <!-- font awesome -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Roboto:300,400,500,700,900" rel="stylesheet">
  <!-- Bootstrap -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="shortcut icon" href="../image/favicon.png"/>

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
  label.error {
    color: red;
    font-size: 14px;
    font-weight: 300;
/*
    line-height: 1.4;
    margin-top: .5em;
*/
    width: 100%;
    float: none;
}
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
  .pmd-textfield-floating-label.pmd-textfield-floating-label-completed label{
      color: #ED0D11!important;
    }
  </style>
</head>

<body>
  <header>
    <div id="inner-header" class="clearfix">
      <?php include("include/inc_nav.php");?>
      <!-- end .navbar -->
    </div>
  </header>
  <div class="clearfix"></div>
  <php  ?>
  <div class="body-content innner-body-con">
    <section class="solutions-banner clearfix">
      <div class="container">
        <h1 class="career-fnt col-md-12"><a href="careers"><i class="fa fa-arrow-left" style="font-size: 15px; width: 14px; vertical-align: middle"></i> Back</a></h1>
      </div>
    </section>
    <section class="find-job">
      <div class="container">
        <div class="row">
          <div class="all-emp car-dt clearfix" style="padding: 18px">
            
               <h1 class="career-fnt col-md-12" style="font-size: 30px; margin-bottom: 20px">
      <?php echo $jobDescription[0]['prod_title']; ?>
    </h1>
                <div class="col-md-8 cr-txt" style="margin-bottom: 20px;">
              <p>Location: <?php echo $jobDescription[0]['prod_location']; ?></p>
              
                <p> <?php echo echoStr($jobDescription[0]['prod_desc'])  ; ?></p>
                </div>
                
                <div class="col-md-4 career-form">
                  <h1 class="career-form-hd">Job Application Form</h1>
                  
                  <form enctype="multipart/form-data" id="contact" name="contact" method="post" action="">
                  <?php foreach ($errors as $error) { ?>
                  <div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b> <?php echo $error ; ?> </b></div>
                 <?php  }?>
                  <input type="hidden" name="jc" value="<?php echo $jobDescription[0]['prod_code']; ?>">
                  <input type="hidden" name="jl" value="<?php echo $jobDescription[0]['prod_location']; ?>">
                  <input type="hidden" name="jt" value="<?php echo $jobDescription[0]['prod_title']; ?>">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label bmargin0">
                      <label for="Full Name" class="control-label">Full Name<sup style="color: red">*</sup></label>
                      <input name="name" id="name" class="form-control" type="text">
                      <p class="text-danger" id="name_error"></p>
                    </div>
                    

                    <div class="form-group pmd-textfield pmd-textfield-floating-label bmargin0">
                      <label for="Email" class="control-label">Email<sup style="color: red">*</sup></label>
                      <input class="form-control" id="email" name="email" email="true">
                    </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label bmargin0">
                      <label for="Phone" class="control-label">Phone<sup style="color: red">*</sup></label>
                      <input class="form-control" name="phone" id="phone" number="true">
                    </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label bmargin0">
                      <label for="experience" class="control-label">Experience (in years)<sup style="color: red">*</sup></label>
                      <input id="exp" name="experience"  class="form-control" type="text">
                    </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label bmargin0">
                      <label for="Portfolio URL" class="control-label">Portfolio URL</label>
                      <input id="port-url" name="portfolio_url" class="form-control" type="text" >
                    </div>

                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                      <label for="current company" class="control-label">Current Company</label>
                      <input id="cur-comp" name="current_company" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                      <label class="control-label">WRITE YOUR COVER LETTER</label>
                      <textarea name="cover_letter" class="form-control" rows="7"></textarea>
                    </div>
                    <div class="form-group clearfix">
                <label class="fileContainer"><i class="fa fa-upload"></i>&nbsp Attach CV <sup style="color: red">*</sup>
  <input id="up-docs" name="file" class="form-control" type="file"></label>
                    </div>
<!-- Captcha code -->

                 
                          <div class="g-recaptcha" data-sitekey="6Le4jyIUAAAAAOIVqgkoUoxhpVeQb30RKK2xt9SD" style="transform:scale(0.84);transform-origin:0 0"></div>
                      
                            
                      


<!-- End Captcha Code -->



                    <div class="form-group clearfix">

                      <button type="submit" name="action" value="contact" class="ap-btn width100p">Apply</button>

                    </div>
                  </form>
                </div>
              
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

  <!-- Propeller textfield js -->
  <script type="text/javascript" src="http://propeller.in/components/textfield/js/textfield.js"></script>

  <script type="text/javascript" src="<?php echo BASE_URL_CSS;?>custom.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL_JS;?>custom.js"></script>
  <script src="<?php echo BASE_URL_JS; ?>validate.js"></script>
<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
  var img = document.images['captchaimg'];
  img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>


    <!-- <script>
    $( '#contact' ).validate();
    </script> -->
</body>

</html>


<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

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
    experience: {
      required: true,
      number: true
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