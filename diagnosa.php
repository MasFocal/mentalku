<?php 
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIAGNOSA</title>
    <link rel="stylesheet" href="asset/css/style-user.css">
</head>
<body>
    <?php
        include "navbar.php"
    ?>
    <div class="container">
        <p class="judul">DIAGNOSA GEJALA</p>
        <p class="sub-judul">Silahkan Pilih Gejala yang Dirasakan :</p>
        <div class="cx">
            <?php
                $query= mysqli_query($konek_db, "SELECT * FROM gejala WHERE 1");
                while($hasil=mysqli_fetch_array($query))
                {
                    echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' class='cex' /> ".$hasil['gejala']." <br>";
                }
            ?>
        </div>
        <a href="hasil-diagnosa.php"><button type="submit" name="simpan" id="btn-simpan">CEK GEJALA</button></a>
    </div>
</body>
</html>