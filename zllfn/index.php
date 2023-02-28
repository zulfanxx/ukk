<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Masyarakat</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="index.php">Pengaduan Masyarakat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=register">Daftar Akun</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=login">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php
if (isset($_GET['page'])){
$page= $_GET['page'];

switch ($page){
    case 'login';
        include 'login.php';
        break;
        case 'register';
        include 'register.php';
        break;

        default;
        echo "Halaman Tidak Tersedia";
        break;
}
}else {
    include 'home.php';
}
?>

<footer class="footer py-2 bg-light">
    <div class="container">
<p class="text-center">UKK RPL | NAMA PESERTA | NAMA SEKOLAH</p>
    </div>
</footer>
 
<script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
</body>
</html>