
<?php // print_r($info); die();?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Events at Team Computers</title>
<link rel="shortcut icon" href="../image/favicon.png"/>
<meta name="description" content="We do regular events to bring the best technologies & IT solutions from the market to our customers. It is excitement packaged with fun and learning. Be part of it." />
<meta name="keywords" content="Team Events, Upcoming events, IT events" />
<meta name="robots" content="index, follow" />

<!-- font awesome -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Roboto:300,400,500,700,900" rel="stylesheet">
<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Custom styles -->

<link rel="stylesheet" href="<?php echo BASE_URL_CSS;?>reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL_CSS;?>/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL_CSS;?>/slick/slick-theme.css">
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
		<h1 class="col-md-12">Events</h1>
    </div>
  </section>
  <section class="find-job">
    <div class="container">
      <div class="row">
        <div class="all-emp clearfix">
          <div class="row">
            <div class="container clearfix">
             <div class="col-md-12 clearfix">
                <div class="main-txt">
                  <p style="max-width: 100%; text-align: left">Happy customers are what makes our event stories successful. We not only provide experiences, but also the right audience and suitable engagement platforms for our partners.</p>
                </div>  
              </div>
              <div class="cmn-hd"><h1 style="margin-bottom: 50px">Recent Events</h1></div>
              <div class="col-md-12 clearfix">
                <div class="all-job-des row clearfix">
                
                <?php $getEvents = $this->site_mdl->getAllEvents(); 
									//test($getEvents);
									foreach($getEvents as $dataEvent){
									?> 
                 <div class="evnts-cmn clearfix">
                    <div class="col-md-6 events-half">
                    <img src="<?php echo EVENT_SHOW_PATH.$dataEvent['evnt_photo']; ?>" alt="events image" class="width100p">
                    </div>
                    <div class="col-md-6 job-des rpadding0">
                      <div class="events-txt even">
                        <h1><?php echo $dataEvent['evnt_caption']; ?></h1>
						  <p><img src="<?php echo BASE_URL_IMG;?>location-icon-blue.png" alt="location icon">&nbsp; <?php echo date("m/d/y",$dataEvent['evnt_strt_date']); ?> |  <?php echo $dataEvent['evnt_location']; ?> </p>
                        <?php echo echoStr($dataEvent['evnt_desc']); ?>
                        
                        </div>
                    </div>
                  </div>
                  <?php } ?>
<!--
                  <div class="evnts-cmn clearfix">
                    <div class="col-md-6 events-half">
                      <div class="events-img"><img src="<?php echo BASE_URL_IMG;?>event1.jpg" alt="events image" class="width100p"></div>
                    </div>
                    <div class="col-md-6 job-des rpadding0">
                      <div class="events-txt even">
                        <h1>Reduce costly downtime and increase your ROI</h1>
						  <p><img src="<?php echo BASE_URL_IMG;?>location-icon-blue.png" alt="location icon">&nbsp; Jan 23, 2017 |  Delhi </p>
                        <p>Discover how Quest data protection can help you</p>
                        <ul>
                        	<li>Achieve Zero Impact recovery</li>
                        	<li>Identify  the top causes of downtime</li>
                        	<li>Avoid exposing your business to unnecessary risk</li>
                        	<li>Minimise backup and storage management</li>
                        	<li>Squeeze additional value out of your existing investments and more</li>
                        </ul>
						
                        <a href="#">Register</a> </div>
                    </div>
                  </div>
-->
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php include("include/footer.php");?>
<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal event-register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<!--<img id="img_logo" src="images/team-logo.png">-->
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                <!-- Begin # Login Form -->
                    <form id="login-form event-popup">
		                <div class="modal-body">
				    		<form role="form" name="myForm" id="myForm" method="post" class="contact-form" novalidate>       
                    
                    
                   <div class="row">
                    <div class="col-md-12">
                  
                  <div class="button-group">
                 <button type="submit" name="action" value="Submit" class="btn btn-primary col-md-3 col-md-offset-2">Submit</button>  
                </div>
                  </div>
                  </div>
                </form>          
        		    	</div>
				        
                    </form>
                    <!-- End # Login Form -->
                    </div>
                <!-- End # DIV Form -->
                
			</div>
		</div>
	</div>
    <!-- END # MODAL LOGIN -->
<!-- jquery JS --> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 

<!-- Bootstrap js --> 
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 

<!-- Propeller textfield js --> 
<script type="text/javascript" src="http://propeller.in/components/textfield/js/textfield.js"></script>
 
<script type="text/javascript" src="<?php echo BASE_URL_JS;?>custom.js"></script>
	<script src="<?php echo BASE_URL_JS;?>/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script>
	$(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true,
		autoplay: true, 
		slidesToShow: 1
      });
	</script>
</body>
</html>
