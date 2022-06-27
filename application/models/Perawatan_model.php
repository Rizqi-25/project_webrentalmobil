<?php
class Perawatan_model extends CI_Model
{

    private $table = 'daftar_perawatan';  // INI TABLE HASIL DARI CREATE VIEW MENGGABUNGKAN TABLE PERAWATAN DAN JENIS_PERAWATAN
    private $table1 = 'jenis_perawatan';
    private $table2 = 'perawatan';


    public function getAll()
    {
        //SELECT * FROM daftar_perawatan -> INI TABLE HASIL DARI CREATE VIEW MENGGABUNGKAN TABLE PERAWATAN DAN JENIS_PERAWATAN

        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id)
    {
        // SELECT * FROM daftar_perawatan WHERE nopol=$id;
        $this->db->where('nopol', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function insert_perawatan($data){  //UNTUK TAMBAH DATA PERAWATAN BARU
        // INSERT INTO perawatan (tanggal, biaya, km_mobil, deskripsi, mobil_id, jenis_perawatan_id) 
        // VALUES ('2018-01-01', '200000', '15000', 'Ganti Ban Luar', '1', '1');

        $sql = "INSERT INTO perawatan (tanggal, biaya, km_mobil, deskripsi, mobil_id, jenis_perawatan_id) 
                VALUES (?, ?, ?, ?, ?, ?)";
        $this->db->query($sql, $data);
    }

    public function update_perawatan($data){
        // UPDATE perawatan SET tanggal='2018-01-01', biaya='200000', km_mobil='15000', deskripsi='Ganti Ban Luar', mobil_id='1', jenis_perawatan_id='1' WHERE nopol='B4321ASD';
        $sql = "UPDATE perawatan SET tanggal=?, biaya=?, km_mobil=?, deskripsi=?, mobil_id=?, jenis_perawatan_id=? WHERE nopol=?";
        $this->db->query($sql, $data);
    }

    public function delete_perawatan($id){  //UNTUK HAPUS DATA PERAWATAN YANG SUDAH ADA
        // DELETE FROM perawatan WHERE nopol='B4321ASD';
        $this->db->where('mobil_id', $id);
        $this->db->delete($this->table);
    }




    public function getAlljns_perawatan() // INI UNTUK MENAMPILKAN TABLE JENIS_PERAWATAN DI SEBELAH FORM TAMBAH PERAWATAN SEBAGAI PETUNJUK PENGISIAN DATA
    {
        //SELECT * FROM jenis_perawatan 
        $query = $this->db->get($this->table1);
        return $query->result();
    }
}
