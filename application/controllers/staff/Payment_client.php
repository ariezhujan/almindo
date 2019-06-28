<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_client extends CI_Controller {

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
		$data['payment'] = $this->M_akses_staff->tampil_data_payment()->result();
		$data['akses'] = $this->M_akses_staff->tampil_data()->result();
		$data['content'] = 'staff/payment_client';
		$this->load->view('staff/dashboard', $data);

	}
	public function set_payment()
	{	
		$data['akses'] = $this->M_akses_staff->tampil_data()->result();
		$data['content'] = 'staff/payment_set';
		$this->load->view('staff/dashboard', $data);
	}
	public function payment_update()
	{	
				$no_order       = $this->input->post('no_order');
			    $id             = $this->input->post('id');
                $po             = $this->input->post('po');
                $paid	        = $this->input->post('paid_status');
				$data=$this->M_akses_staff->update_payment($no_order,$id,$po,$paid);
				redirect("staff/payment_client");

	}

}
	



