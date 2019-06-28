<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Charcoalpricing extends CI_Controller {

	function __construct(){

        parent::__construct();

        if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

	public function index()

	{	
		$this->load->model('admin/Create_prospective_member');
		$data['prospective_member'] = $this->Create_prospective_member->tampil_data_accept()->result();
		$data['content'] = 'admin/pricing/pricecharcoal';
		$this->load->view('admin/dashboard', $data);

	}
	public function index_price()

	{	
		$this->load->model('admin/pricing/pricing');
		$data['pricing'] = $this->pricing->tampil_data()->result();
		$data['content'] = 'admin/pricing/charcoalpricing';
		$this->load->view('admin/dashboard', $data);

	}
	public function index1()

	{	
		$this->load->model('admin/pricing/pricing');
		$data['content'] = 'admin/pricing/set_pricing';
		$this->load->view('admin/dashboard', $data);
	}
	public function index2()

	{	
		$this->load->model('admin/Create_prospective_member');
		$data['prospective_member'] = $this->Create_prospective_member->tampil_data_accept()->result();
		$data['content'] = 'admin/member_view';
		$this->load->view('admin/dashboard', $data);
	}
	public function index3()

	{	
		$this->load->model('admin/pricing/pricing');
		$data['content'] = 'admin/pricing/edit_pricing';
		$this->load->view('admin/dashboard', $data);
	}
	public function save()
    {
        $id      = $this->input->get('id');
        $company_name      = $this->input->get('company_name');
        if ($id)
            {
                $id             = $this->input->post('id');
                $company_name	= $this->input->post('company_name');        
    			$calories       = $this->input->post('calories');
                $size           = $this->input->post('size');
                $price	        = $this->input->post('pricing');
				$n=sizeof($id);
                $data = array();
				for($i=0; $i < $n; $i++) {		
					$data[$i] = array(	
                    'id'                => $id[$i],
                    'company_name'      => $company_name[$i],
                    'calories'          => $calories[$i],
                    'size'     		    => $size[$i],
                    'pricing'           => $price[$i]
                );
				}
					$this->load->model('admin/pricing/pricing');
                    $data = $this->pricing->adding($data,'pricing');
					redirect("admin/pricing/Charcoalpricing");
            }
            else
             { 
                echo "SOME PROBLEM";
             }
    }
	public function update()
    {
				$this->load->model('admin/pricing/pricing');
                $no             = $this->input->post('no');
                $price	        = $this->input->post('pricing');
                $company_name = $this->input->get('company_name');
				$data=$this->pricing->update($no,$price);
					   if($data)
					   {
						   $message = '<html><head>
											<title>Almindo Jaya Abadi</title>
										</head><body onload="launch_toast()">';
							$message .= '</body></html>';
							 $this->session->set_flashdata("notif",$message);
							 $id = $this->input->post('id');
							 $company_name = $this->input->get('company_name');
							 //redirect("admin/pricing/charcoalpricing?id=$id&company_name=$company_name");
					   }else{
							 echo 'SOME TROUBLE....';
							 //redirect('admin/pricing/charcoalpricing?');
					   }
					   echo $id;
					   echo $company_name;
				 redirect("admin/pricing/charcoalpricing?id=$id&company_name=$company_name");
    }

}
   




