<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Diagnosa</title>
</head>
<body>
    <?php
        include "navbar.php";
        $id = null;

        if (isset($_POST['detail'])) {
            $id = $_POST['id_diagnosa'];
        }

        $sql    = mysqli_query ($konek_db, "SELECT * FROM diagnosa where iddiagnosa='".$_GET['id']."'");
        $data   = mysqli_fetch_array ($sql)
    ?>
    <div class="container">
        <p class="judul">DETAIL DIAGNOSA</p>
        <form action="" method="POST">
            <li class="list-form">
                <label id="label-gejala">ID Diagnosa :</label>
                <input type='text' name='iddiagnosa' id='input-gejala' readonly value="<?php echo $data['iddiagnosa'] ?>">
            </li>
            <li class="list-form">
                <label id="label-gejala">Diagnosa :</label>
                <input type='text' name='diagnosa' id='input-gejala' readonly value="<?php echo $data['diagnosa'] ?>">
            </li>
            <li class="list-form">
                <label id="label-gejala">Gejala :</label>
                <div class="text">
                    <?php
                        $sql = mysqli_query ($konek_db, "SELECT * FROM diagnosa p, basispengetahuan b where p.iddiagnosa='".$_GET['id']."' AND p.diagnosa=b.diagnosa ");
                        while($data = mysqli_fetch_array ($sql))
                        {
                            echo "<input type='text' name='diagnosa' id='input-gejala' readonly value='".$data['gejala']."'> <br><br>";
                        }
                    ?>
                </div>
            </li>
        </form>
    </div>
</body>
</html>