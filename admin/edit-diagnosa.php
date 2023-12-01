<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Diagnosa</title>
</head>
<body>
    <?php
        include "navbar.php";
        $id = null;

        if (isset($_POST['edit'])) {
            $id = $_POST['id_diagnosa'];
        }

        $sql    = mysqli_query ($konek_db, "SELECT * FROM diagnosa where iddiagnosa='".$_GET['id']."'");
        $data   = mysqli_fetch_array ($sql);
    ?>
    <div class="container">
        <p class="judul">TAMBAH DIAGNOSA</p>
        <form action="" method="POST">
            <li class="list-form">
                <label id="label-gejala">ID Diagnosa :</label>
                <input type='text' class='readonly' name='iddiagnosa' id='input-gejala' readonly value="<?php echo $data['iddiagnosa'] ?>">
            </li>
            <li class="list-form">
                <label id="label-gejala">Diagnosa :</label>
                <input type='text' name='diagnosa' id='input-gejala' required value="<?php echo $data['diagnosa'] ?>">
            </li>
            <button type="submit" name="simpan" id="btn-simpan">SIMPAN</button>
            <?php
                if(isset($_POST['simpan'])){
                $id             = $_POST['iddiagnosa'];
                $diagnosa       = $_POST['diagnosa'];

                $query="UPDATE `diagnosa` SET diagnosa='".$_POST['diagnosa']."' WHERE iddiagnosa='$id'";
                $result=mysqli_query($konek_db, $query);

                if($result) header('location:diagnosa.php');
                else echo "Data Gagal Disimpan";

                }
            ?>
        </form>
    </div>
</body>
</html>