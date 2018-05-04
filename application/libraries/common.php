<?php

class Commom {
	
## Debug the Array ##
function test($test){
	echo "<pre>";
		print_r($test);
	echo "</pre>";
//	exit;
}


function googleSiteVerfication(){
 	global $db;
	$sql="SELECT google_verfication FROM site_config";
	$data = fetchAsocRow($db,$sql);
	if($data['google_verfication']){
		echo '<meta name="google-site-verification" content="'.$data['google_verfication'].'">';
	}else{
		echo null;
	}
}

function googleAnalytics(){
 	global $db;
	$sql="SELECT google_analytics FROM site_config";
	$data = fetchAsocRow($db,$sql);
	if($data['google_analytics']){
	echo "<script type='text/javascript'>
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', '".$data['google_analytics']."']);
	_gaq.push(['_trackPageview']);
	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>";	
	}else{
		echo null;
	}
}

}