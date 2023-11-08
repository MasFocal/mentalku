<?php 
    include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style-admin-1.css">
    <title>Tambah Basis Pengetahuan</title>
</head>
<body>
    <?php
        include "sidebar.php"
    ?>
    <div class="container">
        <p class="judul">TAMBAH BASIS PENGETAHUAN</p>
        <form action="" method="POST">
            <div class="cek">
                <label id="label-gejala">Pilih Diagnosa :</label>
                <select name="diagnosa" id="">
                    <option value="">---PILIH---</option>
                    <?php
                        $query1= mysqli_query($konek_db, "SELECT * FROM diagnosa WHERE 1");
                        while($hasil=mysqli_fetch_array($query1)){
                            echo "<option value='".$hasil['diagnosa']."' required>".$hasil['iddiagnosa']." - ".$hasil['diagnosa']."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="cek">
                <label id="label-gejala">Pilih Gejala :</label>
                <div class="cx">
                    <?php
                        $query= mysqli_query($konek_db, "SELECT * FROM gejala WHERE 1");
                        while($hasil=mysqli_fetch_array($query))
                        {
                            echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' class='cex' /> ".$hasil['gejala']." <br>";
                        }
                    ?>
                </div>
            </div>
            <button type="submit" name="simpan" id="btn-simpan">SIMPAN</button>
            <?php
                if(isset($_POST['simpan'])){
                    $diagnosa       = $_POST['diagnosa'];
                    $gejala         = $_POST['gejala'];
                    $jumlah_dipilih = count($gejala);

                    for($x=0;$x<$jumlah_dipilih;$x++){
                        $query="INSERT INTO `basispengetahuan`(`diagnosa`, `gejala`) VALUES ('$diagnosa','$gejala[$x]')";
                        $result=mysqli_query($konek_db, $query);
        
                        if($result) echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=basis-pengetahuan.php">'; 
                        else echo "Data Gagal Disimpan"; 
                    }
                }
            ?>
        </form>
    </div>
</body>
</html>