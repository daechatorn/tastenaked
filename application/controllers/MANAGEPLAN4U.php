<?php
class MANAGEPLAN4U extends CI_Controller{
	public function MANAGEPLAN4U(){
		parent::__construct();
		$this->load->view("backend/dash/headernav.php");
		$this->load->view("backend/dash/navcontent.php");

		$this->load->model("FOODMODEL");
        $this->load->model("WORKOUTMODEL");
        $this->load->model("PLAN4UMODEL");
        $this->load->model("UTILITYMODEL");
	}

	public function index(){	

        $data['allplan'] = $this->PLAN4UMODEL->getAllPlan4UTableDetailWithGroup()->result_array();
        $data['bmidetailtable'] = $this->PLAN4UMODEL->getAllPlan4UTableDetail()->result_array();
        $data['allfoodie'] = $this->FOODMODEL->getAllFoodie()->result_array();
        $data['allworkout'] = $this->WORKOUTMODEL->getAllWorkout()->result_array();

		$this->load->view("backend/plan4u/plan4u-list.php", $data);
		$this->load->view("backend/dash/scriptinside.php");
	}

    public function filter(){
        $type = $this->input->post("objectTypeSelect");
        if($type != "all"){
            $data['allplan'] = $this->PLAN4UMODEL->getAllPlan4UTableDetailWithGroupByType($type)->result_array();
            $data['bmidetailtable'] = $this->PLAN4UMODEL->getAllPlan4UTableDetail()->result_array();
            $data['allfoodie'] = $this->FOODMODEL->getAllFoodie()->result_array();
            $data['allworkout'] = $this->WORKOUTMODEL->getAllWorkout()->result_array();
            $data['objectTypeSelect']= $type;
            $this->load->view("backend/plan4u/plan4u-list.php", $data);
            $this->load->view("backend/dash/scriptinside.php");
        }else{
            $this->index();
        }
    }

    public function updatePlan(){

        $inputElement = $this->input;
        $this->PLAN4UMODEL->updatePlanDescriptionByTableId($inputElement);
        $this->PLAN4UMODEL->updatePlanByItem($inputElement);

        redirect(base_url()."MANAGEPLAN4U", 'refresh'); 
    }

    public function addPlan4uView(){

        $data['allfoodie'] = $this->FOODMODEL->getAllFoodie()->result_array();
        $data['allworkout'] = $this->WORKOUTMODEL->getAllWorkout()->result_array();

		$this->load->view("backend/plan4u/plan4u-add.php", $data);
		$this->load->view("backend/dash/scriptinside.php");
    }

    public function addPlan(){

        $inputElement = $this->input;
        
        $this->PLAN4UMODEL->insertPlan4uTable($inputElement);
       
        $this->PLAN4UMODEL->insertPlan4uTableDetail($inputElement);


        redirect(base_url()."MANAGEPLAN4U", 'refresh'); 

    }


}
?>