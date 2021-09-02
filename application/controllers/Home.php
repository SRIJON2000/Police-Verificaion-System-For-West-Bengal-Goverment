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

        
        function dashboard_employer()
        {
            $this->load->view('themes/dashboard_employer');
        }
        
        function dashboard_adm()
        {
            $this->load->view('themes/dashboard_adm');
        }
        
        function dashboard_ocvr()
        {
            $this->load->view('themes/dashboard_ocvr');
        }
        
        function dashboard_vr()
        {
            $this->load->view('themes/dashboard_vr');
        }        
        
        function admin_login()
        {
            $data=$this->load_captcha();
            $this->load->view('themes/admin_login',$data);
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
            if($this->input->post('state1') != "")
		{
			$data['districts'] = $this->spm_model->get_district($this->input->post('state1'));
		}
            //$data['districts']=$this->Application_model->fetch_district();
            $data['policestations']=$this->Application_model->fetch_policestation();
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
           'pool'          => '123456789abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ',

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
        

    }
?>