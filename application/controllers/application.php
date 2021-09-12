<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Application extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Application_model');
    }
    public function index()
    {
        redirect('Home/application');
        
    }
    
    public function newapp()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('receiptno', 'Receipt No', 'required');
        $this->form_validation->set_rules('receiptdate', 'Receipt Date', 'required');
        $this->form_validation->set_rules('employer','Employer Name','required');
        $this->form_validation->set_rules('firstname', 'First Name', 'required|max_length[32]|trim');
        $this->form_validation->set_rules('middlename', 'Middle Name', 'max_length[32]|trim');
        $this->form_validation->set_rules('lastname', 'Lats Name', 'required|max_length[32]|trim');
        //$this->form_validation->set_rules('fathername', 'Father Name', 'required|max_length[32]|trim');
        //$this->form_validation->set_rules('nation', 'Nation', 'required');
        $this->form_validation->set_rules('dob', 'Date Of Birth', 'required');
        //$this->form_validation->set_rules('mothername', 'Mother Name', 'required|max_length[32]|trim');
        //$this->form_validation->set_rules('pob', 'Place Of Birth', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('aadhaarno', 'Aadhaar No', 'required|max_length[12]|trim');
        $this->form_validation->set_rules('caste', 'Caste', 'required');
        //$this->form_validation->set_rules('blood', 'Blood Group', 'required');
        $this->form_validation->set_rules('houseno1', 'House No1', 'required');
        $this->form_validation->set_rules('street1', 'Street1', 'required');
        $this->form_validation->set_rules('landmark1', 'Landmark1', 'required|max_length[128]|trim');
        $this->form_validation->set_rules('city1', 'City1', 'required|max_length[32]|trim');
        $this->form_validation->set_rules('po1', 'Post Office1', 'required|max_length[32]|trim');
        $this->form_validation->set_rules('ps1', 'Police Station1', 'required');
        $this->form_validation->set_rules('pin1', 'Pin1', 'required|max_length[32]');
        $this->form_validation->set_rules('district1', 'District1', 'required');
        $this->form_validation->set_rules('state1', 'State1', 'required');

        $this->form_validation->set_rules('houseno2', 'House No2', 'required|max_length[32]');
        $this->form_validation->set_rules('street2', 'Street2', 'required');
        $this->form_validation->set_rules('landmark2', 'Landmark2', 'required|max_length[128]|trim');
        $this->form_validation->set_rules('city2', 'City2', 'required|max_length[32]');
        $this->form_validation->set_rules('po2', 'Post Office2', 'required');
        $this->form_validation->set_rules('ps2', 'Police Station2', 'required');
        $this->form_validation->set_rules('pin2', 'Pin2', 'required|max_length[32]');
        $this->form_validation->set_rules('district2', 'District2', 'required');
        $this->form_validation->set_rules('state2', 'State2', 'required');
        //$this->form_validation->set_rules('sname', 'School Name', 'required|max_length[32]');
        //$this->form_validation->set_rules('saddress', 'School Address', 'required');
        //$this->form_validation->set_rules('spin', 'School Pin', 'required|valid_email|max_length[128]|trim');
        //$this->form_validation->set_rules('sdistrict', 'School District', 'required|max_length[32]');
        //$this->form_validation->set_rules('sstate', 'School State', 'required');
        //$this->form_validation->set_rules('cname', 'College Name', 'required|valid_email|max_length[128]|trim');
        //$this->form_validation->set_rules('caddress', 'College Address', 'required|max_length[32]');
        //$this->form_validation->set_rules('cpin', 'College Pin', 'required');
        //$this->form_validation->set_rules('cdistrict', 'College District', 'required|valid_email|max_length[128]|trim');
        //$this->form_validation->set_rules('cstate', 'College State', 'required');
        $this->form_validation->set_rules('refno', 'Reference No', 'required');
        $this->form_validation->set_rules('refdate', 'Reference Date', 'required');
        $this->form_validation->set_rules('defence', 'Defence Personnel', 'required');
        $this->form_validation->set_rules('category', 'Category', 'required');
        //$this->form_validation->set_rules('ps3', 'Police Station', 'required|max_length[32]|trim');
        

        if($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', 'Invalid');
            $this->index();
        }
        else
        {
            
            $data=array('receiptno'=>$this->input->post('receiptno'),
            'receiptdate'=>$this->input->post('receiptdate'),
            'employer'=>$this->input->post('employer'),
            'firstname'=>$this->input->post('firstname'),
            'middlename'=>$this->input->post('middlename'),
            'lastname'=>$this->input->post('lastname'),
            //'fathername'=>$this->input->post('fathername'),
            //'nation'=>$this->input->post('nation'),
            'dob'=>$this->input->post('dob'),
            //'mothername'=>$this->input->post('mothername'),
           // 'pob'=>$this->input->post('pob'),
            'gender'=>$this->input->post('gender'),
            'aadhaarno'=>$this->input->post('aadhaarno'),
            'caste'=>$this->input->post('caste'),
            //'blood'=>$this->input->post('blood'),
            'houseno1'=>$this->input->post('houseno1'),
            'street1'=>$this->input->post('street1'),
            'landmark1'=>$this->input->post('landmark1'),
            'city1'=>$this->input->post('city1'),
            'po1'=>$this->input->post('po1'),
            'ps1'=>$this->input->post('ps1'),
            'pin1'=>$this->input->post('pin1'),
            'district1'=>$this->input->post('district1'),
            'state1'=>$this->input->post('state1'),
            'houseno2'=>$this->input->post('houseno2'),
            'street2'=>$this->input->post('street2'),
            'landmark2'=>$this->input->post('landmark2'),
            'city2'=>$this->input->post('city2'),
            'po2'=>$this->input->post('po2'),
            'ps2'=>$this->input->post('ps2'),
            'pin2'=>$this->input->post('pin2'),
            'district2'=>$this->input->post('district2'),
            'state2'=>$this->input->post('state2'),

            // 'sname'=>$this->input->post('sname'),
            // 'saddress'=>$this->input->post('saddress'),
            // 'spin'=>$this->input->post('spin'),
            // 'sdistrict'=>$this->input->post('sdistrict'),
            // 'sstate'=>$this->input->post('sstate'),
            // 'cname'=>$this->input->post('cname'),
            // 'caddress'=>$this->input->post('caddress'),
            // 'cpin'=>$this->input->post('cpin'),
            // 'cdistrict'=>$this->input->post('cdistrict'),
            // 'cstate'=>$this->input->post('cstate'),
            'refno'=>$this->input->post('refno'),
            'refdate'=>$this->input->post('refdate'),
            'defence'=>$this->input->post('defence'),
            'category'=>$this->input->post('category'));
            
            $memo_no=$this->generate_memo();

            $this->Application_model->submit($data,$memo_no);
            redirect('Home/dashboard_adm');
            
        }
    }
    function addoffice()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('employer', 'Office Name', 'required');
        $this->form_validation->set_rules('addr1', 'Office Address1', 'required');
        $this->form_validation->set_rules('addr2','Office Address1','required');
        if($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', 'Invalid');
            redirect('Home/addoffice');
        }
        else
        {
            $data=array(
                'employer_name'=>$this->input->post('employer'),
                'employer_addr1'=>$this->input->post('addr1'),
                'employer_addr2'=>$this->input->post('addr2'),
            );
            $this->Application_model->addoffice($data);
            redirect('Home/dashboard_adm');
        }
    }
    function generate_memo()
    {
        $code='';
		$length = 6;
		$rand_unique_no = rand(0, 99999);
		for($i = 1; $i < $length - strlen($rand_unique_no); $i++ ){
        	$code .= '0';
        }
		//$state_code=$this->Application_model->fetch_state_code($state_id);
        //$district_code=$this->Application_model->fetch_district_code($district_id);
		$current_year=date('y');
		
		$hash =$code.$rand_unique_no.'/VR/'.$current_year;
		$check_exist_code = $this->Application_model->check_memo_no($hash);
		if($check_exist_code==TRUE)
		{
			return $hash;
			
		}
		else
		{
			$this->generate_memo();
        }
    }
}
?>