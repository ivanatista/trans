<?php

/**
* 
*/
class Comparacion extends CI_Controller
{
	
	public function index(){
		$this->load->view("template/head");
		$this->load->view("admin/compras/comparacion/comparacion");
		$this->load->view("template/foot");
	}

	public function add(){
		$this->load->view("template/head");
		$this->load->view("admin/compras/comparacion/add");
		$this->load->view("template/foot");
	}

	public function comparaciont(){
		$this->load->view("template/head");
		$this->load->view("admin/compras/comparacion/comparaciont");
		$this->load->view("template/foot");
	}

	public function addt(){
		$this->load->view("template/head");
		$this->load->view("admin/compras/comparacion/addt");
		$this->load->view("template/foot");
	}
}