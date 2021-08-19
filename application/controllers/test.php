<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class test extends CI_Controller{
        function index(){
            $this->load->view('themes/home');
        }
        function dashboard_employer()
        {
            $this->load->view('themes/dashboard_employer');
        }
        function dashboard_admin()
        {
            $this->load->view('themes/dashboard_admin');
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
            $this->load->view('themes/new_application');
        }
        function status()
        {
            $this->load->view('themes/check_application_status');
        }
    }
?>