<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class test extends CI_Controller{
        function index(){
            $this->load->view('themes/dashboard_employer');
        }
    }
?>