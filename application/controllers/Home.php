<?php

/**
* 
*/
class Home extends CI_Controller
{
	
	public function index(){
		$this->load->view("template/head");
		$this->load->view("content0");
		$this->load->view("template/foot");
		// $this->load->view("home");
	}
	
	public function compras(){
		$this->load->view("template/head");
		$this->load->view("blank");
		$this->load->view("template/foot");
	}
}