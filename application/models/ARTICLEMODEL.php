<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ARTICLEMODEL extends CI_Model {
 
    public function getAllArticle(){
		$this->db->select('*');
		$this->db->from('article a');
		$this->db->where('a.articleStatus',"open");
		$this->db->order_by('a.isHilight desc, a.articleDate desc');
        
		return $this->db->get();
    }

	public function getArticleByArticleId($id){
		$this->db->select('*');
		$this->db->from('article a');
		$this->db->where('a.articleId',$id);
        
		return $this->db->get();
	}

	public function getArticleByArticleType($type){
		$this->db->select('*');
		$this->db->from('article a');
		$this->db->where('a.articleType',$type);
        
		return $this->db->get();
	}

	public function getLastFourArticleByExceptCaller($callerId){
		$this->db->select('*');
		$this->db->from('article a');
		$this->db->where('a.articleId <>', $callerId);
		$this->db->order_by('a.articleId desc');
		$this->db->limit(4);
        
		return $this->db->get();
	}

	public function getHilightArticle(){
		$this->db->select('*');
		$this->db->from('article a');
		$this->db->where('a.isHilight', "true");
		$this->db->where('a.articleStatus',"open");
		$this->db->order_by('a.articleId desc');
		$this->db->limit(3);

		return $this->db->get();
	}


	public function updateArticleById($inputElement){

		$articleId = $inputElement->post("articleId");
        $articleName = $inputElement->post("articleName");
        $articleType = $inputElement->post("articleType");
        $isHilight = "false";
		if($inputElement->post("isHilight") == "on"){
			$isHilight = "true";
		}
        $shortDescription = $inputElement->post("shortDescription");
        $articleDetail = $inputElement->post("articleDetail");
        $articleDate = $inputElement->post("articleDate");
		
        $arrayContent = array(
            'articleName' => $articleName,
            'articleType' => $articleType,
            'isHilight' => $isHilight,
            'shortDescription' => $shortDescription,
            'articleDetail' => $articleDetail,
            'articleDate' => $articleDate
        );

		$this->db->where('articleId', $articleId);
		$this->db->update('article', $arrayContent); 

	}

	public function updateArticleImagePathById($articleId, $fileName){

		$id = $articleId;
		if($fileName != "false"){
			$arrayContent = array(
				'articleImagePath' => $fileName
			);

			$this->db->where('articleId', $id);
			$this->db->update('article', $arrayContent); 
		}

	}
	
	public function updateArticleStatusById($articleId){
		$arrayContent = array(
			'articleStatus' => "close"
		);
		$this->db->where('articleId', $articleId);
		$this->db->update('article', $arrayContent); 
	}

	public function canHilightArticle(){
		$number = $this->db->select("count(*) as numberOfHilight")->from("article a")->where("a.isHilight", "true")->get()->row_array()['numberOfHilight'];
		return ($number=="3"? "false":"true");
	}

	public function insertArticle($inputElement){

        $articleName = $inputElement->post("articleName");
        $articleType = $inputElement->post("articleType");
        $isHilight = "false";
		if($inputElement->post("isHilight") == "on"){
			$isHilight = "true";
		}
        $shortDescription = $inputElement->post("shortDescription");
        $articleDetail = $inputElement->post("articleDetail");
		$articleDate = $inputElement->post("articleDate");
        $arrayContent = array(
            'articleName' => $articleName,
            'articleType' => $articleType,
            'isHilight' => $isHilight,
            'shortDescription' => $shortDescription,
            'articleDetail' => $articleDetail,
            'articleDate' => $articleDate,
            'articleStatus' => "open",
			'articleView' => 0
        );

		$this->db->insert('article', $arrayContent); 

	}

	public function getLastArticleId(){
		$id = $this->db->select("articleId")->from("article a")->order_by("a.articleId desc")->limit(1)->get()->row_array()['articleId'];
		return $id;
	}

	public function getArticleViewById($id){
		$view = $this->db->select("articleView")->from("article a")->where("a.articleId",$id)->get()->row_array()['articleView'];
		return $view;
	}

	public function updateArticleViewById($id){
		$articleId = $id;
		$currentView = $this->getArticleViewById($id);
		$arrayContent = array(
			'articleView' => ($currentView+1)
		);
		$this->db->where('articleId', $articleId);
		$this->db->update('article', $arrayContent); 
	}

}
?>