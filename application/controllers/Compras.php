<?php

/**
* 
*/
class Compras extends CI_Controller
{
	
	public function comparacion(){
		$this->load->view("template/head");
		$this->load->view("admin/compras/comparacion/comparacion");
		$this->load->view("template/foot");
		
	}
}
