<?php
    include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style-admin-1.css">
    <title>Daftar Admin</title>
</head>
<body>
    <?php
        include "sidebar.php";
        if(isset($_POST["hapus"])) {
            $id = $_POST["id_admin"];
            mysqli_query($konek_db, "DELETE FROM `admin` WHERE `idadmin`='$id'");
        }
    ?>
    <div class="container">
        <p class="judul">DAFTAR ADMIN</p>
        <a href="tambah-admin.php"><button id="btn-tambah">TAMBAH</button></a>
        <div class="daftar">
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama Admin</th>
                    <th>Username</th>
                    <th>Action</th>
                </tr>
                <?php
                    $query=mysqli_query($konek_db, "SELECT * FROM admin WHERE 1");
                    $id = 0;
                    while ($data = mysqli_fetch_array($query)){
                ?>
                <form action="" method="POST">
                    <input type="hidden" name="id_admin" value="<?= $data[0] ?>">
                    <tr>
                        <?php
                            $id++;
                            echo "
                                <td>".$data[0]."</td>
                                <td>".$data[1]."</td>
                                <td>".$data[2]."</td>
                                <td>
                                    <a href=\"?hapus&nama=".$data[2]."\"><button name='hapus'>Hapus</button></a>
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