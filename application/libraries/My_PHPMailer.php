<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_PHPMailer {
	
	public function __construct()
	{
	    require_once('PHPMailer/class.phpmailer.php');
	    require("PHPMailer/class.smtp.php");
	    require_once('PHPMailer/PHPMailerAutoload.php');
	}
}
?>