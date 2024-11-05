<?php 

class Data_Login_model {
    private $table = 'data_login';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    public function getAllDataLogin() {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }
    public function getDataLoginById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id_game = :id";
        $this->db->query($query);
        $this->db->bind(":id", $id);
        return $this->db->resultSet();
    }
}