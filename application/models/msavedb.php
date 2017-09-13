<?php
/**
*
*/
class msavedb extends CI_Model
{
	//fungsi untuk mencek duplicate data
	function mcheckduplicaterowf($sql)
	{
		$query = $this->db->query($sql);
		if($query->num_rows() == 0){
			return true;
		}else {
			return false;
		}
	}

	//fungsi untuk save ke database
	function msavedbf($file)
	{
		$sql = "select link from berita where link='$file[link]'";
		$nilai = $this->mcheckduplicaterowf($sql);

		if($nilai){
			return $this->db->insert("berita", $file);
		}else {
			return false;
		}
	}
}
 ?>
