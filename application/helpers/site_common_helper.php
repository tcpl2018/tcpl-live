<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
if (!function_exists('another_function')){
    function another_function($value){
        // return $value;
    }
}
*/

if (!function_exists('test')){
	function test($test){
		$output = "<pre>".print_r($test)."</pre>";
		echo $output;
	}
}

if (!function_exists('my_read_more')){
	function my_read_more($text,$cLnth,$endWith = ''){
		$result = substr($text, 0, $cLnth)." ".$endWith; ## Show the fixed length with incomplete last word ##
		//$result = substr($text, 0, strpos($text, ' ', $cLnth))." ".$endWith;  ## Show the full last word must be a long text ##
		return $result;
	}
}

## Filter the String for Special Charectors if any used ##
if (!function_exists('echoStr')){
	function echoStr($string) {
		$escaped_string = stripslashes(html_entity_decode($string));
		return $escaped_string;
	}
}