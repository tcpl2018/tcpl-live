<?php 
$page_name = 'open-positions';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Open Positions</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="fonts/fontello/css/fontello.css" rel="stylesheet">
<!-- Bootstrap css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="css/propeller.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/style-responsive.css" rel="stylesheet">	
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
          <li class="active"><a href="open-positions"><img src="images/open-positions.png" alt="open positions icon"> Open Positions</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<div class="job-dec career-team-bg pos cmn-padd cmn-box border-bottom">
  <div class="container">
    <div class="row clearfix">
     <div class="valigncenter">
      <div class="jobs-header">
      	<a href="javascript:void(0);" data-rel="all" type="button" class="btn pmd-btn-outline pmd-ripple-effect btn-default active" id="category" onclick="selectCategory('1')">All</a>
      	<a href="javascript:void(0);" class="btn pmd-btn-outline pmd-ripple-effect btn-default" id="category" onclick="selectCategory('1')">Corporate</a>
      	<a href="javascript:void(0);" class="btn pmd-btn-outline pmd-ripple-effect btn-default" id="category" onclick="selectCategory('2')">Delivery and Support</a>
      	<a href="javascript:void(0);" class="btn pmd-btn-outline pmd-ripple-effect btn-default" id="category" onclick="selectCategory('3')">Leadership</a>
      	<a href="javascript:void(0);" class="btn pmd-btn-outline pmd-ripple-effect btn-default" id="category" onclick="selectCategory('4')">Sales</a>
      	<a href="javascript:void(0);" class="btn pmd-btn-outline pmd-ripple-effect btn-default" id="category" onclick="selectCategory('5')">Consulting</a>
        <a href="javascript:void(0);" class="btn pmd-btn-outline pmd-ripple-effect btn-default" id="category" onclick="selectCategory('6')">Technologies & Software/Engineering</a>

      </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
<section class="cmn-padd job-dec cmn-padd cmn-box jobs-card-cover">
  <div class="container">
    <div class="row clearfix">

      <?php foreach($openings as $opening){ ?>
        <div class="col-md-4">
          <div class="cmn-card" style="margin: 10px;min-height: 250px;max-height: 250px;">
            <h3><?php echo $opening['prod_title']; ?></h3>
            <p><img src="images/map-marker.png" alt="map marker icon"> <?php echo $opening['prod_location']; ?></p><br>
            <!-- <?php echo echoStr(substr($opening['prod_desc'],0,300)); ?> -->
         <div class="btn-box">
          <a href="<?php echo BASE_URL.'/jobDescription?jc='.$opening['prod_code']; ?>"><button type="button" class="btn pmd-ripple-effect btn-primary"> Apply Now </button></a>
        </div>
          </div>
        </div> 

<?php }?>

<div class="jobs-card"  id="fetchJobs"></div>
    </div>

<!-- <div class="jobs-card"  id="fetchJobs"></div>
</div> -->

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

		<h3>For the Freshers</h3>
		<p>Don’t know where to start / Don’t know where to begin?
	Click & fill the form.</p>
	 <button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-info" data-toggle="modal" data-target="#exampleModal">Apply Here</button>
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
        <div class="col-md-6 fresh-box">
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
        <div class="col-md-6 exp-box">
        <div class="form-hd">
        <img src="images/exp-icon.png" alt="experience icon pic">
        <p>Experienced Application Form</p></div>
        	<form  id="exp-form" name="contact" method="post" class="contact-form">
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
                  <input type="file" class="form-control" >
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
<a href="#0" class="cd-top"><img src="images/up-arrow.png" alt="up arrow icon"></a>
<!-- jQuery before Propeller.js --> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/propeller.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.1/bootstrap-slider.min.js"></script>
<!-- start career section -->
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

<!-- end career section -->

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
	</script>
</body>
</html>