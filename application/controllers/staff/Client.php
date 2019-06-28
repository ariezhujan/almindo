<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('staff/M_akses_staff');
		$this->load->helper('url');
		if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }
	}
	public function index()
	{
		$data['client'] = $this->M_akses_staff->tampil_data_client()->result();
		$data['akses'] = $this->M_akses_staff->tampil_data()->result();
		$data['content'] = 'staff/client';
		$this->load->view('staff/dashboard', $data);
	}
 
}

?>
