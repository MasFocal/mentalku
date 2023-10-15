<?php 
    session_start();

    if(isset($_SESSION['idadmin']) & isset($_SESSION['username'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style-admin-1.css">
    <title>Dashboard</title>
</head>
<body>
<?php
include "sidebar.php"
?>
<div class="container">
    <p class="judul">SISTEM PAKAR KESEHATAN MENTAL</p>
    <p class="isi-dashboard">
        Selamat Datang <b><?php echo $_SESSION['nama']; ?></b><br>
        Silahkan pilih salah satu menu disamping
    </p>
</div>
</body>
</html>
<?php
    }else{
        header("Location: ../admin.php");
        exit();
    }
?>