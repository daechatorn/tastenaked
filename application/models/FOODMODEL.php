<?php defined('BASEPATH') OR exit('No direct script access allowed');

class FOODMODEL extends CI_Model {
 
    public function getAllFoodie(){
		
		$this->db->select('*');
		$this->db->from('foodie f');
		$this->db->where('f.foodieStatus','open');
		$this->db->order_by('f.isRecommend desc, f.foodieName');
        
		return $this->db->get();
    }

	public function getAllFoodieWithOtherImage(){
		
		$this->db->select('*');
		$this->db->from('foodie f');
		$this->db->join('foodieimage fi','f.foodieId = fi.foodieId');
		$this->db->where('f.foodieStatus','open');
		$this->db->order_by('f.foodieName');
		
        
		return $this->db->get();
    }

	public function getFoodieByFoodieId($id){
		$this->db->select('*');
		$this->db->from('foodie f');
		$this->db->join('foodieimage fi','f.foodieId = fi.foodieId');
		$this->db->where('f.foodieId',$id);
		$this->db->order_by('fi.foodieImageId desc');
        
		return $this->db->get();
	}

	public function getFoodieByFoodieType($type){
		$this->db->select('*');
		$this->db->from('foodie f');
		$this->db->where('f.foodieType',$type);
		$this->db->order_by('f.foodieName');
        
		return $this->db->get();
	}

	public function getLastFourFoodieByTypeAndExceptCaller($type, $callerId){
		$this->db->select('*');
		$this->db->from('foodie f');
		$this->db->where('f.foodieType',$type);
		$this->db->where('f.foodieId <>', $callerId);
		$this->db->where('f.foodieStatus','open');
		$this->db->order_by('f.foodieName');
		$this->db->limit(4);
        
		return $this->db->get();
	}

	public function getRecommendMeal(){
		$this->db->select('*');
		$this->db->from('foodie f');
		$this->db->where('isRecommend', "true");
		$this->db->where('f.foodieStatus','open');
		$this->db->order_by('f.foodieName');

		return $this->db->get();
	}
	
	public function updateFoodieById($inputElement){

		$foodieId = $inputElement->post("foodieId");
        $foodieName = $inputElement->post("foodieName");
        $foodieType = $inputElement->post("foodieType");
        $isRecommend = "false";
		if($inputElement->post("isRecommend") == "on"){
			$isRecommend = "true";
		}
        $shortDescription = $inputElement->post("shortDescription");
        $foodieDescription = $inputElement->post("foodieDescription");
        $ingredient = $inputElement->post("ingredient");
        $procedures = $inputElement->post("procedures");
        $foodieVdoPath = $inputElement->post("foodieVdoPath");
		
        $arrayContent = array(
            'foodieName' => $foodieName,
            'foodieType' => $foodieType,
            'isRecommend' => $isRecommend,
            'shortDescription' => $shortDescription,
            'foodieDescription' => $foodieDescription,
            'ingredient' => $ingredient,
            'procedures' => $procedures,
            'foodieVdoPath' => $foodieVdoPath
        );

		$this->db->where('foodieId', $foodieId);
		$this->db->update('foodie', $arrayContent); 

	}
	public function updateFoodieImagePathById($foodieId, $fileName){

		$id = $foodieId;
		if($fileName != "false"){
			$arrayContent = array(
				'foodieImagePath' => $fileName
			);

			$this->db->where('foodieId', $id);
			$this->db->update('foodie', $arrayContent); 
		}

	}
	
	public function updateFoodieGroupImagePathById($foodieImageId, $fileName){

		$foodieId = $foodieImageId;
		
		for($i=0; $i<sizeof($fileName);$i++){
			if($fileName[$i] != "false"){
				$arrayContent = array(
					'imagePath' => $fileName[$i]
				);
				$this->db->where('foodieImageId', $foodieId[$i]);
				$this->db->update('foodieimage', $arrayContent);
			}	
		} 

	}

	public function insertFoodieGroupImage($foodieId, $fileName){

		$id = $foodieId;
		
		for($i=0; $i<sizeof($fileName);$i++){
			if($fileName[$i] != "false"){
				$arrayContent = array(
					'imagePath' => $fileName[$i],
					'foodieId' => $id
				);

				$this->db->insert('foodieimage', $arrayContent); 
			}	
		} 

	}
	
	public function updateFoodieStatusById($foodieId){
		$arrayContent = array(
			'foodieStatus' => "close"
		);
		$this->db->where('foodieId', $foodieId);
		$this->db->update('foodie', $arrayContent); 
	}
	
	public function insertFoodie($inputElement){

		$foodieId = $inputElement->post("foodieId");
        $foodieName = $inputElement->post("foodieName");
        $foodieType = $inputElement->post("foodieType");
        $isRecommend = "false";
		if($inputElement->post("isRecommend") == "on"){
			$isRecommend = "true";
		}
        $shortDescription = $inputElement->post("shortDescription");
        $foodieDescription = $inputElement->post("foodieDescription");
        $ingredient = $inputElement->post("ingredient");
        $procedures = $inputElement->post("procedures");
        $foodieVdoPath = $inputElement->post("foodieVdoPath");
		
        $arrayContent = array(
            'foodieName' => $foodieName,
            'foodieType' => $foodieType,
            'isRecommend' => $isRecommend,
            'shortDescription' => $shortDescription,
            'foodieDescription' => $foodieDescription,
            'ingredient' => $ingredient,
            'procedures' => $procedures,
            'foodieVdoPath' => $foodieVdoPath,
			'foodieStatus' => "open",
			'foodieView' => 0
        );

		$this->db->insert('foodie', $arrayContent); 

	}

	public function getLastFoodieId(){
		$id = $this->db->select("foodieId")->from("foodie f")->order_by("f.foodieId desc")->limit(1)->get()->row_array()['foodieId'];
		return $id;
	}

	public function getNumberOfOtherImageByFoodieId($foodieId){
		$number = $this->db->select("count(*) as numberOfOtherImage")->from("foodieimage f")->where("f.foodieId", $foodieId)->get()->row_array()['numberOfOtherImage'];
		return $number;
	}

	public function canRecommendFoodie(){
		$number = $this->db->select("count(*) as numberOfRecommend")->from("foodie f")->where("f.isRecommend", "true")->get()->row_array()['numberOfRecommend'];
		return ($number=="4"? "false":"true");
	}

	public function getFoodieViewById($id){
		$view = $this->db->select("foodieView")->from("foodie f")->where("f.foodieId",$id)->get()->row_array()['foodieView'];
		return $view;
	}

	public function updateFoodieViewById($id){
		$foodieId = $id;
		$currentView = $this->getFoodieViewById($id);
		$arrayContent = array(
			'foodieView' => ($currentView+1)
		);
		$this->db->where('foodieId', $foodieId);
		$this->db->update('foodie', $arrayContent); 
	}

}
?>