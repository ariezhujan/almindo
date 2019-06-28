<?php
    class M_payment_client extends CI_Model{
		function __construct(){
		parent::__construct();	
		if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }
	}
		function tampil_data()
        {
			$calories = $this->input->get('calories');
			$size = $this->input->get('size');
			$id = $this->input->get('id');
			$this->db->select('*');
			$this->db->from('order_goods');
			$this->db->join('member', 'member.id = order_goods.id');
			$this->db->join('date_delivery', 'date_delivery.po = order_goods.po', 'date_delivery.id = order_goods.id');
			$this->db->join('type_charcoal_calories', 'type_charcoal_calories.no  = order_goods.calories');
			$this->db->join('type_charcoal_size', 'type_charcoal_size.no = order_goods.size');
			$db = $this->db->get();
			return $db;
        }
		function update($no_order,$id,$po,$paid)
        {
			 $no_order       = $this->input->post('no_order');
			 $id             = $this->input->post('id');
             $po             = $this->input->post('po');
             $paid	         = $this->input->post('paid_status');
			 $query = $this->db->query("UPDATE date_delivery SET paid_status = '$paid' WHERE no_order = '$no_order' AND id = '$id' AND po = '$po'");
            return $query;
        }
    }
?>