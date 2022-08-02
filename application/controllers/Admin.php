<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{
		$data ['title']='Dashboard';
		$data ['register']=$this->db->get_where('register',['email'=> $this->session->userdata('email')])->row_array();
		
		$this->load->view('templet/sidebar', $data );
		$this->load->view('templet/topbar', $data);
		$this->load->view('admin/index' ,$data);
		$this->load->view('templet/footer' );
	}

}
