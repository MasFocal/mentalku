<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail User</title>
</head>
<body>
    <?php
        include "navbar.php";
        $id = null;

        if (isset($_POST['detail'])) {
            $id = $_POST['id_diagnosa'];
        }

        $sql = mysqli_query ($konek_db, "SELECT * FROM user where iduser='".$_GET['id']."'");
        $data = mysqli_fetch_array ($sql);

    ?>
    <div class="container">
        <p class="judul">DETAIL USER</p>
        <form action="" method="POST">
            <li class="list-form">
                <label id="label-gejala">ID User :</label>
                <input type='text' name='iduser' id='input-gejala' readonly value='<?php echo $data['iduser'] ?>'>
            </li>
            <li class="list-form">
                <label id="label-gejala">Email :</label>
                <input type='text' name='email' id='input-gejala' readonly value='<?php echo $data['email'] ?>'>
            </li>
            <li class="list-form">
                <label id="label-gejala">Nama :</label>
                <input type='text' name='nama' id='input-gejala' readonly value='<?php echo $data['nama'] ?>'>
            </li>
            <li class="list-form">
                <label id="label-gejala">Usia :</label>
                <input type='text' name='umur' id='input-gejala' readonly value='<?php echo $data['umur'] ?>'>
            </li>
            <li class="list-form">
                <label id="label-gejala">Jenis Kelamin :</label>
                <input type='text' name='jeniskelamin' id='input-gejala' readonly value='<?php echo $data['jeniskelamin'] ?>'>
            </li>
            <li class="list-form">
                <label id="label-gejala">No HP :</label>
                <input type='text' name='nohp' id='input-gejala' readonly value='<?php echo $data['nohp'] ?>'>
            </li>
            <li class="list-form">
                <label id="label-gejala">Alamat :</label>
                <textarea name='alamat' id='input-gejala' readonly value='<?php echo $data['alamat'] ?>'><?php echo $data['alamat'] ?></textarea>
            </li>
        </form>
    </div>
</body>
</html>