<?php
class UPLOADIMAGE extends CI_Controller{
	public function UPLOADIMAGE(){
		parent::__construct();
        $this->load->model("UTILITYMODEL");
	}

	public function index(){	
        
        $data['fileName'] = "";

        $this->load->view("backend/upload/upload-modal.php", $data);
		$this->load->view("backend/dash/scriptinside.php");
	}

    public function upload(){

        //update main image
        $id = rand();
        $nameImageElement = "file_upload";
        $uploadPath = 'assets/frontend/img/upload';
        $uploadName = "upload-".$id;
        $fileName = $this->UTILITYMODEL->uploadImage($nameImageElement, $uploadPath, $uploadName);

        $data['fileName'] = $fileName;
        $this->load->view("backend/upload/upload-modal.php", $data);
		$this->load->view("backend/dash/scriptinside.php");
    }
   
}
?>