<?php
class Login_model extends CI_Model{
    //cek email dan password admin
	function auth_cek($email,$password){
        $query = $this->db->get_where('member', array('role', 'email' => $email, 'password' => $password));
        return $query;
    }
    function auth_admin($email,$password){
        $query = $this->db->get_where('member', array('role' => 1, 'email' => $email, 'password' => $password));
        return $query;
    }
	function auth_member($email,$password){
        $query = $this->db->get_where('member', array('role' => 4,'email' => $email, 'password' => $password));
        return $query;
    }
	function auth_finance($email,$password){
        $query = $this->db->get_where('staff', array('role' => 2,'email' => $email, 'password' => $password));
        return $query;
    }
}