<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('Mlogin','Mlogin');
    }

    function index(){
        if($this->session->userdata('logged') !=TRUE){
            $this->load->view('view-login');
        }else{
            $url=base_url('dashboard');
            redirect($url);
        };
    }

    function autentikasi(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
                
        $validasi_username = $this->Mlogin->query_validasi_username($username);
        if($validasi_username->num_rows() > 0){
            $validate_ps=$this->Mlogin->query_validasi_password($username,$password);
            if($validate_ps->num_rows() > 0){
                $x = $validate_ps->row_array();
                if($x['user_status']=='1'){
                    $this->session->set_userdata('logged',TRUE);
                    $this->session->set_userdata('user',$username);
                    $id=$x['id_user'];
                    if($x['user_akses']=='1'){ //Administrator
                        $name = $x['fullname'];
                        $this->session->set_userdata('id',$id);
                        $this->session->set_userdata('name',$name);
                        redirect('dashboard');

                    }else if($x['user_akses']=='2'){ //user
                        $name = $x['fullname'];
                        $this->session->set_userdata('id',$id);
                        $this->session->set_userdata('name',$name);
                        redirect('user');

                    }
                }else{
                    $url=base_url('auth');
                    echo $this->session->set_flashdata('msg','<div class="alert alert-warning alert-has-icon">
                    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                    <div class="alert-body">
                        <div class="alert-title">Warning</div>
                        Akun anda telah di Nonaktifkan, Silakan Hubungi Administrator !
                        </div>
                  </div>');
                    redirect($url);
                }
            }else{
                $url=base_url('auth');
                echo $this->session->set_flashdata('msg','<div class="alert alert-danger alert-has-icon">
                <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                <div class="alert-body">
                    <div class="alert-title">Success</div>
                    Password Salah !
                    </div>
              </div>');
                redirect($url);
            }

        }else{
            $url=base_url('auth');
            echo $this->session->set_flashdata('msg','<div class="alert alert-danger alert-has-icon">
            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
            <div class="alert-body">
                    <div class="alert-title">Alert</div>
                        Username Salah !
                    </div>
            </div>');
            redirect($url);
        }

    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('auth');
        redirect($url);
    }

    
}
