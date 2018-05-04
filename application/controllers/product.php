<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

	
	public function __construct(){
	parent:: __construct();
	//$this->output->enable_profiler(TRUE);	
	$this->load->model('site_mdl');
	$this->load->model('Product_core_model');	

	if(isset($_POST['command']) && $_POST['command']=="add" && $_POST['productid']>0){
		//test($_POST);exit;		
		$pid=$_POST['productid'];
		$pPiz=$_POST['productPiz'];
		$pClr=$_POST['productClr'];
		$this->addtocart($pid,1,$pPiz,$pClr);
		redirect('/cart/mycart', 'refresh'); /* Load the cart window */
	}				
	}


	public function index(){
		echo "string"; die();
		$pid = $this->uri->segment(4);
		$data['result'] = $this->site_mdl->getProduct($pid);
		$data['pagTab'] = $this->uri->segment(2);
//		$data['prodArtstId'] = $this->uri->segment(4);
		$data['prodArtstId'] = $this->site_mdl->getProductArtistName($pid);
		$this->load->view('product_detail',$data);
	}
		
	

}