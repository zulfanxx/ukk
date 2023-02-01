<?php
session_start();
$NIK = $_POST['NIK'];
$Nama = $_POST['Nama'];
$koneksi = new PDO('mysql:host=localhost;dbname=pengaduanmasyarakat','root');
$query = $koneksi->query("SELECT * FROM `login` WHERE NIK='$NIK' AND Nama='$Nama'");
$data = $query->fetch();
if ($data) {
    $_SESSION['NIK'] = $NIK;
    $_SESSION['Nama'] = $Nama;
    header("location:user.php");
}else{
    header("location:login.php");
}
