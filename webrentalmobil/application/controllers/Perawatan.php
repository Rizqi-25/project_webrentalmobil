<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perawatan extends CI_Controller
{
    public function index()
    {
        $this->load->model('perawatan_model', 'perawatan');

        $data['list_perawatan'] = $this->perawatan->getAll();


        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('perawatan/index', $data);
        $this->load->view('layout/footer');
    }
}
