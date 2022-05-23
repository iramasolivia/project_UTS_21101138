<?php

include_once("koneksi2.php");

$sql = "CREATE TABLE penjualan_buku(
    kode varchar(5) PRIMARY KEY, 
    tanggal date,
    judul varchar(50),
    harga varchar(30),
    jumlah  varchar(30),
    total varchar(50)
);";

$hsl = mysqli_query($con, $sql);
    if($hsl){
        echo "Tabel penjualan_buku <strong>BERHASIL</strong> Dibuat<br>";
    }else{
        echo "Tabel penjualan_buku <strong>GAGAL</strong> Dibuat<br>";
    }

mysqli_close($con);