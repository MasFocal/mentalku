<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Gejala</title>
</head>
<body>
    <?php
        include "navbar.php";
        $id = null;    

        if (isset($_POST['edit'])) {
            $id = $_POST['id_gejala'];
        }

        $sql    = mysqli_query ($konek_db, "SELECT * FROM gejala where idgejala='".$_GET['id']."'");
        $data   = mysqli_fetch_array ($sql);
    ?>
    <div class="container">
        <p class="judul">EDIT GEJALA</p>
        <form action="" method="POST">
            <li class="list-form">
                <label id="label-gejala">ID Gejala :</label>
                <input type='text' class='readonly' name='idgejala' id='input-gejala' readonly value="<?php echo $data['idgejala'] ?>">
            </li>
            <li class="list-form">
                <label id="label-gejala">Gejala :</label>
                <input type='text' name='gejala' id='input-gejala' value="<?php echo $data['gejala'] ?>" required>
            </div>
            <button type="submit" name="simpan" id="btn-simpan">SIMPAN</button>
            
            <?php
                if(isset($_POST['simpan'])){
                    $id         = $_POST['idgejala'];
                    $gejala     = $_POST['gejala'];

                    $query="UPDATE `gejala` SET gejala='".$_POST['gejala']."' WHERE idgejala='$id'";
                    $result=mysqli_query($konek_db, $query);

                    if($result) echo "Data Berhasil Disimpan";
                    else echo "Data Gagal Disimpan";
                    header('location:gejala.php');
                }
            ?>
        </form>
    </div>
</body>
</html>
