<?php defined('BASEPATH') OR exit('No direct script access allowed');

class WORKOUT extends CI_Controller {
	
	public function WORKOUT(){
		parent::__construct();
		$this->load->view('frontend/include/header');
		$data['menunav'] = "workout";
		$this->load->view('frontend/include/navbar', $data);

		$this->load->model("WORKOUTMODEL");
		$this->load->model("CENTRALCONTENTMODEL");
	}

	public function index(){
		$data['vdoCentralMedia'] = $this->CENTRALCONTENTMODEL->getMediaByTypeAndPage("VDO", "WORKOUT")->result_array();
		$this->load->view('frontend/home-section', $data);

		$data['activityType'] = "all";
		$data['allWeightTraining'] = $this->WORKOUTMODEL->getAllWorkOutByType("weightTraining")->result_array();
		$data['allCardio'] = $this->WORKOUTMODEL->getAllWorkOutByType("cardio")->result_array();
		$data['contentCentral'] = $this->CENTRALCONTENTMODEL->getContentByPage("WORKOUT")->result_array();
        $data['imageCentralMedia'] = $this->CENTRALCONTENTMODEL->getMediaByTypeAndPage("IMAGE", "WORKOUT")->result_array();
	    $this->load->view('frontend/workout-item', $data);
		$this->load->view('frontend/include/footer');
	}

	public function detail($workoutId){

		if($workoutId != ''){
			$this->WORKOUTMODEL->updateWorkoutViewById($workoutId);

			$rs = $this->WORKOUTMODEL->getWorkOutByWorkOutId($workoutId);
			$workout = $rs->result_array();
			$data['workout'] = $workout;

			$relatedWorkout = $this->WORKOUTMODEL->getLastFourWorkOutByTypeAndExceptCaller($workout[0]['workoutGroup'], $workoutId);
			$data['relatedWorkout'] = $relatedWorkout->result_array();

			$this->load->view('frontend/workout-detail', $data);
			
			$this->load->view('frontend/include/footer');
		}
	}

	public function detailcriteria($type){	
		$this->load->model("CENTRALCONTENTMODEL");
		$data['vdoCentralMedia'] = $this->CENTRALCONTENTMODEL->getMediaByTypeAndPage("VDO", "WORKOUT")->result_array();
		$this->load->view('frontend/home-section', $data);
		
		$data['activityType'] = $type;
		$data['allWeightTraining'] = $this->WORKOUTMODEL->getAllWorkOutByType("weightTraining")->result_array();
		$data['allCardio'] = $this->WORKOUTMODEL->getAllWorkOutByType("cardio")->result_array();
		$data['contentCentral'] = $this->CENTRALCONTENTMODEL->getContentByPage("WORKOUT")->result_array();
        $data['imageCentralMedia'] = $this->CENTRALCONTENTMODEL->getMediaByTypeAndPage("IMAGE", "WORKOUT")->result_array();
		$this->load->view('frontend/workout-item', $data);
		$this->load->view('frontend/include/footer');
	}

}
