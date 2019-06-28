<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accept_dec extends CI_Controller {
	function __construct(){
        parent::__construct();
        if ($this->session->userdata('ses_email') != true){
        	redirect('login');
        }
		$this->load->model('staff/M_akses_staff');
    }
	public function index()
	{
		$data['akses'] = $this->M_akses_staff->tampil_data()->result();
		$data['content'] = 'staff/accept_dec';
		$this->load->view('staff/dashboard', $data);	
	}
}