<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_keluar extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('admin/Create_prospective_member');
		$this->load->helper('url');
		if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }
	}
	public function index()
	{
		$data['show'] = $this->Create_prospective_member->barang_keluar();
		$this->load->view('admin/redirect/barang_keluar', $data, FALSE);
	}
 
}

?>