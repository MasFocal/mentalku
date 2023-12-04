<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Diagnosa</title>
</head>
<body>
    <?php
        include "navbar.php";
        $id = null;
    ?>
    <div class="container">
        <p class="judul">HASIL DIAGNOSA</p>
        <form method="post">
            <div class="cek">
                <label id="label-gejala">Diagnosa :</label>
                <div>
                    <?php
                        if(isset($_POST['submit'])){ 
                            $gejala         = $_POST['gejala'];
                            $jumlah_dipilih = count($gejala);
                            $id = 0;
                            for($x=0; $x<$jumlah_dipilih; $x++){
                                $query = mysqli_query($konek_db, "SELECT DISTINCT p.iddiagnosa, p.diagnosa FROM basispengetahuan b, diagnosa p WHERE b.gejala='$gejala[$x]' AND p.diagnosa=b.diagnosa GROUP BY diagnosa");
                                $result = mysqli_fetch_array($query);
                            }
                            if($result){
                                echo "<input type='text' name='diagnosa' id='input-gejala' readonly value='".$result['diagnosa']."'>";
                            }
                        }
                    ?>
                </div>
            </div>
        </form>
        <p class="judul">INFORMASI PSIKOLOG</p>
        <?php
            $query2         = mysqli_query($konek_db, "SELECT * FROM psikolog WHERE 1");
            $id = 0;
            while ($data2   = mysqli_fetch_array($query2)){
        ?>
        <form class="list-psikolog">
            <div class="cek-2">
                <p class="label-psikolog">Nama Psikolog :</p>
                <p class="label-isi"><?php echo $data2['nama'] ?></p>
                <p class="label-psikolog">Alamat Psikolog :</p>
                <p class="label-isi"><?php echo $data2['alamat'] ?></p>
            </div>
        </form>
        <?php
            }
        ?>
    </div>
    </div>
</body>
</html>
