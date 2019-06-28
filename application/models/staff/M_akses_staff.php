<?php
    class M_akses_staff extends CI_Model{

        function tampil_data()
        {
			$nik = $this->session->userdata('ses_nik');
            $query = $this->db->get_where('staff', array('nik' => $nik));
            return $query;
        }
		function tampil_data_client()
        {
            $query = $this->db->get_where('member', array('status' => 2));
            return $query;
        }
		function tampil_data_order_status()
        {
			$id = $this->input->get('id');
			$calories = $this->input->get('calories');
			$size = $this->input->get('size');
			$this->db->select('*');
			$this->db->from('order_goods');
			$this->db->join('member', 'member.id = order_goods.id');
			$this->db->join('date_delivery', 'date_delivery.po = order_goods.po', 'date_delivery.id = order_goods.id');
			$this->db->join('type_charcoal_calories', 'type_charcoal_calories.no  = order_goods.calories');
			$this->db->join('type_charcoal_size', 'type_charcoal_size.no = order_goods.size');	
			$db = $this->db->get();
			return $db;
        }
		function tampil_data_payment()
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
		function update_payment($no_order,$id,$po,$paid)
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