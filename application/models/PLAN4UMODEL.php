<?php defined('BASEPATH') OR exit('No direct script access allowed');

class PLAN4UMODEL extends CI_Model {
 
    public function getPlan4UTableDetailByBMIId($bmiId, $plan){
		
        $this->db->select('*');
        $this->db->from('plan4utable p');
        $this->db->join('bmiinformation b','p.bmiId = b.bmiId');
        $this->db->join('plan4utabledetail d','d.tableId = p.tableId');
        $this->db->join('foodie f ','d.foodieId = f.foodieId', 'left');
        $this->db->join('workout w ','d.workoutId = w.workoutId', 'left');
        $this->db->where('b.bmiId',$bmiId);
        $this->db->where('p.planId',$plan);

		return $this->db->get();
    }

    public function randomPlanForPlan4u($bmiId){
        $numberOfplan = $this->getNumberOfPlan4UByBMIId($bmiId)->result_array()[0]['numberOfPlan'];

        return rand(1, $numberOfplan);
    }

    public function getNumberOfPlan4UByBMIId($bmiId){

        $this->db->select('b.bmiName, count(*) as numberOfPlan');
        $this->db->from('plan4utable p');
        $this->db->join('bmiinformation b','p.bmiId = b.bmiId');
        $this->db->where('b.bmiId',$bmiId);
        $this->db->group_by('p.bmiId');

        return $this->db->get(); 
    }

    public function getAllPlan4UTableDetailWithGroup(){
		
        $this->db->select('*');
        $this->db->from('plan4utable p');
        $this->db->join('bmiinformation b','p.bmiId = b.bmiId');
        $this->db->join('plan4utabledetail d','d.tableId = p.tableId');
        $this->db->join('foodie f ','d.foodieId = f.foodieId', 'left');
        $this->db->join('workout w ','d.workoutId = w.workoutId', 'left');
        $this->db->group_by('b.bmiId, p.planId');

		return $this->db->get();
    }

    public function getAllPlan4UTableDetailWithGroupByType($type){
		
        $this->db->select('*');
        $this->db->from('plan4utable p');
        $this->db->join('bmiinformation b','p.bmiId = b.bmiId');
        $this->db->join('plan4utabledetail d','d.tableId = p.tableId');
        $this->db->join('foodie f ','d.foodieId = f.foodieId', 'left');
        $this->db->join('workout w ','d.workoutId = w.workoutId', 'left');
        $this->db->where('b.bmiName',$type);
        $this->db->group_by('b.bmiId, p.planId');

		return $this->db->get();
    }

    public function getAllPlan4UTableDetail(){
		
        $this->db->select('*');
        $this->db->from('plan4utable p');
        $this->db->join('bmiinformation b','p.bmiId = b.bmiId');
        $this->db->join('plan4utabledetail d','d.tableId = p.tableId');
        $this->db->join('foodie f ','d.foodieId = f.foodieId', 'left');
        $this->db->join('workout w ','d.workoutId = w.workoutId', 'left');

		return $this->db->get();
    }

    public function updatePlanDescriptionByTableId($inputElement){

        $tableId = $inputElement->post("tableId");
        $tableDescription = $inputElement->post("tableDescription");

        $arrayContent = array(
			'tableDescription' => $tableDescription
		);

		$this->db->where('tableId', $tableId[0]);
		$this->db->update('plan4utable', $arrayContent); 
    }

    public function updatePlanByItem($inputElement){

        $tableId = $inputElement->post("tableId");
        $bmiId = $inputElement->post("bmiId");
        $planId = $inputElement->post("planId");
        $itemDay = $inputElement->post("itemDay");
        $itemType = $inputElement->post("itemType");
        $selectId = $inputElement->post("selectId");
        $tableDescription = $inputElement->post("tableDescription");
        
        for($i=0; $i < sizeof($tableId); $i++){
            $arrayContent;
            if($itemType[$i] == "Workout"){
                $this->db->query("
                    UPDATE  plan4utable p
                            join bmiinformation b on p.bmiId = b.bmiId
                            join plan4utabledetail d  on d.tableId = p.tableId
                    SET     d.workoutId = ".$selectId[$i]."
                    WHERE   p.tableId = ".$tableId[$i]." and b.bmiId = ".$bmiId[$i]." 
                    and p.planId = ".$planId[$i]." and itemDay = '".$itemDay[$i]."' and itemType = '".$itemType[$i]."';
                    ");
            }else{
                $this->db->query("
                    UPDATE  plan4utable p
                            join bmiinformation b on p.bmiId = b.bmiId
                            join plan4utabledetail d  on d.tableId = p.tableId
                    SET     d.foodieId = ".$selectId[$i]."
                    WHERE   p.tableId = ".$tableId[$i]." and b.bmiId = ".$bmiId[$i]." 
                    and p.planId = ".$planId[$i]." and itemDay = '".$itemDay[$i]."' and itemType = '".$itemType[$i]."';
                    ");
            }
            
        }
	
	}

    public function insertPlan4uTable($inputElement){

        $bmiId = $inputElement->post("bmiId");
        $tableDescription = $inputElement->post("tableDescription");
        $lastPlan = $this->getLastPlanByBMIId($bmiId);
        
        $arrayContent = array(
			'bmiId' => $bmiId,
			'planId' => ($lastPlan+1),
            'tableDescription' => $tableDescription,
            'plan4uStatus' => 'open',
		);

		$this->db->insert('plan4utable', $arrayContent); 
        
        return $lastPlan;
    }

    public function getLastPlanByBMIId($id){
        return $this->db->select("planId")->from("plan4utable")->where("bmiId", $id)->order_by("planId desc")->limit(1)->get()->row_array()['planId'];
    }

    public function getLastTableId(){
        return $this->db->select("tableId")->from("plan4utable")->order_by("tableId desc")->limit(1)->get()->row_array()['tableId'];
    }

    public function insertPlan4uTableDetail($inputElement){

        
        $tableId = $this->PLAN4UMODEL->getLastTableId();

        $selectId = $inputElement->post("selectId");
        $itemType = $inputElement->post("itemType");
        $itemDay = $inputElement->post("itemDay");
        
        $arrayContent;
        for($i=0; $i<sizeof($itemDay);$i++){
            if($itemType[$i] == "Workout"){
                $arrayContent = array(
                    'tableId' => $tableId,
                    'foodieId' => null,
                    'workoutId' => $selectId[$i],
                    'itemType' => $itemType[$i],
                    'itemDay' => $itemDay[$i],
                    'isFood' => 'false',
                );
            }
            else if($itemType[$i] != "Workout"){
                $arrayContent = array(
                    'tableId' => $tableId,
                    'foodieId' => $selectId[$i],
                    'workoutId' => null,
                    'itemType' => $itemType[$i],
                    'itemDay' => $itemDay[$i],
                    'isFood' => 'true',
                );
            }
            
            $this->db->insert('plan4utabledetail', $arrayContent); 
        }

    }
    

}
?>