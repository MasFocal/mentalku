<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../asset/css/style-user.css">
</head>
<body>
    <?php
        include "navbar.php";
        $id = null;
        $sql = mysqli_query ($konek_db, "SELECT * FROM user where iduser='".$_SESSION['id']."'");
        $data = mysqli_fetch_array ($sql);
    ?>
    <div class="container">
        <p class="judul">PROFILE</p>
        <form action="" method="POST">
            <div class="cek">
                <label id="label-gejala">Nama :</label>
                <div class="text">
                    <input type='text' name='nama' id='input-gejala' value="<?php echo $data['nama'] ?>">
                </div>
            </div>
            <div class="cek">
                <label id="label-gejala">Email :</label>
                <div class="text">
                    <input type='text' name='email' id='input-gejala' value="<?php echo $data['email'] ?>">
                </div>
            </div>
            <div class="cek">
                <label id="label-gejala">Usia :</label>
                <div class="text">
                    <input type='text' name='umur' id='input-gejala' value="<?php echo $data['umur'] ?>">
                </div>
            </div>
            <div class="cek">
                <label id="label-gejala">Jenis Kelamin :</label>
                <div class="text">
                    <input type='text' name='jeniskelamin' id='input-gejala' value="<?php echo $data['jeniskelamin'] ?>">
                </div>
            </div>
            <div class="cek">
                <label id="label-gejala">No HP :</label>
                <div class="text">
                    <input type='text' name='nohp' id='input-gejala' value="<?php echo $data['nohp'] ?>">
                </div>
            </div>
            <div class="cek">
                <label id="label-gejala">Alamat :</label>
                <div class="text">
                    <input type='text' name='alamat' id='input-gejala' value="<?php echo $data['alamat'] ?>">
                </div>
            </div>
        </form>
        <div class="btn">
            <a href="edit-profile.php"><button name="simpan" id="btn-mulai">EDIT</button></a>
        </div>
    </div>
</body>
</html>