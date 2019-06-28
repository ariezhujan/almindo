<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prospective_member_view extends CI_Controller {
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
		$data['prospective_member'] = $this->Create_prospective_member->tampil_data()->result();
		$data['content'] = 'admin/prospective_member_view';
		$this->load->view('admin/dashboard', $data);
	}
 
}

?>