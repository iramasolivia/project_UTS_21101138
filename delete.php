<?php
    include_once("koneksi2.php");
    
    if(isset($_GET["kode"])){
        $sql = "DELETE FROM peenjualan_buku WHERE kode = '".$_GET["kode"]."'";
        $hsl = mysqli_query($con, $sql);
    }
    mysqli_close($con);
    header("location: tampildata.php");