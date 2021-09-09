<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//include('vendor/autoload.php');
require_once APPPATH.'third_party\vendor\autoload.php';
 include_once APPPATH.'third_party\vendor\mpdf\mpdf\src\Mpdf.php';
 
class Generate_pdf extends CI_Controller
{
    function __construct()
	{	
		parent::__construct();
		//$this->load->model('generate_pdf_model');
		
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