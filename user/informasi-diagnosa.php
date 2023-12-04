<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Diagnosa</title>
</head>
<body>
    <?php
        include "navbar.php";
        if(isset($_POST['detail'])) {
            $id = $_POST["id_diagnosa"];
            header("location: detail-diagnosa.php?id=".$id."");
        }
    ?>
    <div class="container">
        <p class="judul">INFORMASI DIAGNOSA</p>
        <div class="daftar">
            <table>
                <tr>
                    <th>No</th>
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
                                <td>".$data[1]."</td>
                                <td>
                                    <div class='action'>
                                        <a href=\"detail-diagnosa.php?id=".$data[0]."\"><button name='detail' class='btn-action'>Detail</button></a>
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