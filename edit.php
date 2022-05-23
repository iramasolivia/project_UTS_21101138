<?php

    if(isset($_GET["kode"])){
        include_once("koneksi2.php");
        $kode = $_GET["kode"];
        $sql = "SELECT * FROM penjualan_buku WHERE kode='".$kode."';";
        $hsl = mysqli_query($con, $sql);
        $h = mysqli_fetch_array($hsl);
    }

    if(isset($_POST["txSIMPAN"])){
        $pdata["A01"] = $_POST["txKODELAMA"];
        $pdata["A02"] = $_POST["txKODE"];
        $pdata["TANGGAL"] = $_POST["txTANGGAL"];
        $pdata["JUDUL"] = $_POST["txJUDUL"];
        $pdata["HARGA"] = $_POST["txHARGA"];
        $pdata["JUMLAH"] = $_POST["txJUMLAH"];
        $pdata["TOTAL"] = $_POST["txTOTAL"];

        include_once("fungsi.php");
        updatedata($pdata);
        header("location:tampildata.php");
    }

   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Tabel</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
        <h3 class="fw-bold my-4">Edit Data Tabel Pnjualan Buku</h3>
        <form action="edit.php" method="POST">
            <input type="hidden" name="txKODELAMA" value="<?=$h['kode'];?>">
            KODE 
            <div>
                 <input type="text" class="form-control form-control-sm w-25" name="txKODE" value="<?=$h['kode'];?>">
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
            <a href="tampildata.php" class="btn btn-outline-primary me-1">Back</a>
            <button type="submit" class="save btn btn-outline-info" name="txSIMPAN">Save</button>       
        </form>
    </div>
</body>
</html>
