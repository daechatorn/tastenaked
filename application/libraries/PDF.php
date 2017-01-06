<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PDF {

	function PDF()
	{
		$CI = & get_instance();
		log_message('Debug', 'mPDF class is loaded.');
	}


	function load($lang, $size, $number, $font)
	{
		include_once APPPATH.'/third_party/mpdf/mpdf.php';
		if ($lang == NULL)
		{
			$param = '"en-GB-x","A4","","",10,10,10,10,6,3';
			return new mPDF($param);
		}
		return new mPDF($lang, $size, $number, $font);
	}

}
