<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Createorder extends CI_Controller {
	function __construct(){
        parent::__construct();
        if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }
		$this->load->model('member/Create_order');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }
	public function index()
	{	
		$data['content'] = 'member/step_order/step1';
		$this->load->view('member/dashboard', $data);
	}
	public function index1()
	{	
		$data['order'] = $this->Create_order->tampil_data()->result();
		$data['content'] = 'member/step_order/step2';
		$this->load->view('member/dashboard', $data);
	}
	public function save1()
	{
		 $id = $this->input->post('id'); 
            if ($id == true)
                {
					   $id = $this->input->post('id');
					   $po = $this->input->post('po');
					   $calories = $this->input->post('calories');
					   $size = $this->input->post('size');
					   $tujuan = $this->input->post('tujuan');
					   $qtygoods = $this->input->post('qtygoods');
					   $qtydelivery = $this->input->post('qtydelivery');
                        $data = array(
							'id'      		=> $id,
							'po'      		=> $po,
							'calories'      => $calories,							
							'size'          => $size,
							'tujuan'        => $tujuan,
							'qtygoods'      => $qtygoods,
							'qtydelivery'   => $qtydelivery,
							'tanggal_order'     => date('Y-m-d H:i:s')
						);
					   $data=$this->Create_order->adding($data,'order_goods');
					   if(!$data)
					   {	$this->session->set_userdata('po',"$po");			
							$this->session->set_userdata('qtydelivery',"$qtydelivery");				
							$this->session->set_userdata('qtygoods',"$qtygoods");
							 redirect('index.php/member/createorder/index1');
					   }else{
							 //redirect('index.php/member/editprofile');
					   }
                }else{
					$message = '<html><head>
								<title>Almindo Jaya Abadi</title>
					    		</head><body onload="launch_toast()">';
					$message .= '</body></html>';
					$this->session->set_flashdata("notif",'$message');
					//redirect('member/editprofile');
				}
    }
	
		public function save2()	{	
			$id = $this->input->post('id');         
			if ($id == true)               
			{					
				$no = $this->input->post('qtydelivery');			
				$id = $this->input->post('id');					
				$po = $this->input->post('po');					
				$delivery_date = $this->input->post('delivery_date');		
				$qtypart = $this->input->post('qtypart');					
				$data =array();		
				for($i=0; $i<$no; $i++) {		
					$data[$i] = array(				
					'id' => $id[$i], 				
					'po' => $po[$i],				
					'delivery_date' => $delivery_date[$i],	
					'qtypart' => $qtypart[$i],				
					'date_request'     => date('Y-m-d H:i:s')	
					);				
				}				
				$data=$this->Create_order->adding1($data,'date_delivery');		
				if(!$data)				
				{			
					$message = "<html><head>									
					<title>Almindo Jaya Abadi</title>							
					</head><body> 
						<div class='alert alert-success'>				
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>	
							<i class='material-icons'>close</i>									
							</button>								
							<span>									
							<b> Send Order Success </b></span>		
						</div>";							
					$message .= "</body></html>";		
					$this->session->set_flashdata("notif",$message);	
					redirect('index.php/member/createorder/index');		
				}else{						
					//redirect('index.php/member/editprofile');		
				}          
			}else		
			{		
				$message = '<html><head>			
				<title>Almindo Jaya Abadi</title>
				</head><body onload="launch_toast()">';		
				$message .= '</body></html>';				
				$this->session->set_flashdata("notif",'$message');		
				//redirect('member/editprofile');			
			} 
		}
		public function del_tabel()
		{		
			$id = $this->session->userdata('ses_id');     
			if ($id == true)         
			{		
			$id = $this->session->userdata('ses_id'); 	
			$po = $this->input->get('po');				
			$qtydelivery = $this->input->get('qtydelivery');     
			$data=$this->Create_order->del_order($id,$po,$qtydelivery);		
				if($data == true)					
				{			
					$this->session->set_userdata('qtydelivery',"$qtydelivery");			
					redirect('member/Createorder/index1');				
				}else{					
					$this->session->set_flashdata("notif",'Perubahan data gagal!!');		
					redirect('member/Createorder/index1');			
				}          
			}else		
			{		
				redirect('index.php/member/editprofile');		
			}   
		}
		public function checkpo()
		 {
			  if($this->Create_order->getPo($_POST['po'])){
			   echo '<label class="text-danger"><span><i class="fa fa-times" aria-hidden="true">
			   </i> This PO is already Used</span></label>';
			  }
			  else {
			   echo '<label class="text-success"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i> PO is available</span></label>';
			  }
		 }
	}
