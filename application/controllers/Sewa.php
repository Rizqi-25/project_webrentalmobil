<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sewa extends CI_Controller 
{
    public function index()
    {
        
        $this->load->model('sewa_model', 'sewa');

        $data['list_mobil'] = $this->sewa->getAll();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('sewa/book' , $data);
        $this->load->view('layout/footer');
        
    }

    public function book()
    {

        $this->load->model('sewa_model', 'sewa');
        
        $_nik = $this->input->post('nik');
        $_nama = $this->input->post('nama');
        $_nopol = $this->input->post('nopol');
        $_merk = $this->input->post('merkid');
        $_warna = $this->input->post('warna');
        $_biaya = $this->input->post('biaya');
        $_tgL_mulai = $this->input->post('tglmulai');
        $_tgL_akhir = $this->input->post('tglakhir');
        $_tujuan = $this->input->post('tujuan');
        $_user_id = $this->session->userdata('id');
        $_mobil_id = $this->input->post('mobil_id');

        $data_sewa[] = $_tgl_mulai;
        $data_sewa[] = $_tgl_akhir;
        $data_sewa[] = $_tujuan;
        $data_sewa[] = $_nik;
        $data_sewa[] = $_user_id;
        $data_sewa[] = $_mobil_id;
        
        $this->sewa->booking($data_sewa);

        redirect(base_url().'index.php/');

    }
}