<?php
class MANAGEWEBSITECONTENT extends CI_Controller{
	public function MANAGEWEBSITECONTENT(){
		parent::__construct();
		$this->load->view("backend/dash/headernav.php");
		$this->load->view("backend/dash/navcontent.php");

		$this->load->model("CENTRALCONTENTMODEL");
        $this->load->model("UTILITYMODEL");
	}

	public function index(){	

		$data['allcontent'] = $this->CENTRALCONTENTMODEL->getAllContent()->result_array();
		$this->load->view("backend/websitecontent/websitecontent-list.php", $data);
		$this->load->view("backend/dash/scriptinside.php");
	}
    

    public function updateContent(){
        //upload value
        
        $inputElement = $this->input;
        $this->CENTRALCONTENTMODEL->updateContentById($inputElement);
 
        redirect(base_url()."MANAGEWEBSITECONTENT", 'refresh'); 
    }
    
}
?>