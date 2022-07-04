<?php
class sewa_model extends CI_Model{
    private $table = 'sewa';
    private $table1 = 'daftar_sewa';

    // public function getAll()
    // {
    //     $query = $this->db->get('mobil');
    //     return $query->result();
    // }

    public function getAllDaftar_Sewa()
    {
        $query = $this->db->get($this->table1);
        return $query->result();
    }


    public function findById($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function booking($data)
    {
        $sql = "INSERT INTO sewa (tanggal_mulai, tanggal_akhir, tujuan, noktp, users_id, mobil_id) VALUES (?,?,?,?,?,?)";
        $this->db->query($sql,$data);
    }

}