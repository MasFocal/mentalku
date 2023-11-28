<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style-user.css">
    <title>Detail Diagnosa</title>
</head>
<body>
    <?php
    include "navbar.php";
    $id = null;

    if (isset($_POST['detail'])) {
        $id = $_POST['id_diagnosa'];
        header("location: informasi-diagnosa.php");
    }
    ?>
    <div class="container">
        <p class="judul">DETAIL DIAGNOSA</p>
        <form action="" method="POST">
            <div class="cek">
                <label id="label-gejala">ID Diagnosa :</label>
                <div>
                    <?php
                        $sql = mysqli_query ($konek_db, "SELECT * FROM diagnosa where iddiagnosa='".$_GET['id']."'");
                        while($data = mysqli_fetch_array ($sql))
                        {
                            echo "<input type='text' name='iddiagnosa' id='input-gejala' readonly value='".$data['iddiagnosa']."'>";
                        }
                    ?>
                </div>
            </div>
            <div class="cek">
                <label id="label-gejala">Diagnosa :</label>
                <div class="text">
                    <?php
                        $sql = mysqli_query ($konek_db, "SELECT * FROM diagnosa where iddiagnosa='".$_GET['id']."'");
                        while($data = mysqli_fetch_array ($sql))
                        {
                            echo "<input type='text' name='diagnosa' id='input-gejala' readonly value='".$data['diagnosa']."'>";
                        }
                    ?>
                </div>
            </div>
            <div class="cek">
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
            </div>
            <button id="btn-home" name="detail">BACK TO HOME</button>
        </form>
    </div>
</body>
</html>