<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <?php
        include "navbar.php";
        $id = 0;
        $sql = mysqli_query ($konek_db, "SELECT * FROM user where iduser='".$_SESSION['id']."'");
        $data = mysqli_fetch_array ($sql);
    ?>
    <div class="container">
        <p class="judul">PROFILE</p>
        <form action="" method="POST">
            <input type="hidden" name="iduser" value="<?php echo $data['iduser'] ?>">
            <div class="cek">
                <label id="label-gejala">Nama :</label>
                <input type="text" name="nama" id="input-gejala" value="<?php echo $data['nama'] ?>" required>
            </div>
            <div class="cek">
                <label id="label-gejala">Email :</label>
                <input type="text" name="email" id="input-gejala" value="<?php echo $data['email'] ?>" required>
            </div>
            <div class="cek">
                <label id="label-gejala">Usia :</label>
                <input type='text' name='umur' id='input-gejala' value="<?php echo $data['umur'] ?>" required>
            </div>
            <div class="cek">
                <label id="label-gejala">Jenis Kelamin :</label>
                <div class="radio-input">
                    <input type='radio' name='jeniskelamin' id='input-gejala-2' value='Laki Laki' required>Laki Laki
                </div>
                <div class="radio-input">
                    <input type='radio' name='jeniskelamin' id='input-gejala-2' value='Perempuan' required>Perempuan
                </div>
            </div>
            <div class="cek">
                <label id="label-gejala">No HP :</label>
                <input type='text' name='nohp' id='input-gejala' value="<?php echo $data['nohp'] ?>" required>
            </div>
            <div class="cek">
                <label id="label-gejala">Alamat :</label>
                <textarea type='text' name='alamat' id='input-gejala' value="<?php echo $data['alamat'] ?>"required><?php echo $data['alamat'] ?></textarea>
            </div>
            
            <div class="btn">
                <a href="profile.php"><button type="submit" name="simpan" id="btn-mulai">SIMPAN</button></a>
            </div>
            <?php
                if(isset($_POST['simpan'])){
                $iduser         = $_POST['iduser'];
                $nama           = $_POST['nama'];
                $email          = $_POST['email'];
                $umur           = $_POST['umur'];
                $jeniskelamin   = $_POST['jeniskelamin'];
                $nohp           = $_POST['nohp'];
                $alamat         = $_POST['alamat'];

                $query="UPDATE `user` SET nama='$nama', email='$email', umur='$umur', jeniskelamin='$jeniskelamin', nohp='$nohp', alamat='$alamat' WHERE iduser='$iduser'";
                $result=mysqli_query($konek_db, $query);
                //if($result){
                    //echo "$nama";
                //}

                if($result) header('location:profile.php');
                else echo "Data Gagal Disimpan";

                }
            ?>
        </form>
    </div>
</body>
</html>