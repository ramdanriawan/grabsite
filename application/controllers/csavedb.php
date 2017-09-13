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
    "gambar"      => $this->input->get("gambar"),
		"judul"       => $this->input->get("judul"),
		"link"        => $this->input->get("link"),
		"description" => $this->input->get("description"),#
		"kategory"    => $this->input->get("kategory"),
		"sumber"      => $this->input->get("sumber"),
		"dibaca"      => $this->input->get("dibaca"),#
		"date"        => $this->input->get("date")
		);

		$nilai = $this->msavedb->msavedbf($file);

		if ($nilai) {
			$data["status"] = "Success";
			$this->load->view("vsavedb", $data);
		}else{
			$data["status"] = "Duplicate Entry!";
			$this->load->view("vsavedb", $data);
		}
 	}

 	//controller untuk
 	function index(){
 		echo $this->input->get("umur");
 	}
 }

 ?>
