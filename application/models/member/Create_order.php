<?php
    class Create_order extends CI_Model{

        function adding($data,$table)
        {
            $this->db->insert($table,$data);
        }	
		
		function adding1($data,$table)       
		{          
		$this->db->insert_batch($table,$data); 
		}
		
		function tampil_data()			
        {
            $id=$this->session->userdata('ses_id');	
			$po=$this->session->userdata("po");     
			$query = $this->db->get_where('order_goods', array('id' => $id,'po' => $po));       
			return $query;
        }
		
		function del_order($id,$po,$qtydelivery)
        {
           $query = $this->db->query("UPDATE order_goods SET qtydelivery = '$qtydelivery' WHERE id = '$id' AND po = '$po';");
           return $query;
        }
		public function getPo($po)
		 {
		  $id=$this->session->userdata('ses_id');	
		  $query = $this->db->get_where('order_goods', array('id' => $id,'po' => $po));

		  if($query->num_rows()>0){
		   return true;
		  }
		  else {
		   return false;
		  }
		 }

		
    }
?>