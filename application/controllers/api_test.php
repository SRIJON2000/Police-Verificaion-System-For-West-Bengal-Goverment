<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/API_Controller.php';
// Written By Pritam Roy And Rupak Pal
class Api_test extends API_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->model('Application_model');
        $this->load->library('authorization_token');
        //Loading view
        // $this->load->view('themes/admin-login');
    }

        /* login method */
            public function login()
            {
                header("Access-Control-Allow-Origin: *");
                // API Configuration
                $this->_apiConfig(['methods' => ['GET']]);
                $email = $this->input->get('email');
                $password = $this->input->get('password');

                // Validate the post data
                if(!empty($email) && !empty($password)){
                   //Data fetch from database
                    $this->db->select('*');
                    $this->db->from('pvr_login');
                    $this->db->where('username',$email);
                    $this->db->where('password',hash("sha256", $password));
                    
                    $query = $this->db->get();
                    $user = $query->row(); 
                    if($user) 
                    {
                        $payload = [
                           
                             'email' => [$user->username],
                             'password' => [ $user->password],
                     
                        ];

                        $token = $this->authorization_token->generateToken($payload);
                      
                        $this->api_return([
                            'status' => TRUE,
                            'message' => 'User login successful.',
                            "result" => [
                                'token' => $token,
                            ],
                            
                        ], API_Controller::HTTP_OK);
                      
                    }else{
                        // Set the response and exit
                        //BAD_REQUEST (400) being the HTTP response code
                        $this->api_return([
                            'status' => FALSE,
                            'message'=>"Wrong email or password."
                        ],API_Controller::HTTP_BAD_REQUEST);
                    }
                   
                }
               
            }
                        
            /* view method*/
           
            public function view()
            {
                header("Access-Control-Allow-Origin: *");

                // API Configuration [Return Array: User Token Data]
                 $this->_apiConfig([
                    'methods' => ['GET']
                   // 'requireAuthorization' => true,
                ]);
                $token = $this->input->get('token');
                $result = $this->authorization_token->validateToken($token);
                if (isset($result['status']) AND $result['status'] === true)
                {
                    $this->api_return( [
                        'status' => true,
                        "result" => [
                            //'user_data' => $token_data,
                            'pending1' => $this->Application_model->a(),
                            'pending2' => $this->Application_model->b(),
                            'pending3' => $this->Application_model->c(),
                            'pending4' => $this->Application_model->d(),
                        ],
                    ],
                    API_Controller::HTTP_OK);
        
                } else {
                    $this->api_return([
                        'status' => FALSE,
                        'message'=>"Invalid Token!!."
                    ],API_Controller::HTTP_BAD_REQUEST);
                 
                }
              
            }
             /* search method*/
            public function search()
            {
                header("Access-Control-Allow-Origin: *");

                // API Configuration [Return Array: User Token Data]
                 $this->_apiConfig([
                    'methods' => ['GET']
                   // 'requireAuthorization' => true,
                ]);
                $token = $this->input->get('token');
                $receipt_id = $this->input->get('receipt_id');
                $result = $this->authorization_token->validateToken($token);
                if (isset($result['status']) AND $result['status'] === true)
                {
                 
                   $this->db->select('receipt_id_pk');
                   $this->db->from('pvr_receipt_no');
                   $this->db->where('receipt_no',$receipt_id);
                   $query = $this->db->get();
                   $id = $query->row();
                   if(!empty($id))
                   {
                       $this->db->select('pvr_id_pk');
                       $this->db->from('pvr_vr_detail');
                       $this->db->where('receipt_id_fk',$id->receipt_id_pk);
                       $query = $this->db->get();
                       $pvr_id = $query->row();

                       
                       $this->api_return( [
                        'status' => true,
                        "result" => [
                            //'user_data' => $token_data,
                            'verify' =>  $this->Application_model->fetch_application_details($pvr_id->pvr_id_pk)
                        ],
                    ],
                    API_Controller::HTTP_OK);
       
                   }
                   else{
                    $this->api_return([
                        'status' => FALSE,
                        'message'=>"Applicant Not Found!!."
                    ],API_Controller::HTTP_BAD_REQUEST);
                   }  
        
                } else {
                    $this->api_return([
                        'status' => FALSE,
                        'message'=>"Invalid Token!!."
                    ],API_Controller::HTTP_BAD_REQUEST);
                 
                }

            }
}