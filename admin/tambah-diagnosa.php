<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style-admin-1.css">
    <title>Tambah Diagnosa</title>
</head>
<body>
    <?php
        include "sidebar.php"
    ?>
    <div class="container">
        <p class="judul">TAMBAH DIAGNOSA</p>
        <form action="" method="POST">
            <div class="cek">
                <label id="label-gejala">ID Diagnosa :</label>
                <input type="text" name="iddiagnosa" id="input-gejala" required>
            </div>
            <div class="cek">
                <label id="label-gejala">Diagnosa :</label>
                <input type="text" name="ndiagnosa" id="input-gejala" required>
            </div>
            <button type="submit" name="simpan" id="btn-simpan">SIMPAN</button>

            <?php
                if(isset($_POST['simpan'])){
                $iddiagnosa = $_POST['iddiagnosa'];
                $ndiagnosa  = $_POST['ndiagnosa'];

                $query=mysqli_query($konek_db, "INSERT INTO `diagnosa`(`iddiagnosa`, `ndiagnosa`) VALUES ('$iddiagnosa', '$ndiagnosa')");

                if($query) header('location:diagnosa.php');
                else echo "Data Gagal Disimpan";

                }
            ?>
        </form>
    </div>
</body>
</html>