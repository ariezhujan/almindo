<?php
    class Pricing extends CI_Model{

        function adding($data,$table)
        {
            $this->db->insert_batch($table,$data);
        }
        function update($no,$price)
        {
			$query = $this->db->query("UPDATE pricing SET pricing = '$price' WHERE no = '$no'");
            return $query;
        }
        function tampil_data()
        {
			$id = $this->input->get('id');
			$this->db->select('*');
			$this->db->from('pricing');
			$this->db->join('member', 'member.id = pricing.id');
			$this->db->join('type_charcoal_calories', 'type_charcoal_calories.no  = pricing.calories');
			$this->db->join('type_charcoal_size', 'type_charcoal_size.no = pricing.size');
			$this->db->where('member.id',$id);
			$this->db->where('pricing.id',$id);
            $db = $this->db->get();
			return $db;
        }
    }
?>