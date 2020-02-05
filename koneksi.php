<?php
    define("HOST","Localhost");
    define("USER","root");
    define("PASS","");
    define("DB","test");
    $con = mysqli_connect(HOST,USER,PASS,DB);
    if (!$con)
    {
        echo "Koneksi Database Gagal".mysqli_error();
    }
?>