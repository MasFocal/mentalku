<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Diagnosa</title>
</head>
<body>
    <?php
        include "navbar.php"
    ?>
    <div class="container">
        <p class="judul">TAMBAH DIAGNOSA</p>
        <form action="" method="POST">
            <li class="list-form">
                <label id="label-gejala">ID Diagnosa :</label>
                <input type="text" name="iddiagnosa" id="input-gejala" required>
            </li>
            <li class="list-form">
                <label id="label-gejala">Diagnosa :</label>
                <input type="text" name="diagnosa" id="input-gejala" required>
            </li>
            <button type="submit" name="simpan" id="btn-simpan">SIMPAN</button>

            <?php
                if(isset($_POST['simpan'])){
                $iddiagnosa = $_POST['iddiagnosa'];
                $diagnosa  = $_POST['diagnosa'];

                $query=mysqli_query($konek_db, "INSERT INTO `diagnosa`(`iddiagnosa`, `diagnosa`) VALUES ('$iddiagnosa', '$diagnosa')");

                if($query) header('location:diagnosa.php');
                else echo "Data Gagal Disimpan";

                }
            ?>
        </form>
    </div>
</body>
</html>