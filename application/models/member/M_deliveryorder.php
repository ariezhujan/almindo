<?php
    class M_deliveryorder extends CI_Model{
		function __construct(){
		parent::__construct();	
		if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }
	}
		function tampil_data()
        {
			$id = $this->session->userdata('ses_id');
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
		function pengiriman_hari_ini()
        {        
			$tgl=date('M d, Y');
			$id = $this->session->userdata('ses_id');
            $this->db->from('date_delivery');
            $this->db->like('delivery_date', $tgl);
            $this->db->where('id', $id);
            $num_rows = $this->db->count_all_results();
			 if($num_rows > 0)
				{
				  return $num_rows;
				}
				else
				{
				  echo 0;
				}
        }
    }
?>			