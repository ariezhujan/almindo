<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accept_dec extends CI_Controller {
	function __construct(){
        parent::__construct();
        if ($this->session->userdata('ses_email') != true){
        	redirect('login');
        }
    }
	public function index()
	{
		$data['content'] = 'admin/accept_dec';
		$this->load->view('admin/dashboard', $data);	
	}
}