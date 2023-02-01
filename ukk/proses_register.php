<?php
    include("koneksi.php");


    $nik = $_REQUEST["nik"];
    $password = $_REQUEST["password"];



    $query = $db->query("select * from masyarakat where nik='$nik' AND password='$password'")->fetchAll();
    

        header("Location:login.php");
    
?>