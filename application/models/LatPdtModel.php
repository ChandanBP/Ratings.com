<?php

class LatPdtModel extends CI_Model{

   /*public function getLatestPdt($pid){
       
	   $this->db->select('*');
	   $this->db->from('GADGETS');
	   $this->db->where('Gadget_id',$pid);
	   
	   
	   $query = $this->db->get();
	   $result['res'] = $query->result();
	   return $result;
   }*/
   
   public function getLatestPdt($pid){
       
	   
	   $read_db = $this->load->database('read', TRUE);
	   $read_db->select('*');
	   $read_db->from('GADGETS');
	   $read_db->where('Gadget_id',$pid);
	   
	   
	   $query = $read_db->get();
	   $result['res'] = $query->result();
	   return $result;
   }
}
?>