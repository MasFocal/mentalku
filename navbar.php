<?php
    include "koneksi.php";
?>
<div class="header">
    <link rel="stylesheet" href="asset/css/style-user.css">
    <a href="index.php">
        <img src="asset/img/logo.png" id="logo">
    </a>
    <div class="navbar">
        <a id="menu" href="index.php">Home</a>
        <a id="menu" href="diagnosa.php">Diagnosa Gejala</a>
        <a id="menu" href="informasi-diagnosa.php">Informasi Diagnosa</a>
        <a id="menu" href="about.php">About</a>
        <a id="menu" href="login.php"><button id="btn-login">Login</button></a>
    </div>
    <div class="dropdown">
        <li class="list-dropdown"><a id="menu" href="index.php">Home</a></li>
        <li class="list-dropdown"><a id="menu" href="diagnosa.php">Diagnosa Gejala</a></li>
        <li class="list-dropdown"><a id="menu" href="informasi-diagnosa.php">Informasi Diagnosa</a></li>
        <li class="list-dropdown"><a id="menu" href="about.php">About</a></li>
        <li class="list-dropdown"><a id="menu" href="login.php"><button id="btn-login">Login</button></a></li>
    </div>
</div>