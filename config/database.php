
<?php

//use Database as GlobalDatabase;

class Database
{
    private $host = "localhost";
    private $database_name = "student";
    private $username = "root";
    private $password = "";
    public $conn;
    public function getConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Ket noi DB that bai " . $exception->getMessage();
        }
        return $this->conn;
    }
}

// $db = new Database;
// $db->getConnection();
