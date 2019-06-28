<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hitung_prospective_member extends CI_Controller {
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
		$data['show'] = $this->Create_prospective_member->hitung_data();
		$this->load->view('admin/redirect/Hitung_prospective_member', $data, FALSE);
	}
 
}

?>