<?php

function insertdata($pdata){

    $sqlINSERT = "INSERT INTO penjualan_buku (kode,tanggal, judul, harga, jumlah, total) 
    VALUES('".$pdata["KODE"]."', '".$pdata["TANGGAL"]."', '".$pdata["JUDUL"]."', '".$pdata["HARGA"]."', '".$pdata["JUMLAH"]."', '".$pdata["TOTAL"]."');";

    include_once("koneksi2.php");
    $hsl = mysqli_query($con, $sqlINSERT);
    return $hsl;
}

function updatedata($pdata){
    $sql = "UPDATE penjualan_buku SET
        kode_pesanan = '".$pdata["A02"]."',
        tanggal = '".$pdata["TANGGAL"]."',
        judul= '".$pdata["JUDUL"]."',
        harga = '".$pdata["HARGA"]."',
        jumalah = '".$pdata["JUMLAH"]."',
        total = '".$pdata["TOTAL"]."',
        WHERE kode_pesanan = '".$pdata["A01"]."';";

    include_once("koneksi2.php");
    $hsl = mysqli_query($con, $sql);
    return $hsl;
}

function displaydata(){
    include_once("koneksi2.php");
    $sql = "SELECT * FROM penjualan_buku;";
    $hsl = mysqli_query($con,$sql);
    $hsl1 = "";
    $no = 1;
    while($h = mysqli_fetch_array($hsl)){
        $hsl1 .= '<tr>
        <td class="text-center">'.$no.'</td>
        <td class="text-center">'.$h["kode"].'</td>
        <td class="text-center">'.$h["tanggal"].'</td>
        <td class="text-center">'.$h["judul"].'</td>
        <td class="text-center">'.$h["harga"].'</td>
        <td class="text-center">'.$h["jumlah"].'</td>
        <td class="text-center">'.$h["total"].'</td>
        <td class = "text-center">
            <a class="btn btn-outline-secondary px-3 fw-bold" href="edit.php?kode='.$h["kode"].'">
            Edit
            </a>
        </td>
        <td class = "text-center">
            <a class="btn btn-outline-dark px-3 fw-bold" href="delete.php?kode='.$h["kode"].'" onClick=\'return confirm("Data ini akan dihapus, Lanjutkan?");\'>
            Hapus
            </a>
        </td>
    </tr>';
    $no++;
    }
    return $hsl1;
}