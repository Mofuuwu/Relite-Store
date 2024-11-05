<?php 

class Payment_model {
    private $table = 'payment';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    public function getAllPayment() {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getEwalletPayments() {
        $query = "SELECT * FROM " . $this->table . " WHERE payment_type = 'E-Wallet'";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getBankPayments() {
        $query = "SELECT * FROM " . $this->table . " WHERE payment_type = 'Transfer Bank'";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    

}