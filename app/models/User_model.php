<?php 

class User_model {
    private $table = 'user';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    public function getUserByUser($data) {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE username = :username");
        $this->db->bind('username', $data['username']);
        $this->db->execute();
        return $this->db->single();
    }
    public function login($data) {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE username = :username AND password = :password ");
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();
        return $this->db->single(); // Menggunakan single() untuk mengembalikan satu baris
    }
    public function regist($data) {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE username = :username");
        $this->db->bind('username', $data['username']);
        $this->db->execute();

        if ($this->db->rowCount() > 0) {
            return 'Username sudah tersedia. Silakan pilih username lain.';
        } else {

            $this->db->query("INSERT INTO " . $this->table . "(id_user, nama, username, password) VALUES ('', :nama, :username, :password)");
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('username', $data['username']);
            $this->db->bind('password', $data['password']);
            $this->db->execute();
            return 'Registrasi berhasil.';
        }
    }
       

}