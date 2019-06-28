<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Decline extends CI_Controller {
	public function __construct(){
        parent::__construct();
        if ($this->session->userdata('ses_email') != true){
            redirect('index.php/login');
        }
    }
	public function index()
	{
		$data['content'] = 'admin/decline';
		$this->load->view('admin/dashboard', $data);
	}
}