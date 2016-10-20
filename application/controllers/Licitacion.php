<? php

/**
* 
*/
class Licitacion extends CI_Controller
{
	
	public function index(){
		$this->load->view("admin/template/head");
		$this->load->view("licitacion/licitacion");
		$this->load->view("admin/template/foot");
	}
	
	public function add(){
		$this->load->view("admin/template/head");
		$this->load->view("licitacion/add");
		$this->load->view("admin/template/foot");
	}

	public function licitaciont(){
		$this->load->view("admin/template/head");
		$this->load->view("licitacion/licitaciont");
		$this->load->view("admin/template/foot");
	}

	public function addt(){
		$this->load->view("admin/template/head");
		$this->load->view("licitacion/addt");
		$this->load->view("admin/template/foot");
	}



}