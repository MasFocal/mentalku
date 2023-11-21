<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Diagnosa</title>
    <link rel="stylesheet" href="../asset/css/style-user.css">
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
                <label id="label-gejala">Nama :</label>
                <div>
                    <?php
                        $sql = mysqli_query ($konek_db, "SELECT * FROM user where nama='".$_SESSION['nama']."'");
                        while($data = mysqli_fetch_array ($sql))
                        {
                            echo "<input type='text' name='nama' id='input-gejala' readonly value='".$data['nama']."'>";
                        }
                    ?>
                </div>
            </div>
            <div class="cek">
                <label id="label-gejala">Usia :</label>
                <div>
                    <?php
                        $sql = mysqli_query ($konek_db, "SELECT * FROM user where nama='".$_SESSION['nama']."'");
                        while($data = mysqli_fetch_array ($sql))
                        {
                            echo "<input type='text' name='umur' id='input-gejala' readonly value='".$data['umur']."'>";
                        }
                    ?>
                </div>
            </div>
            <div class="cek">
                <label id="label-gejala">Jenis Kelamin :</label>
                <div>
                    <?php
                        $sql = mysqli_query ($konek_db, "SELECT * FROM user where nama='".$_SESSION['nama']."'");
                        while($data = mysqli_fetch_array ($sql))
                        {
                            echo "<input type='text' name='jeniskelamin' id='input-gejala' readonly value='".$data['jeniskelamin']."'>";
                        }
                    ?>
                </div>
            </div>
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
    </div>
</body>
</html>
