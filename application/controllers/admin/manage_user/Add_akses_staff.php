<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_akses_staff extends CI_Controller {
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
		$data['content'] = 'admin/manage_user/V_add_akses_staff';
		$this->load->view('admin/dashboard', $data);
	}
	public function save()
	{
		 $nik = $this->input->post('nik'); 
            if ($nik == true)
                {
					    $nik             = $this->input->post('nik');
					    $nama             = $this->input->post('nama');
					    $username             = $this->input->post('username');
					    $divisi             = $this->input->post('divisi');
					    $email             = $this->input->post('email');
					    $password             = $this->input->post('password');
						$profile             = $this->input->post('profile');
						$client             = $this->input->post('client');
						$vieworder             = $this->input->post('vieworder');
						$statusorder             = $this->input->post('statusorder');
						$payment             = $this->input->post('payment');
						$receivable             = $this->input->post('receivable');
						$req_new_client             = $this->input->post('req_new_client');
						$log_dec_client             = $this->input->post('log_dec_client');
						$barang_masuk_stockpile             = $this->input->post('barang_masuk_stockpile');
						$barang_keluar_stockpile             = $this->input->post('barang_keluar_stockpile');
						$pricing             = $this->input->post('pricing');
						$history             = $this->input->post('history');
                       $data = array(
							'nik'      		=> $nik,
							'nama'      		=> $nama,
							'username'      => $username,							
							'divisi'          => $divisi,
							'email'          => $email,
							'password'        => $password,
							'profile'      => $profile,
							'client'   => $client,
							'vieworder'   => $vieworder,
							'statusorder'   => $statusorder,
							'payment'   => $payment,
							'receivable'   => $receivable,
							'req_new_client'   => $req_new_client,
							'log_dec_client'   => $log_dec_client,
							'barang_masuk_stockpile'   => $barang_masuk_stockpile,
							'barang_keluar_stockpile'   => $barang_keluar_stockpile,
							'pricing'   => $pricing,
							'history'   => $history,
							'role'   => 2
						);
					   $data=$this->M_akses_staff->adding($data,'staff');
					   if(!$data)
					   {
							$this->session->set_flashdata("notif","<div class='alert alert-success'>				
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>	
							<i class='material-icons'>close</i>									
							</button>								
							<span>									
							<b> saved data successfully </b></span>		
							</div>");
							 redirect('admin/manage_user/add_akses_staff');
					   }else{
							 //redirect('index.php/member/editprofile');
					   }
                }else{
					$message = "<div class='alert alert-success'>				
								<button type='button' class='close' data-dismiss='alert' aria-label='Close'>	
								<i class='material-icons'>close</i>									
								</button>								
								<span>									
								<b> Send Order Success </b></span>		
								</div>";				
					$this->session->set_flashdata("notif","saved data successfully");
					redirect('admin/manage_user/add_akses_staff');
				}
    }
	function edit_akses()
    {
		$nik             = $this->input->get('nik');
		$data['staff'] = $this->M_akses_staff->tampil_data1($nik)->result();
	    $data['content'] = 'admin/manage_user/edit_form';
		$this->load->view('admin/dashboard', $data);
    }
	function update_akses()
    {
	    $nik             = $this->input->post('nik');
	    $profile             = $this->input->post('profile');
	    $client             = $this->input->post('client');
	    $vieworder             = $this->input->post('vieworder');
	    $statusorder             = $this->input->post('statusorder');
	    $payment             = $this->input->post('payment');
	    $receivable             = $this->input->post('receivable');
	    $req_new_client             = $this->input->post('req_new_client');
	    $log_dec_client             = $this->input->post('log_dec_client');
	    $barang_masuk_stockpile             = $this->input->post('barang_masuk_stockpile');
	    $barang_keluar_stockpile             = $this->input->post('barang_keluar_stockpile');
	    $pricing             = $this->input->post('pricing');
	    $history             = $this->input->post('history');
		$data=$this->M_akses_staff->update_akses($nik,$profile,$client,$vieworder,$statusorder,$payment,$receivable,$req_new_client,$log_dec_client,$barang_masuk_stockpile,$barang_keluar_stockpile,$pricing,$history);
					   if($data == true)
					   {
						   $this->session->set_flashdata("notif","<div class='alert alert-success'>				
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>	
							<i class='material-icons'>close</i>									
							</button>								
							<span>									
							<b> change data successfully </b></span>		
							</div>");
							 redirect('admin/manage_user/akses_staff');
					   }else{
							 $this->session->set_flashdata("notif",'Perubahan data gagal!!');
							 redirect('index.php/admin/editprofile');
					   }
    }
}
