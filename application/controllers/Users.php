<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{


    public function registrasi()
    {
        $data = [];
        $this->load->view('registrasi', $data);
        
    }
    public function login()
    {
        $data = [];
        $this->load->view('login', $data);
    }
}
