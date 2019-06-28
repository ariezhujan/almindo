<?php
    class M_buyer_produk extends CI_Model{
		function __construct(){
		parent::__construct();	
		/*if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }*/
	}
		function tampil_data_produk()
        {
			$this->db->select('*');
			$this->db->from('produk');
			$db = $this->db->get();
			return $db;
        }
		function tampil_data1()
        {
			$calories = $this->input->get('calories');
			$size = $this->input->get('size');
			$id = $this->input->get('id');
			$this->db->select('*');
			$this->db->from('order_goods');
			$this->db->join('member', 'member.id = order_goods.id');
			$this->db->join('pricing', 'pricing.id = order_goods.id', 'pricing.calories = order_goods.calories', 'pricing.size = order_goods.size');
			$this->db->join('type_charcoal_calories', 'type_charcoal_calories.no  = order_goods.calories');
			$this->db->join('type_charcoal_size', 'type_charcoal_size.no = order_goods.size');
			$this->db->where('order_goods.id',$id);
			$this->db->where('member.id',$id);
			$this->db->where('pricing.id',$id);
			$this->db->where('pricing.calories',$calories);
			$this->db->where('pricing.size',$size);
			$db = $this->db->get();
			return $db;
        }
		function tampil_data3()
        {
			$id = $this->input->get('id');
			$po = $this->input->get('po');
			$calories = $this->input->get('calories');
			$size = $this->input->get('size');
			$this->db->select('*');
			$this->db->from('order_goods');
			$this->db->join('date_delivery', 'date_delivery.po = order_goods.po', 'date_delivery.id = order_goods.id');
			$this->db->join('pricing', 'pricing.id = order_goods.id', 'pricing.calories = order_goods.calories', 'pricing.size = order_goods.size');
			$this->db->join('type_charcoal_calories', 'type_charcoal_calories.no  = order_goods.calories');
			$this->db->join('type_charcoal_size', 'type_charcoal_size.no = order_goods.size');
			$this->db->where('order_goods.po', $po);		
			$this->db->where('pricing.id', $id);			
			$this->db->where('order_goods.id', $id);			
			$this->db->where('pricing.calories', $calories);			
			$this->db->where('pricing.size', $size);			
			$db = $this->db->get();
			return $db;
        }
		function tampil_data_status()
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
		function update_progress($no,$id,$po,$status)
        {
			 $no             = $this->input->post('no');
			 $id             = $this->input->post('id');
             $po             = $this->input->post('po');
             $status	     = $this->input->post('status');
			 $query = $this->db->query("UPDATE date_delivery SET delivery_status = '$status' WHERE no_order =  '$no' AND id = '$id' AND po = '$po'");
            return $query;
        }
    }
?>