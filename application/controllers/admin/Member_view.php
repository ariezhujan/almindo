<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_view extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }
	}
	public function index()
	{
		$this->load->model('admin/Create_prospective_member');
		$data['prospective_member'] = $this->Create_prospective_member->tampil_data_accept()->result();
		$data['content'] = 'admin/member_view';
		$this->load->view('admin/dashboard', $data);
	}
	public function index1()
	{	
		$this->load->model('admin/Editprofil');
		$data['member'] = $this->Editprofil->tampil_data_client()->result();
		$data['content'] = 'admin/edit_client';
		$this->load->view('admin/dashboard', $data);
	}
	public function save()
	{
		$id = $this->input->get('id');	
		   if ($id)
                {
					$this->load->model('admin/Editprofil');
			        $id = $this->input->get('id');
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
                    $data=$this->Editprofil->update_client($id,$company_name,$company_owner,$company_phone_number,$address,$pic,$no_pic,$bank,$branch_bank,$account_number,$email,$password);
					   if($data == true)
					   {
						   $message = '<html><head>
											<title>Almindo Jaya Abadi</title>
										</head><body onload="launch_toast()">';
							$message .= '</body></html>';
							 $this->session->set_flashdata("notif",$message);
							 redirect('index.php/admin/member_view');
					   }else{
							 $this->session->set_flashdata("notif",'Perubahan data gagal!!');
							 redirect('index.php/admin/member_view');
					   }
                }else
				{
					redirect('index.php/admin/member_view');
				}
    }
 
}

?>
