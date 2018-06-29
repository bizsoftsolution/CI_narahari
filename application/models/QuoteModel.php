<?php
class QuoteModel extends CI_Model
{
	function __construct() {
        // Call the Model constructor
        parent::__construct();

		$this->load->database();
        }

       function addcheckout($data1)
        {
          	if($this->db->insert('tbl_checkout', $data1))
			{
				return true;
			}
        }

		function insertcartproductdetail($pid,$pname,$qty,$insert_id)
        {
			$this->db->set('product_id',$pid);
			$this->db->set('product_name',$pname);
			$this->db->set('qty',$qty);
			$this->db->set('checkout_id',$insert_id);
			$this->db->insert('tbl_order_details');
			
			$data7 = $this->db->get_where("tbl_product", array("id"=>$pid))->result();
			foreach($data7 as $rowdata7)
			{
				$idd = $rowdata7->id;
				$qtyy = $rowdata7->product_qty - $qty;
			}
			$this->db->set('product_qty',$qtyy);
			$this->db->where("id", $idd);
			$this->db->update("tbl_product");
        }
		
		
		// Backend Getguote
		
		function getquoteList()
		{
			$this->db->select("*");
			$this->db->from("tbl_checkout");
			//$this->db->join('tbl_order_details', 'tbl_checkout.checkout_id = tbl_order_details.checkout_id', 'left');
			$query = $this->db->get();
			return $query->result();
		}
		function getquoteView($id)
		{
			$this->db->select("*");
			$this->db->from("tbl_order_details");
			$this->db->where("checkout_id", $id);
			$query = $this->db->get();
			return $query->result();
		}
		


			
		
}