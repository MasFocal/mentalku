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
        include "sidebar.php";
        if(isset($_POST['hapus'])) {
            $id = $_POST["id_gejala"];
            mysqli_query($konek_db, "DELETE FROM `gejala` WHERE `idgejala`='$id'");
        }
        if(isset($_POST['edit'])) {
            $id = $_POST["id_gejala"];
            header("location: edit-gejala.php?id=".$id."");
        }
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
                ?>
                    <form action="" method="POST">
                        <input type="hidden" name="id_gejala" value="<?= $data[0] ?>">
                        <tr>
                            <?php
                                $id++;
                                echo "
                                    <td>".$id."</td>
                                    <td>".$data[0]."</td>
                                    <td>".$data[1]."</td>
                                    <td>
                                        <a href=\"edit-gejala.php?id=".$data[0]."\"><button name='edit'>Edit</button></a>
                                        <a href=\"?hapus&id_gejala=".$data[0]."\"><button name='hapus'>Hapus</button></a>
                                    </td>
                                ";
                            ?>
                        </tr>
                    </form>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>