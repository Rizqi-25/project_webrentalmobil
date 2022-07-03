<?php
class sewa_model extends CI_Model{
    private $table = 'sewa';

    public function getAll()
    {
        $query = $this->db->get('mobil');
        return $query->result();
    }


    public function findById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function booking($data)
    {
        $sql = "INSERT INTO ('sewa') VALUES (DEFAULT,?,?,?,?,?,?)";
        $this->db->query($sql,$data);
    }

}