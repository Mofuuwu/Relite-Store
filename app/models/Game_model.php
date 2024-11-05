<?php 

class Game_model {
    private $table = 'game';
    private $transaksi = 'transaksi';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    public function getAllGame() {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }
    public function getGameName() {
        $this->db->query("SELECT nama_game FROM " . $this->table . " ORDER BY id_game");
        $result = $this->db->resultSet();
        $names = array_column($result, 'nama_game');
        $names = array_combine(range(1, count($names)), array_values($names));
        return $names;
    }
    public function getGameById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id_game = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $gameResult = $this->db->single();
        if ($gameResult === false) {
            return false;
        }
        return $gameResult;
    }
    public function makeOrder($data) {
        $date = "05-06-2024";
        $query = "INSERT INTO " . $this->transaksi . " VALUES (:kode_transaksi, :nama_game, :nama_item, :total_harga, :tanggal_transaksi, :metode_pembayaran, :status_pembayaran, :username_pembeli, :data_akun)";
        $this->db->query($query);
        $this->db->bind('kode_transaksi', $data['order_id']);
        $this->db->bind('nama_game', $data['nama_game']);
        $this->db->bind('nama_item', $data['nama_item']);
        $this->db->bind('total_harga', $data['nominal']);
        $this->db->bind('tanggal_transaksi', $date);
        $this->db->bind('metode_pembayaran', $data['payment_method']);
        $this->db->bind('status_pembayaran', $data['status_pembayaran']);
        $this->db->bind('username_pembeli', $data['username']);
        $data_akun = "";
        if(isset($data["SERVER"])) { 
            $data_akun = $data['ID'] . "(" . $data["SERVER"] . ")"; 
        } else {
            $data_akun = $data["ID"];
        }
        $this->db->bind('data_akun', $data_akun);

        $this->db->execute();
        return $this->db->rowCount();
    }
    
}