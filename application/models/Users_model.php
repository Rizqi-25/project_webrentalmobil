<?php
class Users_model extends CI_Model
{
    private $table = 'users';

    public function getAll()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function login($uname, $pass)
    {
        $this->db->where('username', $uname, 'password', $pass);
        $query = $this->db->get($this->table);
        return $query->row();
    }




    public function register($data)
    {
        $sql = "INSERT INTO users (username, password,email,created_at,last_login, status, role) VALUES (?,MD5(?),?,DEFAULT, DEFAULT,?,?)";
        $this->db->query($sql, $data);
    }

    public function delete($id)
    {
        $this->db->where('username', $id);
        $this->db->delete($this->table);
    }
}
