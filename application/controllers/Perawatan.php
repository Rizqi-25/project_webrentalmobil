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

    // public function jns_perawatan(){
    //     $this->load->model('perawatan_model', 'perawatan');

    //     $data['jns_perawatan'] = $this->perawatan->getAlljns_perawatan();
    //     $this->load->view('layout/header');
    //     $this->load->view('layout/sidebar');
    //     $this->load->view('perawatan/add', $data);
    //     $this->load->view('layout/footer');
    // }


    // public function view()
    // {
    //     $_id = $this->input->get('id');
    //     $this->load->model('perawatan_model', 'perawatan');
    //     $data['prw'] = $this->perawatan->findById($_id);

    //     $this->load->view('layout/header');
    //     $this->load->view('layout/sidebar');
    //     $this->load->view('perawatan/view', $data);
    //     $this->load->view('layout/footer');
    // }

    public function do_perawatan()
    {  //INI UNTUK MENGARAHKAN KE PENGISIAN FORM LAKUKAN PERAWATAN
        $this->load->model('perawatan_model', 'perawatan');

        $data['jns_perawatan'] = $this->perawatan->getAlljns_perawatan();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('perawatan/add', $data);
        $this->load->view('layout/footer');
    }

    public function save()
    {
        $this->load->model('perawatan_model', 'perawatan');
        // $_id = $this->input->get('mobil_id');
        $this->load->model('mobil_model', 'mobil');
        
        $_tgl_perawatan = $this->input->post('tgl_perawatan'); // ? 1
        $_biaya = $this->input->post('biaya'); // ? 2
        $_km_mobil = $this->input->post('km_mobil'); // ? 3
        $_deskripsi = $this->input->post('deskripsi'); // ? 4
        $_mobil_id = $this->input->post('mobil_id');  // ? 5
        $_jns_perawatan_id = $this->input->post('jns_perawatan_id'); // ? 6
        $_edit = $this->input->post('edit'); //INI UNTUK MENGECEK APAKAH FORM INI UNTUK EDIT ATAU TAMBAH DATA MOBIL BARU (HIDDEN FIELD) ? 7

        $data_prw[] = $_tgl_perawatan; // ? 1
        $data_prw[] = $_biaya;  // ? 2
        $data_prw[] = $_km_mobil; // ? 3
        $data_prw[] = $_deskripsi; // ? 4
        $data_prw[] = $_mobil_id; // ? 5
        $data_prw[] = $_jns_perawatan_id; // ? 6


        if (isset($_edit)) {
            // JIKA UPDATE DATA MOBIL MAKA KITA AKAN MENGGUNAKAN METHOD UPDATE YANG ADA DIDALAM MODEL PERAWATAN_MODEL.PHP
            $data_prw[] = $_edit; // ? 9
            $this->perawatan->update_perawatan($data_prw);
        } else {
            // JIKA TAMBAH DATA MOBIL MAKA KITA AKAN MENGGUNAKAN METHOD INSERT YANG ADA DIDALAM MODEL PERAWATAN_MODEL.PHP
            $this->perawatan->insert_perawatan($data_prw);
        }

        redirect(base_url() . 'index.php/perawatan/', 'refresh');
    }

    // public function delete()
    // {
    //     $this->load->model('perawatan_model', 'perawatan');
    //     $_id = $this->input->get('id');
    //     $this->perawatan->delete_perawatan($_id);
    // }
}
