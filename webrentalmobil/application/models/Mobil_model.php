<?php
class Mobil_model extends CI_Model
{
    // private $table = 'mobil';
    private $table = 'merkmobil';  // INI TABLE HASIL DARI CREATE VIEW MENGGABUNGKAN TABLE MERK DAN MOBIL

    public function getAll()
    {
        //SELECT * FROM view merkmobil -> INI TABLE HASIL DARI CREATE VIEW MENGGABUNGKAN TABLE MERK DAN MOBIL

        $query = $this->db->get($this->table);
        return $query->result();
    }


    public function findById($id)
    {
        // SELECT * FROM merkmobil WHERE nopol=$id;
        $this->db->where('nopol', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }
}
