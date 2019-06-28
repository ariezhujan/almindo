<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Order_status extends CI_Controller {

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
		$data['order'] = $this->M_akses_staff->tampil_data_order_status()->result();
		$data['akses'] = $this->M_akses_staff->tampil_data()->result();
		$data['content'] = 'staff/order_status';
		$this->load->view('staff/dashboard', $data);

	}

}
   



