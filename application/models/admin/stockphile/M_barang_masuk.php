<?php
    class M_barang_masuk extends CI_Model{

        function adding($data,$table)
        {
            $this->db->insert($table,$data);
        }
		function tampil_data()
        {
            $query = $this->db->get('barang_masuk_stock');
            return $query;
        }
		function tampil_gambar()
        {
			$po = $this->input->get('po');
			$surat_jalan = $this->input->get('nama');
            $query = $this->db->get_where('barang_masuk_stock',array('po' => $po, 'surat_jalan' => $surat_jalan));
            return $query;
        }
		public function getPo($po)
		 {	
		  $query = $this->db->get_where('barang_masuk_stock', array('po' => $po));

		  if($query->num_rows()>0){
		   return true;
		  }
		  else {
		   return false;
		  }
		 }
        /*function update($status,$id)
        {
			$this->db->where('id', $id);
			$this->db->update('prospective_member', array('status' => $status));
        }
        function tampil_data_accept()
        {
            $query = $this->db->get_where('member', array('status' => 2));
            return $query;
        }
        function tampil_data_decline()
        {
            $query = $this->db->get_where('prospective_member', array('status' => 3));
            return $query;
        }
        function hitung_data()
        {        
            $this->db->from('prospective_member');
            $this->db->where('status', '1');
             return $num_rows = $this->db->count_all_results();
        }*/
    }
?>