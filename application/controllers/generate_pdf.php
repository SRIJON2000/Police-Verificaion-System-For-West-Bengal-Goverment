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
    //use dompdf\dompdf;
	public function SP_DIB($pvr_id)
    {
       // use Dompdf\Dompdf;

        //initialize dompdf class

        $dompdf = new Dompdf\Dompdf();
        $data['details']=$this->Application_model->fetch_application_details($pvr_id);
        $html = $this->load->view('themes/SP_DIB',$data,true);
        $dompdf->loadHtml($html);
        
        $dompdf->render();
        

        // Output the generated PDF to Browser
        $dompdf->stream("download", array("Attachment" => 0));

        // $mpdf = new \Mpdf\Mpdf();
        // $html = $this->load->view('themes/non_defence_letter',[],true);
        // $mpdf->WriteHTML($html);
        // $mpdf->Output(); // opens in browser
        // //$mpdf->Output('welcome.pdf','D'); // it downloads the file into the user system.
    }
    public function CP($pvr_id)
    {
       // use Dompdf\Dompdf;

        //initialize dompdf class

        $dompdf = new Dompdf\Dompdf();
        $data['details']=$this->Application_model->fetch_application_details($pvr_id);
        $html = $this->load->view('themes/cp_letter',$data,true);
        $dompdf->loadHtml($html);
        
        $dompdf->render();
        

        // Output the generated PDF to Browser
        $dompdf->stream("download", array("Attachment" => 0));

        // $mpdf = new \Mpdf\Mpdf();
        // $html = $this->load->view('themes/non_defence_letter',[],true);
        // $mpdf->WriteHTML($html);
        // $mpdf->Output(); // opens in browser
        // //$mpdf->Output('welcome.pdf','D'); // it downloads the file into the user system.
    }
    public function verified_defence($pvr_id)
    {
       // use Dompdf\Dompdf;

        //initialize dompdf class

        $dompdf = new Dompdf\Dompdf();
        $data['details']=$this->Application_model->fetch_application_details($pvr_id);
        $html = $this->load->view('themes/defence_letter',$data,true);
        $dompdf->loadHtml($html);
        
        $dompdf->render();
        

        // Output the generated PDF to Browser
        $dompdf->stream("download", array("Attachment" => 0));

        // $mpdf = new \Mpdf\Mpdf();
        // $html = $this->load->view('themes/non_defence_letter',[],true);
        // $mpdf->WriteHTML($html);
        // $mpdf->Output(); // opens in browser
        // //$mpdf->Output('welcome.pdf','D'); // it downloads the file into the user system.
    }
    public function verified_nondefence($pvr_id)
    {
       // use Dompdf\Dompdf;

        //initialize dompdf class

        $dompdf = new Dompdf\Dompdf();
        $data['details']=$this->Application_model->fetch_application_details($pvr_id);
        $html = $this->load->view('themes/non_defence_letter',$data,true);
        $dompdf->loadHtml($html);
        
        $dompdf->render();
        

        // Output the generated PDF to Browser
        $dompdf->stream("download", array("Attachment" => 0));

        // $mpdf = new \Mpdf\Mpdf();
        // $html = $this->load->view('themes/non_defence_letter',[],true);
        // $mpdf->WriteHTML($html);
        // $mpdf->Output(); // opens in browser
        // //$mpdf->Output('welcome.pdf','D'); // it downloads the file into the user system.
    }
    public function unverified($pvr_id)
    {
       // use Dompdf\Dompdf;

        //initialize dompdf class

        $dompdf = new Dompdf\Dompdf();
        $data['details']=$this->Application_model->fetch_application_details($pvr_id);
        $html = $this->load->view('themes/emp_letter',$data,true);
        $dompdf->loadHtml($html);
        
        $dompdf->render();
        

        // Output the generated PDF to Browser
        $dompdf->stream("download", array("Attachment" => 0));

        // $mpdf = new \Mpdf\Mpdf();
        // $html = $this->load->view('themes/non_defence_letter',[],true);
        // $mpdf->WriteHTML($html);
        // $mpdf->Output(); // opens in browser
        // //$mpdf->Output('welcome.pdf','D'); // it downloads the file into the user system.
    }
    public function application($pvr_id)
    {
       // use Dompdf\Dompdf;

        //initialize dompdf class

        $dompdf = new Dompdf\Dompdf();
        $data['details1']=$this->Application_model->fetch_application_details($pvr_id);
        $data['details2']=$this->Application_model->fetch_second_address($pvr_id);
        $html = $this->load->view('themes/print_application',$data,true);
        $dompdf->loadHtml($html);
        
        $dompdf->render();
        

        // Output the generated PDF to Browser
        $dompdf->stream("download", array("Attachment" => 0));

        // $mpdf = new \Mpdf\Mpdf();
        // $html = $this->load->view('themes/non_defence_letter',[],true);
        // $mpdf->WriteHTML($html);
        // $mpdf->Output(); // opens in browser
        // //$mpdf->Output('welcome.pdf','D'); // it downloads the file into the user system.
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
        

        // Output the generated PDF to Browser
        $dompdf->stream("download", array("Attachment" => 0));
    }
}
?>




<?php 
// require composer autoload
// require __DIR__ . '/vendor/autoload.php';
// $mpdf = new \Mpdf\Mpdf();

// $url = urldecode($_REQUEST['url']);

// // To prevent anyone else using your script to create their PDF files
// if (!preg_match('@^https?://www\.mydomain\.com/@', $url)) {
//     die("Access denied");
// }

// // For $_POST i.e. forms with fields
// if (count($_POST) > 0) {

//     $ch = curl_init($url);
//     curl_setopt($ch, CURLOPT_HEADER, 0);
//     curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1 );

//     foreach($_POST as $name => $post) {
//       $formvars = array($name => $post . " \n");
//     }

//     curl_setopt($ch, CURLOPT_POSTFIELDS, $formvars);
//     $html = curl_exec($ch);
//     curl_close($ch);

// } elseif (ini_get('allow_url_fopen')) {
//     $html = file_get_contents($url);

// } else {
//     $ch = curl_init($url);
//     curl_setopt($ch, CURLOPT_HEADER, 0);
//     curl_setopt ( $ch , CURLOPT_RETURNTRANSFER , 1 );
//     $html = curl_exec($ch);
//     curl_close($ch);
// }

// $mpdf = new \Mpdf\Mpdf();

// $mpdf->useSubstitutions = true; // optional - just as an example
// $mpdf->SetHeader($url . "\n\n" . 'Page {PAGENO}');  // optional - just as an example
// $mpdf->CSSselectMedia='mpdf'; // assuming you used this in the document header
// $mpdf->setBasePath($url);
// $mpdf->WriteHTML($html);

// $mpdf->Output();?>