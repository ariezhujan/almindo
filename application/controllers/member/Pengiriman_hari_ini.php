<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengiriman_hari_ini extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('member/M_deliveryorder');
		$this->load->helper('url');
		if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }
	}
	public function index()
	{
		$data['show'] = $this->M_deliveryorder->pengiriman_hari_ini();
		$this->load->view('member/pengiriman_hari_ini', $data, FALSE);
	}
 
}

?>