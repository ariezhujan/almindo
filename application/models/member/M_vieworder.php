<?php
    class M_vieworder extends CI_Model{
		function __construct(){
		parent::__construct();	
		if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }
	}
		function tampil_data()
        {
			$id = $this->session->userdata('ses_id');
            $query = $this->db->get_where('order_goods', array('id' => $id));
            return $query;
        }
    }
?>