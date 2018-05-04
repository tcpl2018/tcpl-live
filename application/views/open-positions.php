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
	<title>Open Positions | Team Computers</title>
	<meta name="description" content="Team Computers is a platform for the self started and entrepreneurial.  Check out our currently open positions." />
	<meta name="robots" content="index, follow">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="fonts/fontello/css/fontello.css" rel="stylesheet">
	<!-- Bootstrap css-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="css/propeller.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/style-responsive.css" rel="stylesheet">
	<link rel="shortcut icon" href="images/favicon.png"/>
	
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
						<li><a href="career-work"><img src="images/work.png" alt="work icon"> Work</a>
						</li>
						<li><a href="culture"><img src="images/cup-icon.png" alt="cup icon"> Culture</a>
						</li>
						<li><a href="career-team"><img src="images/team.png" alt="team icon"> Team</a>
						</li>
						<li class="active"><a href="open-positions"><img src="images/open-positions.png" alt="open positions icon"> Open Positions</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<div class="clearfix"></div>
	
	
	<!--Career section-->
	<section class="job-dec pos cmn-box">
	<div class="container-fluid career-team-bg cmn-padd  border-bottom">
		<div class="container">
			<div class="clearfix">
				<div class="valigncenter">
					<div class="jobs-header case-studies-hdr">
						
						<button data-rel="all" type="button" class="fil-cat active btn pmd-btn-outline pmd-ripple-effect btn-default">All</button>

						<?php foreach($openings as $opening){?>
						<button data-rel="<?php echo $opening['artst_id']; ?>" type="button" class="fil-cat btn pmd-btn-outline pmd-ripple-effect btn-default"><?php echo $opening['artst_name']; ?></button>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="cmn-padd rel-solutions cs-cover">
	  <div class="container">
		<div class="solutions-inner clearfix">
		  <div id="portfolio" class="row">
			<?php foreach($openings as $opening){
				
				$jobs = explode(">",$opening['name']);
				
				$j=0; 
                foreach($jobs as $job):
                	
                	
				?>
		  	
			 <div class="col-md-4 col-sm-4 col-xs-12 newsroom-box-cvr scale-anm <?php echo $opening['artst_id']; ?> all">
			 	<div class="job-dec cmn-box jobs-card-cover">
				  	<a href="<?php echo BASE_URL.'/jobDescription?jc='.$opening['prod_code']; ?>">
				  	<div class="cmn-card job-card">
		            <h3><?php echo $job; ?></h3>
		            <p><img src="images/map-marker.png" alt="map marker icon"> <?php echo $opening['prod_location']; ?></p><br>
		            <!-- <?php echo echoStr(substr($opening['prod_desc'],0,300)); ?> -->
			        <div class="btn-box">
			          <a href="<?php echo BASE_URL.'/jobDescription?jc='.$opening['prod_code']; ?>"><button type="button" class="btn pmd-ripple-effect btn-primary"> Apply Now </button></a>
			        </div>
		          	</div>
					</a>
			 	</div>
			 </div>
			<?php
                                                    $j++;
                                                    endforeach; 
                                                } 
                                                ?>


			<!--Button to load more-->
			 <!-- <div class="clearfix"></div>
			 <div class="btn-box">
				<button type="button" class="btn pmd-btn-outline pmd-ripple-effect btn-default load-more">Load more <img src="images/arrow-icon.png" alt="arrow icon" style="height: 10px"></button>
			</div> -->
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

				<h3>For the Freshers</h3>
				<p>Don’t know where to start / Don’t know where to begin? Click & fill the form.</p>
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
        <a href="https://twitter.com/_teamcomputers" target="_blank" type="button" class="btn pmd-ripple-effect btn-primary tw-btn"><i class="fa fa-twitter"></i> Twitter </a>
        <a href="https://www.facebook.com/ConnectwithTeam/" target="_blank" type="button" class="btn pmd-ripple-effect btn-primary fb-btn"><i class="fa fa-facebook"></i> Facebook </a>
        <a href="https://www.linkedin.com/company/team-computers/?originalSubdomain=in" target="_blank" type="button" class="btn pmd-ripple-effect btn-primary li-btn"><i class="fa fa-linkedin"></i> Linkedin </a>
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
		<a href="#0" class="cd-top hidden"><img src="images/up-arrow.png" alt="up arrow icon"></a>
		<!-- jQuery before Propeller.js -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/propeller.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.1/bootstrap-slider.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<!-- start career section -->
		<!-- <script>
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
		</script> -->

		<!-- end career section -->

		<script>
		$(document).ready(function () {
			$(function() {
					var selectedClass = "";
					$(".fil-cat").click(function(){
					$(this).addClass('active');	
					$(this).siblings().removeClass('active');
					selectedClass = $(this).attr("data-rel"); 
				 $("#portfolio").fadeTo(100, 0.1);
					$("#portfolio .newsroom-box-cvr").not("."+selectedClass).fadeOut().removeClass('scale-anm');
				setTimeout(function() {
				  $("."+selectedClass).fadeIn().addClass('scale-anm');
				  $("#portfolio").fadeTo(300, 1);
				}, 300); 
					
				});
			});
			//$(function() {
				var size_li = $(".newsroom-box-cvr").size();
				x=100;
				$('.newsroom-box-cvr:lt('+x+')').fadeIn('slow');
				$('.load-more').click(function () {
					x= (x+3 <= size_li) ? x+3 : size_li;
					$('.newsroom-box-cvr:lt('+x+')').fadeIn('slow');
					if(x == size_li){
						$(this).parent().fadeOut('slow');
					}
				});
			//});
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
	</script>
</body>

</html>