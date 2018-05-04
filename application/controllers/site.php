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
	// legal-disclaimer
	public function legal_disclaimer(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('legal-disclaimer',$data);	
	}
	// privacy-policy
	public function privacy_policy(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('privacy-policy',$data);	
	}

	// bussiness analytics
	public function business_analytics(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('business-analytics',$data);	
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
	public function clients(){
		$this->load->model('site_mdl');
		$this->load->view('clients',$data);	
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

	

	public function event_tableau(){
		$this->load->model('site_mdl');
		// $data['result'] = $this->site_mdl->getContent(13);	
		// $data['pagTab'] = $this->uri->segment(1);	
		// $data['info']=$this->site_mdl->getAllEvents();
		//$data['get_Time'] = $this->secondsToTime();
		$this->load->view('event-tableau',$data);

		/* Check if the form is Submited */
		if($this->input->post('action') == 'contact1'){
			// /test($_POST);exit;

			$name = stripslashes($_POST["name"]);
			$email = stripslashes($_POST["email"]);
			$phone = stripslashes($_POST["phone"]);
			$company = stripslashes($_POST["company"]);
			$industry = stripslashes($_POST["industry"]);
			$job_titile = stripslashes($_POST["job_titile"]);
			$location_date = stripslashes($_POST["location_date"]);
			


			$response = $_POST["g-recaptcha-response"];
			$url = 'https://www.google.com/recaptcha/api/siteverify';

			$data = array(
				'secret' => '6LdJHBUTAAAAAOo43uXraKozxCpPYaYxTQ0U-pDQ',
				'response' => $_POST["g-recaptcha-response"]
			);
			$options = array(
				'http' => array (
					'method' => 'POST',
					'content' => http_build_query($data)
				)
			);
			$context  = stream_context_create($options);
			$verify = file_get_contents($url, false, $context);
			$captcha_success=json_decode($verify);
			if ($captcha_success->success==false) {
				
				echo "<script>alert('You are a bot! Go away!');</script>";
		
			} else if ($captcha_success->success==true) {
				



			/* Store Record to Database Table */
			 $data = array(
					'name'=>$this->input->post('name'),
					'email'=>$this->input->post('email'),
					'phone'=>$this->input->post('phone'),
					'company'=>$this->input->post('company'),
					'industry'=>$this->input->post('industry'),
					'job_titile'=>$this->input->post('job_titile'),
					'location_date'=>$this->input->post('location_date')
					);
		$this->db->insert('event_tableau',$data); 



		$date_time = date("d-m-Y h:i:sa");

		$subject      = "Registration [" . $name . "] - Workshop Tableau Test Drive " . $date_time . "";
		  
		  $body         = $this->load->view('mail_template_event_tableau.php',$data,TRUE);
		  // $this->load->library('My_PHPMailer');

		  require 'PHPMailer/PHPMailerAutoload.php';

			$mail = new PHPMailer();
			$mail->IsSMTP();
			// $mail->Host       = "smtp.gmail.com";
			$mail->Host = gethostbyname("smtp.gmail.com");
			$mail->SMTPAuth   = true;
			$mail->SMTPSecure = "ssl";//tls
			$mail->SMTPOptions = array('ssl' => array('verify_peer_name' => false));
			$mail->Port       = 465;//587
			$mail->Username   = "social@teamcomputers.com";
			$mail->Password   = 'team@0987';
			$mail->setFrom("social@teamcomputers.com","Team Marketing");
//			$mail->FromName     = 'Admin';
			$mail->AddAddress("tahera.bharmal@teamcomputers.com");
			$mail->AddAddress("dipika.joshi@teamcomputers.com");
			$mail->AddAddress("tahera.bharmal@teamcomputers.com");
			//$mail->AddAddress("sandeep.saini@teamcomputers.com");
			$mail->AddCC('salim.ansari@teamcomputers.com');
			//$mail->AddCC($email);
			$mail->WordWrap   = 50;
			$mail->IsHTML(true);
			$mail->Subject    = $subject;

			//$mail->AddEmbeddedImage('assets/banner/water-drops-png-image--water-drops-png-image-25.png', 'banner');
			//$mail->AddEmbeddedImage('assets/banner/logo.png', 'logo');
//			$mail->AddEmbeddedImage('assets/front/emailPic/team-grey-logo.png', 'gry_logo');
//			$mail->AddEmbeddedImage('assets/front/emailPic/fb.png', 'fb');
//			$mail->AddEmbeddedImage('assets/front/emailPic/in.png', 'in');


			$mail->Body     = $body;
			if(!$mail->Send()) {
				$this->session->set_flashdata('msg', $mail->ErrorInfo);
					echo  "Error: " . $mail->ErrorInfo ;
			} else {
			  //$this->session->set_flashdata('msg', 'Check Your inbox for account varification','refresh');  
				// echo '<div class="alert alert-success" role="alert">Your ECR has been sent successfully</div>';
			redirect('event-tableau-contact-success','refresh');
				//$this->load->view('site/event-tableau-contact-success');
			}
		}
		}


	}

	

	public function partners(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		// $data['info']=$this->site_mdl->getAllWhatsNew();
		
		$this->load->view('partners',$data);	
	}
	public function career_work(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(13);	
		$data['pagTab'] = $this->uri->segment(1);	
		$data['info']=$this->site_mdl->getAllEvents();
		$this->load->view('career-work',$data);	
	}
	// public function job_descriptions(){
	// 	$this->load->model('site_mdl');
	// 	// $data['result'] = $this->site_mdl->getContent(13);	
	// 	// $data['pagTab'] = $this->uri->segment(1);	
	// 	// $data['info']=$this->site_mdl->getAllEvents();
	// 	$data['openings'] 	= 	$this->site_mdl->getData('product',$condition,'prod_id,prod_code,prod_title,prod_location');
	// 	$this->load->view('jobDescription',$data);	
	// }

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
		//$data['result'] = $this->site_mdl->getContent(13);	
		// $data['pagTab'] = $this->uri->segment(1);	
		// $data['info']=$this->site_mdl->getAllEvents();
		$condition = NULL;
		//$data['jobCategory'] = $this->site_mdl->getJobCategory();
		$data['openings']	= 	$this->site_mdl->openingJoins();
		
		

		//$openings	= 	$this->site_mdl->getOpenings($condition);
		// echo "<pre>";
		// print_r($data);
		//$data['a'] = array('JobCategory' => $jobCategory, 'openings' => $openings);
		$this->load->view('open-positions',$data);	
	}

	public function case_studies(){
		$this->load->model('site_mdl');
		// $data['result'] = $this->site_mdl->getContent(13);	
		// $data['pagTab'] = $this->uri->segment(1);	
		// $data['info']=$this->site_mdl->getAllEvents();
		$data['result_case_studies_verticals']	= 	$this->site_mdl->caseStudiesVerticals();
		$data['result_case_studies']	= 	$this->site_mdl->caseStudies();
		$this->load->view('case-studies',$data);	
	}


	// public function getCaseStudies(){
	// 	$this->load->model('site_mdl');
	// 	$data['result_case_studies_verticals']	= 	$this->site_mdl->caseStudiesVerticals();
	// 	$data['result_case_studies']	= 	$this->site_mdl->caseStudies();
	// 	$this->load->view('case-studies-demo',$data);
	// }


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
	public function case_studies_inner(){
			$this->load->model('site_mdl');

			$id=$this->input->get("caseid");
			$data['result'] = $this->site_mdl->getContent(13);	
			$data['pagTab'] = $this->uri->segment(1);	
			$data['info']=$this->site_mdl->getAllEvents();

			$data['innerData'] = $this->site_mdl->getData('case_study',array('case_id'=>$id),'*');
			$this->load->view('case-studies-inner',$data);	
			
			
		}

	//solutions page
	public function end_user_computing(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('end-user-computing',$data);
	}
	public function enterprise_mobility_services(){
		$this->load->model('site_mdl');
		$this->load->view('enterprise-mobility-services',$data);
	}
	public function data_center_services(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('data-center-services',$data);
	}
	public function network_server_storage_solutions(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('network-server-storage-solutions');
	}
	public function information_cyber_it_security(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('information-cyber-it-security');
	}
	public function cloud_services_india(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('cloud-services-india');
	}
	public function audio_visual_solutions(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('audio-visual-solutions');
	}
	public function impact(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('impact');
	}
	public function mobile_banking_solutions(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('mobile-banking-solutions');
	}
	public function insurance_mobility_solutions(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('insurance-mobility-solutions');
	}
	public function pharmaceutical_mobility_solutions(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('pharmaceutical-mobility-solutions');
	}
	public function retail_mobility_services(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('retail-mobility-services');
	}
	public function manufacturing_enterprise_mobility(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('manufacturing-enterprise-mobility');
	}
	public function banking_end_user_computing(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('banking-end-user-computing');
	}
	public function insurance_end_user_computing(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('insurance-end-user-computing');
	}
	public function retail_end_user_computing(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('retail-end-user-computing');
	}
	public function manufacturing_end_user_computing(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('manufacturing-end-user-computing');
	}
	public function aws_consulting_partner_india(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('aws-consulting-partner-india');
	}
	public function microsoft_azure_gold_partner_india(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('microsoft-azure-gold-partner-india');
	}
	public function google_cloud_premier_partner_india(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('google-cloud-premier-partner-india');
	}
	public function enterprise(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('enterprise');
	}
	public function managed_services_eums(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('managed-services-eums');
	}
	public function managed_services_dcnm(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('managed-services-dcnm');
	}
	public function managed_services_mps(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('managed-services-mps');
	}
	public function managed_services_mbbf(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('managed-services-mbbf');
	}
	public function managed_services_sas(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('managed-services-sas');
	}
	public function business_analytics_insurance(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('business-analytics-insurance');
	}
	public function business_analytics_banking(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('business-analytics-banking');
	}
	public function business_analytics_nbfc(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('business-analytics-nbfc');
	}
	public function business_analytics_manufacturing(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('business-analytics-manufacturing');
	}
	public function business_analytics_government(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('business-analytics-government');
	}
	public function business_analytics_chatbot(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('business-analytics-chatbot');
	}
	public function it_infrastructure_services(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('it-infrastructure-services');
	}
	public function event_alteryx(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('event-alteryx');

		/* Check if the form is Submited */
		if($this->input->post('action') == 'contact2'){
			//test($_POST);exit;

			$name = stripslashes($_POST["name"]);
			$email = stripslashes($_POST["email"]);
			$phone = stripslashes($_POST["phone"]);
			$company = stripslashes($_POST["company"]);
			$industry = stripslashes($_POST["industry"]);
			$job_titile = stripslashes($_POST["job_titile"]);
			$location_date = stripslashes($_POST["location_date"]);
			


			$response = $_POST["g-recaptcha-response"];
			$url = 'https://www.google.com/recaptcha/api/siteverify';

			$data = array(
				'secret' => '6LdJHBUTAAAAAOo43uXraKozxCpPYaYxTQ0U-pDQ',
				'response' => $_POST["g-recaptcha-response"]
			);
			$options = array(
				'http' => array (
					'method' => 'POST',
					'content' => http_build_query($data)
				)
			);
			$context  = stream_context_create($options);
			$verify = file_get_contents($url, false, $context);
			$captcha_success=json_decode($verify);
			if ($captcha_success->success==false) {
				
				echo "<script>alert('You are a bot! Go away!');</script>";
		
			} else if ($captcha_success->success==true) {
				



			/* Store Record to Database Table */
			 $data = array(
					'name'=>$this->input->post('name'),
					'email'=>$this->input->post('email'),
					'phone'=>$this->input->post('phone'),
					'company'=>$this->input->post('company'),
					'industry'=>$this->input->post('industry'),
					'job_titile'=>$this->input->post('job_titile'),
					'location_date'=>$this->input->post('location_date')
					);
		$this->db->insert('event_alteryx',$data); 



		$date_time = date("d-m-Y h:i:sa");

		$subject      = "Registration [" . $name . "] - Workshop Alteryx Data Blending " . $date_time . "";
		  
		  $body         = $this->load->view('mail_template_event_alteryx.php',$data,TRUE);
		  // $this->load->library('My_PHPMailer');

		  require 'PHPMailer/PHPMailerAutoload.php';

			$mail = new PHPMailer();
			$mail->IsSMTP();
			// $mail->Host       = "smtp.gmail.com";
			$mail->Host = gethostbyname("smtp.gmail.com");
			$mail->SMTPAuth   = true;
			$mail->SMTPSecure = "ssl";//tls
			$mail->SMTPOptions = array('ssl' => array('verify_peer_name' => false));
			$mail->Port       = 465;//587
			$mail->Username   = "social@teamcomputers.com";
			$mail->Password   = 'team@0987';
			$mail->setFrom("social@teamcomputers.com","Team Marketing");
//			$mail->FromName     = 'Admin';
			$mail->AddAddress("tahera.bharmal@teamcomputers.com");
			$mail->AddAddress("dipika.joshi@teamcomputers.com");
			$mail->AddAddress("tahera.bharmal@teamcomputers.com");
			//$mail->AddAddress("salim.ansari@teamcomputers.com");
			$mail->AddCC('salim.ansari@teamcomputers.com');
			//$mail->AddCC($email);
			$mail->WordWrap   = 50;
			$mail->IsHTML(true);
			$mail->Subject    = $subject;

			//$mail->AddEmbeddedImage('assets/banner/water-drops-png-image--water-drops-png-image-25.png', 'banner');
			//$mail->AddEmbeddedImage('assets/banner/logo.png', 'logo');
//			$mail->AddEmbeddedImage('assets/front/emailPic/team-grey-logo.png', 'gry_logo');
//			$mail->AddEmbeddedImage('assets/front/emailPic/fb.png', 'fb');
//			$mail->AddEmbeddedImage('assets/front/emailPic/in.png', 'in');


			$mail->Body     = $body;
			if(!$mail->Send()) {
				$this->session->set_flashdata('msg', $mail->ErrorInfo);
					echo  "Error: " . $mail->ErrorInfo ;
			} else {
			  //$this->session->set_flashdata('msg', 'Check Your inbox for account varification','refresh');  
				// echo '<div class="alert alert-success" role="alert">Your ECR has been sent successfully</div>';
			redirect('event-alteryx-contact-success','refresh');
				//$this->load->view('site/event-tableau-contact-success');
			}
		}
		}


	}

	

	// career section
	public function career(){
		$this->load->model('site_mdl');
		$data['pagTab']		= 	$this->uri->segment(1);
		$data['category'] 	= 	$this->site_mdl->getData('artist',NULL,'artst_id,artst_name');
		$this->load->view('open-positions',$data);
	}

	public function explore_students(){
		$this->load->model('site_mdl');
		$this->load->view('careers',$data);
		$this->load->library('validations');
		$jobCode = $this->input->get('jc');

		// Submit form
		if (isset($_POST['action'])) {
					
			// Captcha Server setting
			$secret 	=	"6Le4jyIUAAAAABLxkYMwxYt2oozRsSsms1T034D0";	
			$response 	=	$_POST['g-recaptcha-response'];
			$remoteip	=	$_SERVER['REMOTE_ADDR'];
			$url 		=	file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");
			$captchaArray	= json_decode($url);
			$captchaResult	= $captchaArray->success ;
			

			
			// form data
			$jobCode	= 	$this->input->post('jc');
			$jobLocation= 	$this->input->post('jl');
			$jobTitle	= 	$this->input->post('jt');
			$name		= 	$this->input->post('name');
			$email		= 	$this->input->post('email');
			$phone		= 	$this->input->post('phone');
			
			$Portfolio	= 	$this->input->post('portfolio_url');
			
			$cover		=	$this->input->post('cover_letter');
			$file		=	$this->input->post('file');

		
			// Upload File 
			$file           	=   $_FILES['file'];
	        $fileName           =   $file['name'];
	        $fileType           =   $file['type'];
	        $arr            	=   explode(".",$fileName);
	        $ext            	=   end($arr);
	        $ext            	=   strtolower($ext);
	        $allowedExt     	=   array("pdf","doc","docx");
			$target_dir     	=   getcwd()."/assets/";
			$fileName       	=   $jobCode.$jobTitle.time().".".$ext;
			$target_file    	=   $target_dir.$fileName;

			// array 

			// $param		= 	array('job_code'		=> 	$jobCode,
			// 					  'job_location'	=> 	$jobLocation,
			// 					  'job_title'		=> 	$jobTitle,
			// 					  'full_name'		=> 	$name,
			// 					  'email'			=> 	$email,
			// 					  'phone'			=> 	$phone,
			// 					  'experience'		=> 	$exp,
			// 					  'portfolio_url'	=> 	$Portfolio,
			// 					  'current_company'	=> 	$company,
			// 					  'cover_letter'	=>	$cover,
			// 					  'file'			=>	$fileName
			// 					  );

			
			// Validation rule..
			$param	= 	array('job_code'		=> 	$jobCode,
								  'job_location'	=> 	$jobLocation,
								  'job_title'		=> 	$jobTitle,
								  'full_name'		=> 	$name,
								  'email'			=> 	$email,
								  'phone'			=> 	$phone,
								  
								  'portfolio_url'	=> 	$Portfolio,
								  
								  'cover_letter'	=>	$cover,
								  'file'			=>	$fileName,
								  'captcha'			=>$captchaResult
								  );

			$formValidation 	=	$this->validations->jobApplication($param);
			if($formValidation['status'] == 0){

	        	$data['errors']			= 	$formValidation['errors'];
          	
        	}  else {
        		
        		if (in_array($ext, $allowedExt)) {
					if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
						
		        		$applicationId = $this->site_mdl->saveData('job_application',
						        			array('job_code'		=> 	$jobCode,
												  'job_location'	=> 	$jobLocation,
												  'job_title'		=> 	$jobTitle,
												  'full_name'		=> 	$name,
												  'email'			=> 	$email,
												  'phone'			=> 	$phone,
												  //'experience'		=> 	$exp,
												  'portfolio_url'	=> 	$Portfolio,
												  //'current_company'	=> 	$company,
												  'cover_letter'	=>	$cover,
												  'file'			=>	$fileName
												  )
		        			);
		            	if($applicationId){
		            		$this->sendmail($param);
		            	}
			        } 
				} else {
					$result[] = "Invalid File Formate";
					$data['errors']		=	$result;
				}
        	}
		}
		$data['jobDescription']	=	$this->site_mdl->getJobDescription($jobCode);
		$this->load->view('jobDescription',$data);

	}
	// end student explore
	public function job_description(){
		$this->load->model('site_mdl');
		$this->load->library('validations');
		$jobCode = $this->input->get('jc');
		// echo $jobCode;
		// die("Error");
		// Submit form
		if (isset($_POST['action'])) {
			//echo "<pre>"; print_r($_POST);die();	
			// Captcha Server setting
			$secret 	=	"6Le4jyIUAAAAABLxkYMwxYt2oozRsSsms1T034D0";	
			$response 	=	$_POST['g-recaptcha-response'];
			$remoteip	=	$_SERVER['REMOTE_ADDR'];
			$url 		=	file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");
			$captchaArray	= json_decode($url);
			

			$captchaResult	= $captchaArray->success ;
			

			
			// form data
			$jobCode	= 	$this->input->post('jc');
			$jobLocation= 	$this->input->post('jl');
			$jobTitle	= 	$this->input->post('jt');
			$name		= 	$this->input->post('name');
			$email		= 	$this->input->post('email');
			$phone		= 	$this->input->post('phone');
			
			$Portfolio	= 	$this->input->post('portfolio_url');
			
			$cover		=	$this->input->post('cover_letter');
			$file		=	$this->input->post('file');
		
			// Upload File 
			$file           	=   $_FILES['file'];
	        $fileName           =   $file['name'];
	        $fileType           =   $file['type'];
	        $arr            	=   explode(".",$fileName);
	        $ext            	=   end($arr);
	        $ext            	=   strtolower($ext);
	        $allowedExt     	=   array("pdf","doc","docx");
			$target_dir     	=   getcwd()."/assets/";
			$fileName       	=   $jobCode.$jobTitle.time().".".$ext;
			$target_file    	=   $target_dir.$fileName;

			// array 

			// $param		= 	array('job_code'		=> 	$jobCode,
			// 					  'job_location'	=> 	$jobLocation,
			// 					  'job_title'		=> 	$jobTitle,
			// 					  'full_name'		=> 	$name,
			// 					  'email'			=> 	$email,
			// 					  'phone'			=> 	$phone,
			// 					  'experience'		=> 	$exp,
			// 					  'portfolio_url'	=> 	$Portfolio,
			// 					  'current_company'	=> 	$company,
			// 					  'cover_letter'	=>	$cover,
			// 					  'file'			=>	$fileName
			// 					  );

			
			// Validation rule..
			$param	= 	array('job_code'		=> 	$jobCode,
								  'job_location'	=> 	$jobLocation,
								  'job_title'		=> 	$jobTitle,
								  'full_name'		=> 	$name,
								  'email'			=> 	$email,
								  'phone'			=> 	$phone,
								 
								  'portfolio_url'	=> 	$Portfolio,
								  
								  'cover_letter'	=>	$cover,
								  'file'			=>	$fileName,
								  'captcha'			=>$captchaResult
								  );

			$formValidation 	=	$this->validations->jobApplication($param);
			if($formValidation['status'] == 0){

	        	$data['errors']			= 	$formValidation['errors'];
          	
        	}  else {
        		
        		if (in_array($ext, $allowedExt)) {
					if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
						
		        		$applicationId = $this->site_mdl->saveData('job_application',
						        			array('job_code'		=> 	$jobCode,
												  'job_location'	=> 	$jobLocation,
												  'job_title'		=> 	$jobTitle,
												  'full_name'		=> 	$name,
												  'email'			=> 	$email,
												  'phone'			=> 	$phone,
												  
												  'portfolio_url'	=> 	$Portfolio,
												 
												  'cover_letter'	=>	$cover,
												  'file'			=>	$fileName
												  )
		        			);
		            	if($applicationId){
		            		$this->sendmail($param);
		            	}
			        } 
				} else {
					$result[] = "Invalid File Formate";
					$data['errors']		=	$result;
				}
        	}
		}

		
		$data['jobDescription']	=	$this->site_mdl->getJobDescription($jobCode);
		$this->load->view('jobDescription',$data);
	}



public function sendmail($param) {
	$subject = "Candidate Application for ".$param['job_code'].", Job Title - ".$param['job_title'].","." for Location - ".$param['job_location'];
	

$body = "Hello HR Team,"."<br><br><br>"."You have received a new job application for the post of "."<b>".$param['job_title']."</b>" ." for "."<b>".$param['job_location']."</b>"." location "." with an attachment."."<br><br>"."Details are given below:" ."<br><br>"."Full Name: ". $param['full_name']."<br>"."Email: ". $param['email']."<br>"."Phone: ". $param['phone']."<br>"."experience: ". $param['experience']."<br>"."Current Company: ". $param['current_company']."<br>"."Portfolio: ". $param['portfolio_url']."<br><br>"."Cover Letter: ". $param['cover_letter']."<br><br><br><br><br>"."<center>"."**This is a autogenerated mail, don't reply.**"."</center>" ;
 	$resume = "assets/".$param['file'];
 	$this->load->library('My_PHPMailer');
    $mail = new PHPMailer();
   // $mail->IsSMTP();
    $mail->Host 	= "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Port 	=	587;
    $mail->Username = "applications@teamcomputers.com";
    $mail->Password = '';
    $mail->setFrom($param['email']);
	//$mail->AddAddress("kp.tiwari@teamcomputers.com");
	$mail->AddAddress("careers@teamcomputers.com");
	//$mail->AddAddress("salim.ansari@teamcomputers.com");
	$mail->AddCC('salim.ansari@teamcomputers.com');
    $mail->AddAttachment($resume);
    $mail->WordWrap = 50;
    $mail->IsHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $body;
    
    if(!$mail->Send()) {
    		$this->session->set_flashdata('msg', $mail->ErrorInfo);
            //echo  "Error: " . $mail->ErrorInfo;
        } else {
            //redirect('contact_success_job');
            $this->load->view('career-contact-success');
		}
   
}
	




	public function selectCategory() {
	$this->load->model('site_mdl');

	$catId = $this->input->post('id');
	if ($catId == "NULL") {
		$condition = NULL;
	} else {
		$condition = array('artst_id'=>$catId,'prod_status'=>1);
	}
	
	$data['openings'] 	= 	$this->site_mdl->getData('product',$condition,'prod_id,prod_code, prod_desc,prod_title,prod_location');
	$this->load->view('fetchCurrentOpenings',$data);
	}
	
	

	
	
	

	// contact us page, information store in db and send email on respective email id's
	
		public function contact(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(4);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('contact',$data);
		
		/* Check if the form is Submited */
		if($this->input->post('action') == 'contact'){
			//test($_POST);exit;

			$name = stripslashes($_POST["name"]);
			$email = stripslashes($_POST["email"]);
			$phone = stripslashes($_POST["phone"]);
			$message = stripslashes($_POST["message"]);
			$response = $_POST["g-recaptcha-response"];
			$url = 'https://www.google.com/recaptcha/api/siteverify';

			$data = array(
				'secret' => '6LdJHBUTAAAAAOo43uXraKozxCpPYaYxTQ0U-pDQ',
				'response' => $_POST["g-recaptcha-response"]
			);
			$options = array(
				'http' => array (
					'method' => 'POST',
					'content' => http_build_query($data)
				)
			);
			$context  = stream_context_create($options);
			$verify = file_get_contents($url, false, $context);
			$captcha_success=json_decode($verify);
			if ($captcha_success->success==false) {
				
				echo "<script>alert('You are a bot! Go away!');</script>";
		
			} else if ($captcha_success->success==true) {
				



			/* Store Record to Database Table */
			 $data = array(
					'name'=>$this->input->post('name'),
					'email'=>$this->input->post('email'),
					'phone'=>$this->input->post('phone'),
					'message'=>$this->input->post('message'),
					'status'=>1,
					'dated'=>time()
					);
		$this->db->insert('form_contactus',$data);



		$date_time = date("d-m-Y h:i:sa");

		$subject      = "Inquiry from Website Contact Us Page ".$data['name']." - ".$date_time."";
		  
		  $body         = $this->load->view('contact_mail.php',$data,TRUE);
		  // $this->load->library('My_PHPMailer');

		  require 'PHPMailer/PHPMailerAutoload.php';

			$mail = new PHPMailer();
			$mail->IsSMTP();
			// $mail->Host       = "smtp.gmail.com";
			$mail->Host = gethostbyname("smtp.gmail.com");
			$mail->SMTPAuth   = true;
			$mail->SMTPSecure = "ssl";//tls
			$mail->SMTPOptions = array('ssl' => array('verify_peer_name' => false));
			$mail->Port       = 465;//587
			$mail->Username   = "social@teamcomputers.com";
			$mail->Password   = 'team@0987';
			$mail->setFrom("social@teamcomputers.com","Team Marketing");
//			$mail->FromName     = 'Admin';
			$mail->AddAddress("social@teamcomputers.com");
			$mail->AddAddress("sandeep.saini@teamcomputers.com");
			//$mail->AddCC('salim.ansari@teamcomputers.com');
			//$mail->AddCC($email);
			$mail->WordWrap   = 50;
			$mail->IsHTML(true);
			$mail->Subject    = $subject;

			//$mail->AddEmbeddedImage('assets/banner/water-drops-png-image--water-drops-png-image-25.png', 'banner');
			//$mail->AddEmbeddedImage('assets/banner/logo.png', 'logo');
//			$mail->AddEmbeddedImage('assets/front/emailPic/team-grey-logo.png', 'gry_logo');
//			$mail->AddEmbeddedImage('assets/front/emailPic/fb.png', 'fb');
//			$mail->AddEmbeddedImage('assets/front/emailPic/in.png', 'in');


			$mail->Body     = $body;
			if(!$mail->Send()) {
				$this->session->set_flashdata('msg', $mail->ErrorInfo);
					echo  "Error: " . $mail->ErrorInfo ;
			} else {
			  //$this->session->set_flashdata('msg', 'Check Your inbox for account varification','refresh');  
				// echo '<div class="alert alert-success" role="alert">Your ECR has been sent successfully</div>';
				redirect('contact-success','refresh');
			}
		}
		}
	}

	




	public function contact_success(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('contact-success',$data);
	}

	public function contact_success_tableau(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('event-tableau-contact-success',$data);
	}
	public function contact_success_alteryx(){
		$this->load->model('site_mdl');
		$data['result'] = $this->site_mdl->getContent(9);
		$data['pagTab'] = $this->uri->segment(1);
		$this->load->view('event-alteryx-contact-success',$data);
	}

	// New Pages
	public function apple_partner(){
		$this->load->model('site_mdl');
		$this->load->view('apple-partner');

	}
	public function apple_partner_inner(){
		$this->load->model('site_mdl');
		$this->load->view('apple-partner-inner');

	}
		public function google_cloud_partner(){
		$this->load->model('site_mdl');
		$this->load->view('google-cloud-partner');

	}
	public function google_cloud_platform_partner(){
		$this->load->model('site_mdl');
		$this->load->view('google-cloud-platform-partner');

	}
	public function gsuite_partner_india(){
		$this->load->model('site_mdl');
		$this->load->view('gsuite-partner-india');

	}
	
//samsung product page
	public function samsung_s9_landing_page(){
		$this->load->model('site_mdl');
		$this->load->view('samsung-s9-landing-page');
	}

	public function send_form_email(){
		$this->load->model('site_mdl');
		$this->load->view('send-form-email');
	}
//INS test pages

	public function data_center_services_test(){
		$this->load->model('site_mdl');
		$this->load->view('data-center-services-test');
	}
	public function end_user_computing_test(){
		$this->load->model('site_mdl');
		$this->load->view('end-user-computing-test');
	}
	public function enterprise_mobility_services_test(){
		$this->load->model('site_mdl');
		$this->load->view('enterprise-mobility-services-test');
	}
	public function information_cyber_it_security_test(){
		$this->load->model('site_mdl');
		$this->load->view('information-cyber-it-security-test');
	}
	public function it_infrastructure_services_test(){
		$this->load->model('site_mdl');
		$this->load->view('it-infrastructure-services-test');
	}
	public function network_server_storage_solutions_test(){
		$this->load->model('site_mdl');
		$this->load->view('network-server-storage-solutions-test');
	}
	public function partners_test(){
		$this->load->model('site_mdl');
		$this->load->view('partners-test');
	}
	public function alteryx_partner_india(){
		$this->load->model('site_mdl');
		$this->load->view('alteryx-partner-india');
	}
	public function qlik_elite_partner_india(){
		$this->load->model('site_mdl');
		$this->load->view('qlik-elite-partner-india');
	}
	public function qlik_business_intelligence(){
		$this->load->model('site_mdl');
		$this->load->view('qlik-business-intelligence');
	}

// main class
}