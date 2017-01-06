<?php defined('BASEPATH') OR exit('No direct script access allowed');

class CENTRALCONTENTMODEL extends CI_Model {
    
    public function getMediaByTypeAndPage($type, $page){
		$this->db->select('*');
		$this->db->from('centralmediacontent cm');
        $this->db->where('cm.centralMediaPage', $page);
        $this->db->where('cm.centralMediaType', $type);
        
		return $this->db->get();
    }

    public function getContentByPage($page){
        $this->db->select('*');
		$this->db->from('centralcontent c');
        $this->db->where('c.centralContentPage', $page);
        
		return $this->db->get();
    }

    public function getAllContent(){
        $this->db->select('*');
		$this->db->from('centralcontent c');
        
		return $this->db->get();
    }

    public function getGroupMediaPage(){
        $this->db->select('centralMediaPage');
		$this->db->from('centralmediacontent c');
        $this->db->group_by('c.centralMediaPage');
        
		return $this->db->get();
    }

    public function getMediaByType($type){
        $this->db->select('*');
		$this->db->from('centralmediacontent c');
        $this->db->where('c.centralMediaType', $type);
        
		return $this->db->get();
    }

    public function updateContentById($inputElement){

		$centralContentId = $inputElement->post("centralContentId");
        $centralContentText = $inputElement->post("centralContentText");
        $arrayContent = array(
            'centralContentText' => $centralContentText
        );

		$this->db->where('centralContentId', $centralContentId);
		$this->db->update('centralcontent', $arrayContent); 

	}

    public function updateGroupMediaPathById($centralMediaId, $centralMediaPath){

        $id = $centralMediaId;
        
        for($i=0; $i < sizeof($centralMediaPath); $i++){
            $path = $centralMediaPath[$i];
            if($path != "false"){
                $arrayContent = array(
                    'centralMediaPath' => $path
                );
                $this->db->where('centralMediaId', $id);
                $this->db->update('centralmediacontent', $arrayContent); 
            }
        }
	
	}

    public function updateMediaPathById($centralMediaId, $centralMediaPath){

        $id = $centralMediaId;
        $path = $centralMediaPath;
        $arrayContent = array(
            'centralMediaPath' => $path
        );
        $this->db->where('centralMediaId', $id);
        $this->db->update('centralmediacontent', $arrayContent); 
	
	}
    

    

}
?>