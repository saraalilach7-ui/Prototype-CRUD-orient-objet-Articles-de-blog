<<<<<<< HEAD
<?php

class Database {
    private $host = "localhost";
    private $dbname = "blogdb";
    private $username = "root";
    private $password = "";

    public function getConnection() {
        try {
            $conn = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                $this->username,
                $this->password
            );

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;

        } catch(PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }
}
=======

<?php
Class Database {
private $host = "localhost";
private $dbname = "blogdb";
private $username = "root";
private $password ="";
public $conn;

public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname};charset=utf8", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "connection error : " . $e->getMessage();
        }
        return $this->conn;
    }

}



>>>>>>> 03799088879e7dcd61dc5951044edeca76cbb99f
