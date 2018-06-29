<?php
class Getquote extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('QuoteModel');
    $this->load->helper('url');
	  $this->load->library('session');
	/* if ($this->session->userdata('user_type') != 'ADMIN')
	{
        redirect('login');
	} */
  }
  function index()
  {
    $data['getquoteList']=$this->QuoteModel->getquoteList();
	//var_dump($data);
     $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('getquote/getquoteList',$data);
    $this->load->view('template/footer'); 
  }
  function View($id)
  {
	$data['getquoteView']=$this->QuoteModel->getquoteView($id);
	//var_dump($data);
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('getquote/getquoteView',$data);
    $this->load->view('template/footer'); 
  }

}
?>
