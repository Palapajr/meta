<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
        $data = array(
			'title' => "Dashboad Meta"
		);
        
		$this->load->view('admin/dashboard', $data);

	}
}