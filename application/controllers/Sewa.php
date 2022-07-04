<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sewa extends CI_Controller
{
    public function index()
    {
        $this->load->model('sewa_model', 'sewa');
        $data['list_daftar_sewa'] = $this->sewa->getAllDaftar_Sewa();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('sewa/index', $data);
        $this->load->view('layout/footer'); 
    }
    public function book()
    {
        $_nopol = $this->input->get('id');
        $this->load->model('mobil_model', 'mobil');
        $data['mbledit'] = $this->mobil->findById($_nopol);
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('sewa/book', $data);
        $this->load->view('layout/footer');
    }

    public function save()
    {

        $this->load->model('sewa_model', 'sewa');

        $_nama = $this->input->post('nama');
        $_nopol = $this->input->post('nopol');
        $_merk = $this->input->post('merkid');
        $_mobil = $this->input->post('mobil');
        $_warna = $this->input->post('warna');
        $_biaya = $this->input->post('biaya');
        $_tgL_mulai = $this->input->post('tglmulai');
        $_tgL_akhir = $this->input->post('tglselesai');
        $_tujuan = $this->input->post('tujuan');
        $_nik = $this->input->post('nik');
        $_user_id = $this->input->post('user_id');
        $_mobil_id = $this->input->post('mobil_id');
        $_edit = $this->input->post('edit');

        $data_sewa[] = $_tgL_mulai;
        $data_sewa[] = $_tgL_akhir;
        $data_sewa[] = $_tujuan;
        $data_sewa[] = $_nik;
        $data_sewa[] = $_user_id;
        $data_sewa[] = $_mobil_id;

        $this->sewa->booking($data_sewa);


        // if (isset($_edit)) {

        //     $data_sewa[] = $_edit;
        //     $this->sewa->booking($data_sewa);
        // } else {
        //     echo "Error";
        // }

        redirect(base_url() . 'index.php/sewa');
    }
}
