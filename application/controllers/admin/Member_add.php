<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_add extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if ($this->session->userdata('ses_email') != true){
        	redirect('login');
        }
        $this->load->model('admin/Create_prospective_member');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function index()
	{
        $data['prospective_member'] = $this->Create_prospective_member->tampil_data()->result();
		$data['content'] = 'admin/prospective_member_view';
		$this->load->view('admin/dashboard', $data);
    }
	
    public function send_mail()
    {
		
        $password       = $this->input->post('password');
        $to             = $this->input->get('email');
		$subject        = "Akun Anda Sudah Aktif";

		$message = '<html><head>
        			<title>Almindo Jaya Abadi</title>
    			</head><body>';
		$message .= '<img src="https://almindo.co/wp-content/uploads/2018/01/logoalmindo.png" nosend="1" border="0" width="300" height="148" alt="almindo" title="almindo">
				<h3>Terimakasih, Atas kepercayaanya karena telah memilih kami</h3>
				<h5>Silahkan Login dengan Email dan Password, yang telah di berikan</h5>
        			<table cellspacing="0" style="border: 2px dashed #FB4314; width: 300px; height: 200px;">
            			 	<tr>
                			<th>Password:</th><td>';
		$message .= "$password";
		$message .= '</td>
            				</tr>
            				<tr style="background-color: #e0e0e0;">
                			<th>Email:</th><td>';
		$message .= "$to";
		$message .= '</td>
           				</tr>
            				<tr>
                			<th>Login disini:</th><td><a href="http://staging.almindo.co/login">staging.almindo.co</a></td>
            				</tr>
        			</table>
    			</body>
       	             </html>';
		$message .= '</body></html>';
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: Almindo Jaya Abadi<almindo@staging.almindo.co>' . "\r\n";
		if(mail($to,$subject,$message,$headers)):
			$msg = '<html><head>
						</head><body onload="launch_toast()">';
			$msg .= '</body></html>';
			$this->session->set_flashdata("notif",$msg);
		else:
			$this->session->set_flashdata("notif",'Email Gagal Terkirim');
		endif;
    }
	
    public function save()
    {
        $id      = $this->input->get('id');
        $accept      = $this->input->post('accept');
        if ($accept)
            {
                $company_name	= $this->input->post('company_name');
    			$company_owner	= $this->input->post('company_owner');
    			$company_phone_number	= $this->input->post('company_phone_number');
    			$address		= $this->input->post('address');
                $pic	        = $this->input->post('pic');
                $no_pic     	= $this->input->post('no_pic');
    			$bank       	= $this->input->post('bank');            
    			$branch_bank   	= $this->input->post('branch_bank');            
    			$account_number = $this->input->post('account_number');
                $password       = $this->input->post('password');
                $email	        = $this->input->post('email');

                $data = array(
                    'company_name'      => $company_name,
                    'company_owner'     => $company_owner,
                    'company_phone_number'     => $company_phone_number,
                    'address'     		=> $address,
                    'pic'               => $pic,
                    'no_pic'            => $no_pic,
                    'bank'              => $bank,
                    'branch_bank'       => $branch_bank,
                    'account_number'    => $account_number,
                    'password'          => $password,
                    'email'             => $email,
                    'doj'               => date('Y-m-d H:i:s'),
                    'role'              => 4,
                    'status'            => 2

                );
                    $this->Create_prospective_member->adding($data,'member');
                    $this->send_mail();
                    if ($id == true)
                        {   
					        $id             = $this->input->get('id');
                            $status         =  2;
                            $this->Create_prospective_member->update($status,$id);
							 redirect('admin/member_add');
                        }
            }
            else
             { 
                 $id             = $this->input->get('id');
                 $status         =  3;
				 //echo $id;
                 $this->Create_prospective_member->update($status,$id);
				 redirect('admin/member_add');
             }
    }
}
?>

