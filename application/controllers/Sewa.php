<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sewa extends CI_Controller
{
    public function book()
    {

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('sewa/book');
        $this->load->view('layout/footer');
    }
}
