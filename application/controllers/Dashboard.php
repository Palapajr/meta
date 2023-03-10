<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('auth');
            redirect($url);
		};
	}

	public function index()
	{
        $data = array(
			'title' => "Dashboad Meta"
		);
        
		$this->load->view('admin/dashboard', $data);

	}
}
