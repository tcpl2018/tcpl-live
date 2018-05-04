
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KDW47BN');</script>
<!-- End Google Tag Manager -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Casestudies</title>
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
<div class="clearfix"></div>
<section class="cmn-padd career-banner-cover case-studies-banner-cover-bg valigncenter">
  <div class="container">
    <div class="header-min-hei banner-content">
      <h1>Across Businesses in India</h1>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="job-dec pos cmn-box">
	<div class="container-fluid career-team-bg cmn-padd  border-bottom">
		<div class="container">
			<div class="row clearfix">
				<div class="valigncenter">
					<div class="jobs-header case-studies-hdr">
						<h2>Case Study by Vertical</h2>

						<button data-rel="all" type="button" class="fil-cat active btn pmd-btn-outline pmd-ripple-effect btn-default">All</button>

						<?php foreach($result_case_studies_verticals as $result_case_studies_vertical){
							
							// $jobs = explode(">",$result_case_study['vertical']);
							
							// $j=0; 
			    //             foreach($jobs as $job):
			                if(!empty($result_case_studies_vertical['vertical']))	{
			                	
							?>
			                

						<button data-rel="<?php echo $result_case_studies_vertical['vertical']; ?>" type="button" class="fil-cat btn pmd-btn-outline pmd-ripple-effect btn-default"><?php echo $result_case_studies_vertical['vertical']; ?></button>
						
						<?php 
						//$j++;
				           //endforeach; 
					}else{ ?>
					<button style="display: none;" type="button" class="fil-cat btn pmd-btn-outline pmd-ripple-effect btn-default"></button>
					<?php } }?>


						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cmn-padd rel-solutions cs-cover">
	  <div class="container">
		<div class="solutions-inner clearfix">
		  <div id="portfolio" class="row">
		  	<?php foreach($result_case_studies as $result_case_study){
				
				// $jobs = explode(">",$result_case_study['vertical']);
				
				// $j=0; 
    //             foreach($jobs as $job):
                	
                	
				?>


			 <div class="col-md-6 col-sm-6 col-xs-12 newsroom-box-cvr scale-anm auto <?php echo $result_case_study['vertical']; ?> all">
			  <a href="case-studies-inner?caseid=<?php echo $result_case_study['case_id']; ?>">
			  <div class="rel-cmn-box newsroom-box cs-box">
				<figure>
					<img src="<?php echo CASE_STUDY_SHOW_PATH.$result_case_study['case_thumbnail_image']; ?>" alt="Image">

				<figcaption>
					<span><?php echo substr($result_case_study['case_name'],0,110); ?></span>
					<!-- <span><?php echo $job; ?></span> -->
					<span><?php 
				if(isset($result_case_study['case_sector_name']) && !empty($result_case_study['case_sector_name'])){
        		echo $result_case_study['case_sector_name'];
        	}else{
				echo "Other Content"; } ?></span>
				</figcaption></figure>
			  </div></a>
			 </div>

			 
		<?php 
		//$j++;
            //endforeach; 

		} ?>




			 <div class="clearfix"></div>
			 <div class="btn-box">
				<button type="button" class="btn pmd-btn-outline pmd-ripple-effect btn-default load-more">Load more <img src="images/arrow-icon.png" alt="arrow icon" style="height: 10px"></button>
			</div>
		 </div>
		</div>
	  </div>
	</div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd we-are-hiring we-are-hiring-bg2 we-are-hiring-cmn valigncenter">
  <div class="container">
    <div class="row banner-content">
      <h2>"Team is an organization that builds entrepreneurs."<br>
        <span>By Henri, who was in Team and later co-founded Black Magic.</span></h2>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section class="cmn-padd job-dec pos cmn-padd cmn-box hap-cus">
  <div class="container clearfix">
    <h2 class="cmn-hdr">
        <span class="line-text">1800+ Happy Customers</span>
      </h2>
  	<div class="valigncenter">
        <div class="jobs-header case-studies-hdr happy-cust"> <img src="images/happy-customers/maruti-suzuki.png" alt="maruti suzuki logo"> <img src="images/happy-customers/whirlpool.png" alt="whirlpool logo"> <img src="images/happy-customers/honda.png" alt="honda logo"> <img src="images/happy-customers/escorts.png" alt="escorts logo"> <img src="images/happy-customers/ola.png" alt="ola logo"> <img src="images/happy-customers/icici.png" alt="icici logo">
      </div>	  
  </div>
	  <a href="clients">See More</a>
</section>
<div class="clearfix"></div>
<section class="cmn-padd get-in-touch form">
  <div class="container">
    <div class="clearfix">
      <div class="git-txt col-xs-12">
        <h2 class="txt">Deploy, everywhere in India</h2>
        <div class="get-in-touch-form form" style="text-align: center">
          <!--<input type="text"  class="form-control" placeholder="Full Name">
          <input type="tel"  class="form-control" placeholder="Work Phone">
          <input type="email"  class="form-control" placeholder="Work Email">-->
          <a href="cta-landing" class="btn pmd-btn-raised pmd-ripple-effect btn-info white-btn">Get In Touch</a>
        </div>
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
<!-- Owl carousel css -->
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>


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
				x=4;
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