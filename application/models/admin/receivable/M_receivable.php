<?php
    class M_receivable extends CI_Model{

		function tampil_data_client()
        {
            $query = $this->db->get_where('member', array('status' => 2));
            return $query;
        }
    }
?>