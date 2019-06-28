<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Viewpoorder extends CI_Controller {

	function __construct(){

        parent::__construct();

        if ($this->session->userdata('ses_email') != true){

        	redirect('index.php/login');

        }

		$this->load->model('member/M_vieworder');

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

    }

	public function index()

	{	

		$id = $this->session->userdata('id');
		$data['order'] = $this->M_vieworder->tampil_data()->result();
		$data['content'] = 'member/viewpoorder';
		$this->load->view('member/dashboard', $data);

	}

}
   



