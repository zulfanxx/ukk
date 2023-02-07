<?php

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telp = $_POST['telp'];

    $db  = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat", 'root', '');
    $query = $db->query("INSERT INTO masyarakat values('$nik','$nama' , '$username','$password','$telp')");

    if($query){
        header("Location:home.php");
     }