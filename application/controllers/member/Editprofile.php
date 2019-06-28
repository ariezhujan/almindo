<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editprofile extends CI_Controller {
	function __construct(){
        parent::__construct();
        if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }
		$this->load->model('member/Editprofil');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }
	public function index()
	{	
		$id = $this->session->userdata('ses_id');
		$data['member'] = $this->Editprofil->tampil_data()->result();
		$data['content'] = 'member/user';
		$this->load->view('member/dashboard', $data);
	}
	public function save()
	{
		 $id = $this->session->userdata('ses_id');
           if ($id)
                {
			        $id = $this->session->userdata('ses_id');
				    $company_name = $this->input->post('company_name');
			        $company_owner = $this->input->post('company_owner');
				    $company_phone_number = $this->input->post('company_phone_number');
				    $address = $this->input->post('address');
				    $pic = $this->input->post('pic');
				    $no_pic = $this->input->post('no_pic');
				    $bank = $this->input->post('bank');
				    $branch_bank = $this->input->post('branch_bank');
				    $account_number = $this->input->post('account_number');
				    $email = $this->input->post('email');
				    $password = $this->input->post('password');
                    $data=$this->Editprofil->update($id,$company_name,$company_owner,$company_phone_number,$address,$pic,$no_pic,$bank,$branch_bank,$account_number,$email,$password);
					   if($data == true)
					   {
						   $message = '<html><head>
											<title>Almindo Jaya Abadi</title>
										</head><body onload="launch_toast()">';
							$message .= '</body></html>';
							 $this->session->set_flashdata("notif",$message);
							 redirect('index.php/member/editprofile');
					   }else{
							 $this->session->set_flashdata("notif",'Perubahan data gagal!!');
							 redirect('index.php/member/editprofile');
					   }
                }else
				{
					redirect('index.php/member/editprofile');
				}
    }
}
        

