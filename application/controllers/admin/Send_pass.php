<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send_pass extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if ($this->session->userdata('ses_email') != true){
            redirect('index.php/login');
        }
    }
    public function index()
    {
      // Konfigurasi email
        $config = [
               'mailtype'  => 'html',
               'charset'   => 'utf-8',
               'protocol'  => 'smtp',
               'smtp_host' => 'ssl://smtp.gmail.com',
               'smtp_user' => 'almindojayaabadi@gmail.com',    // Ganti dengan email gmail kamu
               'smtp_pass' => 'adminalmindo',      // Password gmail kamu
               'smtp_port' => 465,
               'crlf'      => "rn",
               'newline'   => "rn"
           ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('no-reply@masrud.com', 'MasRud.com | M. Rudianto');

        // Email penerima
        $this->email->to('penerima@gmail.com'); // Ganti dengan email tujuan kamu

        // Lampiran email, isi dengan url/path file
        $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

        // Subject email
        $this->email->subject('Kirim Email dengan SMTP Gmail | MasRud.com');

        // Isi email
        $this->email->message("Ini adalah contoh email CodeIgniter yang dikirim menggunakan SMTP email Google (Gmail).<br><br> Klik <strong><a href='https://masrud.com/post/kirim-email-dengan-smtp-gmail' target='_blank' rel='noopener'>disini</a></strong> untuk melihat tutorialnya.");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
    }
}