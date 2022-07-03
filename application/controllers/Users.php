<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller 
{

    public function index(){
        $data = [];
        $this->load->view('login',$data);
    }

    public function registrasi()
    {
        $data = [];
        $this->load->view('registrasi',$data);
        $this->load->model('users_model','user');

    }

    public function regitrasiUser(Type $var = null)
    {
        $_username = $this->input->post('username');
        $_email = $this->input->post('email');
        $_password = $this->input->post('password');
        $_role = $this->input->post('role');
        $_status = $this->input->post('status');

        $data_user[] = $_username;
        $data_user[] = $_password;
        $data_user[] = $_email;
        $data_user[] = $_status;
        $data_user[] = $_role;

        $this->user->register($data_user);

        redirect(base_url().'login');
    }

    public function autentikasi()
    {
        $this->load->model('users_model','user');
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');

        $row = $this->user->login($_username,$_password);
        if (isset($row)) {
            $this->session->set_userdata('username',$row->username);
            $this->session->set_userdata('id',$row->id);
            redirect(base_url().'index.php/dashboard');
        }else {
            redirect(base_url().'login?status=f');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url().'index.php/dashboard');
    }
}