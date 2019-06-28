<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Order_client_progress extends CI_Controller {

	function __construct(){

        parent::__construct();
		$this->load->model('staff/M_akses_staff');
        if ($this->session->userdata('ses_email') != true){

        	redirect('index.php/login');

        }

		$this->load->model('admin/order/M_order_client');

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

    }

	public function index()
	{	
		$data['order'] = $this->M_order_client->tampil_data3()->result();
		$data['akses'] = $this->M_akses_staff->tampil_data()->result();
		$data['content'] = 'staff/order_client_progress';
		$this->load->view('staff/dashboard', $data);
	}
	public function set_progress()
	{	
		$data['order'] = $this->M_order_client->tampil_data3()->result();
		$data['akses'] = $this->M_akses_staff->tampil_data()->result();
		$data['content'] = 'staff/order_client_set_progress';
		$this->load->view('staff/dashboard', $data);
	}
	public function update_progress()
	{	
		$status = $this->input->get('status');
		$id = $this->input->get('id');
		$po = $this->input->get('po');
		$calories = $this->input->get('calories');
		$size = $this->input->get('size');
		$company_name = $this->input->get('company_name');
	    $data=$this->M_order_client->update_progress($no,$id,$po,$status);
		redirect("staff/order_client_progress?id=$id&company_name=$company_name&po=$po&calories=$calories&size=$size");
	}
	
}
   



