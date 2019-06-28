<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prospective_member extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('admin/Create_prospective_member');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function index()
	{
		$data = 'register/prospective_member_register';
		$this->load->view($data);
    }


    public function save()
    {
        if($this->input->post("submit"))
        {
            $company_name	= $this->input->post('company_name');
			$company_owner	= $this->input->post('company_owner');
			$address		= $this->input->post('address');
            $pic	        = $this->input->post('pic');
            $no_pic     	= $this->input->post('no_pic');
			$bank       	= $this->input->post('bank');            
			$account_number = $this->input->post('account_number');
			$company_phone_number = $this->input->post('company_phone_number');
			$branch_bank    = $this->input->post('branch_bank');
            $email	        = $this->input->post('email');

            $data = array(
                'company_name'      => $company_name,
                'address'     		=> $address,
                'company_owner'     => $company_owner,
                'pic'               => $pic,
                'no_pic'            => $no_pic,
                'bank'              => $bank,
                'account_number'    => $account_number,
                'company_phone_number'    => $company_phone_number,
                'branch_bank'      => $branch_bank,
                'email'             => $email,
                'dor'               => date('Y-m-d H:i:s'),
                'status'            => 1
            );

               $data=$this->Create_prospective_member->adding($data,'prospective_member');
			   if($data == false)
				   {
					   $message = '<html><head>
									</head><body onload="launch_toast()">';
						$message .= '</body></html>';
						 $this->session->set_flashdata("notif",$message);
						 redirect('register/prospective_member');
				   }else{
						 $this->session->set_flashdata("notif",'Register gagal, Silahkan Ulangi Kembali...');
						 redirect('register/prospective_member');
				   }
        }
        redirect('register/prospective_member','refresh');
    }
	
}
