<?php 
    include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style-admin-1.css">
    <title>Detail Diagnosa</title>
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
        <p class="judul">TAMBAH DIAGNOSA</p>
        <form action="" method="POST">
            <div class="cek">
                <label id="label-gejala">ID Diagnosa :</label>
                <div>
                    <?php
                        $sql = mysqli_query ($konek_db, "SELECT * FROM diagnosa where iddiagnosa='".$_GET['id']."'");
                        while($data = mysqli_fetch_array ($sql))
                        {
                            echo "<input type='text' name='iddiagnosa' id='input-gejala' readonly value='".$data['iddiagnosa']."'>";
                        }
                    ?>
                </div>
            </div>
            <div class="cek">
                <label id="label-gejala">Diagnosa :</label>
                <div>
                    <?php
                        $sql = mysqli_query ($konek_db, "SELECT * FROM diagnosa where iddiagnosa='".$_GET['id']."'");
                        while($data = mysqli_fetch_array ($sql))
                        {
                            echo "<input type='text' name='diagnosa' id='input-gejala' readonly value='".$data['diagnosa']."'>";
                        }
                    ?>
                </div>
            </div>
            <!--
            <div class="cek">
                <label id="label-gejala">Solusi :</label>
                <div>
                    <?php
                        $sql = mysqli_query ($konek_db, "SELECT * FROM diagnosa where iddiagnosa='".$_GET['id']."'");
                        while($data = mysqli_fetch_array ($sql))
                        {
                            echo "<textarea name='solusi' id='input-gejala' readonly >".$data['solusi']."</textarea>";
                        }
                    ?>
                </div>
            </div>
            -->
        </form>
    </div>
</body>
</html>