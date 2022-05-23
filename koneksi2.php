<?php
    define("DBHOST","127.0.0.1");
    define("DBUSER","root");
    define("DBPASSCODE","");
    define("DBNAME","penjualan_buku");
    define("DBPORT","3306");

    $con = mysqli_connect(DBHOST, DBUSER, DBPASSCODE, DBNAME, DBPORT) or die("Koneksi ke DBMS MySQL GAGAL<br>");