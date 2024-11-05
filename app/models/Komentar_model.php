<?php 

class Komentar_model {
    private $table = 'komentar';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    public function getAllComment() {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }
    public function tambahKomentar($data, $nama) {
        var_dump($data);
        $query = "INSERT INTO " . $this->table . " VALUES (:isi_komentar, :nama)";
        $this->db->query($query);
        $this->db->bind('isi_komentar', $data['kirim_komentar']);
        $this->db->bind('nama', $nama);

        $this->db->execute();
        return $this->db->rowCount();
    }
}