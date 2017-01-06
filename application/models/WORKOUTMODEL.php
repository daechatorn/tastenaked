<?php defined('BASEPATH') OR exit('No direct script access allowed');

class WORKOUTMODEL extends CI_Model {
 
	public function getAllWorkout(){
		
		$this->db->select('*');
		$this->db->from('workout w');
		$this->db->where('w.workoutStatus','open');
		$this->db->order_by('w.workoutType, w.workoutGroup, w.workoutName');
        
		return $this->db->get();
    }

	public function getAllWorkoutWithOtherImage(){
		
		$this->db->select('*');
		$this->db->from('workout w');
		$this->db->join('workoutimage wi','w.workoutId = wi.workoutId');
		$this->db->where('w.workoutStatus','open');
		$this->db->order_by('w.workoutName');
		
        
		return $this->db->get();
    }

    public function getAllWorkOutByType($type){
		
		$this->db->select('*');
		$this->db->from('workout w');
        $this->db->where('w.workoutType',$type);
		$this->db->order_by('w.workoutGroup desc, w.workoutName');
        
		return $this->db->get();
    }

	public function getWorkOutByWorkOutId($id){
		$this->db->select('*');
		$this->db->from('workout w');
		$this->db->join('workoutimage wi','w.workoutId = wi.workoutId');
		$this->db->where('w.workoutId',$id);
		$this->db->order_by('wi.workoutImageId desc');
        
		return $this->db->get();
	}

	public function getLastFourWorkOutByTypeAndExceptCaller($group, $callerId){
		$this->db->select('*');
		$this->db->from('workout w');
		$this->db->where('w.workoutGroup',$group);
		$this->db->where('w.workoutId <>', $callerId);
		$this->db->order_by('w.workoutName');
		$this->db->limit(4);
        
		return $this->db->get();
	}

	public function updateWorkoutById($inputElement){

		$workoutId = $inputElement->post("workoutId");
        $workoutName = $inputElement->post("workoutName");
        $workoutType = $inputElement->post("workoutType");
        $workoutGroup = $inputElement->post("workoutGroup");
		$shortDescription = $inputElement->post("shortDescription");
        $muscles = $inputElement->post("muscles");
        $equipment = $inputElement->post("equipment");
        $recommendation = $inputElement->post("recommendation");
        $workoutVdoPath = $inputElement->post("workoutVdoPath");
		
        $arrayContent = array(
            'workoutName' => $workoutName,
            'workoutType' => $workoutType,
            'shortDescription' => $shortDescription,
			'workoutGroup' => $workoutGroup,
            'muscles' => $muscles,
            'equipment' => $equipment,
            'recommendation' => $recommendation,
            'workoutVdoPath' => $workoutVdoPath
        );

		$this->db->where('workoutId', $workoutId);
		$this->db->update('workout', $arrayContent); 

	}

	public function updateWorkoutImagePathById($workoutId, $fileName){

		$id = $workoutId;
		if($fileName != "false"){
			$arrayContent = array(
				'workoutImagePath' => $fileName
			);

			$this->db->where('workoutId', $id);
			$this->db->update('workout', $arrayContent); 
		}

	}

	public function updateWorkoutGroupImagePathById($workoutImageId, $fileName){

		$workoutId = $workoutImageId;
		
		for($i=0; $i<sizeof($fileName);$i++){
			if($fileName[$i] != "false"){
				$arrayContent = array(
					'imagePath' => $fileName[$i]
				);
				$this->db->where('workoutImageId', $workoutId[$i]);
				$this->db->update('workoutimage', $arrayContent);
			}	
		} 

	}

	public function insertWorkoutGroupImage($workoutId, $fileName){

		$id = $workoutId;
		
		for($i=0; $i<sizeof($fileName);$i++){
			if($fileName[$i] != "false"){
				$arrayContent = array(
					'imagePath' => $fileName[$i],
					'workoutId' => $id
				);

				$this->db->insert('workoutimage', $arrayContent); 
			}	
		} 

	}
	
	public function insertWorkout($inputElement){

        $workoutName = $inputElement->post("workoutName");
        $workoutType = $inputElement->post("workoutType");
        $workoutGroup = $inputElement->post("workoutGroup");
		$shortDescription = $inputElement->post("shortDescription");
        $muscles = $inputElement->post("muscles");
        $equipment = $inputElement->post("equipment");
        $recommendation = $inputElement->post("recommendation");
        $workoutVdoPath = $inputElement->post("workoutVdoPath");
		
        $arrayContent = array(
            'workoutName' => $workoutName,
            'workoutType' => $workoutType,
            'shortDescription' => $shortDescription,
			'workoutGroup' => $workoutGroup,
            'muscles' => $muscles,
            'equipment' => $equipment,
            'recommendation' => $recommendation,
            'workoutVdoPath' => $workoutVdoPath,
			'isRecommend' => "false",
			'workoutStatus' => "open",
			'workoutView' => 0
        );

		$this->db->insert('workout', $arrayContent); 

	}

	public function getLastWorkoutId(){
		$id = $this->db->select("workoutId")->from("workout w")->order_by("w.workoutId desc")->limit(1)->get()->row_array()['workoutId'];
		return $id;
	}

	public function getNumberOfOtherImageByWorkoutId($workoutId){
		$number = $this->db->select("count(*) as numberOfOtherImage")->from("workoutimage w")->where("w.workoutId", $workoutId)->get()->row_array()['numberOfOtherImage'];
		return $number;
	}

	public function getWorkoutViewById($id){
		$view = $this->db->select("workoutView")->from("workout w")->where("w.workoutId",$id)->get()->row_array()['workoutView'];
		return $view;
	}

	public function updateWorkoutViewById($id){
		$workoutId = $id;
		$currentView = $this->getWorkoutViewById($id);
		$arrayContent = array(
			'workoutView' => ($currentView+1)
		);
		$this->db->where('workoutId', $workoutId);
		$this->db->update('workout', $arrayContent); 
	}

	public function updateWorkoutStatusById($workoutId){
		$arrayContent = array(
			'workoutStatus' => "close"
		);
		$this->db->where('workoutId', $workoutId);
		$this->db->update('workout', $arrayContent); 
	}



}
?>