<?php 

class Item_model {
    private $table = 'item';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    public function getAllItem() {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }
    public function getItemById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_item=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getMembershipItems($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id_game = :id AND tipe_item = 'membership'";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        return $this->db->resultSet();
    }

    public function getDiamondItems($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id_game = :id AND tipe_item = 'diamond'";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        return $this->db->resultSet();
    }
    public function getOtherItems($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id_game = :id AND tipe_item = 'other'";
        $this->db->query($query);
        $this->db->bind(":id", $id);
        $result = $this->db->resultSet();
        $rowCount = count($result);
        return ['rowcount' => $rowCount, 'other' => $result];
    }

    public function tambahItem($data)
    {
        // var_dump($data);
        $query = "INSERT INTO " . $this->table . " 
                (nama_game, id_item, nama_item, harga_awal, promo, tipe_item)
                  VALUES
                (:nama_game,'', :nama_item, :harga_awal, :promo, :tipe_item)";
        $this->db->query($query);
        $this->db->bind('nama_game', $data['nama_game']);
        $this->db->bind('nama_item', $data['nama_item']);
        $this->db->bind('harga_awal', $data['harga_awal']);
        $this->db->bind('promo', $data['promo']);
        $this->db->bind('tipe_item', $data['tipe_item']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusItem($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_item = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahitem($data)
    {
        $query = "UPDATE " . $this->table . " SET
                    nama_item = :nama_item,
                    harga_awal = :harga_awal,
                    promo = :promo,
                    tipe_item = :tipe_item
                  WHERE id_item = :id_item";
        
        $this->db->query($query);
        $this->db->bind('nama_item', $data['nama_item']);
        $this->db->bind('harga_awal', $data['harga_awal']);
        $this->db->bind('promo', $data['promo']);
        $this->db->bind('tipe_item', $data['tipe_item']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariItem()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM " . $this->table . " WHERE nama_item LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}