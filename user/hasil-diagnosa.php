<?php
    include "../koneksi.php";
?>

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
        include "navbar.php"
    ?>
    <div class="container">
        <p class="judul">HASIL DIAGNOSA</p>
        <div class="daftar">
            <table>
                <thead>
                <tr>
                    <th>Nama Diagnosa</th>
                    <th>Action</th>
                </tr>
                </thead>

                <?php
                    if(isset($_POST['simpan'])){
                        $gejala         = $_POST['gejala'];
                        $jumlah_dipilih = count($gejala);
                        $id = 0;
                        for($x=0; $x<$jumlah_dipilih; $x++){
                            $query1 = mysqli_query($konek_db, "SELECT * FROM `diagnosa` WHERE gejala='$gejala[$x]'");
                            $query = mysqli_query($konek_db, "SELECT DISTINCT p.iddiagnosa, p.ndiagnosa FROM basispengetahuan b, diagnosa p WHERE b.gejala='$gejala[$x]' AND p.ndiagnosa=b.ndiagnosa GROUP BY ndiagnosa");
                            while ($result = mysqli_fetch_array($query1)) 
                            {
                                $id++;
                                echo "
                                    <tr>
                                        <td>".$result['ndiagnosa']."</td>
                                        <td>
                                            <div class='action'>
                                                <a href=\"detail-diagnosa.php?id=".$result['ndiagnosa']."\"><button name='detail' class='btn-action'>Detail</button></a>
                                            </div>
                                        </td>
                                    </tr>
                                ";
                            }
                        }
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
