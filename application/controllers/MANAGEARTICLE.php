<?php
class MANAGEARTICLE extends CI_Controller{
	public function MANAGEARTICLE(){
		parent::__construct();
		$this->load->view("backend/dash/headernav.php");
		$this->load->view("backend/dash/navcontent.php");

		$this->load->model("ARTICLEMODEL");
        $this->load->model("UTILITYMODEL");
	}

	public function index(){	

		$data['allarticle'] = $this->ARTICLEMODEL->getAllArticle()->result_array();
        $data['canHilight'] = $this->ARTICLEMODEL->canHilightArticle();
		$this->load->view("backend/article/article-list.php", $data);
		$this->load->view("backend/dash/scriptinside.php");
	}
    
    public function filter(){
        $type = $this->input->post("objectTypeSelect");
        if($type != "all"){
            $data['allarticle'] = $this->ARTICLEMODEL->getArticleByArticleType($type)->result_array();
            $data['canHilight'] = $this->ARTICLEMODEL->canHilightArticle();
            
            $data['objectTypeSelect'] = $type;
            $this->load->view("backend/article/article-list.php", $data);
            $this->load->view("backend/dash/scriptinside.php");
        }else{
            $this->index();
        }
    }

    public function updateArticle(){
        //upload value
        
        $inputElement = $this->input;
        $this->ARTICLEMODEL->updateArticleById($inputElement);

        //update main image
        $articleId = $inputElement->post("articleId");
        $nameImageElement = "articleImagePath";
        $uploadPath = 'assets/frontend/img/article/main';
        $uploadName = "article_main-".$articleId;
        $this->UTILITYMODEL->deleteOldImage($articleId, $uploadPath, $nameImageElement, "false", "ARTICLE");
        $fileName = $this->UTILITYMODEL->uploadImage($nameImageElement, $uploadPath, $uploadName);
        $this->ARTICLEMODEL->updateArticleImagePathById($articleId, $fileName);
        
        redirect(base_url()."MANAGEARTICLE", 'refresh'); 

    }


    public function unuseArticleByArticleId(){
        $articleId = $this->input->get("articleId");
        $this->ARTICLEMODEL->updateArticleStatusById($articleId);
        
    }


    public function addArticleView(){
        $data['canHilight'] = $this->ARTICLEMODEL->canHilightArticle();
		$this->load->view("backend/article/article-add.php" ,$data);
		$this->load->view("backend/dash/scriptinside.php");
    }

    public function addArticle(){
        $inputElement = $this->input;
        $this->ARTICLEMODEL->insertArticle($inputElement);

        //update main image
        $articleId = $this->ARTICLEMODEL->getLastArticleId();
        $nameImageElement = "articleImagePath";
        $uploadPath = 'assets/frontend/img/article/main';
        $uploadName = "article_main-".$articleId;
        $fileName = $this->UTILITYMODEL->uploadImage($nameImageElement, $uploadPath, $uploadName);
        $this->ARTICLEMODEL->updateArticleImagePathById($articleId, $fileName);

        redirect(base_url()."MANAGEARTICLE", 'refresh'); 
    }
    
}
?>