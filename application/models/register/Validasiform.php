<?php
    class Validasiform extends CI_Model{

		public function c_name($company_name)
		 {
		  $query = $this->db->get_where('prospective_member', array('company_name' => $company_name));
		  if($query->num_rows()>0){
		   return true;
		  }
		  else {
		   return false;
		  }
		 }
		 
		 public function nopic($no_pic)
		 {
		  $query = $this->db->get_where('prospective_member', array('no_pic' => $no_pic));
		  if($query->num_rows()>0){
		   return true;
		  }
		  else {
		   return false;
		  }
		 }
		 
		 public function accountnumber($account_number)
		 {
		  $query = $this->db->get_where('prospective_member', array('account_number' => $account_number));
		  if($query->num_rows()>0){
		   return true;
		  }
		  else {
		   return false;
		  }
		 }
		 
		public function companyphonenumber($company_phone_number)
		 {
		  $query = $this->db->get_where('prospective_member', array('company_phone_number' => $company_phone_number));
		  if($query->num_rows()>0){
		   return true;
		  }
		  else {
		   return false;
		  }
		 }
		 
		 public function email($email)
		 {
		  $query = $this->db->get_where('prospective_member', array('email' => $email));
		  if($query->num_rows()>0){
		   return true;
		  }
		  else {
		   return false;
		  }
		 }
		
    }
?>