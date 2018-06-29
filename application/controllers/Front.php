<?php
class Front extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('FrontModel');
    $this->load->helper('url');
	 $this->load->helper('form');
	$this->load->library('session');
	$this->load->library('cart');
  }

  function index()
  {
    $this->load->view('front/template/header');
    $this->load->view('front/template/slider');
    $this->load->view('front/index');
    $this->load->view('front/template/footer');
  }
  function about()
  {
    $this->load->view('front/template/header');
    $this->load->view('front/about');
    $this->load->view('front/template/footer');
  }
  function products()
  {
	$data['products'] = $this->FrontModel->products();
    $this->load->view('front/template/header');
    $this->load->view('front/products', $data);
    $this->load->view('front/template/footer');
  }
  function contact()
  {
    $this->load->view('front/template/header');
    $this->load->view('front/contact');
    $this->load->view('front/template/footer');
  }
  
  function product_description($id)
  {
	$data['product_description'] = $this->FrontModel->product_description($id);
    $this->load->view('front/template/header');
    //$this->load->view('front/template/slider');
    $this->load->view('front/product_description',$data);
    $this->load->view('front/template/footer');
  }
  
  function add()
	{
		//$image =  $this->input->post('image');
		$insert_data = array(
				'id' => $this->input->post('id'),
				'name' => $this->input->post('name'),
				'image' => $this->input->post('image'),
				'price' => $this->input->post('price'),
				'qty' => $this->input->post('qty')
		);		
		$this->cart->insert($insert_data);
		
		
	   redirect('Front/getquote');
	}
	public function getquote()
        {
			//$data['category_list'] = $this->Category_Model->get_list();
            //$data['subcate'] = $this->Subcategory_Model->viewSubCategoryList();
			//$data['category']=$this->FrontModel->Category();
			$this->load->view('front/template/header');
			$this->load->view('front/getquote');
			$this->load->view('front/template/footer'); 
            
        }
	function remove($rowid) {
                   
		if ($rowid==="all"){
                   	$this->cart->destroy();
		}else{
                   	$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);
                   	$this->cart->update($data);
		}
            	redirect('Front/getquote');
	}
	
	function update_cart(){
            // Recieve post values,calcute them and update
            echo $cart_info =  $_POST['cart'] ;
            foreach( $cart_info as $id => $cart)
            {	
                $rowid = $cart['rowid'];
                $price = $cart['price'];
                $amount = $price * $cart['qty'];
                $qty = $cart['qty'];

                    $data = array(
                            'rowid'   => $rowid,
                            'price'   => $price,
                            'amount' =>  $amount,
                            'qty'     => $qty
                    );

                    $this->cart->update($data);
            }
            redirect('Front/getquote');        
	}

  
}
?>
