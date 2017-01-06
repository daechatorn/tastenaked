<?php defined('BASEPATH') OR exit('No direct script access allowed');

class HOME extends CI_Controller {

	public function HOME(){
		parent::__construct();
		$this->load->view('frontend/include/header');
		$data['menunav'] = "home";
		$this->load->view('frontend/include/navbar', $data);
	}

	public function index()
	{
		$this->load->model("FOODMODEL");
		$this->load->model("CENTRALCONTENTMODEL");
		$data['recommendMenu'] = $this->FOODMODEL->getRecommendMeal()->result_array();
		$data['vdoCentralMedia'] = $this->CENTRALCONTENTMODEL->getMediaByTypeAndPage("VDO", "HOME")->result_array();
		$data['imageCentralMedia'] = $this->CENTRALCONTENTMODEL->getMediaByTypeAndPage("IMAGE", "HOME")->result_array();
		$data['contentCentral'] = $this->CENTRALCONTENTMODEL->getContentByPage("HOME")->result_array();
		$this->load->view('frontend/home-section', $data);
		$this->load->view('frontend/plan4u-section', $data);
		$this->load->view('frontend/foodie-section', $data);
		$this->load->view('frontend/workout-section', $data);
		
		$this->load->view('frontend/include/footer');
	}

}
