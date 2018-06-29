<?php
class AstromailModel extends CI_Model 
{
 function __construct()
    {
              parent::__construct();
              $this->load->database();
				//$this->load->helper('file');
    }
	function astromailList()
	{
		$this->db->where('status',0);
		$this->db->order_by('id','desc');
		$bookings = $this->db->get('astromail');
		return $bookings->result();
    }
}
?>
