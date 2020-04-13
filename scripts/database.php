<?php
require_once("config.php");

class Database {
    public $conn;

    public function __construct($config) {
        // Create connection
        $this->conn = mysqli_connect($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);
        if (!$this->conn) {
            die("MySQL connection failed: " . mysqli_connect_error());
        }

        $this->conn->query("SET NAMES utf8");
    }

    public function __destruct() {
        $this->conn->close();
    }

    

}

$Database = new Database($cfg);
?>