<?php 
    include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style-admin-1.css">
    <title>Edit Gejala</title>
</head>
<body>
    <?php
        include "sidebar.php";
        $id = null;    

        if (isset($_POST['edit'])) {
            $id = $_POST['id_gejala'];
        }
    ?>
    <div class="container">
        <p class="judul">EDIT GEJALA</p>
        <form action="" method="POST">
            <div class="cek">
                <label id="label-gejala">ID Gejala :</label>
                <div>
                    <?php
                        $sql = mysqli_query ($konek_db, "SELECT * FROM gejala where idgejala='".$_GET['id']."'");
                        while($data = mysqli_fetch_array ($sql))
                        {
                            echo "<input type='text' name='idgejala' id='input-gejala' readonly value='".$data['idgejala']."'>";
                        }
                    ?>
                </div>
            </div>

            <div class="cek">
                <label id="label-gejala">Gejala :</label>
                <div>
                    <?php
                        $sql = mysqli_query ($konek_db, "SELECT * FROM gejala where idgejala='".$_GET['id']."'");
                        while($data = mysqli_fetch_array ($sql))
                        {
                            echo "<input type='text' name='gejala' id='input-gejala' required value='".$data['gejala']."'>";
                        }
                    ?>
                </div>
            </div>

            <button type="submit" name="simpan" id="btn-simpan">SIMPAN</button>
            <?php
                if(isset($_POST['simpan'])){
                    $id         = $_POST['idgejala'];
                    $gejala     = $_POST['gejala'];

                    $query="UPDATE `gejala` SET gejala='".$_POST['gejala']."' WHERE idgejala='$id'";
                    $result=mysqli_query($konek_db, $query);

                    if($result) echo "Data Berhasil Disimpan";
                    else echo "Data Gagal Disimpan";
                    header('location:gejala.php');
                }
            ?>
        </form>
    </div>
</body>
</html>
