<?php
class MANAGEWEBSITEMEDIA extends CI_Controller{
	public function MANAGEWEBSITEMEDIA(){
		parent::__construct();
		$this->load->view("backend/dash/headernav.php");
		$this->load->view("backend/dash/navcontent.php");

		$this->load->model("CENTRALCONTENTMODEL");
        $this->load->model("UTILITYMODEL");
	}

	public function index(){	

		$data['allVDOMedia'] = $this->CENTRALCONTENTMODEL->getMediaByType("VDO")->result_array();
        $data['allImageMedia'] = $this->CENTRALCONTENTMODEL->getMediaByType("IMAGE")->result_array();
        $data['allGroupMediaPage'] = $this->CENTRALCONTENTMODEL->getGroupMediaPage()->result_array();
		$this->load->view("backend/websitecontent/websitemedia-list.php", $data);
		$this->load->view("backend/dash/scriptinside.php");
	}
    

    public function updateMedia(){
        //upload value
        
        $inputElement = $this->input;
        
        $numberItem = sizeOf($inputElement->post("centralMediaId"));
        $idElements = $inputElement->post("centralMediaId");
        $typeElements = $inputElement->post("centralMediaType");
        $pathElements = $inputElement->post("centralMediaPath");
        $imageIndex = 0;
        for ($i = 0; $i < $numberItem; $i++) {
            if($typeElements[$i]=="IMAGE"){
                if($_FILES["centralMediaPath"]["size"]!=0){
                    //update other image
                    $centralMediaId = $idElements[$i];
                    $nameImageElement = "centralMediaPath";
                    $uploadPath = 'assets/frontend/img/centralcontent/main';
                    $uploadName = "centralcontent_main-".$centralMediaId;
                    $this->UTILITYMODEL->deleteOldImage($centralMediaId, $uploadPath, $nameImageElement, "false", "WEBSITEMEDIA");
                    $itemImage = $this->UTILITYMODEL->uploadImageFromGroupWithIndex($nameImageElement, $uploadPath, $uploadName, $imageIndex);
                    if($itemImage[0] != "false"){
                        $this->CENTRALCONTENTMODEL->updateMediaPathById($centralMediaId, $itemImage[0]);
                        $imageIndex = $itemImage[1];
                    }
                }
            }
            else if($typeElements[$i]=="VDO"){
                $this->CENTRALCONTENTMODEL->updateMediaPathById($idElements[$i], $pathElements[$i]);
            }
        }

        redirect(base_url()."MANAGEWEBSITEMEDIA", 'refresh'); 
    }
    
}
?>