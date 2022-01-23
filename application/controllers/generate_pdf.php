<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//include('vendor/autoload.php');
//use Dompdf\Dompdf;
require_once APPPATH.'third_party\vendor\mpdf\dompdf\autoload.inc.php';
 //include_once APPPATH.'third_party\vendor\mpdf\mpdf\src\Mpdf.php';
 
class Generate_pdf extends CI_Controller
{
    function __construct()
	{	
		parent::__construct();
		//$this->load->model('generate_pdf_model');
		$this->load->model('Application_model');
    }
    
	public function SP_DIB($pvr_id)
    {
       

        $dompdf = new Dompdf\Dompdf();
        $data['details']=$this->Application_model->fetch_application_details($pvr_id);
        $html = $this->load->view('themes/SP_DIB',$data,true);
        $dompdf->loadHtml($html);
        
        $dompdf->render();
       
        $dompdf->stream("download", array("Attachment" => 0));

    }
    public function CP($pvr_id)
    {
       
        $dompdf = new Dompdf\Dompdf();
        $data['details']=$this->Application_model->fetch_application_details($pvr_id);
        $html = $this->load->view('themes/cp_letter',$data,true);
        $dompdf->loadHtml($html);
        
        $dompdf->render();
 
        $dompdf->stream("download", array("Attachment" => 0));

        
    }
    public function verified_defence($pvr_id)
    {
      
        $dompdf = new Dompdf\Dompdf();
        $data['details']=$this->Application_model->fetch_application_details($pvr_id);
        $html = $this->load->view('themes/defence_letter',$data,true);
        $dompdf->loadHtml($html);
        
        $dompdf->render();
   
        $dompdf->stream("download", array("Attachment" => 0));

    }
    public function verified_nondefence($pvr_id)
    {
  

        $dompdf = new Dompdf\Dompdf();
        $data['details']=$this->Application_model->fetch_application_details($pvr_id);
        $html = $this->load->view('themes/non_defence_letter',$data,true);
        $dompdf->loadHtml($html);
        
        $dompdf->render();
  
        $dompdf->stream("download", array("Attachment" => 0));

    }
    public function unverified($pvr_id)
    {
     

        $dompdf = new Dompdf\Dompdf();
        $data['details']=$this->Application_model->fetch_application_details($pvr_id);
        $html = $this->load->view('themes/emp_letter',$data,true);
        $dompdf->loadHtml($html);
        
        $dompdf->render();
 
        $dompdf->stream("download", array("Attachment" => 0));

       
    }
    public function application($pvr_id)
    {


        $dompdf = new Dompdf\Dompdf();
        $data['details1']=$this->Application_model->fetch_application_details($pvr_id);
        $data['details2']=$this->Application_model->fetch_second_address($pvr_id);
        $html = $this->load->view('themes/print_application',$data,true);
        $dompdf->loadHtml($html);
        $dompdf->render();
        $dompdf->stream("download", array("Attachment" => 0));

    }
    function daily_report($s,$e)
    {
        $dompdf = new Dompdf\Dompdf();
        $data['applications']=$this->Application_model->fetch_ranged_applications($s,$e);
            $data['dates']=array(array(
                's'=>$s,
                'e'=>$e
            ));
        $html = $this->load->view('themes/application_under_process_report',$data,true);
        $dompdf->loadHtml($html);
        
        $dompdf->render();

        $dompdf->stream("download", array("Attachment" => 0));
    }
    function quarterly_report($s,$e)
    {
        $dompdf = new Dompdf\Dompdf();
        $data['dates']=array(array(
            's'=>$s,
            'e'=>$e
        ));
        $a= $this->Application_model->a();
        $b =$this->Application_model->b();
        $c =$this->Application_model->c();
        $d =$this->Application_model->d();
        $data['numbers']=array(array(
            'a'=>$a,
            'b'=>$b,
            'c'=>$c,
            'd'=>$d));
        $html = $this->load->view('themes/quarterly_report',$data,true);
        $dompdf->loadHtml($html);
        
        $dompdf->render();
        $dompdf->stream("download", array("Attachment" => 0));
    }
}
?>