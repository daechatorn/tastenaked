<?php defined('BASEPATH') OR exit('No direct script access allowed');

class UTILITYMODEL extends CI_Model {
 
	public function uploadImage($nameImageElement, $uploadPath, $uploadName){
		$fileName = "false";
		if(!empty($_FILES[$nameImageElement]['name'])){
			//update main imagegd
			$config['upload_path'] = $uploadPath;
			$config['allowed_types'] = "gif|jpg|png|jpeg|pdf|doc|xml";
			//$config['max_size'] = 100000;
			$config['file_name'] = $uploadName;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload($nameImageElement) == 1){
				$fileData = $this->upload->data();
				$fileName = $fileData['file_name'];
			}
		}
		return $fileName;
	}

	public function uploadGroupImage($nameImageElement, $uploadPath, $uploadName, $startWith){
		$imageElement = $_FILES[$nameImageElement];
		$fileName = array();
        if(!empty($_FILES[$nameImageElement]['name'])){
            $filesCount = sizeof($_FILES[$nameImageElement]['name']);
            for($i = 0; $i < $filesCount; $i++){
                
                $_FILES[$nameImageElement]['name'] = $_FILES[$nameImageElement]['name'][$i];
                $_FILES[$nameImageElement]['type'] = $_FILES[$nameImageElement]['type'][$i];
                $_FILES[$nameImageElement]['tmp_name'] = $_FILES[$nameImageElement]['tmp_name'][$i];
                $_FILES[$nameImageElement]['error'] = $_FILES[$nameImageElement]['error'][$i];
                $_FILES[$nameImageElement]['size'] = $_FILES[$nameImageElement]['size'][$i];

				$fileName[$i] = $this->uploadImage($nameImageElement, $uploadPath, $uploadName."-".($i+$startWith));
                
				$_FILES[$nameImageElement] = $imageElement;
            }   
        }
		return $fileName;
	}

	public function uploadImageFromGroupWithIndex($nameImageElement, $uploadPath, $uploadName, $index){
		$imageElement = $_FILES[$nameImageElement];
		$fileName = array();
		$nextImageIndex = 0;
        if(!empty($_FILES[$nameImageElement]['name'])){
            $filesCount = sizeof($_FILES[$nameImageElement]['name']);
            for($i = 0; $i < $filesCount; $i++){
				if($index == $i){
					$_FILES[$nameImageElement]['name'] = $_FILES[$nameImageElement]['name'][$i];
					$_FILES[$nameImageElement]['type'] = $_FILES[$nameImageElement]['type'][$i];
					$_FILES[$nameImageElement]['tmp_name'] = $_FILES[$nameImageElement]['tmp_name'][$i];
					$_FILES[$nameImageElement]['error'] = $_FILES[$nameImageElement]['error'][$i];
					$_FILES[$nameImageElement]['size'] = $_FILES[$nameImageElement]['size'][$i];

					$fileName = $this->uploadImage($nameImageElement, $uploadPath, $uploadName); //kept filename
					$nextImageIndex = $index + 1;
					$_FILES[$nameImageElement] = $imageElement;
					return array($fileName, $nextImageIndex);
				}
				
            }   
        }
		
	}

	public function deleteOldImage($objectId, $objectPath, $nameImageElement, $isOtherImage, $from){

        if(!empty($_FILES[$nameImageElement]['name'])){
			$imageElement = $_FILES[$nameImageElement];
			$oldPath = "";
			if($isOtherImage == "true"){
				$filesCount = sizeof($_FILES[$nameImageElement]['name']);
				for($i = 0; $i < $filesCount; $i++){

					$_FILES[$nameImageElement]['name'] = $_FILES[$nameImageElement]['name'][$i];
					if(!empty($_FILES[$nameImageElement]['name'])){
						$oldPath = $this->getOldPathImage($objectId[$i], "true", $from);
						array_map('unlink', glob($objectPath."/".$oldPath));
					}
					$_FILES[$nameImageElement] = $imageElement;
				}   
			}else{
				$oldPath = $this->getOldPathImage($objectId, "false", $from);
				array_map('unlink', glob($objectPath."/".$oldPath));
			}
			
		}

	}

	public function getOldPathImage($id, $isOtherImage, $from){
		$getOldpathprofile = "";
		if($isOtherImage == "true"){
			if($from == "FOODIE"){
				$getOldpathprofile = $this->db->select("imagePath")->from("foodieimage f")->where("f.foodieImageId",$id)->get()->row_array()['imagePath'];
			}else if($from == "WORKOUT"){
				$getOldpathprofile = $this->db->select("imagePath")->from("workoutimage w")->where("w.workoutImageId",$id)->get()->row_array()['imagePath'];
			}
		}else{
			if($from == "FOODIE"){
				$getOldpathprofile = $this->db->select("foodieImagePath")->from("foodie f")->where("f.foodieId",$id)->get()->row_array()['foodieImagePath'];
			}else if($from == "WORKOUT"){
				$getOldpathprofile = $this->db->select("workoutImagePath")->from("workout w")->where("w.workoutId",$id)->get()->row_array()['workoutImagePath'];
			}else if($from == "ARTICLE"){
				$getOldpathprofile = $this->db->select("articleImagePath")->from("article a")->where("a.articleId",$id)->get()->row_array()['articleImagePath'];
			}
			else if($from == "WEBSITEMEDIA"){
				$getOldpathprofile = $this->db->select("centralMediaPath")->from("centralmediacontent c")->where("c.centralMediaId",$id)->get()->row_array()['centralMediaPath'];
			}
			else if($from == "BMI"){
				$getOldpathprofile = $this->db->select("bmiImagePath")->from("bmiinformation b")->where("b.bmiId",$id)->get()->row_array()['bmiImagePath'];
			}
		}
		return $getOldpathprofile;
	}

	
}
?>