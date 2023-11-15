<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style-admin-1.css">
    <title>Daftar Diagnosa</title>
</head>
<body>
    <?php
        include "sidebar.php";
        if(isset($_POST['detail'])) {
            $id = $_POST["id_diagnosa"];
            header("location: detail-diagnosa.php?id=".$id."");
        }
        if(isset($_POST["edit"])) {
            $id = $_POST["id_diagnosa"];
            header("location: edit-diagnosa.php?id=".$id."");
        }
        if(isset($_POST["hapus"])) {
            $id = $_POST["id_diagnosa"];
            mysqli_query($konek_db, "DELETE FROM `diagnosa` WHERE `iddiagnosa`='$id'");
        }
    ?>
    <div class="container">
        <p class="judul">DAFTAR DIAGNOSA</p>
        <a href="tambah-diagnosa.php"><button id="btn-tambah">TAMBAH</button></a>
        <div class="daftar">
            <table>
                <tr>
                    <th>No</th>
                    <th>ID Diagnosa</th>
                    <th>Nama Diagnosa</th>
                    <th>Action</th>
                </tr>
                <?php
                    $query=mysqli_query($konek_db, "SELECT * FROM diagnosa WHERE 1");
                    $id = 0;
                    while ($data = mysqli_fetch_array($query)){
                ?>
                <form action="" method="POST">
                    <input type="hidden" name="id_diagnosa" value="<?= $data[0] ?>">
                    <tr>
                        <?php
                            $id++;
                            echo "
                                <td>".$id."</td>
                                <td>".$data[0]."</td>
                                <td>".$data[1]."</td>
                                <td>
                                    <div class='action'>
                                        <a href=\"detail-diagnosa.php?id=".$data[0]."\"><button name='detail'>Detail</button></a>
                                        <a href=\"edit-diagnosa.php?id=".$data[0]."\"><button name='edit'>Edit</button></a>
                                        <a href=\"?hapus&id_diagnosa=".$data[0]."\"><button name='hapus'>Hapus</button></a>
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