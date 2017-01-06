<?php
class DASH extends CI_Controller{
	public function DASH(){
		parent::__construct();
		$this->load->view("backend/dash/headernav.php");
		$this->load->view("backend/dash/navcontent.php");
	}

	public function index(){		
		$this->load->view("backend/dash/dashcontent.php");
		$this->load->view("backend/dash/scriptinside.php");
	}

}
?>