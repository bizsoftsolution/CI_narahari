<?php
class Astromail extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('AstromailModel');
    $this->load->helper('url');
	  $this->load->library('session');
	if ($this->session->userdata('user_type') != 'ADMIN')
	{
        redirect('login');
	}
  }
  function astromailList()
  {
    $data['astromailList']=$this->AstromailModel->astromailList();
	//var_dump($data);
     $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('mail_list/astroMailList',$data);
    $this->load->view('template/footer'); 
  }

}
?>
