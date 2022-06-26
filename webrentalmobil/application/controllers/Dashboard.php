<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $this->load->model('mobil_model', 'mobil');

        $data['list_mobil'] = $this->mobil->getAll();
        $this->load->view('dashboard/index', $data);
    }
}
