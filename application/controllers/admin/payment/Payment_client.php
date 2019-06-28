<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_client extends CI_Controller {

	function __construct(){

        parent::__construct();

        if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }
		$this->load->model('admin/payment/M_payment_client');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }
	
	public function index()
	{	
		$data['payment'] = $this->M_payment_client->tampil_data()->result();
		$data['content'] = 'admin/payment/payment_client';
		$this->load->view('admin/dashboard', $data);

	}
	public function set_payment()
	{	
		$data['content'] = 'admin/payment/payment_set';
		$this->load->view('admin/dashboard', $data);
	}
	public function payment_update()
	{	
				$no_order       = $this->input->post('no_order');
			    $id             = $this->input->post('id');
                $po             = $this->input->post('po');
                $paid	        = $this->input->post('paid_status');
				$data=$this->M_payment_client->update($no_order,$id,$po,$paid);
				redirect("admin/payment/payment_client");

	}

}
	



