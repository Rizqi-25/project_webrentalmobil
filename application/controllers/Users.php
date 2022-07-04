<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller 
{
    public function index(){
        $this->load->model('users_model','user');
        $data['users'] = $this->user->getAll();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('users/index' , $data);
        $this->load->view('layout/footer');
    }

    public function login(){
        $this->load->model('users_model','user');
        
        $data = [];
        $data['users'] = $this->user->getAll();
        $this->load->view('login',$data);
    }

    public function registrasi()
    {
        $data = [];
        $this->load->view('registrasi',$data);
        

    }

    public function regitrasiUser()
    {
        $_username = $this->input->post('username');
        $_email = $this->input->post('email');
        $_password = $this->input->post('password');
        $_role = $this->input->post('role');
        $_status = $this->input->post('status');
        $this->load->model('users_model','user');
        $data_user[] = $_username;
        $data_user[] = $_password;
        $data_user[] = $_email;
        $data_user[] = $_status;
        $data_user[] = $_role;

        $this->user->register($data_user);

        redirect(base_url().'index.php/users/login');
    }

    public function autentikasi()
    {
        $this->load->model('users_model','user');
        $id = $this->input->post('id');
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');

        $row = $this->user->login( $id, $_username, $_password);
        if (isset($row)) {
            $this->session->set_userdata('id',$row->id);
            $this->session->set_userdata('username',$row->username);
            $this->session->set_userdata('role',$row->role);
            redirect(base_url().'index.php/mobil');
        }else {
            redirect(base_url().'login?status=f');
        }
    }

    
    public function delete()
    {
        $_user = $this->input->get('id');
        $this->load->model('users_model', 'user');
        $this->user->delete($_user);
        redirect(base_url() . 'index.php/users', 'refresh');
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url().'index.php/dashboard');
    }
}
