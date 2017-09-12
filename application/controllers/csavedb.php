<?php 

/**
 * 
 */
 class csavedb extends CI_Controller
 {
 	
 	//controller untuk save ke database
 	function csavedbf()
 	{
 		$this->load->model("msavedb");

 		$file = array(
		"judul" => $_GET["judul"],
		"link" => $_GET["link"],
		// "description" => $this->input->get("description"),
		"kategory" => $this->input->get("kategory"),
		// "sumber" => $this->input->get("sumber"),
		// "dibaca" => $this->input->get("dibaca")
		);

		$nilai = $this->msavedb->msavedbf($file);

		if ($nilai) {
			$data["status"] = "success";
			$this->load->view("vsavedb", $data);
		}else{
			$data["status"] = "failed";
			$this->load->view("vsavedb", $data);
		}
 	}

 	//controller untuk 
 	function index(){
 		echo $this->input->get("umur");
 	}
 }
 
 ?>