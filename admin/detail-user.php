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
    ?>
    <div class="container">
        <p class="judul">DETAIL USER</p>
        <form action="" method="POST">
            <div class="cek">
                <label id="label-gejala">Foto :</label>
                <div>
                    <?php
                        $sql = mysqli_query ($konek_db, "SELECT * FROM user where iduser='".$_GET['id']."'");
                        while($data = mysqli_fetch_array ($sql))
                        {
                            echo "<input type='text' name='foto' id='input-gejala' readonly value='".$data['foto']."'>";
                        }
                    ?>
                </div>
            </div>
            <div class="cek">
                <label id="label-gejala">ID User :</label>
                <div>
                    <?php
                        $sql = mysqli_query ($konek_db, "SELECT * FROM user where iduser='".$_GET['id']."'");
                        while($data = mysqli_fetch_array ($sql))
                        {
                            echo "<input type='text' name='iduser' id='input-gejala' readonly value='".$data['iduser']."'>";
                        }
                    ?>
                </div>
            </div>
            <div class="cek">
                <label id="label-gejala">Email :</label>
                <div class="text">
                    <?php
                        $sql = mysqli_query ($konek_db, "SELECT * FROM user where iduser='".$_GET['id']."'");
                        while($data = mysqli_fetch_array ($sql))
                        {
                            echo "<input type='text' name='email' id='input-gejala' readonly value='".$data['email']."'>";
                        }
                    ?>
                </div>
            </div>
            <div class="cek">
                <label id="label-gejala">Nama :</label>
                <div class="text">
                    <?php
                        $sql = mysqli_query ($konek_db, "SELECT * FROM user where iduser='".$_GET['id']."'");
                        while($data = mysqli_fetch_array ($sql))
                        {
                            echo "<input type='text' name='nama' id='input-gejala' readonly value='".$data['nama']."'>";
                        }
                    ?>
                </div>
            </div>
            <div class="cek">
                <label id="label-gejala">Usia :</label>
                <div class="text">
                    <?php
                        $sql = mysqli_query ($konek_db, "SELECT * FROM user where iduser='".$_GET['id']."'");
                        while($data = mysqli_fetch_array ($sql))
                        {
                            echo "<input type='text' name='umur' id='input-gejala' readonly value='".$data['umur']."'>";
                        }
                    ?>
                </div>
            </div>
            <div class="cek">
                <label id="label-gejala">Jenis Kelamin :</label>
                <div class="text">
                    <?php
                        $sql = mysqli_query ($konek_db, "SELECT * FROM user where iduser='".$_GET['id']."'");
                        while($data = mysqli_fetch_array ($sql))
                        {
                            echo "<input type='text' name='jeniskelamin' id='input-gejala' readonly value='".$data['jeniskelamin']."'>";
                        }
                    ?>
                </div>
            </div>
            <div class="cek">
                <label id="label-gejala">No HP :</label>
                <div class="text">
                    <?php
                        $sql = mysqli_query ($konek_db, "SELECT * FROM user where iduser='".$_GET['id']."'");
                        while($data = mysqli_fetch_array ($sql))
                        {
                            echo "<input type='text' name='nohp' id='input-gejala' readonly value='".$data['nohp']."'>";
                        }
                    ?>
                </div>
            </div>
            <div class="cek">
                <label id="label-gejala">Alamat :</label>
                <div class="text">
                    <?php
                        $sql = mysqli_query ($konek_db, "SELECT * FROM user where iduser='".$_GET['id']."'");
                        while($data = mysqli_fetch_array ($sql))
                        {
                            echo "<textarea name='alamat' id='input-gejala' readonly value='".$data['alamat']."'>".$data['alamat']."</textarea>";
                        }
                    ?>
                </div>
            </div>
        </form>
    </div>
</body>
</html>