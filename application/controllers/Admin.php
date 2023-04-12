<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Manggota');

        // cek login user
        if ($this->session->userdata('logged') != TRUE) {
            $url = base_url('auth');
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

    public function getAnggota()
    {
        $results = $this->Manggota->getDataTable();
        $data = [];
        $no = $_POST['start'];
        foreach ($results as $field) {
            $row = array();
            $row[] = ++$no;
            $row[] = $field->npk;
            $row[] = $field->nama;
            $row[] = $field->jabatan;
            $row[] = $field->unit;
            $row[] = $field->nope;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST["draw"],
            // "draw" => intval($_POST["draw"]),
            "recordsTotal" => $this->Manggota->count_all_data(),
            "recordsFiltered" => $this->Manggota->count_filtered_data(),
            "data" => $data,
        );
        // $this->output->set_content_type('application/json')->set_output(json_encode($output));
        echo json_encode($output);
    }

    public function addAnggota()
    {
        $data = [
            'npk' => htmlspecialchars($this->input->post('npk')),
            'nama' => htmlspecialchars($this->input->post('nama')),
            'jabatan' => htmlspecialchars($this->input->post('jabatan')),
            'unit' => htmlspecialchars($this->input->post('unit')),
            'pendidikan' => htmlspecialchars($this->input->post('pendidikan')),
            'gender' => htmlspecialchars($this->input->post('gender')),
            'nope' => htmlspecialchars($this->input->post('nope')),
            'agama' => htmlspecialchars($this->input->post('agama')),
            'hobi' => htmlspecialchars($this->input->post('hobi')),
            'tmt_kerja' => htmlspecialchars($this->input->post('tmt_kerja')),
            'alamat' => htmlspecialchars($this->input->post('alamat')),
        ];

        if ($this->Manggota->create($data) > 0) {
            $message['status'] = 'success';
        } else {
            $message['status'] = 'failed';
        };

        $this->output->set_content_type('application/json')->set_output(json_encode($message));
    }
}
