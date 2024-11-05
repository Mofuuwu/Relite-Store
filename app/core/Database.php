<?php 

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $database = DB_NAME;

    private $dbh; //database handler / koneksi
    private $stmt; //statement / nyimpen query

    public function __construct() {
        
        //database source name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->database;

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function query ($sql) {
        $this->stmt = $this->dbh->prepare($sql);
    }
    public function bind($param, $value, $type = null) {
        if(is_null($type)) :
            switch (true) :
                case is_int($value) :
                    $type = pdo::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = pdo::PARAM_BOOL;
                    break;
                case is_null($value) :
                    $type = pdo::PARAM_NULL;
                    break;
                default : 
                    $type = pdo::PARAM_STR;
                    break;
            endswitch;
        endif;
        $this->stmt->bindValue($param, $value, $type);
    }
    public function execute() {
        $this->stmt->execute();
    }
    public function resultSet() {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function single() {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function rowCount() {
        return $this->stmt->rowCount();
    }
}