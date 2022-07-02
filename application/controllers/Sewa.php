<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sewa extends CI_Controller
{
    public function book()
    {
        $this->load->model('mobil_model', 'mobil');
        $data['list_mobil'] = $this->mobil->getAll();
        // $this->load->model('sewa_model', 'sewa');
        // $data['list_sewa'] = $this->sewa->getAll();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('sewa/book' , $data);
        $this->load->view('layout/footer');

    }
}
