<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function productExists($pid){
		$pid=intval($pid);
		$max=count(@$_SESSION['cart']);
		$flag=0;
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['productid']){
			$flag=1;
			break;
			}
		}
		return $flag;
	}
	
	function addToCart($pid,$q){
		if(productExists($pid) == 0){
			if(is_array(@$_SESSION['cart'])){
				$max=count($_SESSION['cart']);
				$_SESSION['cart'][$max]['productid']=$pid;
				$_SESSION['cart'][$max]['qty']=$q;
			}else{
				$_SESSION['cart']=array();
				$_SESSION['cart'][0]['productid']=$pid;
				$_SESSION['cart'][0]['qty']=$q;
			}
		}
	}