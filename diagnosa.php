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
        include "navbar.php";

        if(isset($_POST['cek'])) {
            $id = $_POST["id_diagnosa"];
        }
    ?>
    <div class="container">
        <p class="judul">DIAGNOSA GEJALA</p>
        <p class="sub-judul">Silahkan Pilih Gejala yang Dirasakan :</p>
        <form method="POST" action="hasil-diagnosa-1.php">
        <input type="hidden" name="id_diagnosa" value="<?= $data[0] ?>">
            <div class="cx">
                <?php
                    $query= mysqli_query($konek_db, "SELECT * FROM gejala WHERE 1");
                    while($hasil=mysqli_fetch_array($query))
                    {
                        echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' class='cex' /> ".$hasil['gejala']." <br><br>";
                    }
                ?>
            </div>
        <button type="submit" name="submit" id="btn-simpan" name="cek">CEK GEJALA</button>
        </form>
    </div>
</body>
</html>