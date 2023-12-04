<?php
    include "../koneksi.php";
    session_start();

    if(isset($_SESSION['email']) && isset($_SESSION['password']) && isset($_SESSION['id'])){
?>
<div class="header">
    <link rel="stylesheet" href="../asset/css/style-user.css">
    <a href="index.php">
        <img src="../asset/img/logo.png" id="logo">
    </a>
    <div class="navbar">
        <a id="menu" href="index.php">Home</a>
        <a id="menu" href="diagnosa.php">Diagnosa Gejala</a>
        <a id="menu" href="informasi-diagnosa.php">Informasi Diagnosa</a>
        <a id="menu" href="profile.php">Profile</a>
        <a id="menu" href="about.php">About</a>
        <a id="menu" href="logout.php"><button id="btn-login">Logout</button></a>
    </div>
    <div class="dropdown">
        <li class="list-dropdown"><a id="menu" href="index.php">Home</a></li>
        <li class="list-dropdown"><a id="menu" href="diagnosa.php">Diagnosa Gejala</a></li>
        <li class="list-dropdown"><a id="menu" href="informasi-diagnosa.php">Informasi Diagnosa</a></li>
        <li class="list-dropdown"><a id="menu" href="profile.php">Profile</a></li>
        <li class="list-dropdown"><a id="menu" href="about.php">About</a></li>
        <li class="list-dropdown"><a id="menu" href="logout.php"><button id="btn-login">Logout</button></a></li>
    </div>
</div>
<?php
    }else{
        header("Location: ../login.php");
        exit();
    }
?>