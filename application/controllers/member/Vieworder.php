<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Vieworder extends CI_Controller {

	function __construct(){

        parent::__construct();

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
		$data['content'] = 'member/vieworder';
		$this->load->view('member/dashboard', $data);

	}

}
   



