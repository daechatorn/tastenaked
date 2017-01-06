<?php defined('BASEPATH') OR exit('No direct script access allowed');

class FOODIE extends CI_Controller {

	public function FOODIE(){
		parent::__construct();
		$this->load->view('frontend/include/header');
		$data['menunav'] = "foodie";
		$this->load->view('frontend/include/navbar', $data);

		$this->load->model("FOODMODEL");
	}

	public function index()
	{
		$withDetail = false;
		$rs = $this->FOODMODEL->getAllFoodie();
		$data['allfoodie'] = $rs->result_array();
		

		$this->load->model("CENTRALCONTENTMODEL");
		$data['vdoCentralMedia'] = $this->CENTRALCONTENTMODEL->getMediaByTypeAndPage("VDO", "FOODIE")->result_array();
		$data['imageCentralMedia'] = $this->CENTRALCONTENTMODEL->getMediaByTypeAndPage("IMAGE", "FOODIE")->result_array();
		$this->load->view('frontend/home-section', $data);
		$this->load->view('frontend/foodie-item', $data);
        
		$this->load->view('frontend/include/footer');
	}

	public function detail($foodieId){
		
		if($foodieId != ''){
			$this->FOODMODEL->updateFoodieViewById($foodieId);
		
			$rs = $this->FOODMODEL->getFoodieByFoodieId($foodieId);
			$foodie = $rs->result_array();
			$data['foodie'] = $foodie;

			$relatedMenu = $this->FOODMODEL->getLastFourFoodieByTypeAndExceptCaller($foodie[0]['foodieType'], $foodieId);
			$data['relatedMenu'] = $relatedMenu->result_array();

			$this->load->view('frontend/foodie-detail', $data);
			
			$this->load->view('frontend/include/footer');
		}
	}

}
