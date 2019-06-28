<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistic extends CI_Controller {

	public function __construct()
	{ 	
		parent::__construct();
	}

	public function index()
	{
		redirect(base_url(),'refresh');	
	}

	public function telp()
	{
		$cek_stats = $this->db->get_where('stats_landingpage_telepon', array('id_mitra' => $id_mitra->id_mitra))->num_rows();
	      if($cek_stats > 0){
	       	$this->db->query("UPDATE stats_landingpage_telepon SET count = count + 1 WHERE id_mitra = '".$id_mitra->id_mitra."'");
	       }else{
	       	$this->db->insert('stats_landingpage_telepon', array('id_mitra' => $id_mitra->id_mitra, 'count' => 1));
	       }
	}
		
}


?>