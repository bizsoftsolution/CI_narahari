<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quote extends CI_Controller {

        public function __construct()
	{
            parent::__construct();
            //load model
           // $this->load->model('dashboard_model');
            //$this->load->model('Category_Model');
            $this->load->model('QuoteModel');
           // $this->load->model('Product_Model',"product_model");
            $this->load->library('cart');
            $this->load->helper('url');  
            $this->load->helper('form');  
            $this->load->library('session');
            $this->load->database();
			
            //$this->load->library('encrypt');
           // $this->cart->product_name_rules = '[:print:]';
        }


        public function index()
        {
			$this->load->view('front/template/header');
			$this->load->view('front/checkout');
			$this->load->view('front/template/footer'); 
            
        }
       
         public function Addcart()
        {
			if($this->input->post('add_checkout_data'))
			{
				//add to cart in database
				if($this->cart->contents()!="")
				{
					
					$data1 = array(
						"firstname"=>$this->input->post('fname'),
						"lastname"=>$this->input->post('lname'),
						"address1"=>$this->input->post('address1'),
						"address2"=>$this->input->post('address2'),
						"phone"=>$this->input->post('phone'),
						"email"=>$this->input->post('email'),
						"city"=>$this->input->post('city'),
						"country"=>$this->input->post('country'),
						"order_date"=>date('Y-m-d H:i:s')
					);
					$this->QuoteModel->addcheckout($data1);
					$insert_id=$this->db->insert_id();
					//Destroy and update tbl_cart in database
					foreach ($this->cart->contents() as $items)
					{
						$this->QuoteModel->insertcartproductdetail($items['id'],$items['name'],$items['qty'],$insert_id);
					}
					
					$this->cart->destroy();
					
					$this->session->set_flashdata('SUCCESSMSG','Your Order Successfully Placed!!');
					redirect('Quote/Confirmation');
						 
					/* $data = array(
						"orderno"=> $unique,
						"orderdate"=> date('Y-m-d H:i:s'),
						"address1"=>$this->input->post('address1'),
						"address2"=>$this->input->post('address2'),
						"phone"=>$this->input->post('phone'),
						"country"=>$this->input->post('country'),
						"city"=>$this->input->post('city'),
						"province"=>$this->input->post('state'),
						"postcode"=>$this->input->post('postcode'),
						"shippingchrge"=>$this->input->post('Order_chrge'),
						"gst"=>$this->input->post('gst_value'),
						"ototal"=>$totall
						 );
				 
					$message = $this->load->view('front/orderSummary', $data, TRUE);
					/* $config = Array(
					  'protocol' => 'smtp',
					  'smtp_host' => 'ssl://smtp.googlemail.com',
					  'smtp_port' => 465,
					  'smtp_user' => 'mail@denariusoft.com', // change it to yours
					  'smtp_pass' => 'test123!@#', // change it to yours
					  'mailtype' => 'html',
					  'charset' => 'iso-8859-1',
					  //'charset' => 'utf-8',
					  'wordwrap' => TRUE
					); 
					 //Load email library 
					 $this->load->library('email');
		 
					 $from_email = "rajkumar.bizsoft@gmail.com"; 
					 $to_email = $this->input->post('email'); 
			   
					 $this->email->from($from_email, 'Bombay Fashion'); 
					 $this->email->to($to_email);
					 $this->email->subject('Bombay Fashion'); 
					 $this->email->message($message); 
			   
					 //Send mail 
					 if($this->email->send()) 
					 {
						 $this->session->set_flashdata('SUCCESSMSG','Your Order Successfully Placed!!');
						 redirect('Checkout/Confirmation');
					 } */
					 //$this->session->set_flashdata("email_sent","Email sent successfully."); 
					// else 
					// $this->session->set_flashdata("email_sent","Error in sending Email."); 
					// $this->load->view('email_form');
		 
					
				}
			}         
		}

	function Confirmation()
	{
		$this->load->view('front/template/header');
		$this->load->view('front/confirmation');
		$this->load->view('front/template/footer');
	}
       
	
}
