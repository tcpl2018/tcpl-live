<?php

 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_core_model extends CI_Model {
	private $_ci;
	public function __construct(){
		parent:: __construct();
		$this->_ci =& get_instance();
		$this->_ci->load->library('session');
	}
	
	function insertdata($tbl,$data){
		$this->db->insert($tbl,$data);
	return $this->db->insert_id();
	}
	
	function deletedata($tbl,$fid,$fval){
		$this->db->delete($tbl, array($fid => $fval)); 
	}
	
	public function view_allproduct(){
		$this->db->select('*')->from('product')->where('prod_status',1);		
		$query = $this->db->get();
	return $query->result_array();
	}
	
	public function get_product_name($pid){
		$query = $this->db->query('SELECT prod_title FROM product where prod_id='.$pid);	
		$row= $query->row_array();
		return $row['prod_title'];
	}
	
	public function get_order_total(){
		$cart = $this->_ci->session->userdata('cart');
		$max=count($cart);
		$sum=0;
		for($i=0;$i<$max;$i++){
			$pid=$cart[$i]['productid'];
			$pPiz=$cart[$i]['productPiz'];		
			$q=$cart[$i]['qty'];
			$price=$this->get_price($pid,$pPiz);
			$sum+=$price*$q;
		}

	return $sum;
	}
	
	public function get_price($pid,$pPiz){
		$query = $this->db->query('SELECT prod_pric FROM product_size_price where siz_pric_id = '.$pPiz.' AND prod_id='.$pid);	
		$row= $query->row_array();
	return $row['prod_pric'];
	}
	

	public function isValidCoupon($cupn){	
		$query = $this->db->query("SELECT * FROM shoping_cart_coupon WHERE (shop_copn_code = '".$cupn."' AND shop_copn_status = 1) AND (shop_copn_start <= '".strtotime(date('m/d/y'))."' AND shop_copn_end >= '".strtotime(date('m/d/y'))."')");	
		$row = $query->row_array();
	return $row;
	}

	public function get_cust_details($id){
		$query = $this->db->query("SELECT * FROM shoping_cart_customer WHERE cstmr_id = $id.");	
		$row = $query->row_array();
		return $row;
	}
	
	public function get_order_details($id){
		$query = $this->db->query("SELECT * FROM shoping_cart_order WHERE sodr_id = $id.");	
		$row = $query->row_array();
		return $row;
	}	
	
	public function get_order_item_details($id){
		$query = $this->db->query("SELECT * FROM shoping_cart_order_detail WHERE sodr_id = $id.");	
		$row = $query->result_array();
		return $row;
	}	
}