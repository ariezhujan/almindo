<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Popup_req_member extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('admin/Create_prospective_member');
		$this->load->helper('url');
		if ($this->session->userdata('ses_email') != true){
        	redirect('login');
        }
	}
	public function index()
	{
		$data['prospective_member'] = $this->Create_prospective_member->tampil_data()->result();
		$this->load->view('admin/redirect/popup_req_member',$data);
	}
 
}

?>
