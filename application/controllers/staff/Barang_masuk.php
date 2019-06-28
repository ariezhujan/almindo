<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_masuk extends CI_Controller {

	function __construct(){

        parent::__construct();

        if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }
		$this->load->model('admin/stockphile/M_barang_masuk');
		$this->load->model('staff/M_akses_staff');
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library('form_validation');
    }
	
	public function index()
	{	
		$data['masuk'] = $this->M_barang_masuk->tampil_data()->result();
		$data['akses'] = $this->M_akses_staff->tampil_data()->result();
		$data['content'] = 'staff/v_barang_masuk';
		$this->load->view('staff/dashboard', $data);

	}
	public function index1()
	{	
		$data['akses'] = $this->M_akses_staff->tampil_data()->result();
		$data['content'] = 'staff/barang_masuk';
		$this->load->view('staff/dashboard', $data);

	}
	public function tampil_gambar()
	{	
		$data['tampil'] = $this->M_barang_masuk->tampil_gambar()->result();
		$data['akses'] = $this->M_akses_staff->tampil_data()->result();
		$data['content'] = 'staff/tampil_gambar_masuk';
		$this->load->view('staff/dashboard', $data);

	}
	function upload_image(){
        $config['upload_path'] = "./assets/upload/stockphile/barang_masuk"; //path folder
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
					$asalbarang		= $this->input->post('asalbarang');
					$tanggal_masuk	        = $this->input->post('tanggal_masuk');

					$data = array(
						'po'                => $po,
						'nopol'             => $nopol,
						'surat_jalan'       => $surat_jalan,
						'calories'          => $calories,
						'size'              => $size,
						'tonase'     		=> $tonase,
						'asalbarang'        => $asalbarang,
						'tanggal_masuk'     => $tanggal_masuk

					);
						$this->M_barang_masuk->adding($data,'barang_masuk_stock');
						//$this->upload_image();
				}
				else
				 { 
					 echo "Some Problem";
				 }
			redirect('index.php/staff/barang_masuk');
		}
                 
    } 
	public function checkpo()
		 {
			  if($this->M_barang_masuk->getPo($_POST['po'])){
			   echo '<label class="text-danger"><span><i class="fa fa-times" aria-hidden="true">
			   </i> This PO is already Used</span></label>';
			  }
			  else {
				echo '<label class="text-success"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i> PO is available</span></label>';
			  }
		 }
}
	



