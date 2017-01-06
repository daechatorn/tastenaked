<?php
class MANAGEFOODIE extends CI_Controller{
	public function MANAGEFOODIE(){
		parent::__construct();
		$this->load->view("backend/dash/headernav.php");
		$this->load->view("backend/dash/navcontent.php");

		$this->load->model("FOODMODEL");
        $this->load->model("UTILITYMODEL");
	}

	public function index(){	

		$data['allfoodie'] = $this->FOODMODEL->getAllFoodie()->result_array();
        $data['allfoodieWithOtherImage'] = $this->FOODMODEL->getAllFoodieWithOtherImage()->result_array();
        $data['canRecommend'] = $this->FOODMODEL->canRecommendFoodie();
		$this->load->view("backend/foodie/foodie-list.php", $data);
		$this->load->view("backend/dash/scriptinside.php");
	}

    public function filter(){
        $type = $this->input->post("objectTypeSelect");
        if($type != "all"){
            $data['allfoodie'] = $this->FOODMODEL->getFoodieByFoodieType($type)->result_array();
            $data['allfoodieWithOtherImage'] = $this->FOODMODEL->getAllFoodieWithOtherImage()->result_array();
            
            $data['canRecommend'] = $this->FOODMODEL->canRecommendFoodie();
            $data['objectTypeSelect'] = $type;
            $this->load->view("backend/foodie/foodie-list.php", $data);
            $this->load->view("backend/dash/scriptinside.php");
        }else{
            $this->index();
        }
    }


    public function updateFoodie(){
        //upload value
        
        $inputElement = $this->input;
        $this->FOODMODEL->updateFoodieById($inputElement);

        //update main image
        $foodieId = $inputElement->post("foodieId");
        $nameImageElement = "foodieImagePath";
        $uploadPath = 'assets/frontend/img/foodie/main';
        $uploadName = "foodie_main-".$foodieId;
        $this->UTILITYMODEL->deleteOldImage($foodieId, $uploadPath, $nameImageElement, "false", "FOODIE");
        $fileName = $this->UTILITYMODEL->uploadImage($nameImageElement, $uploadPath, $uploadName);
        $this->FOODMODEL->updateFoodieImagePathById($foodieId, $fileName);
        
        //update other image
        $foodieImageId = $inputElement->post("foodieImageId");
        $nameImageElement = "imagePath";
        $uploadPath = 'assets/frontend/img/foodie/other';
        $uploadName = "foodie_other-".$foodieId;
        $startWith = 0;
        $this->UTILITYMODEL->deleteOldImage($foodieImageId, $uploadPath, $nameImageElement, "true", "FOODIE");
        $fileName = $this->UTILITYMODEL->uploadGroupImage($nameImageElement, $uploadPath, $uploadName, $startWith);
        $this->FOODMODEL->updateFoodieGroupImagePathById($foodieImageId, $fileName, "false");
        
        //update new other image
        $nameNewImageElement = "newImagePath";
        $uploadPath = 'assets/frontend/img/foodie/other';
        $uploadName = "foodie_other-".$foodieId;  
        $startWith = sizeof($_FILES[$nameImageElement]['name']);
        $fileName = $this->UTILITYMODEL->uploadGroupImage($nameNewImageElement, $uploadPath, $uploadName, $startWith );
        $this->FOODMODEL->insertFoodieGroupImage($foodieId, $fileName);     

        redirect(base_url()."MANAGEFOODIE", 'refresh'); 

    }

    public function unuseFoodieByFoodieId(){
        $foodieId = $this->input->get("foodieId");
        $this->FOODMODEL->updateFoodieStatusById($foodieId);
        
    }

    public function addFoodieView(){
        $data['canRecommend'] = $this->FOODMODEL->canRecommendFoodie();
		$this->load->view("backend/foodie/foodie-add.php", $data);
		$this->load->view("backend/dash/scriptinside.php");
    }

    public function addFoodie(){
        $inputElement = $this->input;
        $this->FOODMODEL->insertFoodie($inputElement);

        //update main image
        $foodieId = $this->FOODMODEL->getLastFoodieId();
        $nameImageElement = "foodieImagePath";
        $uploadPath = 'assets/frontend/img/foodie/main';
        $uploadName = "foodie_main-".$foodieId;
        $fileName = $this->UTILITYMODEL->uploadImage($nameImageElement, $uploadPath, $uploadName);
        $this->FOODMODEL->updateFoodieImagePathById($foodieId, $fileName);

        //update new other image
        $nameNewImageElement = "newImagePath";
        $uploadPath = 'assets/frontend/img/foodie/other';
        $uploadName = "foodie_other-".$foodieId;  
        $startWith = $this->FOODMODEL->getNumberOfOtherImageByFoodieId($foodieId);
        $fileName = $this->UTILITYMODEL->uploadGroupImage($nameNewImageElement, $uploadPath, $uploadName, $startWith );
        $this->FOODMODEL->insertFoodieGroupImage($foodieId, $fileName); 

        redirect(base_url()."MANAGEFOODIE", 'refresh'); 
    }

}
?>