<?php
class Mobil_model extends CI_Model
{
    private $table1 = 'mobil';
    private $table = 'merkmobil';  // INI TABLE HASIL DARI CREATE VIEW MENGGABUNGKAN TABLE MERK DAN MOBIL
    private $table2 = 'merk';

    public function getAll()
    {
        //SELECT * FROM view merkmobil -> INI TABLE HASIL DARI CREATE VIEW MENGGABUNGKAN TABLE MERK DAN MOBIL

        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function getAllMerk()
    {
        //SELECT * FROM merk

        $query = $this->db->get($this->table2);
        return $query->result();
    }


    public function findById($id)
    {
        // SELECT * FROM merkmobil WHERE nopol=$id;
        $this->db->where('nopol', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function findByMobilId($id)
    {
        // SELECT * FROM merkmobil WHERE mobil_id=$id;
        $this->db->where('mobil_id', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }


    public function insert($data){  //UNTUK TAMBAH DATA MOBIL BARU
        // INSERT INTO mobil (nopol, warna, biaya_sewa, deskripsi, cc, tahun, merk_id, foto) 
        // VALUES ('B4321ASD', 'Hitam', '200000', 'Mobil ini sangat bagus', '1500', '2018', '1', 'B4321ASD.jpg');

        $sql = "INSERT INTO mobil (nopol, warna, biaya_sewa, deskripsi, cc, tahun, merk_id, foto) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $this->db->query($sql, $data);
    }

    public function update($data){  //UNTUK UPDATE / EDIT DATA MOBIL YANG SUDAH ADA
        // UPDATE mobil SET nopol='B4321ASD', warna='Hitam', biaya_sewa='200000', deskripsi='Mobil ini sangat bagus', cc='1500', tahun='2018', merk_id='1', foto='B4321ASD.jpg' WHERE nopol='B4321ASD';
        $sql = "UPDATE mobil SET nopol=?, warna=?, biaya_sewa=?, deskripsi=?, cc=?, tahun=?, merk_id=?, foto=? WHERE nopol=?";
        $this->db->query($sql, $data);

    
    }

    public function delete($id){  //UNTUK HAPUS DATA MOBIL YANG SUDAH ADA
        // DELETE FROM mobil WHERE nopol='B4321ASD';
        $this->db->where('nopol', $id);
        $this->db->delete($this->table1);
    }
}
