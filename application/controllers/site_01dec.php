<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//$this->output->enable_profiler(TRUE);		  
	}
	 
	
	public function index(){		
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(1);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('home',$data);
	}

	// bussiness analytics
	public function business_analytics_automotive(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('business-analytics-automotive',$data);	
	}

	// bussiness analytics
	public function business_apps(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('business-apps',$data);	
	}
	public function business_apps_oil_and_gas(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('business-apps-oil-and-gas',$data);	
	}
	public function business_apps_construction(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('business-apps-construction',$data);	
	}
	public function business_apps_manufacturing(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('business-apps-manufacturing',$data);	
	}
	public function business_apps_pharma(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('business-apps-pharma',$data);	
	}
	public function business_apps_chemicals(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('business-apps-chemicals',$data);	
	}
	public function business_apps_legal(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('business-apps-legal',$data);	
	}
	public function business_apps_fmcg(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('business-apps-fmcg',$data);	
	}
	public function mobile_apps(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('mobile-apps',$data);	
	}
	public function mobile_apps_people_management(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('mobile-apps-people-management',$data);	
	}
	public function mobile_apps_business_processes(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('mobile-apps-business-processes',$data);	
	}
	public function mobile_apps_analytics(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('mobile-apps-analytics',$data);	
	}

	public function managed_services(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(7);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('managed-services',$data);
	}

	public function infrastructure_solutions_avsi(){
			$this->load->model('site_mdl');
			$data['result'] = $this->site_mdl->getContent(13);	
			$data['pagTab'] = $this->uri->segment(1);	
			$data['info']=$this->site_mdl->getAllEvents();
			$this->load->view('infrastructure-solutions-avsi',$data);	
		}

	public function newsroom(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('newsroom',$data);	
	}

	public function partners(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('partners',$data);	
	}
	public function career_work(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('career-work',$data);	
	}
	public function culture(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('culture',$data);	
	}
	public function career_team(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('career-team',$data);	
	}
	public function open_positions(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('open-positions',$data);	
	}

	public function case_studies(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('case-studies',$data);	
	}
	// public function career_work(){
	// 	$this->load->model('site_mdl');
	// 	$data['result'] = $this->site_mdl->getContent(13);	
	// 	$data['pagTab'] = $this->uri->segment(1);	
	// 	$data['info']=$this->site_mdl->getAllEvents();
	// 	$this->load->view('career-work',$data);	
	// }
	
	
	
	public function about_company(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('about-company',$data);	
	}
	
	public function cta_landing(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('cta-landing',$data);	
	}







	
	public function contact_success(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('contact-success',$data);
	}
	

	
	

	// contact us leads
	
	public function contact(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(4);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('contact',$data);
		
		/* Check if the form is Submited */
		if($this->input->post('action') == 'contact'){
			//test($_POST);exit;
			/* Store Record to Database Table */
			 $data = array(
					'name'=>$this->input->post('name'),
					'email'=>$this->input->post('email'),
					'contact'=>$this->input->post('phone'),
				 	'organisation'=>$this->input->post('organisation'),
					'message'=>$this->input->post('message'),
					'status'=>1,
					'dated'=>time()
					);
		$this->db->insert('form_contactus',$data);
		/* Fire Mail to Webmaster */
		$date_time = date("d-m-Y h:i:sa");
		$this->load->library('email');
		$config = array('mailtype'=>'html', 'charset'=>'utf-8', 'priority'=>1, 'useragent'=>'Team Computers Pvt. Ltd.');
		$this->email->initialize($config);		
		$mailBody = $this->load->view('contact_mail', $data, true);
		$this->email->from($this->input->post('email'), $this->input->post('name'));
		$this->email->to('salim.ansari@teamcomputers.com,gaurav.wadhawan@teamcomputers.com');
		$this->email->cc('');
		$this->email->bcc('');
		$this->email->reply_to($this->input->post('email'), $this->input->post('name'));
//		$this->email->subject('Contact Leeds form Team Computers Pvt. Ltd.');
		$this->email->subject('Contact Leads form Team Computers Pvt. Ltd. '.$date_time."");
		$this->email->message($mailBody);	
		if(!$this->email->send()){
			//echo $this->email->print_debugger();
		}else{
			redirect('contact-success');
		}
		}
	}


}