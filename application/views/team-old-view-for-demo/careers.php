<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Careers | Team Computers Pvt. Ltd.</title>
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
    <style type="text/css">
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
	<div class="body-content innner-body-con">
		<section class="solutions-banner clearfix">
			<div class="container">
				<h1>Careers</h1>
			</div>
		</section>
		<section class="find-job" style="padding: 0">
			<div class="container-fluid">
				<div class="row">
					<div class="all-emp clearfix" style="padding: 0">
						<div class="col-md-4 col-sm-4 career-icon-menu">
							<div class="row">
								<div class="career-nav-icon col-md-9 col-md-offset-3" style="padding: 50px 0 0 10px">
									<a href="javascript:void(0);">
										<ul class="ic-cover" id="category" onclick="selectCategory('1')">
											<li class="icon-img-sales"></li>
											<li>Sales</li>
										</ul>
									</a>
									<a href="javascript:void(0);">
										<ul class="ic-cover" id="category" onclick="selectCategory('2')">
											<li class="icon-img-it"></li>
											<li>Information Technology</li>
										</ul>
										<a href="javascript:void(0);">
											<ul class="ic-cover" id="category" onclick="selectCategory('3')">
												<li class="icon-img-os"></li>
												<li>Operation & Support <br>
													<span>(HR /Finance /Admin /Marketing /Legal/ Audit)</span>
												</li>
											</ul>
										</a>
										<a href="javascript:void(0);">
											<ul class="ic-cover" id="category" onclick="selectCategory('4')">
												<li class="icon-img-l"></li>
												<li>Leadership</li>
											</ul>
										</a>
										<a href="javascript:void(0);">
											<ul class="ic-cover" id="category" onclick="selectCategory('5')">
												<li class="icon-img-pm"></li>
												<li>Product Management</li>
											</ul>
										</a>
										<a href="javascript:void(0);">
											<ul class="ic-cover" id="category" onclick="selectCategory('6')">
												<li class="icon-img-be"></li>
												<li>Not Sure where to begin<br><span>(Student exploring careers /Professional)</span>
												</li>
											</ul>
										</a>
								</div>
							</div>
						</div>
						<div class="col-md-8 col-sm-8 clearfix" id="side-section">
							<p><img src="<?php echo BASE_URL_IMG;?>left-arrow.png"><span>Select the category you feel most excited by</span>
							</p>
						</div>
						<div class="col-md-8 clearfix" id="fetchJobs">




						</div>

					</div>
					<div class="cmn-btn tbpadding" style="padding: 50px 0 100px">
						<p>Explore why you should be with us</p>
						<a href="culture">
										<input type="button" value="Our Culture" class="btn-primary"></a>
					
					</div>

					<div class="col-xs-12 hidden-md hidden-sm hidden-lg" style="margin-bottom: 20px;">
						<div class="career-form cont-form">
							<div class="cont-form">
								<h1 class="career-form-hd">Upload your resume into our database</h1>

								<form enctype="multipart/form-data" id="contact" name="contact" method="post" action="<?php echo BASE_URL().'site/explore_students';?>">
									<?php foreach ($errors as $error) { ?>
				                  <div class="alert alert-danger" style="font-size:14px;"><span>Error: </span><b> <?php echo $error ; ?> </b></div>
				                 <?php  }?>
				                  <input type="hidden" name="jc" value="<?php echo $jobDescription[0]['prod_code']; ?>">
				                  <input type="hidden" name="jl" value="<?php echo $jobDescription[0]['prod_location']; ?>">
				                  <input type="hidden" name="jt" value="<?php echo $jobDescription[0]['prod_title']; ?>">

									<div class="form-group pmd-textfield pmd-textfield-floating-label bmargin0">
										<label for="Full Name" class="control-label">Full Name<sup style="color: red">*</sup></label>
										<input name="name" id="name" class="form-control" type="text"><span class="pmd-textfield-focused"></span>
										<p class="text-danger" id="name_error"></p>
									</div>

									<div class="form-group pmd-textfield pmd-textfield-floating-label bmargin0">
										<label for="Email" class="control-label">Email<sup style="color: red">*</sup></label>
										<input class="form-control" id="email" name="email" email="true" type="email"><span class="pmd-textfield-focused"></span>

									</div>
									<div class="form-group pmd-textfield pmd-textfield-floating-label bmargin0">
										<label for="Phone" class="control-label">Phone<sup style="color: red">*</sup></label>
										<input class="form-control" maxlength="10" pattern="\d{10}" name="phone" id="phone" number="true" type="text"><span class="pmd-textfield-focused"></span>
									</div>
									<div class="form-group pmd-textfield pmd-textfield-floating-label">
										<label for="current company" class="c">Your Organisation</label>
										<input name="organisation" id="organisation" class="form-control" type="text"><span class="pmd-textfield-focused"></span>
									</div>
									 <div class="form-group pmd-textfield pmd-textfield-floating-label">
                						<label class="fileContainer control-label"><i class="fa fa-upload"></i>&nbsp Attach CV <sup style="color: red">*</sup>
  										<input id="up-docs" name="file" class="form-control" type="file"></label>
                    				</div>
									<div class="form-group">
										<label class="control-label">Your Message</label>
										<textarea name="message" id="message" class="form-control" rows="4"></textarea>
									</div>
									<div class="g-recaptcha" data-sitekey="6Le4jyIUAAAAAOIVqgkoUoxhpVeQb30RKK2xt9SD" style="transform:scale(0.84);transform-origin:0 0"></div>


									<!-- <div class="form-group">
										<label for="name error" class="nameLabel"><img src="captcha/captcha_code_file.php?rand=1468545982" id="captchaimg" style="border: 1px solid #00aac4;vertical-align: middle;margin-right: 10px;margin-bottom: 10px;"><a href="javascript: refreshCaptcha();"><span style="color: #65757D;"><i class="fa fa-refresh" aria-hidden="true"></i> Refresh here</span></a></label>

										<input class="form-control" id="letters_code" name="letters_code" value="" maxlength="7" placeholder="Enter Captcha.." type="text">


									</div> -->






									<div class="form-group clearfix cmn-btn" style="margin-bottom: 0">

										<!--          <a class="ap-btn width100p" href="#">Submit</a>-->
										<button type="submit" name="action" value="contact1" class="ap-btn width100p btn-primary" style="margin-top: 7px">Submit</button>

									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>
	<?php include("include/footer.php"); ?>
	<!-- jquery JS -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Bootstrap js -->
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<!-- Propeller textfield js -->
	<script type="text/javascript" src="http://propeller.in/components/textfield/js/textfield.js"></script>

	<script type="text/javascript" src="<?php echo BASE_URL_JS; ?>custom.js"></script>
</body>

</html>

<script>
	function selectCategory( id ) {

		$.ajax( {
			type: "post",
			url: 'site/selectCategory',
			data: {
				id: id
			},
			success: function ( data ) {

				$( "#fetchJobs" ).html( data );
				localStorage.setItem( "cat_id", categoryId );
			}

		} );
	}
</script>
<script>
	$( document ).ready( function () {
		$( '.career-nav-icon a' ).click( function () {
			$( '.career-nav-icon a' ).removeClass( 'active1' );
			$( this ).addClass( 'active1' );
			$( '#side-section' ).css( 'display', 'none' );
		} )
	} )
</script>

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