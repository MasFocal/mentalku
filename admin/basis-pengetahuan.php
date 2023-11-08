<?php
    include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style-admin-1.css">
    <title>Daftar Basis Pengetahuan</title>
</head>
<body>
    <?php
        include "sidebar.php";
        if(isset($_POST["hapus"])) {
            $id = $_POST["id_gejala"];
            mysqli_query($konek_db, "DELETE FROM `basispengetahuan` WHERE `diagnosa`='$id'");
        }
    ?>
    <div class="container">
        <p class="judul">DAFTAR BASIS PENGETAHUAN</p>
        <a href="tambah-bp.php"><button id="btn-tambah">TAMBAH</button></a>
        <div class="daftar">
            <table>
                <tr>
                    <th>No</th>
                    <th>Diagnosa</th>
                    <th>Gejala</th>
                    <th>Action</th>
                </tr>
                <?php
                    $query=mysqli_query($konek_db, "SELECT * FROM basispengetahuan WHERE 1");
                    $id = 0;
                    while ($data = mysqli_fetch_array($query)){
                ?>
                <form action="" method="POST">
                    <input type="hidden" name="id_gejala" value="<?= $data[0] ?>">
                    <tr>
                        <?php
                            $id++;
                            echo "
                                <td>".$id."</td>
                                <td>".$data['0']."</td>
                                <td>".$data['1']."</td>
                                <td>
                                    <div class='action'>
                                        <a href=\"?hapus&diagnosa=".$data[0]."\"><button name='hapus'>Hapus</button></a>
                                    </div>  
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