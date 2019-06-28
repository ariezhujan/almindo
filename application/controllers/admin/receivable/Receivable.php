<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Receivable extends CI_Controller {

	function __construct(){

        parent::__construct();

        if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }
		$this->load->model('admin/receivable/M_receivable');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }
	
	public function index()
	{	
		$data['client'] = $this->M_receivable->tampil_data_client()->result();
		$data['content'] = 'admin/receivable/receivable';
		$this->load->view('admin/dashboard', $data);

	}
	public function detail_receivable()
	{	
		$data['client'] = $this->M_receivable->tampil_data_client()->result();
		$data['content'] = 'admin/receivable/detail_receivable';
		$this->load->view('admin/dashboard', $data);

	}
	public function input_detail_receivable()
	{	
		$data['client'] = $this->M_receivable->tampil_data_client()->result();
		$data['content'] = 'admin/receivable/input_detail_receivable';
		$this->load->view('admin/dashboard', $data);

	}

}
	



