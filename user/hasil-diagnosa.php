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
        include "navbar.php";
        $id = 0; // Inisialisasi variabel $id
    ?>
    <div class="container">
        <p class="judul">HASIL DIAGNOSA</p>
        <div class="daftar">
                <table>
                    <tr>
                        <th>No</th>
                        <th>Nama Diagnosa</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        if(isset($_POST['simpan'])){
                            $gejala         = $_POST['gejala'];
                            $jumlah_dipilih = count($gejala);

                            for($x=0; $x<$jumlah_dipilih; $x++){
                                $query = mysqli_query($konek_db, "SELECT DISTINCT p.iddiagnosa, p.diagnosa FROM basispengetahuan b, diagnosa p WHERE b.gejala='$gejala[$x]' AND p.diagnosa=b.diagnosa GROUP BY diagnosa");

                                while ($result = mysqli_fetch_array($query)) {
                                    $id++;
                                    echo "
                                        <tr>
                                            <td>".$id."</td>
                                            <td>".$result['diagnosa']."</td>
                                            <td>
                                                <div class='action'>
                                                    <a href=\"detail-diagnosa.php?id=".$result['iddiagnosa']."\"><button name='detail' class='btn-action'>Detail</button></a>
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
