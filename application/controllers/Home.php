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
            $this->load->view('themes/admin_login');
        }
        
        function employer_login()
        {
            $this->load->view('themes/employer_login');
        }
        
        function application()
        {
            $gender=$this->Application_model->fetch_gender();
            $caste =$this->Application_model->fetch_caste();
            $state=$this->Application_model->fetch_state();
            $district=$this->Application_model->fetch_district();
            $policestation=$this->Application_model->fetch_policestation();
            $this->load->view('themes/new_application',$gender);
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
        
        

    }
?>