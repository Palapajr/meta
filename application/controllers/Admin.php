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
        if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('npk', 'NPK', 'trim|required', ['required' => '%s Tidak boleh kosong']);
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required', ['required' => '%s Tidak boleh kosong']);
            $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required', ['required' => '%s Tidak boleh kosong']);
            $this->form_validation->set_rules('unit', 'Unit Anggota', 'trim|required', ['required' => '%s Tidak boleh kosong']);
            $this->form_validation->set_rules('pendidikan', 'Pendidikan Terakhir', 'trim|required', ['required' => '%s Tidak boleh kosong']);
            $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'trim|required', ['required' => '%s Tidak boleh kosong']);
            $this->form_validation->set_rules('nope', 'No Hp Anggota', 'trim|required', ['required' => '%s Tidak boleh kosong']);
            $this->form_validation->set_rules('tmt_kerja', 'TMT Kerja Anggota', 'trim|required', ['required' => '%s Tidak boleh kosong']);
            $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required', ['required' => '%s Tidak boleh kosong']);


			if ($this->form_validation->run() == FALSE) {
				$data = array('responce' => 'error', 'message' => validation_errors());
			} else {
				$ajax_data = $this->input->post();
				if ($this->manggota->insert_anggota($ajax_data)) {
					$data = array('responce' => 'success', 'message' => 'Record added Successfully');
				} else {
					$data = array('responce' => 'error', 'message' => 'Failed to add record');
				}
			}

			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
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
