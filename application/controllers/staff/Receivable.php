<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Receivable extends CI_Controller {

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
		$data['client'] = $this->M_akses_staff->tampil_data_client()->result();
		$data['akses'] = $this->M_akses_staff->tampil_data()->result();
		$data['content'] = 'staff/receivable';
		$this->load->view('staff/dashboard', $data);

	}
	public function detail_receivable()
	{	
		//$data['client'] = $this->M_akses_staff->tampil_data_client()->result();
		$data['akses'] = $this->M_akses_staff->tampil_data()->result();
		$data['content'] = 'staff/detail_receivable';
		$this->load->view('staff/dashboard', $data);

	}
	public function input_detail_receivable()
	{	
		//$data['client'] = $this->M_akses_staff->tampil_data_client()->result();
		$data['akses'] = $this->M_akses_staff->tampil_data()->result();
		$data['content'] = 'staff/input_detail_receivable';
		$this->load->view('staff/dashboard', $data);

	}

}
	



