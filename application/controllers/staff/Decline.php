<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Decline extends CI_Controller {
	public function __construct(){
        parent::__construct();
        if ($this->session->userdata('ses_email') != true){
            redirect('index.php/login');
        }
		$this->load->model('staff/M_akses_staff');
    }
	public function index()
	{
		$data['akses'] = $this->M_akses_staff->tampil_data()->result();
		$data['content'] = 'staff/decline';
		$this->load->view('staff/dashboard', $data);
	}
}