<?php
class Site_mdl extends CI_Model {

	public function getContent($id){
		$this->db->select('*');
		$this->db->from('site_content');
		$this->db->where('cnt_id',$id);
		$query = $this->db->get();
		return $query->row_array();
	}

	// TCPL website new 2017 by Muhammed Salim Ansari
	public function getAllPartners(){
		$this->db->select('*');
		$this->db->from('partners');
		$this->db->where('solution_name',"Business Analytics");
//		$this->db->where('evnt_end_date >=', time());
		$this->db->order_by("prtnr_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}





	
	public function getProductFromCatgry($id){
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('prod_status',1);		
		$this->db->where('prod_catg_id',$id);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function saveArray($table,$data)
    {
       $this->db->insert_batch($table, $data);
       $id  =   $this->db->insert_id();

        if($id) {
            return $id;
        } else {
            return FALSE;
        }
    }
	public function getArtist($aid){
		$this->db->select('*');
		$this->db->from('artist');
		$this->db->where('artst_id',$aid);			
		$this->db->where('artst_status',1);	
		$query = $this->db->get();
		$result = $query->row_array();
		//print_r($result);
		return $result;
	}	
	
	public function getAllArtist(){
		$this->db->select('*');
		$this->db->from('artist');
		$this->db->where('artst_status',1);			
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);
		return $result;
	}

	public function getLocations(){
		$this->db->select('*');
		$this->db->from('office_locations');
		$this->db->where('status',1);			
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);die();
		return $result;
	}		

	public function getAllProduct(){
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('prod_status',1);			
		$this->db->order_by("prod_added", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}

	public function getProduct($pid){
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('prod_id',$pid);			
		$this->db->where('prod_status',1);	
		$query = $this->db->get();
		$result = $query->row_array();
		//print_r($result);
		return $result;
	}
	
	public function getProductCatgName($cid){
		$this->db->select('prod_catg_name');
		$this->db->from('product_category');
		$this->db->where('prod_catg_id',$cid);
		$query = $this->db->get();
		$result = $query->row_array();
		//print_r($result);
		return $result['prod_catg_name'];
	}
	
	public function getProductArtistName($pid){
		$this->db->select('artst_id');
		$this->db->from('product');
		$this->db->where('prod_id',$pid);
		$query = $this->db->get();
		$result = $query->row_array();
		//print_r($result);
		return $result['artst_id'];
	}
		
	public function getProductCode($pid){
		$this->db->select('prod_code');
		$this->db->from('product');
		$this->db->where('prod_id',$pid);
		$query = $this->db->get();
		$result = $query->row_array();
		//print_r($result);
		return $result['prod_code'];
	}	
	
	public function getProductTitle($pid){
		$this->db->select('prod_title');
		$this->db->from('product');
		$this->db->where('prod_id',$pid);
		$query = $this->db->get();
		$result = $query->row_array();
		//print_r($result);
		return $result['prod_title'];
	}
	
	public function getAllFeaturedProduct(){
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('prod_status',1);			
		$this->db->where('prod_is_special',1);
		$this->db->order_by("prod_added", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);
		return $result;
	}

	public function getProductGallery($pid){
		$this->db->select('*');
		$this->db->from('product_gallery');
		$this->db->where('pgal_img_status',1);
		$this->db->where('prod_id',$pid);		
		$this->db->order_by("pgal_img_order", "ASC"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);
		return $result;
	}
	
	public function getAllArtistProduct($aid){
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('prod_status',1);			
		$this->db->where('artst_id',$aid);
		$this->db->order_by("prod_added", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);
		return $result;
	}

	public function getProductPriceList($pid){
		$this->db->select('*');
		$this->db->from('product_size_price');
		$this->db->where('prod_id',$pid);	
		$this->db->order_by("prod_siz", "ASC");		
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);
		return $result;
	}
	
	public function getProductColorList($pid){
		$this->db->select('*');
		$this->db->from('product_color');
		$this->db->where('prod_id',$pid);	
		$this->db->order_by("prod_colr", "ASC");		
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);
		return $result;
	}	
	
	public function getProductMinPrice($pid){
		$this->db->select('MIN(prod_pric) as minprice');
		$this->db->from('product_size_price');
		$this->db->where('prod_id',$pid);			
		$query = $this->db->get();
		$result = $query->row_array();
		if(empty($result['minprice'])){
			return 0;	
		}else{
			return $result['minprice'];
		}
	}
	
	public function getSizeName($sid){
		$this->db->select('prod_siz');
		$this->db->from('product_size_price');
		$this->db->where('siz_pric_id',$sid);		
		$query = $this->db->get();
		$result = $query->row_array();
		//print_r($result);
		if(empty($result['prod_siz'])){
			return $result['prod_siz'] = "--";
		}
		else{
			return $result['prod_siz'];
		}		
	}
	public function getColorName($cid,$pid){
		$this->db->select('prod_colr');
		$this->db->from('product_color');
		$this->db->where('colr_id',$cid);
		$this->db->where('prod_id',$pid);					
		$query = $this->db->get();
		$result = $query->row_array();
		//print_r($result);
		if(empty($result['prod_colr'])){
			return $result['prod_colr'] = "--";
		}
		else{
			return $result['prod_colr'];
		}
	}	
	
		

	public function getArtistName($aid){
		$this->db->select('artst_name');
		$this->db->from('artist');
		$query = $this->db->get();
		$result = $query->row_array();
		//print_r($result);
		return $result['artst_name'];
	}	
	
	public function getAllEvents(){
		$this->db->select('*');
		$this->db->from('event');
		$this->db->where('evnt_status',1);
//		$this->db->where('evnt_end_date >=', time());
		$this->db->order_by("evnt_strt_date", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	
	public function getEvent($aid){
		$this->db->select('*');
		$this->db->from('event');
		$this->db->where('evnt_id',$aid);			
		$this->db->where('evnt_status',1);	
		$query = $this->db->get();
		$result = $query->row_array();
		//print_r($result);
		return $result;
	}


	public function googleSiteVerfication(){
	$this->db->select('google_verfication');
	$this->db->from('site_google_config');
	$query = $this->db->get();
	$result = $query->row_array();
	if($result['google_verfication']){
		echo '<meta name="google-site-verification" content="'.$result['google_verfication'].'">';
	}
	}

	public function googleAnalytics(){
	$this->db->select('google_analytics');
	$this->db->from('site_google_config');
	$query = $this->db->get();
	$result = $query->row_array();
	if($result['google_analytics']){
		echo "<script type='text/javascript'>
					var _gaq = _gaq || [];
					_gaq.push(['_setAccount', '".$result['google_analytics']."']);
					_gaq.push(['_trackPageview']);
					(function() {
					var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
					ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
					var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
					})();
				</script>";
	}
	}

	public function getOfferImage($id){
		$this->db->select('ofr_image');
		$this->db->from('site_offer');
		$this->db->WHERE('ofr_id',$id);
		$query = $this->db->get();
		$result = $query->row_array();
		//print_r($result);
		return $result['ofr_image'];
	}
 /*
	By @Neha Singh
 */
	public function getOpenings(){
		$this->db->select('prod_id,prod_code,prod_title,prod_location');
		$this->db->from('product');
		//$this->db->where('prod_status',1);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}
	public function getJobDescription($jobCode){
		$this->db->select('prod_id,prod_code,prod_title,prod_location,prod_desc');
		$this->db->from('product');
		$this->db->where('prod_code', $jobCode);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}
	
	public function saveData($table,$data)
    {
        $this->db->insert($table,$data);
        $id     =    $this->db->insert_id();

        if($id) {
            return $id;
        } else {
            return FALSE;
        }
    }

    public function getData($table,$condition=NULL,$data=NULL)
    {
        if($data) {
            $this->db->select($data);
        }
       if($condition) {
            $query = $this->db->get_where($table,$condition);
        } else {
            $query= $this->db->get($table);
        }
        
        $result = $query->result_array();
        if($result){
            return $result;
        } else {
            return FALSE;
        }
    }



	
}