<?php 
//to get all newsroom
$current_page_name = basename($_SERVER["PHP_SELF"]);
//echo "<pre>"; print_r($current_page_name);exit();

$getNewsrooms = $this->site_mdl->getAllNewsroom();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Team Computers - Information Technology(IT) Consulting & Business Consulting Services</title>
<meta name="description" content="We combine imagination with design to create value and provide the best customer experience." />
<meta name="robots" content="index, follow">
<meta name="google-site-verification" content="Jix8xdtLjhg5hZIqk3DNhOMRLSkFTm6qE-IxtCFppt8" />
<link async defer href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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
<link rel="shortcut icon" href="images/favicon.png"/>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KDW47BN');</script>
<!-- End Google Tag Manager -->
</head>

<body class="landing-page">
<div id="preloader"></div>
<?php include 'include/header.php';?>
<section class="home-page-intro-slider">
    <div id="intro-carousel" class="owl-carousel owl-theme">
        <div class="item">
            <img src="images/website-home-page-1-01.jpg">
            <h1 class="intro-text">
                <span>Creating great</span> <span>experiences.</span>
            </h1>
        </div>
        <div class="item">
            <img src="images/website-home-page-1-02.jpg">
            <h1 class="intro-text">
                <span>Creating great</span> <span>experiences.</span>
            </h1>
        </div>
        <div class="item">
            <img src="images/website-home-page-1-03.jpg">
            <h1 class="intro-text">
                <span>Creating great</span> <span>experiences.</span>
            </h1>
        </div>
		<div class="item">
            <img src="images/website-home-page-1-04.jpg">
            <h1 class="intro-text">
                <span>Creating great</span> <span>experiences.</span>
            </h1>
        </div>
		<div class="item">
            <img src="images/website-home-page-01.jpg">
            <h1 class="intro-text">
                <span>Creating great</span> <span>experiences.</span>
            </h1>
        </div>
        <!-- 6 -->
		<div class="item">
            <img src="images/website-home-page-02.jpg">
            <h1 class="intro-text">
                <span>Creating great</span> <span>experiences.</span>
            </h1>
        </div>
        <!-- 7 -->
		<div class="item">
            <img src="images/website-home-page-03.jpg">
            <h1 class="intro-text">
                <span>Creating great</span> <span>experiences.</span>
            </h1>
        </div>
		<div class="item">
            <img src="images/website-home-page-04.jpg">
            <h1 class="intro-text">
                <span>Creating great</span> <span>experiences.</span>
            </h1>
        </div>
		<div class="item">
            <img src="images/website-home-page-05.jpg">
            <h1 class="intro-text">
                <span>Creating great</span> <span>experiences.</span>
            </h1>
        </div>
		<div class="item">
            <img src="images/website-home-page-1-05.jpg">
            <h1 class="intro-text">
                <span>Creating great</span> <span>experiences.</span>
            </h1>
        </div>
    </div>
    <div class="static-text-animation">
        <div class="static-text-box">
            <span>I am looking</span>
            <div id="static-text-carousel" class="owl-carousel owl-theme">
				<a href="/it-infrastructure-services"><p class="item">for a state of the art IT system <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></p></a>
                <a href="/mobile-apps"><p class="item">for mobile ready applicatons <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></p></a>
				<a href="/business-analytics"><p class="item">for dashboards, analytics & reports <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></p></a>
				<a href="/business-analytics"><p class="item">for predictive analytics & BI <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></p></a>
                <a href="/managed-services-mps"><p class="item">to reduce my printing cost <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></p></a>
                <!-- 6 -->
                <a href="/cloud-services-india"><p class="item">to migrate to the cloud <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></p></a>
				<a href="/network-server-storage-solutions"><p class="item">to upgrade my network <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></p></a>
                <a href="/business-apps"><p class="item">for software applications <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></p></a>
                <a href="/end-user-computing"><p class="item">for smartphones & notebooks <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></p></a>
				<a href="/managed-services"><p class="item">to optimize my existing IT <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></p></a>
            </div>
        </div>
    </div>

</section>
<div class="clearfix"></div>
<section class="part-tech clearfix">
	<div class="container">
		<div id="partner-carousel1" class="owl-carousel owl-theme valigncenter">
				<div class="item part-tech-cmn-box">
					<figure> <img src="images/clients-logo/general-electric.png" alt="general electric"> </figure>
				</div>
				<div class="item part-tech-cmn-box">
					<figure> <img src="images/clients-logo/KPMG.png" alt="KPMG Logo"> </figure>
				</div>
				<div class="item part-tech-cmn-box">
					<figure> <img src="images/clients-logo/Airtel.png" alt="Airtel Logo"> </figure>
				</div>
				<div class="item part-tech-cmn-box">
					<figure> <img src="images/clients-logo/Mercedes-Benz.png" alt="Mercedes Benz Logo"> </figure>
				</div>
				<div class="item part-tech-cmn-box">
						<figure> <img src="images/clients-logo/WPP-Group.png" alt="WPP Logo"> </figure>
				</div>
				<div class="item part-tech-cmn-box">
						<figure> <img src="images/clients-logo/canon.png" alt="Canon Logo"> </figure>
				</div>
				<div class="item part-tech-cmn-box">
						<figure> <img src="images/clients-logo/OLA.png" alt="Ola Logo"> </figure>
				</div>
		</div>
	</div>
</section>
<section class="home-page-full-width-slider">
	<div id="full-width-carousel" class="owl-carousel owl-theme">
			<div class="item">
				<a data-fancybox href="https://www.youtube.com/watch?v=oUD9N4srwPs"><img  src="images/video-bg/why_team.jpg" alt="val in act">
				<div class="full-width-video">
					<div class="full-width-content">
						<img src="images/you-tube-icon.png" alt="video icon">
						<h2 class="valigncenter">Why Team?</h2>
					</div>
				</div></a>
			</div>
		<div class="item">
				<a data-fancybox href="https://youtu.be/uAbtqoFhNhE"><img  src="images/video-bg/hero-video.jpg" alt="val in act">
				<div class="full-width-video">
					<div class="full-width-content">
						<img src="images/you-tube-icon.png" alt="video icon">
						<h2 class="valigncenter">Heroes at Team</h2>
					</div>
				</div></a>
			</div>
		<div class="item">
				<a data-fancybox href="https://www.youtube.com/watch?v=dkhptenAfas&t=10s"><img  src="images/video-bg/fun-at-offsites-home.jpg" alt="val in act">
				<div class="full-width-video">
					<div class="full-width-content">
						<img src="images/you-tube-icon.png" alt="video icon">
						<h2 class="valigncenter">Fun at Team</h2>
					</div>
				</div></a>
			</div>
		</div>
</section>

<section class="job-dec pos cmn-box">
	<div class="cmn-padd rel-solutions cs-cover">
	  <div class="container">
		<div class="solutions-inner clearfix">
		  <div id="portfolio" class="row grid">
		  	<?php
	          foreach ($getNewsrooms as $getNewsroom) {
	        ?>
			 <div class="grid-item col-md-4 col-sm-4 col-xs-12 newsroom-box-cvr scale-anm auto all">
			  
			  <div class="rel-cmn-box newsroom-box cs-box">
				<figure>
					<img src="<?php echo EVENT_SHOW_PATH.$getNewsroom['evnt_photo']; ?>" alt="Event Image">
				<p class="news-type">Event</p>
				<figcaption> <p class="event-title"><?php echo substr($getNewsroom['evnt_caption'],0);?></p>
              <span class="event-location"><?php echo substr($getNewsroom['evnt_location'],0);?></span></figcaption>
				</figure>
			  </div>
			 </div>
			<?php } ?>
		 </div>
		</div>
	  </div>
	</div>
</section>
<div class="clearfix"></div>
<section class="rel-solutions part-tech clearfix cmn-padd">
	<div class="container">
		<div class="solutions-inner clearfix">
			<h2 class="cmn-hdr">
				<span class="line-text">Partners</span>
			</h2>
			<div id="home-partner-carousel" class="owl-carousel owl-theme">
		
		<div class="item part-tech-cmn-box">
		  <figure><img src="images/Partners-logo/INS/AVSI/Cisco.png" alt="Qlik partner"></figure>
		</div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/AVSI/Epson.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/AVSI/Kramer.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/AVSI/Polycom.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/AVSI/Samsung.png" alt="Qlik partner"></figure>
        </div>

        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/Cloud/AWS.png" alt="AWS"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/Cloud/AZURE.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/Cloud/GOOGLE-CLOUD.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/Data-Center/APC-by-Schneider-Electric---Elite-Partner.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/Data-Center/Consul---Registered-partner.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/Data-Center/Eaton---Registered-partner.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/Data-Center/Emerson---Premier-partner.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/Data-Center/Numeric---Registered-partner.png" alt="Qlik partner"></figure>
        </div>

        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/EUC/Acer-Business-Partner.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/EUC/Apple-ASI.png" alt="Qlik partner"></figure>
        </div>

        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/EUC/Dell-Titanium.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/EUC/HP-Gold.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/EUC/Lenovo-premium.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/EUC/Microsoft-ADR.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/Mobility/Samsung-Platinum.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/Networking/A10-Networks-authorised-partner.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/Networking/Bledon-authorised-partner.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/Networking/Commscope-NDI.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/Networking/dlink-authorised-partner.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/Networking/Extreme-Networks-authorised-partner.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/Networking/Huawei-Premier.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/Networking/molex-authorised-partner.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/Networking/Netgear-authorised-partner.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/Networking/Radware-authorise-partner.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/Networking/schneider-premium.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/Networking/tyco-electronics-NDI.png" alt="Qlik partner"></figure>
        </div>

        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/Security/kaspersky-reseller.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/Security/Macfee-reseller.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/Security/symantec-silver.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/Security/trendmicro-reseller.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/INS/Security/veritas-silver.png" alt="Qlik partner"></figure>
        </div>

        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/BA/Alteryx---Master-reseller.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/BA/Power-BI.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/BA/Qlik---Elite-Partner.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/BA/sas.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/BA/Tableu---Silver-Partner.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/Managed-Services/End-user-Managed-Services/manageengine.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/Managed-Services/End-user-Managed-Services/Sapphireims.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/Managed-Services/End-user-Managed-Services/Symphony-Summit.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/Managed-Services/Managed-Print-Services/Konica-Minolta.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/Managed-Services/Managed-Print-Services/Kyocera.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/Managed-Services/Managed-Print-Services/Samsung.png" alt="Qlik partner"></figure>
        </div>
        <div class="item part-tech-cmn-box">
        <figure><img src="images/Partners-logo/Managed-Services/Managed-Print-Services/Xerox.png" alt="Qlik partner"></figure>
        </div>

			</div>
		</div>
	</div>
</section>
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
<script type="text/javascript" src="js/custom.js"></script>
<script>
		$(document).ready(function () {
				$('.grid').masonry({
				  // options... 
				  itemSelector: '.grid-item',
				});
					$(window).load(function () {
				setTimeout(function(){
					$('#preloader').fadeOut('slow', function () {
					});
				},600);

			});  
			//$(function() {
				var size_li = $(".newsroom-box-cvr").size();
				x=6;
				$('.newsroom-box-cvr:lt('+x+')').fadeIn('slow');
				$('.load-more').click(function () {
					x= (x+3 <= size_li) ? x+3 : size_li;
					$('.newsroom-box-cvr:lt('+x+')').fadeIn('slow');
					if(x == size_li){
						$(this).parent().fadeOut('slow');
					}
				});
			//});
		});
	</script>
	
</body>
</html>