<?php
    class test_controller extends CI_Controller{
        function index(){
            $this->load->view('themes/dashboard_employer');
        }
    }
?>