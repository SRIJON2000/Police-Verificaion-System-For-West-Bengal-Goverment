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
    public function login()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('uname', 'Username', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('psw', 'Password', 'required|max_length[32]');
        $this->form_validation->set_rules('type', 'Type', 'required');

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