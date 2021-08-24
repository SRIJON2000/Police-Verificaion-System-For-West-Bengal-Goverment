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
        $this->form_validation->set_rules('rcptdate', 'Receipt Date', 'required');
        $this->form_validation->set_rules('authorityname', 'Authority Name', 'required|trim|max_length[128]');
        $this->form_validation->set_rules('authorityaddress', 'Authority Address', 'required|max_length[128]|trim');
        $this->form_validation->set_rules('firstname', 'First Name', 'required|max_length[32]|trim');
        $this->form_validation->set_rules('middlename', 'Middle Name', 'required|max_length[32]|trim');
        $this->form_validation->set_rules('lastname', 'Lats Name', 'required|max_length[32]|trim');
        $this->form_validation->set_rules('fathername', 'Father Name', 'required|max_length[32]|trim');
        $this->form_validation->set_rules('nation', 'Nation', 'required');
        $this->form_validation->set_rules('dob', 'Date Of Birth', 'required');
        $this->form_validation->set_rules('mothername', 'Mother Name', 'required|max_length[32]|trim');
        $this->form_validation->set_rules('pob', 'Place Of Birth', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('aadhaarno', 'Aadhaar No', 'required|max_length[12]|trim');
        $this->form_validation->set_rules('caste', 'Caste', 'required');
        $this->form_validation->set_rules('blood', 'Blood Group', 'required');
        $this->form_validation->set_rules('houseno1', 'House No1', 'required');
        $this->form_validation->set_rules('street1', 'Street1', 'required');
        $this->form_validation->set_rules('landmark1', 'Landmark1', 'required|max_length[128]|trim');
        $this->form_validation->set_rules('city1', 'City1', 'required|max_length[32]|trim');
        $this->form_validation->set_rules('po1', 'Post Office1', 'required|max_length[32]|trim');
        $this->form_validation->set_rules('ps1', 'Police Station1', 'required|max_length[32]|trim');
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
        $this->form_validation->set_rules('sname', 'School Name', 'required|max_length[32]');
        $this->form_validation->set_rules('saddress', 'School Address', 'required');
        $this->form_validation->set_rules('spin', 'School Pin', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('sdistrict', 'School District', 'required|max_length[32]');
        $this->form_validation->set_rules('sstate', 'School State', 'required');
        $this->form_validation->set_rules('cname', 'College Name', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('caddress', 'College Address', 'required|max_length[32]');
        $this->form_validation->set_rules('cpin', 'College Pin', 'required');
        $this->form_validation->set_rules('cdistrict', 'College District', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('cstate', 'College State', 'required');
        $this->form_validation->set_rules('refno', 'Reference No', 'required');
        $this->form_validation->set_rules('refdate', 'Reference Date', 'required');
        $this->form_validation->set_rules('dp', 'Defence Personnel', 'required');
        $this->form_validation->set_rules('ps3', 'Police Station', 'required|max_length[32]|trim');
        

        if($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', 'Invalid');
            $this->index();
        }
        else
        {
            
            $data=array('receiptno'=>$this->input->post('receiptno'),
            'rcptdate'=>$this->input->post('rcptdate'),
            'authorityname'=>$this->input->post('authorityname'),
            'authorityaddress'=>$this->input->post('authorityaddress'),
            'firstname'=>$this->input->post('firstname'),
            'middlename'=>$this->input->post('middlename'),
            'lastname'=>$this->input->post('lastname'),
            'fathername'=>$this->input->post('fathername'),
            'nation'=>$this->input->post('nation'),
            'dob'=>$this->input->post('dob'),
            'mothername'=>$this->input->post('mothername'),
            'pob'=>$this->input->post('pob'),
            'gender'=>$this->input->post('gender'),
            'aadhaarno'=>$this->input->post('aadhaarno'),
            'caste'=>$this->input->post('caste'),
            'blood'=>$this->input->post('blood'),
            'houseno1'=>$this->input->post('houseno1'),
            'street1'=>$this->input->post('street1'),
            'landmark1'=>$this->input->post('landmark1'),
            'city1'=>$this->input->post('city1'),
            'po1'=>$this->input->post('po1'),
            'ps1'=>$this->input->post('ps1'),
            'pin1'=>$this->input->post('pin1'),
            'district1'=>$this->input->post('district1'),
            'State1'=>$this->input->post('State1'),
            'houseno2'=>$this->input->post('houseno2'),
            'street2'=>$this->input->post('street2'),
            'landmark2'=>$this->input->post('landmark2'),
            'city2'=>$this->input->post('city2'),
            'po2'=>$this->input->post('po2'),
            'ps2'=>$this->input->post('ps2'),
            'pin2'=>$this->input->post('pin2'),
            'district2'=>$this->input->post('district2'),
            'State2'=>$this->input->post('State2'),

            'sname'=>$this->input->post('sname'),
            'saddress'=>$this->input->post('saddress'),
            'spin'=>$this->input->post('spin'),
            'sdistrict'=>$this->input->post('sdistrict'),
            'sstate'=>$this->input->post('sstate'),
            'cname'=>$this->input->post('cname'),
            'caddress'=>$this->input->post('caddress'),
            'cpin'=>$this->input->post('cpin'),
            'cdistrict'=>$this->input->post('cdistrict'),
            'cstate'=>$this->input->post('cstate'),
            'refno'=>$this->input->post('refno'),
            'refdate'=>$this->input->post('refdate'),
            'dp'=>$this->input->post('dp'),
            'ps3'=>$this->input->post('ps3'));
            
            
            $result = $this->application_model->submit($data);
            
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