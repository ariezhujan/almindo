<?php
    class M_akses_staff extends CI_Model{

        function adding($data,$table)
        {
            $this->db->insert($table,$data);
        }	
		
		function tampil_data()
        {
			$this->db->select('*');
			$this->db->from('staff');
			$db = $this->db->get();
			return $db;
        }
		function tampil_data1($nik)
        {
			$query = $this->db->get_where('staff', array('nik' => $nik));
            return $query;
        }
		function update_akses($nik,$profile,$client,$vieworder,$statusorder,$payment,$receivable,$req_new_client,$log_dec_client,$barang_masuk_stockpile,$barang_keluar_stockpile,$pricing,$history)
        {
			 $query = $this->db->query("UPDATE staff SET profile='$profile',client='$client',vieworder='$vieworder',statusorder='$statusorder',payment='$payment',receivable='$receivable',req_new_client='$req_new_client',log_dec_client='$log_dec_client',barang_masuk_stockpile='$barang_masuk_stockpile',barang_keluar_stockpile='$barang_keluar_stockpile',pricing='$pricing',history='$history' WHERE nik =  '$nik'");
            return $query;
        }
		
    }
?>
