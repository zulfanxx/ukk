<?php
    session_start();
?>
<!DOCTYPE html>
<head>
    <title>	PENGADUAN MASYARAKAT</title>
    <link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body class="form">
    <h1>SISTEM PENGADUAN MASYARAKAT</h1>
    <div>
    <form action="home.php" method="post" name="form_input">
        <div class="nik">
        Nik: <input type="number" name="nik" placeholder="Masukan nik" required="" ></br>
        </div>
        <div class="nama">
        Nama: <input type="text" name="nama" placeholder="Nama lengkap" required=""></br>
        </div>

        <div class="tombol">
        <input type="submit" name="input" value="LOGIN">
        <input type="submit" name="input" value="REGISTER">
      </div>
    </form>
</div>
</body>
</head>
</html>