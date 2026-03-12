<?php

class Produk {

    private $conn;
    private $table = "produk";

    public function __construct($db){
        $this->conn = $db;
    }

    public function getProduk(){

        $query = "SELECT * FROM " . $this->table;

        $result = $this->conn->query($query);

        return $result;

    }

    public function tambahProduk($nama,$harga,$kategori){

        $query = "INSERT INTO ".$this->table."
                  (nama_produk,harga,kategori_id)
                  VALUES ('$nama','$harga','$kategori')";

        return $this->conn->query($query);

    }

    public function hapusProduk($id){

        $query = "DELETE FROM ".$this->table."
                  WHERE id_produk='$id'";

        return $this->conn->query($query);

    }

}

?>