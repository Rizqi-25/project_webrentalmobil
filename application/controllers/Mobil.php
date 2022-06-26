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
