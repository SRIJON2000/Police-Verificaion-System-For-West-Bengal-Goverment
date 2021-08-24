<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class application extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('application_model');
    }
    public function index()
    {
        $this->isLoggedIn();
    }
    /**
     * This function used to check the user is logged in or not
     */
    function isLoggedIn()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
            
            $this->load->view('themes/admin_login');
        }
        else
        {
            /*redirect('/dashboard');*/
            $this->load->view('themes/dashboard_admin');
        }
    }
    
    
    /**
     * This function used to logged in user
     */
    public function newapp()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('receiptno', 'Receipt No', 'required|trim');
        $this->form_validation->set_rules('rcptdate', 'Receipt Date', 'required|max_length[32]');
        $this->form_validation->set_rules('authorityname', 'Authority Name', 'required');
        $this->form_validation->set_rules('authorityaddress', 'Authority Address', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('firstname', 'First Name', 'required|max_length[32]');
        $this->form_validation->set_rules('middlename', 'Middle Name', 'required');
        $this->form_validation->set_rules('lastname', 'Lats Name', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('fathername', 'Father Name', 'required|max_length[32]');
        $this->form_validation->set_rules('nation', 'Nation', 'required');
        $this->form_validation->set_rules('dob', 'Date Of Birth', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('mothername', 'Mother Name', 'required|max_length[32]');
        $this->form_validation->set_rules('pob', 'Place Of Birth', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('aadhaarno', 'Aadhaar No', 'required|max_length[32]');
        $this->form_validation->set_rules('caste', 'Caste', 'required');
        $this->form_validation->set_rules('blood', 'Blood Group', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('houseno1', 'House No1', 'required|max_length[32]');
        $this->form_validation->set_rules('street1', 'Street1', 'required');
        $this->form_validation->set_rules('landmark1', 'Landmark1', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('city1', 'City1', 'required|max_length[32]');
        $this->form_validation->set_rules('po1', 'Post Office1', 'required');
        $this->form_validation->set_rules('ps1', 'Police Station1', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('pin1', 'Pin1', 'required|max_length[32]');
        $this->form_validation->set_rules('district1', 'District1', 'required');
        $this->form_validation->set_rules('State1', 'State1', 'required|valid_email|max_length[128]|trim');

        $this->form_validation->set_rules('houseno2', 'House No2', 'required|max_length[32]');
        $this->form_validation->set_rules('street2', 'Street2', 'required');
        $this->form_validation->set_rules('landmark2', 'Landmark2', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('city2', 'City2', 'required|max_length[32]');
        $this->form_validation->set_rules('po2', 'Post Office2', 'required');
        $this->form_validation->set_rules('ps2', 'Police Station2', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('pin2', 'Pin2', 'required|max_length[32]');
        $this->form_validation->set_rules('district2', 'District2', 'required');
        $this->form_validation->set_rules('State2', 'State2', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('psw', 'Password', 'required|max_length[32]');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('uname', 'Username', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('psw', 'Password', 'required|max_length[32]');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('uname', 'Username', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('psw', 'Password', 'required|max_length[32]');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('uname', 'Username', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('psw', 'Password', 'required|max_length[32]');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('receiptno', 'Receipt No', 'required|trim');
        $this->form_validation->set_rules('rcptdate', 'Receipt Date', 'required|max_length[32]');
        $this->form_validation->set_rules('authorityname', 'Authority Name', 'required');
        $this->form_validation->set_rules('authorityaddress', 'Authority Address', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('firstname', 'First Name', 'required|max_length[32]');
        $this->form_validation->set_rules('middlename', 'Middle Name', 'required');
        $this->form_validation->set_rules('lastname', 'Lats Name', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('fathername', 'Father Name', 'required|max_length[32]');
        $this->form_validation->set_rules('nation', 'Nation', 'required');
        $this->form_validation->set_rules('uname', 'Username', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('psw', 'Password', 'required|max_length[32]');

        if($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', 'Invalid Username/User ID or password');
            $this->index();
        }
        else
        {
            $email = strtolower($this->security->xss_clean($this->input->post('uname')));
            $password = $this->input->post('psw');
            $type=$this->input->post('type');
            
            $result = $this->login_model->loginMe($email, $password,$type);
            
            if(!empty($result))
            {
	
                $sessionArray = array('username'=>$email,                    
                                        'office_name'=>$result->office_name,
                                    'user_type'=>$result->user_type);

                $this->session->set_userdata($sessionArray);
                unset($sessionArray['username'], $sessionArray['office_name'],$sessionArray['user_type']);
                redirect('index.php/test/dashboard_admin');
            }
            else
            {
                $this->session->set_flashdata('error', 'Incorrect Username/User ID or password');
                $this->index();
            }
        }
    }
}
?>