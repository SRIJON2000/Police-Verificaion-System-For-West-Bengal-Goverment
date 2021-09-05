<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
 require_once APPPATH.'third_party\vendor\autoload.php';
 include_once APPPATH.'third_party\vendor\mpdf\mpdf\src\Mpdf.php';
 

 
class M_pdf {
 
    public $param;
    public $pdf;
	
	// PARAM TO BE AN ARRAY ==> lastest MPDF used using composer
	
	public function __construct($param = array(['mode'=>"en-GB-x" , 'format'=>"A4",  'default_font_size' => "",  'default_font'=> "",  'margin_left'=> 10,  'margin_right'=> 10,  'margin_top'=> 10,  'margin_bottom'=> 10,  'margin_header' => 6, 'margin_footer' => 3]))
    {
		$this->param =$param;
        $this->pdf = new \mpdf\mPDF($this->param);
    }
}