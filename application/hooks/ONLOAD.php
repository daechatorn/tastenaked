<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ONLOAD{
	private $ci;

	public function __construct(){
		$this->ci =& get_instance(); //property  ci รับคุณสมับัติของ CI เข้ามา
		$this->ci->load->helper('url');
		$this->ci->load->library('session');
	}

	public function check_login(){

		$controller = $this->ci->router->class;
		$method = $this->ci->router->method;
		
		
		if(($controller == 'DASH' || $controller == 'MANAGEARTICLE' || $controller == 'MANAGEBMI' ||
			$controller == 'MANAGEFOODIE' || $controller == 'MANAGEPLAN4U'|| $controller == 'MANAGEWEBSITECONTENT' ||
			$controller == 'MANAGEWEBSITEMEDIA' || $controller == 'MANAGEWORKOUT' )){
			if($this->ci->session->userdata('login_id')==null){
				//echo "login";
				if($method != "LOGIN"){
					redirect("CONTROL/login","refresh");
					exit();
				}
			}
		}
		
	}

}

?>