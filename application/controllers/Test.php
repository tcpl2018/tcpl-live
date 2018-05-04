<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//$this->output->enable_profiler(TRUE);		  
	}

	public function test() {
		echo "string";
	}
}