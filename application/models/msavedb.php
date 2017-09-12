<?php 
/**
* 
*/
class msavedb extends CI_Model
{
	
	function msavedbf($data)
	{
		return $this->db->insert("grabsite", $data);
	}
}
 ?>