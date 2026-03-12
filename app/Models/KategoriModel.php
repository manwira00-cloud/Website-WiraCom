<?php

namespace App\Models;

class KategoriModel {

    private $conn;
    private $table = "kategori";

    public function __construct($db){
        $this->conn = $db;
    }

    public function getKategori(){

        $query = "SELECT * FROM ".$this->table;

        return $this->conn->query($query);

    }

}