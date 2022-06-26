<?php
class Perawatan_model extends CI_Model
{
    // private $table = 'mobil';
    private $table = 'daftar_perawatan';  // INI TABLE HASIL DARI CREATE VIEW MENGGABUNGKAN TABLE PERAWATAN DAN JENIS_PERAWATAN

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
}
