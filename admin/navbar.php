<?php
    include "../koneksi.php";

    session_start();

    if(isset($_SESSION['username']) && isset($_SESSION['password']) && isset($_SESSION['nama'])){
?>
<div class="header">
    <link rel="stylesheet" href="../asset/css/style-admin.css">
    <a href="index.php">
        <img src="../asset/img/logo.png" id="logo">
    </a>
    <div class="navbar">
        <a id="menu" href="index.php">Home</a>
        <a id="menu" href="gejala.php">Gejala</a>
        <a id="menu" href="diagnosa.php">Diagnosa</a>
        <a id="menu" href="basis-pengetahuan.php">Basis Pengetahuan</a>
        <a id="menu" href="admin.php">Admin</a>
        <a id="menu" href="user.php">User</a>
        <a id="menu" href="logout.php"><button id="btn-login">Logout</button></a>
    </div>
    <div class="dropdown">
        <li class="list-dropdown"><a id="menu" href="index.php">Home</a></li>
        <li class="list-dropdown"><a id="menu" href="gejala.php">Gejala</a></li>
        <li class="list-dropdown"><a id="menu" href="diagnosa.php">Diagnosa</a></li>
        <li class="list-dropdown"><a id="menu" href="basis-pengetahuan.php">Basis Pengetahuan</a></li>
        <li class="list-dropdown"><a id="menu" href="admin.php">Admin</a></li>
        <li class="list-dropdown"><a id="menu" href="user.php">User</a></li>
        <li class="list-dropdown"><a id="menu" href="logout.php"><button id="btn-login">Logout</button></a></li>
    </div>
</div>
<?php
    }else{
        header("Location: ../admin.php");
        exit();
    }
?>