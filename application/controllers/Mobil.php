<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobil extends CI_Controller
{

    public function index()
    {
        $this->load->model('mobil_model', 'mobil');

        $data['list_mobil'] = $this->mobil->getAll();
        // $data['merk'] = $this->mobil->getAllMerk();


        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mobil/index', $data);
        $this->load->view('layout/footer');
    }

    public function view()
    {
        $_nopol = $this->input->get('id');
        $this->load->model('mobil_model', 'mobil');
        $data['mbl'] = $this->mobil->findById($_nopol);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mobil/view', $data);
        $this->load->view('layout/footer');
    }

    public function add(){  //INI UNTUK MENGARAHKAN KE PENGISIAN FORM TAMBAH MOBIL

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mobil/add');
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('mobil_model', 'mobil');

        $_nopol = $this->input->post('nopol'); // ? 1
        $_warna = $this->input->post('warna'); // ? 2
        $_biaya_sewa = $this->input->post('biaya_sewa'); // ? 3
        $_deskripsi = $this->input->post('deskripsi'); // ? 4
        $_cc = $this->input->post('cc'); // ? 5
        $_tahun = $this->input->post('tahun'); // ? 6
        $_merk_id = $this->input->post('merk_id');  // ? 7 
        $_foto = $this->input->post('foto');    // ? 8
        $_edit = $this->input->post('edit'); //INI UNTUK MENGECEK APAKAH FORM INI UNTUK EDIT ATAU TAMBAH DATA MOBIL BARU (HIDDEN FIELD) ? 9

        $data_mbl[] = $_nopol; // ? 1
        $data_mbl[] = $_warna;  // ? 2
        $data_mbl[] = $_biaya_sewa; // ? 3
        $data_mbl[] = $_deskripsi;  // ? 4
        $data_mbl[] = $_cc; // ? 5
        $data_mbl[] = $_tahun;  // ? 6
        $data_mbl[] = $_merk_id;    // ? 7
        $data_mbl[] = $_foto;      // ? 8

        if (isset($_edit)) {
            // JIKA UPDATE DATA MOBIL MAKA KITA AKAN MENGGUNAKAN METHOD UPDATE YANG ADA DIDALAM MODEL MOBIL_MODEL.PHP
            $data_mbl[] = $_edit; // ? 9
            $this->mobil->update($data_mbl);
        } else {
            // JIKA TAMBAH DATA MOBIL MAKA KITA AKAN MENGGUNAKAN METHOD INSERT YANG ADA DIDALAM MODEL MOBIL_MODEL.PHP
            $this->mobil->insert($data_mbl);
        }

        redirect(base_url().'index.php/mobil/view?id='.$_nopol, 'refresh');
    }

    public function edit(){  //INI UNTUK MENGARAHKAN KE PENGISIAN FORM EDIT MOBIL
        $_nopol = $this->input->get('id');
        $this->load->model('mobil_model', 'mobil');
        $data['mbledit'] = $this->mobil->findById($_nopol);
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mobil/update', $data);
        $this->load->view('layout/footer');
    } 

    public function delete(){
        $_nopol = $this->input->get('id');
        $this->load->model('mobil_model', 'mobil');
        $this->mobil->delete($_nopol);
        redirect(base_url().'index.php/mobil', 'refresh');
    }

    public function upload()
    {
        $_nopol = $this->input->post('nopol');
        $this->load->model("mobil_model", "mobil");
        // $array = explode('.', $_FILES['fotomhs']['name']);
        // $extension = end($array);
        // if ($_FILES['fotomhs']['image_type'] == 'jpg') {
        //     $new_name =  $_nim . '.' . 'jpg';
        //     $config['file_name'] = $new_name;}
        // elseif ($_FILES['fotomhs']['image_type'] == 'png') {
        //     $new_name =  $_nim . '.' . 'png';
        //     $config['file_name'] = $new_name;}
        // else{
        //     echo "File tidak sesuai";
        // }
        $new_name =  $_nopol . '.' . 'jpg';
        $config['file_name'] = $new_name;
        $config['upload_path']          = 'uploads/foto/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 6024;
        $config['max_height']           = 4768;

        $this->load->library('upload', $config);

        // $path = $_FILES['fotomhs']['name'];

        // die($new_name); 


        if (!$this->upload->do_upload('fotombl')) {
            $error = array('error' => $this->upload->display_errors());
            die(print_r($error));
            //$this->load->view('upload_form', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());

            //$this->load->view('upload_success', $data);
        }
        redirect(base_url() . 'index.php/mobil/view?id=' . $this->input->post('nopol'), 'refresh');
    }
}
