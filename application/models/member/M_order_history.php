<?php
    class M_order_history extends CI_Model{
		function __construct(){
		parent::__construct();	
		if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }
	}
		function tampil_data()
        {
			$id = $this->session->userdata('ses_id');
			$this->db->select('*');
			$this->db->from('order_goods');
			$this->db->join('date_delivery', 'date_delivery.po = order_goods.po', 'date_delivery.id = order_goods.id');
			$this->db->where('order_goods.id', $id);
			$db = $this->db->get();
			return $db;
        }
    }
?>			