<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Order_client_progress extends CI_Controller {

	function __construct(){

        parent::__construct();
		$this->load->model('staff/M_akses_staff');
        if ($this->session->userdata('ses_email') != true){

        	redirect('index.php/login');

        }

		$this->load->model('member/M_deliveryorder');

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

    }

	public function index()

	{	
	
		$data['order'] = $this->M_deliveryorder->tampil_data()->result();
		$data['akses'] = $this->M_akses_staff->tampil_data()->result();
		$data['content'] = 'staff/order_client_detail';
		$this->load->view('staff/dashboard', $data);

	}

}
   



