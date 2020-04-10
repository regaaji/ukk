<?php 


 class Home extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Daftar_model');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$data['judul'] = 'Buku Pintar';
		$this->load->view('templates/atas', $data);
		$this->load->view('home/index');			
		$this->load->view('templates/bawah');	
	}

	
}