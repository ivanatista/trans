<? php

/**
* 
*/
class Menores extends CI_Controller
{
	
	public function index(){
		$this->load->view("template/head");
		// $this->load->view("admin/compras/menores/menores");
		// $this->load->view("template/foot");
	}

	public function add(){
		$this->load->view("template/head");
		$this->load->view("admin/compras/menores/add");
		$this->load->view("template/foot");
	}
}