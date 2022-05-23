<?php

if(isset($_POST["txSIMPAN"])){
    $pdata["KODE"] = $_POST["txKODE"];
    $pdata["TANGGAL"] = $_POST["txTANGGAL"];
    $pdata["JUDUL"] = $_POST["txJUDUL"];
    $pdata["HARGA"] = $_POST["txHARGA"];
    $pdata["JUMLAH"] = $_POST["txJUMLAH"];
    $pdata["TOTAL"] = $_POST["txTOTAL"];

    include_once("fungsi.php");
    insertdata($pdata);
    header("location:tampildata.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Data Penjualan Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <h3 class="fw-bold my-4">Insert Data Tabel Penjualan Buku</h3>
        <form action="" method="POST">
            KODE 
            <div>
                <input type="text" name="txKODE" class="form-control form-control-sm  w-25">
            </div>
            TANGGAL
            <div>
                <input type="date" name="txTANGGAL" class="form-control form-control-sm w-25">
            </div>
            JUDUL
            <div>
                <input type="text" name="txJUDUL" class="form-control form-control-sm w-25">
            </div>
            HARGA
            <div>
                <input type="text" name="txHARGA" class="form-control form-control-sm w-25">
            </div>
            JUMLAH
            <div>
                <input type="text" name="txJUMLAH" class="form-control form-control-sm w-25">
            </div>
            TOTAL
            <div>
                <input type="text" name="txTOTAL" class="form-control form-control-sm w-25">
            </div>
            <br>
            <div class="input-group">
                <button type="submit" class="insert btn btn-info" name="txSIMPAN">INSERT</button>
            </div>
        </form>
    </div>
</body>
</html>