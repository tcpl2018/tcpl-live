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
	public function getAllINSPartners(){
		$this->db->select('*');
		$this->db->from('partners');
		$this->db->where('solution_name',"Infrastructure Solutions");
//		$this->db->where('evnt_end_date >=', time());
		$this->db->order_by("prtnr_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	// all Business Apps
	public function getAllBizzAnalyticsPartners(){
		$this->db->select('*');
		$this->db->from('partners');
		$this->db->where('solution_name',"Business Analytics");
		$this->db->order_by("prtnr_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();	
		return $result;
	}
	// all Business Apps
	public function getAllBizzAppsPartners(){
		$this->db->select('*');
		$this->db->from('partners');
		$this->db->where('solution_name',"Business Apps");
		$this->db->order_by("prtnr_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();	
		return $result;
	}
	// all Cloud Services
	public function getAllCloudServicesPartners(){
		$this->db->select('*');
		$this->db->from('partners');
		$this->db->where('solution_name',"Cloud Services");
		$this->db->order_by("prtnr_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();	
		return $result;
	}
	
	// All Managed Services
	public function getAllManagedServicesPartners(){
		$this->db->select('*');
		$this->db->from('partners');
		$this->db->where('solution_name',"Managed Services");
		$this->db->order_by("prtnr_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();	
		return $result;
	}
	
	// get all What's New INS + IMS + CLOUD Only
	public function getAllWhatsNew_INS_IMS_CLOUD(){
		$this->db->select('*');
		$this->db->from('whats_new');
		$this->db->where('solution_name','Infrastructure Solutions');
		// $this->db->where('solution_name','Managed Services');
		// $this->db->where('solution_name','Cloud Services');
		$this->db->where('Wnew_type','Solution');
		
		$this->db->where('Wnew_status',1);
		//$this->db->where('evnt_end_date >=', time());
		$this->db->order_by("Wnew_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}


	// get all What's New
	public function getAllWhatsNew(){
		$this->db->select('*');
		$this->db->from('whats_new');
		$this->db->where('Wnew_status',1);
		//$this->db->where('evnt_end_date >=', time());
		$this->db->order_by("Wnew_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	// get Business Analytics What's New
	public function getBusinessAnalyticsWhatsNew(){
		$this->db->select('*');
		$this->db->from('whats_new');
		$this->db->where('Wnew_status',1);
		$this->db->where('solution_name','Business Analytics');
		$this->db->where('Wnew_type', 'solution');
		//$this->db->where('evnt_end_date >=', time());
		$this->db->order_by("Wnew_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}



// get all case study
	public function getAllCasestudy(){
		$this->db->select('*');
		$this->db->from('case_study');
		$this->db->where('case_status',1);
		//$this->db->where('evnt_end_date >=', time());
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
//  Get All Business Analytics Automotive case study Media wise 
	public function getMediaCaseStudyAnalyticsAutomotive(){
		$this->db->select('*');
		$this->db->from('case_study');
		// $this->db->where('solution_name','Business Analytics');
		$array = array('solution_name' => 'Business Analytics', 'sub_solution_name' => 'Automotive', 'case_type' => 'main');
		$this->db->where($array);

		// $this->db->where('sub_solution_name','Automotive');
		// $this->db->where('case_type', 'main');
		//$this->db->where('evnt_end_date >=', time());
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	//  Get All Business Analytics Insurance case study Media wise 
	public function getMainCaseStudyAnalyticsInsurance(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Business Analytics', 'sub_solution_name' => 'Insurance', 'case_type' => 'main');
		$this->db->where($array);

		//$this->db->where('case_type', 'main');
		//$this->db->where('evnt_end_date >=', time());
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	

//  Get All Business Analytics Banking case study Media wise 
	public function getMainCaseStudyAnalyticsBanking(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Business Analytics', 'sub_solution_name' => 'Banking', 'case_type' => 'main');
		$this->db->where($array);
		//$this->db->where('evnt_end_date >=', time());
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	//  Get All Business Analytics NBFC case study Media wise 
	public function getMainCaseStudyAnalyticsNBFC(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Business Analytics', 'sub_solution_name' => 'NBFC', 'case_type' => 'main');
		$this->db->where($array);
		//$this->db->where('evnt_end_date >=', time());
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	//  Get All Business Analytics Manufacturing case study Media wise 
	public function getMainCaseStudyAnalyticsManufacturing(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Business Analytics', 'sub_solution_name' => 'Manufacturing', 'case_type' => 'main');
		$this->db->where($array);
		//$this->db->where('evnt_end_date >=', time());
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	//  Get All Business Analytics Government case study Media wise 
	public function getMainCaseStudyAnalyticsGovernment(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Business Analytics', 'sub_solution_name' => 'Government', 'case_type' => 'main');
		$this->db->where($array);
		//$this->db->where('evnt_end_date >=', time());
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}



	
	//  Get All Business Analytics case study Media wise 
	public function getAllMediaCaseStudyAnalytics(){
		$this->db->select('*');
		$this->db->from('case_study');
		$this->db->where('solution_name','Business Analytics');
		$this->db->where('case_type', 'media');
		//$this->db->where('evnt_end_date >=', time());
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}


	// Get Business Analytics main case study
	public function getBizAnalyticsMCIndex(){
		$this->db->select('*');
		$this->db->from('case_study');

		$array = array('solution_name' => 'Business Analytics', 'case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}



	////////////////// Get INS main case study
	public function getMainINSIndex(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions', 'case_type' => 'main');
		$this->db->where($array);
		//$this->db->where('solution_name','Business Analytics');
		//$this->db->where('case_type', 'main');
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	////////////////// Get INS EUC main case study
	public function getINSEUCMainCasestudy(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'End User Computing', 'case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	// Get INS enterprise-mobility-services main case study
	public function getINSEnterpriseMobilityServicesMainCasestudy(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'Mobility', 'case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}

	// Get INS banking-end-user-computing main case study
	public function getINSMainCasestudyBanking_end_user_computing(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'Banking', 'case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	// Get INS banking-end-user-computing main case study
	public function getINSMainCasestudyInsurance_end_user_computing(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'Insurance', 'case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	// Get INS banking-end-user-computing main case study
	public function getINSMainCasestudyRetail_end_user_computing(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'End User/Computing','vertical' => 'Consumer goods', 'case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
// Get INS banking-end-user-computing main case study
	public function getINSMainCasestudy_manufacturing_end_user_computing(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'End User/Computing','vertical' => 'Manufacturing', 'case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	// Get INS banking-end-user-computing main case study
	public function getINSMainCasestudy_mobile_banking_solutions(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'Mobility','vertical' => 'Banks/Banking', 'case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	// Get INS banking-end-user-computing main case study
	public function getINSMainCasestudy_insurance_mobility_solutions(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'Mobility','vertical' => 'Insurance', 'case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	// Get INS banking-end-user-computing main case study
	public function getINSMainCasestudy_pharmaceutical_mobility_solutions(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'Mobility','vertical' => 'Insurance', 'case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	// Get INS banking-end-user-computing main case study
	public function getINSMainCasestudy_retail_mobility_services(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'Mobility','vertical' => 'Consumer goods/FMCG', 'case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	// Get INS banking-end-user-computing main case study
	public function getINSMainCasestudy_manufacturing_enterprise_mobility(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'Mobility','vertical' => 'Manufacturing', 'case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	// Get INS banking-end-user-computing main case study
	public function getINSMainCasestudy_data_center_services(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'Data Center','case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	// Get INS banking-end-user-computing main case study
	public function getINSMediaCasestudy_data_center_services(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'Data Center','case_type' => 'media');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	public function getINSMainCasestudy_network_server_storage_solutions(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'Networking','case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}

	public function getINSMainCasestudy_google_cloud_premier_partner_india(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Cloud Services','sub_solution_name' => 'GSuite Google Cloud Platform','case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}

	// get managed services main case study
	public function getMainCasestudy_managed_services(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Managed Services','case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	// get managed-services-mbbf main case study
	public function getMainCasestudy_managed_services_mbbf(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Managed Services','sub_solution_name' => 'Multi brand Break Fix AMC','case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}


	// get managed service
	public function getINSMainCasestudy_managed_services_eums(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Managed Services','sub_solution_name' => 'End User managed services','case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}

	// get managed service
	public function getINSMainCasestudy_managed_services_dcnm(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Managed Services','sub_solution_name' => 'Data Center','case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	// get managed service managed-services-mps
	public function getINSMainCasestudy_managed_services_mps(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Managed Services','sub_solution_name' => 'Managed Print Services','case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	


	// Get INS banking-end-user-computing main case study
	public function getINSMediaCasestudy_network_server_storage_solutions(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'Networking','case_type' => 'media');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}

	public function getINSMainCasestudy_information_cyber_it_security(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'Security ISS','case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	// Get INS banking-end-user-computing main case study
	public function getINSMediaCasestudy_information_cyber_it_security(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'Security/ISS','case_type' => 'media');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	public function getINSMainCasestudy_cloud_services_india(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'Cloud','case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	public function getINSMediaCasestudy_cloud_services_india(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'Cloud','case_type' => 'media');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	public function getINSMainCasestudy_audio_visual_solutions(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'AVSI','case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	public function getINSMediaCasestudy_audio_visual_solutions(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'AVSI','case_type' => 'media');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}

	// Get enterprise main case study
	public function getINSMainCasestudy_enterprise(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'AVSI','vertical' => 'Enterprise','case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	// Get enterprise main case study
	public function getINSMainCasestudy_business_apps_construction(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'AVSI','vertical' => 'Construction','case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	// Get enterprise main case study
	public function getINSMainCasestudy_business_apps_manufacturing(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'AVSI','vertical' => 'Manufacturing','case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	// Get enterprise main case study
	public function getINSMainCasestudy_business_apps_pharma(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'AVSI','vertical' => 'Pharmaceuticals','case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	// Get enterprise main case study
	public function getINSMainCasestudy_business_apps_chemicals(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'AVSI','vertical' => 'Share Market','case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}

	//get case study AWS cunsulting partner india page
	public function getINSMainCasestudy_Aws_consulting_partner_india(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions','sub_solution_name' => 'cloud','vertical' => 'Amazon Web Services','case_type' => 'main');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}









	////////////////// Get INS main case study
	public function getAllMediaCaseStudyINSIndex(){
		$this->db->select('*');
		$this->db->from('case_study');
		$array = array('solution_name' => 'Infrastructure Solutions', 'case_type' => 'media');
		$this->db->where($array);
		$this->db->order_by("case_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}

	// Get all parteners at one place
	public function getAllPartners(){
		$this->db->select('*');
		$this->db->from('partners');
		$this->db->order_by("prtnr_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}

	// Get Business Analytics main case study
	public function getPartnersINS(){
		$this->db->select('*');
		$this->db->from('partners');
		$this->db->where('solution_name','Infrastructure Solutions');
		$this->db->where('prtnr_type', 'partner');
		$this->db->order_by("prtnr_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}

	// Get Business Analytics main case study
	public function getAllPartnersINS(){
		$this->db->select('*');
		$this->db->from('partners');
		$this->db->where('solution_name','Infrastructure Solutions');
		$this->db->where('prtnr_type', 'partner');
		$this->db->order_by("prtnr_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	// Get Business Analytics main case study
	public function getAllPartnersBusinessAnalytics(){
		$this->db->select('*');
		$this->db->from('partners');
		$this->db->where('solution_name','Business Analytics');
		$this->db->where('prtnr_type', 'partner');
		$this->db->order_by("prtnr_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}

// Get Business Analytics main case study
	public function getAllPartnersCloud(){
		$this->db->select('*');
		$this->db->from('partners');
		$this->db->where('solution_name','Cloud Services');
		$this->db->where('prtnr_type', 'partner');
		$this->db->order_by("prtnr_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}

// Get Business Analytics main case study
	// public function getAllPartnersBusinessAnalytics(){
	// 	$this->db->select('*');
	// 	$this->db->from('partners');
	// 	$this->db->where('solution_name','Business Analytics');
	// 	$this->db->where('prtnr_type', 'partner');
	// 	$this->db->order_by("prtnr_id", "desc"); 
	// 	$query = $this->db->get();
	// 	$result = $query->result_array();
	// 	//print_r($result);		
	// 	return $result;
	// }
	// Get Business Analytics main case study
	public function getAllPartnersManagedServices(){
		$this->db->select('*');
		$this->db->from('partners');
		$this->db->where('solution_name','Managed Services');
		$this->db->where('prtnr_type', 'partner');
		$this->db->order_by("prtnr_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}
	// Get Business Analytics main case study
	public function getAllPartnersBusinessApps(){
		$this->db->select('*');
		$this->db->from('partners');
		$this->db->where('solution_name','Business Apps');
		$this->db->where('prtnr_type', 'partner');
		$this->db->order_by("prtnr_id", "desc"); 
		$query = $this->db->get();
		$result = $query->result_array();
		//print_r($result);		
		return $result;
	}






	// get all newsroom
	public function getAllNewsroom(){
		$this->db->select('*');
		$this->db->from('event');
		$this->db->where('evnt_status',1);
		//$this->db->where('evnt_end_date >=', time());
		$this->db->order_by("evnt_id", "DESC"); 
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
	// public function getOpenings(){
	// 	$this->db->select('prod_id,prod_code,prod_title,artst_id,prod_desc,prod_location');
	// 	$this->db->from('product');
	// 	$this->db->join('artst','artst.artst_id = product.prod_id' );
	// 	//$this->db->where('prod_status',1);
	// 	$query = $this->db->get();
	// 	$result = $query->result_array();
	// 	return $result;
	// }


	  //   public function openingJoins() {
   //      try{
 		// 	$this->db->select('prod_id,prod_code,prod_title,prod_location,prod_desc,artst_id, GROUP_CONCAT(prod_title SEPARATOR "&nbsp;&nbsp;>&nbsp;&nbsp;") as name');
   //          $this->db->from("product");
   //          $this->db->join('artist', 'artist.artst_id = product.prod_id');
			// $this->db->group_by("artst_id");
   //          $query  =   $this->db->get();
   //          if($query->num_rows()>0){
   //              $data   =   $query->result_array();
   //          } else {
   //              $data = array();
   //          }
   //          return $data;
   //      	} catch (Exception $ex) {
   //          $data = array();
   //      	} 
   //  	}

    	public function openingJoins() {
        try{
 			$this->db->select('artist.artst_name,product.prod_id,product.prod_code,product.prod_title,product.prod_location,product.prod_desc,product.artst_id, GROUP_CONCAT(product.prod_title SEPARATOR ">") as name');
            $this->db->from("product");
            $this->db->join('artist', 'product.artst_id = artist.artst_id');
			$this->db->group_by("artst_id");
            $query  =   $this->db->get();
            if($query->num_rows()>0){
                $data   =   $query->result_array();
            } else {
                $data = array();
            }
            return $data;
        	} catch (Exception $ex) {
            $data = array();
        	} 
    	}

    	public function caseStudies() {
        try{
 			// $this->db->select('*, GROUP_CONCAT(case_name SEPARATOR ">") as name');
 			
 			$this->db->select('*');
            $this->db->from("case_study");
            $this->db->where("case_status", 1);
			//$this->db->group_by("vertical");
            $query  =   $this->db->get();
            if($query->num_rows()>0){
                $data   =   $query->result_array();
            } else {
                $data = array();
            }
            return $data;
        	} catch (Exception $ex) {
            $data = array();
        	} 
    	}

    	public function caseStudiesVerticals() {
        try{
 			// $this->db->select('*, GROUP_CONCAT(case_name SEPARATOR ">") as name');
 			
 			$this->db->select('vertical');
            $this->db->from("case_study");
            $this->db->where("case_status", 1);
			$this->db->group_by("vertical");
            $query  =   $this->db->get();
            if($query->num_rows()>0){
                $data   =   $query->result_array();
            } else {
                $data = array();
            }
            return $data;
        	} catch (Exception $ex) {
            $data = array();
        	} 
    	}





	public function getOpenings(){
		$this->db->select('a.prod_id,a.artst_id,a.prod_code,a.prod_title,a.prod_location,a.prod_desc');
		$this->db->from('product as a');
		$this->db->join('artist as b','a.prod_id = b.artst_id');
		//$this->db->where('prod_status',1);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}



	



	// public function getJobCategory(){
	// 	$this->db->select('artst_id,artst_name');
	// 	$this->db->from('artist');
	// 	//$this->db->where('prod_status',1);
	// 	$query = $this->db->get();
	// 	$result = $query->result_array();
	// 	return $result;
	// }


	



	// public function getOpenings(){
	// 	$this->db->select('prod_id,artst_id,prod_code,prod_title,prod_location,prod_desc');
	// 	$this->db->from('product a');
	// 	$this->db->join('artist b', 'b.artst_id=a.artst_id');
	// 	//$this->db->where('prod_status',1);
	// 	$query = $this->db->get();
	// 	$result = $query->result_array();
	// 	return $result;
	// }

	// function getOpenings(){
	//   $this->db->select("product.prod_id,product.artst_id,product.prod_code,product.prod_title,product.prod_location,product.prod_desc");
	//   $this->db->from('product');
	//   $this->db->join('artist', 'product.prod_id = artist.artst_id');
	//   $query = $this->db->get();
	//   $result = $query->result_array();
	//   return $result;
	//  }


	

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