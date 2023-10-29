<?php 
    include "../koneksi.php";
?>
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
                <input type="text" name="diagnosa" id="input-gejala" required>
            </div>
            <div class="cek">
                <label id="label-gejala">Solusi :</label>
                <textarea type="text" name="solusi" id="input-gejala" required></textarea>
            </div>
            <button type="submit" name="simpan" id="btn-simpan">SIMPAN</button>
            <?php
                if(isset($_POST['simpan'])){
                $iddiagnosa     = $_POST['iddiagnosa'];
                $diagnosa       = $_POST['diagnosa'];
                $solusi         = $_POST['solusi'];

                $query="INSERT INTO `diagnosa`(`iddiagnosa`, `diagnosa`, `solusi`) VALUES ('$iddiagnosa', '$diagnosa', '$solusi')";
                $result=mysqli_query($konek_db, $query);

                if($result) echo "Data Berhasil Disimpan";
                else echo "Data Gagal Disimpan";
                }
            ?>
        </form>
    </div>
</body>
</html>