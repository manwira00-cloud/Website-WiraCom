<?php

class Kategori {

    private $conn;
    private $table = "kategori";

    public function __construct($db){
        $this->conn = $db;
    }

    public function getKategori(){

        $query = "SELECT * FROM ".$this->table;

        $result = $this->conn->query($query);

        return $result;

    }

}

?>