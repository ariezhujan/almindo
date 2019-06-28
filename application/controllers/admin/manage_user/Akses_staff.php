<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akses_staff extends CI_Controller {
	function __construct(){
        parent::__construct();
        if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }
		$this->load->model('admin/staff/M_akses_staff');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }
	public function index()
	{	
		$data['staff'] = $this->M_akses_staff->tampil_data()->result();
		$data['content'] = 'admin/manage_user/V_akses_staff';
		$this->load->view('admin/dashboard', $data);
	}
}
?>