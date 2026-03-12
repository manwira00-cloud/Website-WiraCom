<?php

function ambilProduk($conn){
    $query = mysqli_query($conn, "SELECT * FROM produk");
    $data = [];

    while($row = mysqli_fetch_assoc($query)){
        $data[] = $row;
    }

    return $data;
}

function tambahProduk($conn, $nama, $harga, $kategori){
    $query = "INSERT INTO produk (nama_produk, harga, kategori_id)
              VALUES ('$nama','$harga','$kategori')";

    return mysqli_query($conn, $query);
}

function hapusProduk($conn, $id){
    $query = "DELETE FROM produk WHERE id_produk = '$id'";
    return mysqli_query($conn, $query);
}

function ambilKategori($conn){
    $query = mysqli_query($conn, "SELECT * FROM kategori");
    $data = [];

    while($row = mysqli_fetch_assoc($query)){
        $data[] = $row;
    }

    return $data;
}

?>