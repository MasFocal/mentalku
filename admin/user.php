<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar User</title>
</head>
<body>
    <?php
        include "navbar.php";
        if(isset($_POST["hapus"])) {
            $id = $_POST["id_user"];
            mysqli_query($konek_db, "DELETE FROM `user` WHERE `iduser`='$id'");
        }
        if(isset($_POST["detail"])) {
            $id = $_POST["id_user"];
            header("location: detail-user.php?id=".$id."");
        }
    ?>
    <div class="container">
        <p class="judul">DAFTAR USER</p>
        <div class="daftar">
            <table>
                <tr>
                    <th>No</th>
                    <th>Email</th>
                    <th>Nama User</th>
                    <th>Action</th>
                </tr>
                <?php
                    $query=mysqli_query ($konek_db, "SELECT * FROM user WHERE 1");
                    $id = 0;
                    while ($data = mysqli_fetch_array($query)){
                ?>
                <form action="" method="POST">
                    <input type="hidden" name="id_user" value="<?= $data[0] ?>">
                    <tr>
                        <?php
                            $id++;
                            echo "
                                <td>".$data[0]."</td>
                                <td>".$data[1]."</td>
                                <td>".$data[2]."</td>
                                <td>
                                    <div class='action'>
                                        <a href=\"detail-gejala.php?nama=".$data[2]."\"><button name='detail'>Detail</button></a>
                                        <a href=\"?hapus&nama=".$data[2]."\"><button name='hapus'>Hapus</button></a>
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