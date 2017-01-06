<?php defined('BASEPATH') OR exit('No direct script access allowed');

class BMIMODEL extends CI_Model {
 
    public function getAllBMI(){
			$this->db->select('*');
			$this->db->from('bmiinformation b');
						
			return $this->db->get();
    }

	public function updateBMIById($inputElement){
		$bmiId = $inputElement->post("bmiId");
		$bmiDescription = $inputElement->post("bmiDescription");
		$arrayContent = array(
			'bmiDescription' => $bmiDescription
		);
		$this->db->where('bmiId', $bmiId);
		$this->db->update('bmiinformation', $arrayContent); 
	}

	public function updateBMIImagePathById($bmiId, $fileName){
		$id = $bmiId;
		if($fileName != "false"){
			$arrayContent = array(
				'bmiImagePath' => $fileName
			);

			$this->db->where('bmiId', $id);
			$this->db->update('bmiinformation', $arrayContent); 
		}
	}

}
?>