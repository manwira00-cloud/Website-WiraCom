<?php

namespace App\Models;

class ProdukModel {

    private $conn;
    private $table = "produk";

    public function __construct($db){
        $this->conn = $db;
    }

    public function getProduk(){

        $query = "SELECT * FROM ".$this->table;

        return $this->conn->query($query);

    }

}