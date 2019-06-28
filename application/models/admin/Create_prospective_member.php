<?php
    class Create_prospective_member extends CI_Model{

        function adding($data,$table)
        {
            $this->db->insert($table,$data);
        }
        function update($status,$id)
        {
			$this->db->where('id', $id);
			$this->db->update('prospective_member', array('status' => $status));
        }
        function tampil_data()
        {
            $query = $this->db->get_where('prospective_member', array('status' => 1));
            return $query;
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
        }
		function hitung_data_client()
        {        
            $this->db->from('member');
            $this->db->where('status', '2');
             return $num_rows = $this->db->count_all_results();
        }
		function hitung_data_staff()
        {        
            $this->db->from('staff');
            $this->db->where('role', '2');
             return $num_rows = $this->db->count_all_results();
        }
		function pengiriman_hari_ini()
        {        
			$tgl=date('M d, Y');
            $this->db->from('date_delivery');
            $this->db->where('delivery_date', $tgl);
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
		function barang_masuk()
        {        
			$tgl=date('M , Y');
            $this->db->from('barang_masuk_stock');
            $this->db->like('tanggal_masuk', $tgl);
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
		function barang_keluar()
        {        
			$tgl=date('M , Y');
            $this->db->from('barang_keluar_stock');
            $this->db->like('tanggal_keluar', $tgl);
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