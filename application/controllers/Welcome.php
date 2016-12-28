<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$comp = array(
		"gambar" => $this->mymodel -> Getgambar()->result_array()
		);
		$this->load->view("profile-page",$comp);
		$data = array ();
	}

}
