<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Home extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Application_model');
        }
        
        function index()
        {
            $this->load->view('themes/home');
            
        }

        function admin_login()
        {
            $data=$this->load_captcha();
            $this->load->view('themes/admin_login',$data);
        }
        function dashboard_employer()
        {
            $this->load->view('themes/dashboard_employer');
        }
        
        function dashboard_adm()
        {
            $data['applications']=$this->Application_model->fetch_all_applications($this->session->userdata('office_district'));
            $this->load->view('themes/dashboard_adm',$data);
        }
        function non_defence_letter()
        {
            $this->load->view('themes/non_defence_letter');
        }

        function defence_letter()
        {
            $this->load->view('themes/defence_letter');
        }
        function SP_DIB()
        {
            $this->load->view('themes/SP_DIB');
        }
        
        function dashboard_ocvr()
        {
            $this->load->view('themes/dashboard_ocvr');
        }
        
        function dashboard_vr()
        {
            $this->load->view('themes/dashboard_vr');
        }        
        
        
        function employer_login()
        {
            $this->load->view('themes/employer_login');
        }
        
        function application()
        {
            $data['genders']=$this->Application_model->fetch_gender();
            $data['castes'] =$this->Application_model->fetch_caste();
            $data['states']=$this->Application_model->fetch_state();
            $data['defences']=$this->Application_model->fetch_defence();
            $data['employers']=$this->Application_model->fetch_employer($this->session->userdata('office_district'));
            $data['districts']=$this->Application_model->fetch_district();
            $data['policestations']=$this->Application_model->fetch_policestation();
            $data['categories']=$this->Application_model->fetch_category();
            $data['receiptno']=$this->generate_receipt_No($this->session->userdata('office_district'),$this->session->userdata('office_state'));
            $this->load->view('themes/new_application',$data);
        }
        
        function status()
        {
            $this->load->view('themes/check_application_status');
        }
        
        function logout()
        {
            $this->load->library('session');
            $this->session->sess_destroy();
            $this->admin_login();
        }
        
        function load_captcha()
         {
            //captcha generation
            $this->load->helper('captcha');
            $vals = array(
       
           'img_path'      => './captcha/',
           'img_url'       => 'http://localhost/PVR/captcha/',
           'img_width'     => '132',
           'img_height'    => 38,
           'expiration'    => 7200,
           'word_length'   => 5,
           'font_size'     => 16,
           //'pool'          => '123456789abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ',
           'pool'          => '123456789ABCDEFGHJKMNPQRSTUVWXYZ',
           // White background and border, black text and red grid
                   'colors' => array(
                   'background' => array(255, 255, 255),
                   'border' => array(200, 200, 200),
                   'text' => array(100, 100, 100),
                   'grid' => array(200, 200, 200)
                        )
                    );
       //store the captcha in cap variable. 
             $data['cap']=create_captcha($vals);
             return $data;
           
         }

    
    public function generate_receipt_No($district_id,$state_id)
	{
		$code='';
		$length = 6;
		$rand_unique_no = rand(0, 99999);
		for($i = 1; $i < $length - strlen($rand_unique_no); $i++ ){
        	$code .= '0';
        }
		$state_code=$this->Application_model->fetch_state_code($state_id);
        $district_code=$this->Application_model->fetch_district_code($district_id);
		$current_year=date('y');
		
		$hash = $state_code.$district_code.$current_year.$code.$rand_unique_no;
		$check_exist_code = $this->Application_model->check_receipt_no($hash);
		if($check_exist_code==TRUE)
		{
			return $hash;
			
		}
		else
		{
			$this->generate_receipt_No($state_id,$district_id);
		}
	}

       function application_details($pvr_id)
       {
            $data['details1']=$this->Application_model->fetch_application_details($pvr_id);
            $data['details2']=$this->Application_model->fetch_second_address($pvr_id);
            $this->load->view('themes/application_detail_view',$data);
       } 

    }
?>