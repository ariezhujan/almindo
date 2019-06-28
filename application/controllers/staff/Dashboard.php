<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
        parent::__construct();
        if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }
		$this->load->model('staff/M_akses_staff');
    }
	public function index()
	{
		$data['akses'] = $this->M_akses_staff->tampil_data()->result();
		$data['content'] = 'staff/home';
		$this->load->view('staff/dashboard', $data);
	}
}
