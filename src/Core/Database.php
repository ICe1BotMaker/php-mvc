<?php
class Database {
    private $db = null;

    public function getConnection() {
        $host = "localhost";
        $dbname = "swjb";
        $charset = "utf8mb4";
        $user = "root";
        $pass = "";

        if (is_null($this->db)) {
            $option = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ];
            $this->db = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $pass, $option);
        }

        return $this->db;
    }

    public function execute($sql, $data) {
        $q = $this->getConnection()->prepare($sql);
        return $q->execute($data);
    }

    public function fetch($sql, $data) {
        $q = $this->getConnection()->prepare($sql);
        $q->execute($data);
        return $q->fetch();
    }

    public function fetchAll($sql, $data) {
        $q = $this->getConnection()->prepare($sql);
        $q->execute($data);
        return $q->fetchAll();
    }
}