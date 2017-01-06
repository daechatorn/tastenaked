<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ARTICLE extends CI_Controller {

	public function ARTICLE(){
		parent::__construct();
		$this->load->view('frontend/include/header');
		$data['menunav'] = "article";
		$this->load->view('frontend/include/navbar', $data);

		$this->load->model("ARTICLEMODEL");
		$this->load->model("CENTRALCONTENTMODEL");
	}

	public function index()
	{
		$data['hilightArticle'] = $this->ARTICLEMODEL->getHilightArticle()->result_array();
		$data['allArticle'] = $this->ARTICLEMODEL->getAllArticle()->result_array();
		$data['imageCentralMedia'] = $this->CENTRALCONTENTMODEL->getMediaByTypeAndPage("IMAGE", "ARTICLE")->result_array();
		$this->load->view('frontend/article-item', $data);
		$this->load->view('frontend/include/footer');
	}

	public function detail($articleId){
		$this->ARTICLEMODEL->updateArticleViewById($articleId);
		
		$data['article'] = $this->ARTICLEMODEL->getArticleByArticleId($articleId)->result_array();
		$data['recentArticle'] = $this->ARTICLEMODEL->getLastFourArticleByExceptCaller($articleId)->result_array();
		
		$this->load->view('frontend/article-detail', $data);
		$this->load->view('frontend/include/footer');
	}

}
