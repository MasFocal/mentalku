<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
            <li class="cek">
                <label id="label-gejala">Nama :</label>
                <p id='input-gejala-1'><?php echo $data['nama'] ?></p>
            </li>
            <li class="cek">
                <label id="label-gejala">Email :</label>
                <p id='input-gejala-1'><?php echo $data['email'] ?></p>
            </li>
            <li class="cek">
                <label id="label-gejala">Usia :</label>
                <p id='input-gejala-1'><?php echo $data['umur'] ?></p>
            </li>
            <li class="cek">
                <label id="label-gejala">Jenis Kelamin :</label>
                <p id='input-gejala-1'><?php echo $data['jeniskelamin'] ?></p>
            </li>
            <li class="cek">
                <label id="label-gejala">No HP :</label>
                <p id='input-gejala-1'><?php echo $data['nohp'] ?></p>
            </li>
            <li class="cek">
                <label id="label-gejala">Alamat :</label>
                <p id='input-gejala-1'><?php echo $data['alamat'] ?></p>
            </li>
        </form>
        <div class="btn">
            <a href="edit-profile.php"><button name="simpan" id="btn-mulai">EDIT</button></a>
        </div>
    </div>
</body>
</html>