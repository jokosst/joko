<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {

	public function Getgambar($where=""){
		$data = $this->db->query('select * from gambar '.$where);
		return $data;
		
	}
	
}
?>
