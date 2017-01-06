<?php defined('BASEPATH') OR exit('No direct script access allowed');

class CONTROL extends CI_Controller{
	public function index(){
		echo "notlogin";
	}

	public function unavailable(){
		$this->load->view("unavailable.php");
	}
	public function login(){
		
		if($this->input->post("bt")!=null){
			$username = $this->input->post("username");
			$password = $this->input->post("password");

			if($username != "" && $password != ""){
				if(($username =="root" && $password =="123456")){
					$this->session->set_userdata(array("login_id"=>"admin"));
					redirect("DASH");
					exit();
				}else{
					echo "<font color='red'>username or password falsed</font>";
					$this->load->view("login.php");
				}
				
			}
			else{
				echo "<font color='red'>username or password falsed</font>";
				$this->load->view("login.php");
			}
			
		}
		else{
			$this->load->view("login.php");
		}
		
	}

	public function logout(){
		$this->session->unset_userdata("login_id");
		$this->load->view("login.php");

	}

}
?>