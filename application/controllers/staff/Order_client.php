<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Order_client extends CI_Controller {

	function __construct(){

        parent::__construct();

        if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }
		$this->load->model('admin/order/M_order_client');
		$this->load->model('staff/M_akses_staff');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

	public function index()
	{	
		$data['order'] = $this->M_order_client->tampil_data()->result();
		$data['akses'] = $this->M_akses_staff->tampil_data()->result();
		$data['content'] = 'staff/order_client';
		$this->load->view('staff/dashboard', $data);

	}
	public function index1()
	{	
		$data['order'] = $this->M_order_client->tampil_data1()->result();
		$data['akses'] = $this->M_akses_staff->tampil_data()->result();
		$data['content'] = 'staff/order_client_detail';
		$this->load->view('staff/dashboard', $data);

	}

}
   



