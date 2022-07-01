<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {





    public function registrasi()
    {
        $data = [];
        $this->load->view('registrasi', $data);
    }
}