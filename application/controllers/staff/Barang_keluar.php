<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_keluar extends CI_Controller {

	function __construct(){

        parent::__construct();

        if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }
		$this->load->model('admin/stockphile/M_barang_keluar');
		$this->load->model('staff/M_akses_staff');
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library('form_validation');
    }
	
	public function index()
	{	
		$data['masuk'] = $this->M_barang_keluar->tampil_data()->result();
		$data['akses'] = $this->M_akses_staff->tampil_data()->result();
		$data['content'] = 'staff/v_barang_keluar';
		$this->load->view('staff/dashboard', $data);

	}
	public function index1()
	{	
		//$data['payment'] = $this->M_payment_client->tampil_data()->result();
		$data['content'] = 'staff/barang_keluar';
		$this->load->view('staff/dashboard', $data);

	}
	public function tampil_gambar()
	{	
		$data['tampil'] = $this->M_barang_keluar->tampil_gambar()->result();
		$this->load->model('staff/M_akses_staff');
		$data['content'] = 'staff/tampil_gambar_keluar';
		$this->load->view('staff/dashboard', $data);

	}
	function upload_image(){
        $config['upload_path'] = "./assets/upload/stockphile/barang_keluar"; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size']             = 10000;
		$config['max_width']            = 5000;
		$config['max_height']           = 5000;
		$config['file_name']      = $this->input->post('surat_jalan');
		$this->load->library('upload',$config);
        if ( ! $this->upload->do_upload("gambar")){
			echo "File Gagal upload";
		}else{
			$po      = $this->input->post('po');
			if ($po)
				{
					$po	= $this->input->post('po');
					$nopol	= $this->input->post('nopol');
					$surat_jalan	= $this->input->post('surat_jalan');
					$calories	= $this->input->post('calories');
					$size	= $this->input->post('size');
					$tonase		= $this->input->post('tonase');
					$tujuan		= $this->input->post('tujuan');
					$tanggal_keluar	        = $this->input->post('tanggal_keluar');

					$data = array(
						'po'                => $po,
						'nopol'             => $nopol,
						'surat_jalan'       => $surat_jalan,
						'calories'          => $calories,
						'size'              => $size,
						'tonase'     		=> $tonase,
						'tujuan'        => $tujuan,
						'tanggal_keluar'     => $tanggal_keluar

					);
						$this->M_barang_keluar->adding($data,'barang_keluar_stock');
						//$this->upload_image();
				}
				else
				 { 
					 echo "Some Problem";
				 }
			redirect('index.php/staff/barang_keluar');
		}
                 
    } 
	public function checkpo()
		 {
			  if($this->M_barang_keluar->getPo($_POST['po'])){
			   echo '<label class="text-danger"><span><i class="fa fa-times" aria-hidden="true">
			   </i> This PO is already Used</span></label>';
			  }
			  else {
				echo '<label class="text-success"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i> PO is available</span></label>';
			  }
		 }
}
	



