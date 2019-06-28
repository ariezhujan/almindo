<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editprofile extends CI_Controller {
	function __construct(){
        parent::__construct();
        if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }
		$this->load->model('staff/M_akses_staff');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }
	public function index()
	{	
		$id = $this->session->userdata('ses_nik');
		$data['akses'] = $this->M_akses_staff->tampil_data()->result();
		$data['content'] = 'staff/user';
		$this->load->view('staff/dashboard', $data);
	}
}
       ?> 

