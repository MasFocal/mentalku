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
                <label id='input-gejala-1'><?php echo $data['nama'] ?></label>
            </div>
            <div class="cek">
                <label id="label-gejala">Email :</label>
                <label id='input-gejala-1'><?php echo $data['email'] ?></label>
            </div>
            <div class="cek">
                <label id="label-gejala">Usia :</label>
                <label id='input-gejala-1'><?php echo $data['umur'] ?></label>
            </div>
            <div class="cek">
                <label id="label-gejala">Jenis Kelamin :</label>
                <label id='input-gejala-1'><?php echo $data['jeniskelamin'] ?></label>
            </div>
            <div class="cek">
                <label id="label-gejala">No HP :</label>
                <label id='input-gejala-1'><?php echo $data['nohp'] ?></label>
            </div>
            <div class="cek">
                <label id="label-gejala">Alamat :</label>
                <label id='input-gejala-1'><?php echo $data['alamat'] ?></label>
            </div>
        </form>
        <div class="btn">
            <a href="edit-profile.php"><button name="simpan" id="btn-mulai">EDIT</button></a>
        </div>
    </div>
</body>
</html>