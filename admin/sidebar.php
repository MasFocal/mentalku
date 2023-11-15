<?php
    include "../koneksi.php";
    session_start();

    if(isset($_SESSION['username']) && isset($_SESSION['password']) && isset($_SESSION['nama'])){
?>
<div class="sidebar">
    <a href="dashboard-1.php">
        <img src="../asset/img/logo.png">
    </a>
    <ul class="side">
        <li><a href="dashboard.php">BERANDA</a></li>
        <li><a href="gejala.php">GEJALA</a></li>
        <li><a href="diagnosa.php">DIAGNOSA</a></li>
        <li><a href="basis-pengetahuan.php">BASIS PENGETAHUAN</a></li>
        <li><a href="admin.php">ADMIN</a></li>
        <li><a href="user.php">USER</a></li>
    </ul>
    <a href="../admin.php"><button id="btn-logout">LOGOUT</button></a>
</div>
<?php
    }else{
        header("Location: ../admin.php");
        exit();
    }
?>