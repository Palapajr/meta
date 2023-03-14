<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model('manggota');
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('auth');
            redirect($url);
		};
        
	}

	public function index()
	{
        $data = array(
			'title' => "Dashboad Meta",
			'menu' => 'dashboard'
		);
        
		$this->load->view('admin/dashboard', $data);

	}

    public function anggota()
    {

        $data = array(
			'title' => "Data Anggota",
            'menu' => 'anggota'
		);
        
		$this->load->view('admin/anggota', $data);
    }

    public function tampildataanggota()
    {
        $data = $this->manggota->get_list();
        echo json_encode($data);
    }


    public function addanggota()
    {
        $nama = $this->input->post('nama');
        $nama = $this->input->post('');
        $nama = $this->input->post('nama');
        $nama = $this->input->post('nama');
        $nama = $this->input->post('nama');
        $nama = $this->input->post('nama');
    }

    public function editanggota()
    {
        # code...
    }

    public function detailanggota()
    {
        # code...
    }

    public function deleteangota()
    {
        # code...
    }
}
