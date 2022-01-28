<?php
//written by Srijon Mallick, Rupak Pal
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
       
        function access_denied()
        {
            $this->load->view('themes/access_denied');
        }
        function admin_login()
        {
            $data=$this->load_captcha();
            $this->load->view('themes/admin_login',$data);
        }
        function activity_log()
        {
            if($this->session->userdata('isloggedin')==False || empty($this->session->userdata('user_type')))
            {
                redirect('Home/access_denied');
            }
            $data['logs']=$this->Application_model->activity_log_update($this->session->userdata('username'));
            $this->load->view('themes/activity_log',$data);
            
        }
        
        function dashboard_adm()
        {
            if($this->session->userdata('isloggedin')==False || empty($this->session->userdata('user_type')))
            {
                redirect('Home/access_denied');
            }
            $this->load->model('Application_model');
            $data['applications']=$this->Application_model->fetch_all_applications($this->session->userdata('office_district'));
            $a= $this->Application_model->a();
            $b =$this->Application_model->b();
            $c =$this->Application_model->c();
            $d =$this->Application_model->d();
            $data['numbers']=array(array(
                'a'=>$a,
                'b'=>$b,
                'c'=>$c,
                'd'=>$d));
            $this->load->view('themes/dashboard_adm',$data);
            
        }
        function ocvr_verified_nondefence_approve($pvr_id)
        {
            if($this->session->userdata('isloggedin')==False || $this->session->userdata('user_type')!='OFFICER IN CHARGE')
            {
                redirect('Home/access_denied');
            }
            $this->Application_model->ocvr_verified_nondefence_approve($pvr_id);
            redirect('Home/verified_letter_list/'.$pvr_id);
        }
        function ocvr_unverified_approve($pvr_id)
        {
            if($this->session->userdata('isloggedin')==False || $this->session->userdata('user_type')!='OFFICER IN CHARGE')
            {
                redirect('Home/access_denied');
            }
            $this->Application_model->ocvr_unverified_approve($pvr_id);
            redirect('Home/unverified_letter_list/'.$pvr_id);
        }
        function print_application($pvr_id)
        {
            if($this->session->userdata('isloggedin')==False || $this->session->userdata('user_type')!='OFFICER IN CHARGE')
            {
                redirect('Home/access_denied');
            }
            $data['details1']=$this->Application_model->fetch_application_details($pvr_id);
            $data['details2']=$this->Application_model->fetch_second_address($pvr_id);
            $this->load->view('themes/print_application',$data);
        }
        function non_defence_letter($pvr_id)
        {
            if($this->session->userdata('isloggedin')==False || $this->session->userdata('user_type')!='OFFICER IN CHARGE')
            {
                redirect('Home/access_denied');
            }
            $data['details']=$this->Application_model->fetch_application_details($pvr_id);
            $this->load->view('themes/non_defence_letter',$data);
        }

        function defence_letter($pvr_id)
        {
            if($this->session->userdata('isloggedin')==False || $this->session->userdata('user_type')!='ADDITIONAL DISTRICT MAGISTRATE')
            {
                redirect('Home/access_denied');
            }
            $data['details']=$this->Application_model->fetch_application_details($pvr_id);
            $this->load->view('themes/defence_letter',$data);
        }
        function generate_pdf_view()
        {
            if($this->session->userdata('isloggedin')==False)
            {
                redirect('Home/access_denied');
            }
            $this->load->view('themes/generate_pdf_view');
        }

        function SP_DIB($pvr_id)
        {
            if($this->session->userdata('isloggedin')==False || $this->session->userdata('user_type')!='OFFICER IN CHARGE')
            {
                redirect('Home/access_denied');
            }
            $data['details']=$this->Application_model->fetch_application_details($pvr_id);
            $this->load->view('themes/SP_DIB',$data);
        }
        function cp_letter($pvr_id)
        {
            if($this->session->userdata('isloggedin')==False || $this->session->userdata('user_type')!='OFFICER IN CHARGE')
            {
                redirect('Home/access_denied');
            }
            $data['details']=$this->Application_model->fetch_application_details($pvr_id);
            $this->load->view('themes/cp_letter',$data);
        }
        function unverified_letter($pvr_id)
        {
            if($this->session->userdata('isloggedin')==False || $this->session->userdata('user_type')!='OFFICER IN CHARGE')
            {
                redirect('Home/access_denied');
            }
            $data['details']=$this->Application_model->fetch_application_details($pvr_id);
            $this->load->view('themes/emp_letter',$data);
        }
        function quarterly_report()
        {
            if($this->session->userdata('isloggedin')==False)
            {
                redirect('Home/access_denied');
            }
            $this->load->view('themes/quarterly_report');
        }
        function issues()
        { 
            if($this->session->userdata('isloggedin')==False || ($this->session->userdata('user_type')!='ADDITIONAL DISTRICT MAGISTRATE' && $this->session->userdata('user_type')!='SUPER ADMIN'))
            {
                redirect('Home/access_denied');
            }
            $this->load->model('Application_model');
            $data['issues']=$this->Application_model->issues();
            $this->load->view('themes/issues',$data);
        }
        
        
        function application()
        {
            if($this->session->userdata('isloggedin')==False || $this->session->userdata('user_type')!='DATA ENTRY OPERATOR')
            {
                redirect('Home/access_denied');
            }
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
        function addoffice()
        {
            if($this->session->userdata('isloggedin')==False)
            {
                redirect('Home/access_denied');
            }
            $this->load->view('themes/add_office');
        }
        function status($pvr_id)
        {
            if($this->session->userdata('isloggedin')==False)
            {
                redirect('Home/access_denied');
            }
            $data['details1']=$this->Application_model->fetch_application_details($pvr_id);
            $this->load->view('themes/check_application_status',$data);
        }
        function statussearch()
        {
            if($this->session->userdata('isloggedin')==False)
            {
                redirect('Home/access_denied');
            }
            $this->load->view('themes/check_status');
        }
        function date_range()
        {
            if($this->session->userdata('isloggedin')==False)
            {
                redirect('Home/access_denied');
            }
            $this->load->view('themes/date_range');
        }
        function date_range_for_quarterly_report()
        {
            if($this->session->userdata('isloggedin')==False)
            {
                redirect('Home/access_denied');
            }
            $this->load->view('themes/date_range_for_quarterly_report');
        }
        function all_verified_list()
        {
            if($this->session->userdata('isloggedin')==False || ($this->session->userdata('user_type')!='ADDITIONAL DISTRICT MAGISTRATE' && $this->session->userdata('user_type')!='SUPER ADMIN'))
            {
                redirect('Home/access_denied');
            }
            $data['applications']=$this->Application_model->fetch_all_applications($this->session->userdata('office_district'));
            $this->load->view('themes/all_verified_list',$data);
        }
        function verify_reject()
        {
            if($this->session->userdata('isloggedin')==False || $this->session->userdata('user_type')!='DATA ENTRY OPERATOR')
            {
                redirect('Home/access_denied');
            }
            $data['applications']=$this->Application_model->fetch_all_applications($this->session->userdata('office_district'));
            $a= $this->Application_model->a();
            $b =$this->Application_model->b();
            $c =$this->Application_model->c();
            $d =$this->Application_model->d();
            $data['numbers']=array(array(
                'a'=>$a,
                'b'=>$b,
                'c'=>$c,
                'd'=>$d));
            $this->load->view('themes/verify_reject_list',$data);
        }
        function logout()
        {
            if($this->session->userdata('isloggedin')==False)
            {
                redirect('Home/access_denied');
            }
            $this->load->library('session');
            $this->load->model('Application_model');
            $this->Application_model->activity_log($this->session->userdata['department'],'Logout Successful',current_url(),$this->input->ip_address(),$this->session->userdata['username']);
            $this->session->sess_destroy();
            redirect('Home/admin_login');
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
            if($this->session->userdata('isloggedin')==False)
            {
                redirect('Home/access_denied');
            }
            $data['details1']=$this->Application_model->fetch_application_details($pvr_id);
            $data['details2']=$this->Application_model->fetch_second_address($pvr_id);
            $this->load->view('themes/application_detail_view',$data);
       } 
       function profile()
       {
            if($this->session->userdata('isloggedin')==False)
            {
                redirect('Home/access_denied');
            }
            //$data['profiles']=$this->Application_model->fetch_profile_detail($this->session->userdata('login_id'));
            $this->load->view('themes/profile');
       }
       function verified_letter_list()
       {
            if($this->session->userdata('isloggedin')==False || $this->session->userdata('user_type')!='OFFICER IN CHARGE')
            {
                redirect('Home/access_denied');
            }
            $data['applications']=$this->Application_model->fetch_all_applications($this->session->userdata('office_district'));
            $a= $this->Application_model->a();
            $b =$this->Application_model->b();
            $c =$this->Application_model->c();
            $d =$this->Application_model->d();
            $data['numbers']=array(array(
                'a'=>$a,
                'b'=>$b,
                'c'=>$c,
                'd'=>$d));
            $this->load->view('themes/verified_letter_to_emp',$data);
       }
       function unverified_letter_list()
       {
            if($this->session->userdata('isloggedin')==False || $this->session->userdata('user_type')!='OFFICER IN CHARGE')
            {
                redirect('Home/access_denied');
            }
            $data['applications']=$this->Application_model->fetch_all_applications($this->session->userdata('office_district'));
            $a= $this->Application_model->a();
            $b =$this->Application_model->b();
            $c =$this->Application_model->c();
            $d =$this->Application_model->d();
            $data['numbers']=array(array(
                'a'=>$a,
                'b'=>$b,
                'c'=>$c,
                'd'=>$d));
            $this->load->view('themes/unverified_letter_to_emp',$data);
       }

       function notification(){
        if($this->session->userdata('isloggedin')==False)
        {
            redirect('Home/access_denied');
        }
        $num=$this->Application_model->count_seen_status($this->session->userdata('login_id'));
        $this->session->set_userdata('new_num',$num);
        $this->Application_model->update_seen_status($this->session->userdata('login_id'));
        $data['notifications']=$this->Application_model->notification_update($this->session->userdata('login_id'));
        $this->load->view('themes/notification',$data,$num); 
    }
    function delete_notification($notification_id)
    {
        if($this->session->userdata('isloggedin')==False)
        {
                redirect('Home/access_denied');
        }
        $this->Application_model->delete_notification($notification_id);
        redirect('Home/notification');
    }
    function delete_issue($issue_id)
    {
        if($this->session->userdata('isloggedin')==False || $this->session->userdata('user_type')!='ADDITIONAL DISTRICT MAGISTRATE')
        {
                redirect('Home/access_denied');
        }
        $this->Application_model->delete_issue($issue_id);
        redirect('Home/issues');
    }
    function contact()
    {
        
        $this->load->view('themes/contact'); 
    }
    function send_issue()
    {
        
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('text', 'Decription', 'required');
        if($this->form_validation->run() == FALSE)
        {
            
            $this->session->set_flashdata('error', 'Incorrect Input');
            $this->contact();
        }
        else
        {
            $name=$this->input->post('name');
            $email=$this->input->post('email');
            $description=$this->input->post('text');
            $r=$this->Application_model->send_issue($name,$email,$description);
            if($r==1)
            {
                $this->session->set_userdata('success','Your issues has been submitted successfully');
                redirect('Home/contact');
            }
            else
            {
                $this->session->set_userdata('fail','Email id does not exist');
                redirect('Home/contact');
            }
        }
        
    }
    function new_password()
    {
        if($this->session->userdata('isloggedin')==True)
        {
                redirect('Home/access_denied');
        }
        $this->load->view('themes/new_password');
    }
    function create_password()
    {
        if($this->session->userdata('isloggedin')==True)
        {
                redirect('Home/access_denied');
        }
        $this->load->library('form_validation');
        $this->load->helper('download');
        $this->load->model('Login_model');
            if(empty($this->input->post('npassword')) || empty($this->input->post('cpassword')))
            {
                $this->session->set_flashdata('error', 'All Fields are Required');
                redirect('Home/new_password');
            }
            else if($this->input->post('npassword') !=$this->input->post('cpassword'))
            {
                $this->session->set_flashdata('error', 'Enter same password in both the fields');
                redirect('Home/new_password');
            }
        else
        {
            $password=$this->input->post('npassword');
            $email=$_SESSION['email'];
            unset($_SESSION['email']);
            $this->Login_model->change_password($password,$email);
            $this->load->model('Application_model');
            $dept=$this->Application_model->fetch_dept($email);
            $this->Application_model->activity_log($dept,'Password Changed',current_url(),$this->input->ip_address(),$email);
            redirect('Home/password_set');
        }
    }
    function forgot_password()
    {
        if($this->session->userdata('isloggedin')==True)
        {
            redirect('Home/access_denied');
        }
        $this->load->view('themes/forgot_password');
    }
    function validate_otp()
    {
        if($this->session->userdata('isloggedin')==True)
        {
            redirect('Home/access_denied');
        }
        $this->load->view('themes/validate_otp');
    }
    function match_otp()
    {
        if($this->session->userdata('isloggedin')==True)
        {
            redirect('Home/access_denied');
        }
        $this->load->library('form_validation');
        $this->load->helper('download');
        $config = array(
            array(
                'field' => 'otp',
                'label' => 'OTP',
                'rules' => 'trim|required|max_length[30]'
            )
        );
        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == FALSE)
        {
            if(empty($this->input->post('otp')))
            {
                $this->session->set_flashdata('error', 'OTP Required');
                redirect('Home/validate_otp');
            }
        }
        else
        {
            if($this->input->post('otp')==$_SESSION['otp'])
            {
                unset($_SESSION['otp']);
                redirect('Home/new_password');
            }
            else
            {
                $this->session->set_flashdata('error', 'Incorrect OTP');
                redirect('Home/validate_otp');
            }
        }
    }
    function send_otp()
    {
        if($this->session->userdata('isloggedin')==True)
        {
                redirect('Home/access_denied');
        }
        $this->load->library('form_validation');
        $this->load->helper('download');
        $config = array(
            array(
                'field' => 'email',
                'label' => 'Username',
                'rules' => 'trim|required|max_length[30]'
            )
        );
        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == FALSE)
        {
            if(empty($this->input->post('email')))
            {
                $this->session->set_flashdata('error', 'Username/Email Required');
                redirect('Home/forgot_password');
            }
        }
        else
        {
            $this->load->model('Login_model');
            $email = $this->input->post('email');
            $result = $this->Login_model->checkEmailExist($email);
            if($result==1)
            {
                $_SESSION['email']=$email;
                redirect('Home/validate_otp');
                
            }
            else
            {
                $this->session->set_flashdata('error', 'Username/Email Not Exist');
                redirect('Home/forgot_password');
            }
        }
    }
    function download_otp()
    {
        if($this->session->userdata('isloggedin')==True)
        {
                redirect('Home/access_denied');
        }
        $this->load->helper('download');
        $rndno=rand(1000, 9999);
        $_SESSION['otp']=$rndno;
        $data = 'Your OTP is '.$rndno;
        $name = 'otp.txt';
        force_download($name, $data);
    }
    function password_set()
    {
        if($this->session->userdata('isloggedin')==True)
        {
                redirect('Home/access_denied');
        }
        $this->load->view('themes/password_set');
    }
    function adduser()
    {
        if($this->session->userdata('isloggedin')==False || $this->session->userdata('user_type')!='SUPER ADMIN')
        {
                redirect('Home/access_denied');
        }
        $data['depts']=$this->Application_model->fetch_all_dept();
        $data['desigs'] =$this->Application_model->fetch_all_desig();
        $data['offices']=$this->Application_model->fetch_all_office();
        $this->load->view('themes/Add_user',$data);
    }
    function alluser()
    {
        if($this->session->userdata('isloggedin')==False || $this->session->userdata('user_type')!='SUPER ADMIN')
        {
                redirect('Home/access_denied');
        }
        $data['users']=$this->Application_model->fetch_all_user();
        $this->load->view('themes/alluser',$data);
    }
    }  
?>