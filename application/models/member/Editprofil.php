<?php
    class Editprofil extends CI_Model{
		function __construct(){
		parent::__construct();	
		if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }
	}
        function update($id,$company_name,$company_owner,$company_phone_number,$address,$pic,$no_pic,$bank,$branch_bank,$account_number,$email,$password)
        {
           $query = $this->db->query("UPDATE member SET company_name = '$company_name', company_owner = '$company_owner', company_phone_number = '$company_phone_number', address = '$address', pic = '$pic', no_pic = '$no_pic', bank = '$bank', branch_bank = '$branch_bank' ,account_number = '$account_number', email = '$email', password = '$password' WHERE id = '$id'");
           return $query;
        }
		function tampil_data()
        {
			$id = $this->session->userdata('ses_id');
            $query = $this->db->get_where('member', array('id' => $id));
            return $query;
        }
    }
?>