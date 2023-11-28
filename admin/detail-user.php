<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style-admin-1.css">
    <title>Detail User</title>
</head>
<body>
    <?php
    include "sidebar.php";
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
            <div class="cek">
                <label id="label-gejala">Foto :</label>
                <div>
                    <input type='text' name='foto' id='input-gejala' readonly value='<?php echo $data['foto'] ?>'>
                </div>
            </div>
            <div class="cek">
                <label id="label-gejala">ID User :</label>
                <div>
                    <input type='text' name='iduser' id='input-gejala' readonly value='<?php echo $data['iduser'] ?>'>
                </div>
            </div>
            <div class="cek">
                <label id="label-gejala">Email :</label>
                <div class="text">
                    <input type='text' name='email' id='input-gejala' readonly value='<?php echo $data['email'] ?>'>
                </div>
            </div>
            <div class="cek">
                <label id="label-gejala">Nama :</label>
                <div class="text">
                    <input type='text' name='nama' id='input-gejala' readonly value='<?php echo $data['nama'] ?>'>
                </div>
            </div>
            <div class="cek">
                <label id="label-gejala">Usia :</label>
                <div class="text">
                    <input type='text' name='umur' id='input-gejala' readonly value='<?php echo $data['umur'] ?>'>
                </div>
            </div>
            <div class="cek">
                <label id="label-gejala">Jenis Kelamin :</label>
                <div class="text">
                    <input type='text' name='jeniskelamin' id='input-gejala' readonly value='<?php echo $data['jeniskelamin'] ?>'>
                </div>
            </div>
            <div class="cek">
                <label id="label-gejala">No HP :</label>
                <div class="text">
                    <input type='text' name='nohp' id='input-gejala' readonly value='<?php echo $data['nohp'] ?>'>
                </div>
            </div>
            <div class="cek">
                <label id="label-gejala">Alamat :</label>
                <div class="text">
                    <textarea name='alamat' id='input-gejala' readonly value='<?php echo $data['alamat'] ?>'><?php echo $data['alamat'] ?></textarea>";
                </div>
            </div>
        </form>
    </div>
</body>
</html>