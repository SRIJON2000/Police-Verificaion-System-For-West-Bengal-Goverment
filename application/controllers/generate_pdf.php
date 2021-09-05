<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Generate_pdf extends NIC_Controller
{
    function __construct()
	{	
		parent::__construct();
		$this->load->model('generate_pdf_model');
    }
}
?>