<?php
class MANAGEBMI extends CI_Controller{
	public function MANAGEBMI(){
		parent::__construct();
		$this->load->view("backend/dash/headernav.php");
		$this->load->view("backend/dash/navcontent.php");

		$this->load->model("BMIMODEL");
        $this->load->model("UTILITYMODEL");
	}

	public function index(){	

		$data['allbmi'] = $this->BMIMODEL->getAllBMI()->result_array();
        
        $this->load->view("backend/bmi/bmi-list.php", $data);
		$this->load->view("backend/dash/scriptinside.php");
	}

    public function updateBMI(){
        //upload value
        
        $inputElement = $this->input;
        $this->BMIMODEL->updateBMIById($inputElement);

        //update main image
        $bmiId = $inputElement->post("bmiId");
        $nameImageElement = "bmiImagePath";
        $uploadPath = 'assets/frontend/img/bmi/main';
        $uploadName = "bmi_main-".$bmiId;
        $this->UTILITYMODEL->deleteOldImage($bmiId, $uploadPath, $nameImageElement, "false", "BMI");
        $fileName = $this->UTILITYMODEL->uploadImage($nameImageElement, $uploadPath, $uploadName);
        $this->BMIMODEL->updateBMIImagePathById($bmiId, $fileName);
        
        redirect(base_url()."MANAGEBMI", 'refresh'); 

    }

}
?>