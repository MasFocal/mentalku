<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="../asset/css/style-user.css">
</head>
<body>
    <?php
        include "navbar.php"
    ?>
    <div class="container">
        <p class="judul-home">Hai, <?php echo $_SESSION['nama']; ?> <br> SELAMAT DATANG DI MENTALKU</p>
        <p class="isi-home">MENTALKU merupakan website sistem pakar guna mendiagnosa penyakit kesehatan mental</p>
        <div class="btn">
            <a href="diagnosa.php"><button id="btn-mulai">MULAI</button></a>
        </div>
    </div>
</body>
</html>