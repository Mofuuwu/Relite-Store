<?php 

class Admin_model {
    private $admin = 'admin';
    private $transaksi = 'transaksi';
    private $user = 'user';
    private $total_pendapatan = 'total_pendapatam';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    public function getUserByUser($data) {
        $this->db->query("SELECT * FROM " . $this->admin . " WHERE username = :username");
        $this->db->bind('username', $data['username']);
        $this->db->execute();
        return $this->db->single();
    }
    public function login($data) {
        $this->db->query("SELECT * FROM " . $this->admin . " WHERE username = :username AND password = :password ");
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();
        return $this->db->single(); 
    }
    public function getAllOrderCount() {
        $this->db->query("SELECT * FROM " . $this->transaksi);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getAllHistoriTransaksi() {
        $this->db->query("SELECT * FROM " . $this->transaksi);
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function getAllUserCount() {
        $this->db->query("SELECT * FROM " . $this->user);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getAllTotalPendapatan() {
        $this->db->query("SELECT SUM(untung) AS total_keuntungan
        FROM (
            SELECT (harga_jual - harga_beli) AS untung
            FROM total_pendapatan
        ) AS keuntungan_total;");
        $this->db->execute();
        return $this->db->single();
    }
    public function getTotalPendapatan() {
        $this->db->query("SELECT SUM(total_harga) AS total_keuntungan
        FROM transaksi
        WHERE status_pembayaran = 'dibayar';");
        $this->db->execute();
        return $this->db->single();
    }

    // public function regist($data) {
    //     $this->db->query("SELECT * FROM " . $this->table . " WHERE username = :username");
    //     $this->db->bind('username', $data['username']);
    //     $this->db->execute();

    //     if ($this->db->rowCount() > 0) {
    //         return 'Username sudah tersedia. Silakan pilih username lain.';
    //     } else {

    //         $this->db->query("INSERT INTO " . $this->table . "(id_user, nama, username, password) VALUES ('', :nama, :username, :password)");
    //         $this->db->bind('nama', $data['nama']);
    //         $this->db->bind('username', $data['username']);
    //         $this->db->bind('password', $data['password']);
    //         $this->db->execute();
    //         return 'Registrasi berhasil.';
    //     }
    // }
       

}