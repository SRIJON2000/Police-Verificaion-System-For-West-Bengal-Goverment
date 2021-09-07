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
                'rules' => 'required|callback_username_check['.$this->input->post('security_code').']'
            )
        );

        //set validation rules.
        $this->form_validation->set_rules($config);
        

        if($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', 'Invalid Input !!!!');
            $_SESSION['salt'] = hash('sha256',microtime()); // added 06/09
            //$this->index();
            $data=$this->load_captcha();
            $this->load->view('themes/admin_login',$data);
        }
        else
        {
            $this->load->model('Login_model');
            $email = strtolower($this->security->xss_clean($this->input->post('login_id')));
            
            $password = $this->input->post('password');
            
            $result = $this->Login_model->loginMe($email, $password, $_SESSION['salt']);
            
            if(!empty($result))
            {

                $sessionArray = array('username'=>$email,                    
                                    'office_name'=>$result['office_name'],
                                    'user_type'=>$result['user_type'],
                                    'office_district'=>$result['office_district'],
                                    'office_state'=>$result['office_state'],
                                    'department'=>$result['department'],
                                    'isloggedin'=>True);
                
                $this->load->library('session');
                $this->session->set_userdata($sessionArray);
                
                unset($sessionArray['username'], $sessionArray['office_name'],$sessionArray['user_type']);
                redirect('Home/dashboard_adm');
            }
            else
            {
                $this->session->set_flashdata('error', 'Incorrect Username or password !!!');
                $_SESSION['salt'] = hash('sha256',microtime()); // added 06/09
            //$this->index();
                $data=$this->load_captcha();
                $this->load->view('themes/admin_login',$data);
                
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

    

    /**
     * This function used to load forgot password view
     */
    /*public function forgotPassword()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
            $this->load->view('back_end/forgotPassword');
        }
        else
        {
            redirect('/dashboard');
        }
    }*/
    
    /**
     * This function used to generate reset password request link
     */
    /*function resetPasswordUser()
    {
        $status = '';
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('login_email','Email','trim|required|valid_email');
                
        if($this->form_validation->run() == FALSE)
        {
            $this->forgotPassword();
        }
        else 
        {
            $email = strtolower($this->security->xss_clean($this->input->post('login_email')));
            
            if($this->login_model->checkEmailExist($email))
            {
                $encoded_email = urlencode($email);
                
                $this->load->helper('string');
                $data['email'] = $email;
                $data['activation_id'] = random_string('alnum',15);
                $data['createdDtm'] = date('Y-m-d H:i:s');
                $data['agent'] = getBrowserAgent();
                $data['client_ip'] = $this->input->ip_address();
                
                $save = $this->login_model->resetPasswordUser($data);                
                
                if($save)
                {
                    $data1['reset_link'] = base_url() . "resetPasswordConfirmUser/" . $data['activation_id'] . "/" . $encoded_email;
                    $userInfo = $this->login_model->getCustomerInfoByEmail($email);

                    if(!empty($userInfo)){
                        $data1["name"] = $userInfo->name;
                        $data1["email"] = $userInfo->email;
                        $data1["message"] = "Reset Your Password";
                    }

                    $sendStatus = resetPasswordEmail($data1);

                    if($sendStatus){
                        $status = "send";
                        setFlashData($status, "Reset password link sent successfully, please check mails.");
                    } else {
                        $status = "notsend";
                        setFlashData($status, "Email has been failed, try again.");
                    }
                }
                else
                {
                    $status = 'unable';
                    setFlashData($status, "It seems an error while sending your details, try again.");
                }
            }
            else
            {
                $status = 'invalid';
                setFlashData($status, "This email is not registered with us.");
            }
            redirect('/forgotPassword');
        }
    }*/

    /**
     * This function used to reset the password 
     * @param string $activation_id : This is unique id
     * @param string $email : This is user email
     */
    /*function resetPasswordConfirmUser($activation_id, $email)
    {
        // Get email and activation code from URL values at index 3-4
        $email = urldecode($email);
        
        // Check activation id in database
        $is_correct = $this->login_model->checkActivationDetails($email, $activation_id);
        
        $data['email'] = $email;
        $data['activation_code'] = $activation_id;
        
        if ($is_correct == 1)
        {
            $this->load->view('back_end/newPassword', $data);
        }
        else
        {
            redirect('/login');
        }
    }*/
    
    /**
     * This function used to create new password for user
     */
    /*function createPasswordUser()
    {
        $status = '';
        $message = '';
        $email = strtolower($this->input->post("email"));
        $activation_id = $this->input->post("activation_code");
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('password','Password','required|max_length[20]');
        $this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]|max_length[20]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->resetPasswordConfirmUser($activation_id, urlencode($email));
        }
        else
        {
            $password = $this->input->post('password');
            $cpassword = $this->input->post('cpassword');
            
            // Check activation id in database
            $is_correct = $this->login_model->checkActivationDetails($email, $activation_id);
            
            if($is_correct == 1)
            {                
                $this->login_model->createPasswordUser($email, $password);
                
                $status = 'success';
                $message = 'Password reset successfully';
            }
            else
            {
                $status = 'error';
                $message = 'Password reset failed';
            }
            
            setFlashData($status, $message);

            redirect("/login");
        }
    }*/

    
}

?>