<?php
class Product extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('ProductModel');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
	}
	function index()
	{
	  $data['productList']=$this->ProductModel->productList();
	  $this->load->view('template/header');
	  $this->load->view('template/sidebar');
	  $this->load->view('product/productList', $data);
	  $this->load->view('template/footer'); 
	}
		
	public function Add()
	  {
		$result = array('message'=>'');
		if($this->input->post('Submit_product_data')){
			
			//Check whether Banner picture Upload
            if(!empty($_FILES['bg_banner']['name'])){
                $config['upload_path'] = './upload/products/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|JPG';
                $config['file_name'] = $_FILES['bg_banner']['name'];
                $config['max_size']	= '0'; //204800
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('bg_banner')){
                    $uploadData = $this->upload->data();
                    $bg_picture = $uploadData['file_name'];
                }else{
                    $bg_picture = '';
                }
            }else{
                $bg_picture = '';
            }
			
			$data = array(
				'product_name' => $this->input->post('productname'),						
				'product_desc' => $this->input->post('productdescription'),					
				'product_qty' => $this->input->post('digits'),						
				'product_img' => $bg_picture,																	
				'created_date' =>date("Y-m-d H:i:s"),						
				'created_by' =>$this->session->userdata('user_id')				
			);
			$result['message'] = $this->ProductModel->Add($data);
		  }
		  
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('product/productAdd',$result);
			$this->load->view('template/footer');
	  }
	  public function Edit($id)
	  {
		$result = array('message'=>'');
		if($this->input->post('Update_product_data'))
		{
			
			if(!empty($_FILES['edit_bg_image']['name'])){
			$config['upload_path'] = './upload/products/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = $_FILES['edit_bg_image']['name']; 
			//Load upload library and initialize configuration
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
				
				if($this->upload->do_upload('edit_bg_image')){
					$uploadData = $this->upload->data();
					$edit_bg_picture = $uploadData['file_name'];
				}else{
					$edit_bg_picture = '';
				}
			}else{
				$edit_bg_picture = $this->input->post('already_bannerimg');
			}
		
			
			$data = array(
				'product_name' => $this->input->post('productname'),						
				'product_desc' => $this->input->post('productdescription'),					
				'product_qty' =>$this->input->post('digits'),						
				'product_img' => $edit_bg_picture						
									
			);
			
		  $result['message'] = $this->ProductModel->Edit($data,$id);
		  if($result['message'] == 'SUCCESS')
		  {
			$messge = array('message' => 'Product details updated successfully','class' => 'alert alert-success fade in');
			$this->session->set_flashdata('notification', $messge);
			$base_url=base_url();
			redirect("$base_url"."Product");
		  }
		}
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$result['product']=$this->ProductModel->Get($id);
		$this->load->view('product/productEdit',$result);
		$this->load->view('template/footer');
	  }
	public function Delete($id)
	{
	 $tid  = $this->ProductModel->get_product_by_id($id); 
		   if($tid->product_img)
			{
				$this->db->query("Delete from tbl_product where id = '".$tid->id."'");
				if(file_exists('upload/products/'.$tid->product_img)) 
				{
					unlink('upload/products/'.$tid->product_img);
				}
			}
			
			//unlink("upload/products/".$id->product_image);
			$messge = array('message' => 'Product details deleted successfully','class' => 'alert alert-danger fade in');
			$this->session->set_flashdata('notification', $messge);
			$base_url=base_url();
			redirect("$base_url"."Product");
  } 
    
 
}
?>
