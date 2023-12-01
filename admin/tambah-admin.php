<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Admin</title>
</head>
<body>
    <?php
        include "navbar.php"
    ?>
    <div class="container">
        <p class="judul">TAMBAH ADMIN</p>
        <form action="" method="POST">
            <li class="list-form">
                <label id="label-gejala">Nama :</label>
                <input type="text" name="nama" id="input-gejala" required>
            </li>
            <li class="list-form">
                <label id="label-gejala">Username :</label>
                <input type="text" name="username" id="input-gejala" required>
            </li>
            <li class="list-form">
                <label id="label-gejala">Password :</label>
                <input type="password" name="password" id="input-gejala" required>
            </li>
            <button type="submit" name="simpan" id="btn-simpan">SIMPAN</button>
            
            <?php
                if(isset($_POST['simpan'])){
                $nama     = $_POST['nama'];
                $username     = $_POST['username'];
                $password       = $_POST['password'];

                $query="INSERT INTO `admin`(`nama`, `username`, `password`) VALUES ('$nama', '$username', '$password')";
                $result=mysqli_query($konek_db, $query);

                if($result) header ('location:admin.php');
                else echo "Data Gagal Disimpan";

                }
            ?>
        </form>
    </div>
</body>
</html>