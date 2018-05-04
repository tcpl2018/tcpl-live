<?php include_once("analyticstracking.php") ?>
<header> 
  <!-- Basic nav menu which will remain fixed at the top -->
	<nav role="navigation" class="navbar navbar-inverse navbar-fixed-top pmd-navbar pmd-z-depth nav-bg-color mainmenu">
      <div class="container"> 
		<!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
			<button type="button" class="pmd-ripple-effect navbar-toggle pmd-navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<a href="/" class="navbar-brand navbar-brand-custome"><img src="images/logo.png" alt="team logo"></a>
			<div class="pull-right header-fixd-btn mob hidden-sm hidden-md hidden-lg" style="display: none;">
				<button onClick="location.href='cta-landing';" class="btn pmd-btn-raised pmd-ripple-effect btn-default">Contact Us</button>
			</div>
		</div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse pmd-navbar-sidebar">
		  <ul id="fresponsive" class="nav navbar-nav dropdown">

		  

		<li class="dropdown cmn-sub-sol"><a data-toggle="dropdown" class="dropdown-toggle <?php if ($page_name == 'it-infrastructure-services') { echo "active"; } elseif ($page_name == 'end-user-computing') { echo 'active';} elseif ($page_name == 'enterprise-mobility-services'){ echo "active";}elseif ($page_name == 'data-center-services'){ echo "active";}elseif ($page_name == 'network-server-storage-solutions'){ echo "active";}?> pmd-ripple-effect" href="javascript:void;">Solutions<span class="caret visible-xs"></span></a>
			<ul class=" dropdown-menu">
				<li style="position: relative;">
					<a href="it-infrastructure-services" class="dropdown-toggle disabled pmd-ripple-effect">Infrastructure solutions</a><span class="caret visible-xs dropdown-toggle" data-toggle="dropdown"></span>
					<ul class=" dropdown-menu">
						<li><a class="pmd-ripple-effect" href="end-user-computing">End User/Computing</a></li>
						<li><a class="pmd-ripple-effect" href="enterprise-mobility-services">Mobility</a></li>
						<li><a class="pmd-ripple-effect" href="data-center-services">Data Center</a></li>
						<li><a class="pmd-ripple-effect" href="network-server-storage-solutions">Networking</a></li>
						<li><a class="pmd-ripple-effect" href="information-cyber-it-security">Security/ISS</a></li>
						<li><a class="pmd-ripple-effect" href="audio-visual-solutions">Audio Visual solutions</a></li>
					</ul>
				</li>

				<li style="position: relative;">
					<a href="cloud-services-india" class="dropdown-toggle disabled pmd-ripple-effect">Cloud solutions</a>
						<ul class=" dropdown-menu">
						<li><a class="pmd-ripple-effect" href="aws-consulting-partner-india">AWS</a></li>
						<li><a class="pmd-ripple-effect" href="microsoft-azure-gold-partner-india">Microsoft Azure</a></li>
						<li><a class="pmd-ripple-effect" href="google-cloud-partner">Google solutions</a></li>
					</ul>
				</li>

				<li style="position: relative;">
					<a href="business-analytics" class="dropdown-toggle disabled pmd-ripple-effect">Business Analytics</a>
					<!-- <ul class=" dropdown-menu">
						<li><a class="pmd-ripple-effect" href="business-analytics-automotive">Automotive</a></li>
						<li><a class="pmd-ripple-effect" href="business-analytics-insurance">Insurance</a></li>
						<li><a class="pmd-ripple-effect" href="business-analytics-banking">Banking</a></li>
						<li><a class="pmd-ripple-effect" href="business-analytics-nbfc">NBFC</a></li>
						<li><a class="pmd-ripple-effect" href="business-analytics-manufacturing">Manufacturing</a></li>
						<li><a class="pmd-ripple-effect" href="business-analytics-government">Government</a></li>
						<li><a class="business-analytics-chatbot" href="google-cloud-premier-partner-india">Chatbot</a></li>
					</ul> -->
				</li>

				<li style="position: relative;">
					<a href="business-apps" class="dropdown-toggle disabled pmd-ripple-effect">Business Apps</a>
					<!-- <ul class=" dropdown-menu">
						<li><a class="pmd-ripple-effect" href="business-apps-oil-and-gas">Oil & Gas</a></li>
						<li><a class="pmd-ripple-effect" href="business-apps-construction">Construction</a></li>
						<li><a class="pmd-ripple-effect" href="business-apps-manufacturing">Manufacturing</a></li>
						<li><a class="pmd-ripple-effect" href="business-apps-pharma">Pharma</a></li>
						<li><a class="pmd-ripple-effect" href="business-apps-chemicals">Chemicals</a></li>
						<li><a class="pmd-ripple-effect" href="business-apps-legal">Legal</a></li>
						<li><a class="business-analytics-chatbot" href="business-apps-fmcg">FMCG</a></li>
					</ul> -->
				</li>
				<li style="position: relative;">
					<a href="mobile-apps" class="dropdown-toggle disabled pmd-ripple-effect">Enterprise Mobile Apps</a>
					<!--<ul class=" dropdown-menu">
						<li><a class="pmd-ripple-effect" href="mobile-apps-people-management">People Management</a></li>
						<li><a class="pmd-ripple-effect" href="mobile-apps-business-processes">Business Processes</a></li>
						<li><a class="pmd-ripple-effect" href="mobile-apps-analytics">Analytics</a></li>
					</ul>-->
				</li>
				<li style="position: relative;">
					<a href="managed-services" class="dropdown-toggle disabled pmd-ripple-effect">Managed services</a>
					<!-- <ul class=" dropdown-menu">
						<li><a class="pmd-ripple-effect" href="managed-services-eums">End User Managed Services</a></li>
						<li><a class="pmd-ripple-effect" href="managed-services-dcnm">Data Center and Network Management</a></li>
						<li><a class="pmd-ripple-effect" href="managed-services-mps">Managed Print Services</a></li>
						<li><a class="pmd-ripple-effect" href="managed-services-mbbf">Multi Brand Hardware Break-Fix (AMC)</a></li>
						<li><a class="pmd-ripple-effect" href="managed-services-sas">Staff Augmentation Services</a></li>
					</ul> -->
				</li>


				<!--<li>
					<a href="https://www.teamcomputers.com/googlecloud/cloud/gsuite/" class="dropdown-toggle" target="_blank">Productivity & Email</a>
				</li>-->
			</ul>	
		</li>



		<li><a class="pmd-ripple-effect <?php if($page_name=='partners'){echo 'active';}?>" href="partners">Partners</a></li>
		<li><a class="pmd-ripple-effect <?php if($page_name=='case-studies'){echo 'active';}?>" href="case-studies">Case Studies</a></li>
		<li class="dropdown cmn-sub-sol"><a href="javascript:void(0);" onClick="location.href='career-work';" data-toggle="dropdown" class="dropdown-toggle pmd-ripple-effect <?php if ($page_name == 'career-work') { echo "active"; } elseif ($page_name == 'culture') { echo 'active';} elseif ($page_name == 'career-team'){ echo "active";}elseif ($page_name == 'open-positions'){ echo "active";}?>">Careers<span class="caret visible-xs"></span></a>
			<ul class=" dropdown-menu">
				<li><a class="pmd-ripple-effect" href="career-work">Work</a></li>
                <li><a class="pmd-ripple-effect" href="culture">Culture</a></li>
                <li><a class="pmd-ripple-effect" href="career-team">Team</a></li>
                <li><a class="pmd-ripple-effect" href="open-positions">Open Positions</a></li>
			</ul>
		</li>
		<li class="dropdown cmn-sub-sol"><a href="javascript:void(0);" data-toggle="dropdown" class="dropdown-toggle pmd-ripple-effect <?php if ($page_name == 'about-company') { echo "active"; } elseif ($page_name == 'newsroom') { echo 'active';} elseif ($page_name == 'impact'){ echo "active";}elseif ($page_name == 'contact'){ echo "active";}?>">About<span class="caret visible-xs"></span></a>
			<ul class=" dropdown-menu">
                <li><a class="pmd-ripple-effect" href="about-company">Company</a></li>
                <li><a class="pmd-ripple-effect" href="newsroom">Newsroom</a></li>
                <li><a class="pmd-ripple-effect" href="impact">Impact</a></li>
                <li><a class="pmd-ripple-effect" href="contact">Contact</a></li>
			</ul>
		</li>
		<li class="fright clearfix header-fixd-btn visible-xs">
			<button onClick="location.href='cta-landing';" class="btn pmd-btn-raised pmd-ripple-effect btn-default">Contact Us</button>
		</li>
	</ul>
          <div class="pull-right fright clearfix header-fixd-btn hidden-xs" style="display: none">
            <button onClick="location.href='cta-landing';" class="btn pmd-btn-raised pmd-ripple-effect btn-default">Contact Us</button>
          </div>
		 
        </div>
        <!-- /.navbar-collapse --> 
		</div>
		<!-- /.container --> 
		<div class="pmd-sidebar-overlay"></div>
	</nav>
</header>