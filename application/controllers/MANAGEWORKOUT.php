<?php
class MANAGEWORKOUT extends CI_Controller{
	public function MANAGEWORKOUT(){
		parent::__construct();
		$this->load->view("backend/dash/headernav.php");
		$this->load->view("backend/dash/navcontent.php");

		$this->load->model("WORKOUTMODEL");
        $this->load->model("UTILITYMODEL");
	}

	public function index(){	

		$data['allworkout'] = $this->WORKOUTMODEL->getAllWorkout()->result_array();
        $data['allworkoutWithOtherImage'] = $this->WORKOUTMODEL->getAllWorkoutWithOtherImage()->result_array();
		$this->load->view("backend/workout/workout-list.php", $data);
		$this->load->view("backend/dash/scriptinside.php");
	}

    public function filter(){
        $type = $this->input->post("objectTypeSelect");
        if($type != "all"){
            $data['allworkout'] = $this->WORKOUTMODEL->getAllWorkOutByType($type)->result_array();
            $data['allworkoutWithOtherImage'] = $this->WORKOUTMODEL->getAllWorkoutWithOtherImage()->result_array();
            
            $data['objectTypeSelect'] = $type;
            $this->load->view("backend/workout/workout-list.php", $data);
            $this->load->view("backend/dash/scriptinside.php");
        }else{
            $this->index();
        }
    }

    public function updateWorkout(){
        //upload value
        
        $inputElement = $this->input;
        $this->WORKOUTMODEL->updateWorkoutById($inputElement);

        //update main image
        $workoutId = $inputElement->post("workoutId");
        $nameImageElement = "workoutImagePath";
        $uploadPath = 'assets/frontend/img/workout/main';
        $uploadName = "workout_main-".$workoutId;
        $this->UTILITYMODEL->deleteOldImage($workoutId, $uploadPath, $nameImageElement, "false", "WORKOUT");
        $fileName = $this->UTILITYMODEL->uploadImage($nameImageElement, $uploadPath, $uploadName);
        $this->WORKOUTMODEL->updateWorkoutImagePathById($workoutId, $fileName);
        
        //update other image
        $workoutImageId = $inputElement->post("workoutImageId");
        $nameImageElement = "imagePath";
        $uploadPath = 'assets/frontend/img/workout/other';
        $uploadName = "workout_other-".$workoutId;
        $startWith = 0;
        $this->UTILITYMODEL->deleteOldImage($workoutImageId, $uploadPath, $nameImageElement, "true", "WORKOUT");
        $fileName = $this->UTILITYMODEL->uploadGroupImage($nameImageElement, $uploadPath, $uploadName, $startWith);
        $this->WORKOUTMODEL->updateWorkoutGroupImagePathById($workoutImageId, $fileName, "false");
        
        //update new other image
        $nameNewImageElement = "newImagePath";
        $uploadPath = 'assets/frontend/img/workout/other';
        $uploadName = "workout_other-".$workoutId;  
        $startWith = sizeof($_FILES[$nameImageElement]['name']);
        $fileName = $this->UTILITYMODEL->uploadGroupImage($nameNewImageElement, $uploadPath, $uploadName, $startWith );
        $this->WORKOUTMODEL->insertWorkoutGroupImage($workoutId, $fileName);     

        redirect(base_url()."MANAGEWORKOUT", 'refresh'); 

    }

    public function unuseWorkoutByWorkoutId(){
        $workoutId = $this->input->get("workoutId");
        $this->WORKOUTMODEL->updateWorkoutStatusById($workoutId);
        
    }

    public function addWorkoutView(){
		$this->load->view("backend/workout/workout-add.php");
		$this->load->view("backend/dash/scriptinside.php");
    }

    public function addWorkout(){
        $inputElement = $this->input;
        $this->WORKOUTMODEL->insertWorkout($inputElement);

        //update main image
        $workoutId = $this->WORKOUTMODEL->getLastWorkoutId();
        $nameImageElement = "workoutImagePath";
        $uploadPath = 'assets/frontend/img/workout/main';
        $uploadName = "workout_main-".$workoutId;
        $fileName = $this->UTILITYMODEL->uploadImage($nameImageElement, $uploadPath, $uploadName);
        $this->WORKOUTMODEL->updateWorkoutImagePathById($workoutId, $fileName);

        //update new other image
        $nameNewImageElement = "newImagePath";
        $uploadPath = 'assets/frontend/img/workout/other';
        $uploadName = "workout_other-".$workoutId;  
        $startWith = $this->WORKOUTMODEL->getNumberOfOtherImageByWorkoutId($workoutId);
        $fileName = $this->UTILITYMODEL->uploadGroupImage($nameNewImageElement, $uploadPath, $uploadName, $startWith );
        $this->WORKOUTMODEL->insertWorkoutGroupImage($workoutId, $fileName); 

        redirect(base_url()."MANAGEWORKOUT", 'refresh'); 
    }

}
?>