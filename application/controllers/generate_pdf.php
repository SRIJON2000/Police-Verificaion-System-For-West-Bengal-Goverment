<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Generate_pdf extends CI_Controller
{
    function __construct()
	{	
		parent::__construct();
		$this->load->model('generate_pdf_model');
		
    }
	public function generate_pdf()
    {
        $mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('themes/non_defence_letter',[],true);
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser
        //$mpdf->Output('welcome.pdf','D'); // it downloads the file into the user system.
    }
}
?>