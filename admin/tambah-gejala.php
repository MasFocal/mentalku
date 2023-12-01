<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Gejala</title>
</head>
<body>
    <?php
        include "navbar.php"
    ?>
    <div class="container">
        <p class="judul">TAMBAH GEJALA</p>
        <form action="" method="POST">
            <li class="list-form">
                <label id="label">ID Gejala :</label>
                <input type="text" name="idgejala" id="input-teks" required>
            </li>
            <li class="list-form">
                <label id="label">Gejala :</label>
                <input type="text" name="gejala" id="input-teks" required>
            </li>
            <button type="submit" name="simpan" id="btn-simpan">SIMPAN</button>

            <?php
                if(isset($_POST['simpan'])){
                $idgejala   = $_POST['idgejala'];
                $gejala     = $_POST['gejala'];

                $query="INSERT INTO `gejala`(`idgejala`, `gejala`) VALUES ('$idgejala', '$gejala')";
                $result=mysqli_query($konek_db, $query);

                if($result) header('location:gejala.php');
                else echo "Data Gagal Disimpan";
                
                }
            ?>
        </form>
    </div>
</body>
</html>