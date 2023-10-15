<?php
    include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style-admin-1.css">
    <title>Daftar Gejala</title>
</head>
<body>
<?php
    include "sidebar.php"
    ?>
    <div class="container">
        <p class="judul">DAFTAR GEJALA</p>
        <a href="tambah-gejala.php"><button id="btn-tambah">TAMBAH</button></a>
        <div class="daftar">
            <table>
                <tr>
                    <th>No</th>
                    <th>ID Gejala</th>
                    <th>Nama Gejala</th>
                    <th>Action</th>
                </tr>
                <?php
                    $queri="SELECT * FROM gejala WHERE 1";
                    $hasil=mysqli_query ($konek_db,$queri);
                    $id = 0;
                    while ($data = mysqli_fetch_array ($hasil)){
                    $id++;
                    echo "
                        <tr>
                            <td>".$id."</td>
                            <td>".$data[0]."</td>
                            <td>".$data[1]."</td>
                        </tr>
                    ";
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>