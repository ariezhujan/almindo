<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('login/login_model');
    }
 
    function index(){
        if($this->session->userdata('akses') == 1){
            redirect('index.php/admin/dashboard');
        }
		else if($this->session->userdata('akses') == 2){
            redirect('/finance/dashboard');
        }
		else if($this->session->userdata('akses') == 4){
            redirect('/member/dashboard');
        }else{
        $this->load->view('login');
        }
    }
 
    function auth(){
        $email=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
        $cek=$this->login_model->auth_cek($email,$password);
        $cek_admin=$this->login_model->auth_admin($email,$password);
        $cek_member=$this->login_model->auth_member($email,$password);
        $cek_finance=$this->login_model->auth_finance($email,$password);
            if($cek_admin->num_rows() > 0){ //jika login sebagai admin
                $data=$cek_admin->row_array();
                $this->session->set_userdata('masuk',TRUE);
                    if($data['role']=='1'){ //Akses admin
                        $this->session->set_userdata('akses','1');
						$this->session->set_userdata('ses_id',$data['id']);
                        $this->session->set_userdata('ses_pass',$data['password']);
                        $this->session->set_userdata('ses_email',$data['email']);
                        $this->session->set_userdata('ses_nama',$data['company_name']);
                        redirect('admin/dashboard');
                    }
            }
			else if($cek_finance->num_rows() > 0){ //jika login sebagai Staff
                $data=$cek_finance->row_array();
                $this->session->set_userdata('masuk',TRUE);
                    if($data['role']=='2'){ //Staff
                        $this->session->set_userdata('akses','1');
						$this->session->set_userdata('ses_nik',$data['nik']);
						$this->session->set_userdata('ses_nama',$data['nama']);
						$this->session->set_userdata('ses_divisi',$data['divisi']);
                        $this->session->set_userdata('ses_pass',$data['password']);
                        $this->session->set_userdata('ses_email',$data['email']);
                        redirect('staff/dashboard');
                    }
            }
			else if($cek_member->num_rows() > 0){ //jika login sebagai member
                $data=$cek_member->row_array();
                $this->session->set_userdata('masuk',TRUE);
                    if($data['role']=='4'){ //Akses member
                        $this->session->set_userdata('akses','4');
                        $this->session->set_userdata('ses_id',$data['id']);
                        $this->session->set_userdata('ses_pass',$data['password']);
                        $this->session->set_userdata('ses_email',$data['email']);
                        $this->session->set_userdata('ses_nama',$data['company_name']);
                        $this->session->set_userdata('ses_owner',$data['company_owner']);
                        $this->session->set_userdata('ses_pic',$data['pic']);
                        $this->session->set_userdata('ses_no_pic',$data['no_pic']);
                        $this->session->set_userdata('ses_bank',$data['bank']);
                        $this->session->set_userdata('ses_account_number',$data['account_number']);
                        $this->session->set_userdata('ses_company_number',$data['company_number']);
                        $this->session->set_userdata('ses_phone_number',$data['phone_number']);
                        $this->session->set_userdata('ses_adress',$data['adress']);
                        redirect('member/dashboard');
                    }
			}else{ 
                    $this->session->set_flashdata('msg', 'Masukan password dan email lagi..');
                    redirect('index.php/login');
            }
    }
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('login');
        redirect($url);
    }
}
?>