<?php defined('BASEPATH') OR exit('No direct script access allowed');

class PLAN4U extends CI_Controller {

	public function PLAN4U(){
		parent::__construct();
		
		$this->load->view('frontend/include/header');
		$data['menunav'] = "plan4u";
		$this->load->view('frontend/include/navbar', $data);

		$this->load->model("ARTICLEMODEL");
		$this->load->model("CENTRALCONTENTMODEL");
		
		$this->load->model("PLAN4UMODEL");
		$this->load->model("BMIMODEL");
	}
	
	public function index()
	{		
		$data['imageCentralMedia'] = $this->CENTRALCONTENTMODEL->getMediaByTypeAndPage("IMAGE", "PLAN4U")->result_array();
		$this->load->view('frontend/plan4u-detail', $data);
		$this->load->view('frontend/include/footer');
	}

	public function bmilessthan(){
		
		$data['hilightArticle'] = $this->ARTICLEMODEL->getHilightArticle()->result_array();
		$data['bmirange'] = "lessthan";
		$data['bmiinformation'] = $this->BMIMODEL->getAllBMI()->result_array();
		$this->load->view('frontend/bmi-detail', $data);
		
		$this->showPlan4uTable(1 , "false");
        
		$this->load->view('frontend/include/footer');
	}
	public function bmiequal(){
		
		$data['hilightArticle'] = $this->ARTICLEMODEL->getHilightArticle()->result_array();
		$data['bmirange'] = "equal";
		$data['bmiinformation'] = $this->BMIMODEL->getAllBMI()->result_array();
		$this->load->view('frontend/bmi-detail', $data);
		$this->showPlan4uTable(2, "false");
        
		$this->load->view('frontend/include/footer');
	}
	public function bmimorethan(){
		
		$data['hilightArticle'] = $this->ARTICLEMODEL->getHilightArticle()->result_array();
		$data['bmirange'] = "morethan";
		$data['bmiinformation'] = $this->BMIMODEL->getAllBMI()->result_array();
		$this->load->view('frontend/bmi-detail', $data);
		$this->showPlan4uTable(3, "false");
        
		$this->load->view('frontend/include/footer');
	}
	

	public function getPlan($bmiId)
	{		
		$data['imageCentralMedia'] = $this->CENTRALCONTENTMODEL->getMediaByTypeAndPage("IMAGE", "PLAN4U")->result_array();
		$this->load->view('frontend/plan4u-detail', $data);
		$this->showPlan4uTable($bmiId, "true");
		$this->load->view('frontend/include/footer');
	}

	public function showPlan4uTable($bmiId, $slideToPlan4UTable){
		$plan = $this->PLAN4UMODEL->randomPlanForPlan4u($bmiId);
		$data['plan'] = $plan;
		$data['slideToPlan4UTable'] = $slideToPlan4UTable;
		$data['bmidetailtable'] = $this->PLAN4UMODEL->getPlan4UTableDetailByBMIId($bmiId, $plan)->result_array();
		$this->load->view('frontend/plan4u-detail-table', $data);
	}
	
	public function showPlan4uTableWithPlan($bmiId, $plan){
		$data['imageCentralMedia'] = $this->CENTRALCONTENTMODEL->getMediaByTypeAndPage("IMAGE", "PLAN4U")->result_array();
		$this->load->view('frontend/plan4u-detail', $data);
		$data['plan'] = $plan;
		$data['slideToPlan4UTable'] = "true";
		$data['bmidetailtable'] = $this->PLAN4UMODEL->getPlan4UTableDetailByBMIId($bmiId, $plan)->result_array();
		$this->load->view('frontend/plan4u-detail-table', $data);

		$this->load->view('frontend/include/footer');
	}

	public function savePDF($bmiId, $plan){
		ini_set('memory_limit','1025M'); // boost the memory limit if it's low ;)
		
		$data['bmidetailtable'] = $this->PLAN4UMODEL->getPlan4UTableDetailByBMIId($bmiId, $plan)->result_array();
		$html = $this->load->view('frontend/template/bmitable', $data, true); // render the view into HTML
		$this->load->library('PDF');
		$pdf = $this->pdf->load('th', 'A4', '0', 'garuda');
		$pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822)); // Add a footer for good measure ;)
		$pdf->WriteHTML($html); // write the HTML into the PDF
		
		$file_name = "plan4u_".date("Y_m_d_h_i_s_a");
		
		//$save_to = "/Applications/XAMPP/xamppfiles/htdocs/tastenaked/assets/frontend/pdf/".$file_name.".pdf";
		$save_to = "/var/www/html/assets/frontend/pdf/".$file_name.".pdf";
		$pdf->Output($save_to , "F");
		
		$data['file_name'] = $file_name;

		$data['bmiId'] = $bmiId;
		$data['plan'] = $plan;
		$this->load->view('frontend/template/bmidownload', $data);
	}

	public function deletePDF($fileName, $bmiId, $plan){
		//$file = "/Applications/XAMPP/xamppfiles/htdocs/tastenaked/assets/frontend/pdf/".$fileName.".pdf";
		$file = "/var/www/html/assets/frontend/pdf/".$fileName.".pdf";

		$flgDelete = unlink($file);
		if($flgDelete){
			redirect(base_url()."PLAN4U/showPlan4uTableWithPlan/".$bmiId."/".$plan, 'refresh');
		}else{
			redirect(base_url()."PLAN4U");
		}
	}

}


