<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Careers extends CI_Controller {

	function __construct()
	{
	    parent::__construct();
	    $this->load->model('Crud','',TRUE);
	}

	
	public function team_comp(){
		$data['result'] = $this->site_mdl->getProductFromCatgry(1);
		$data['pagTab'] = $this->uri->segment(2);
		$data['meta_title'] = "";
		$data['meta_desc'] = "";
		$data['meta_auth'] = "";
		$data['meta_key'] = "";
		$this->load->view('data_analyst',$data);
	}
	


}