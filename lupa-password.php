<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE USER</title>
    <link rel="stylesheet" href="asset/css/login-user.css">
</head>
<body>
    <?php
        include "koneksi.php";
    ?>
    <form method="post">
        <img src="asset/img/logo.png">
        <h2>LUPA PASSWORD</h2>
        <label>Email</label>
        <input type="text" name="email" placeholder="Email" required>
        <label>Password Baru</label>
        <input type="password" name="pass" placeholder="Password" required>
        <button type="submit" name="simpan">SIMPAN</button>
    </form>
    <?php
        if(isset($_POST['simpan'])){
            $sql = mysqli_query($konek_db, "SELECT * FROM user WHERE email='$email' AND password='$pass'");
            $data = mysqli_fetch_array($sql);

            $id         = $_POST['iduser'];
            $email      = $_POST['email'];
            $password   = $_POST['pass'];

            $query="UPDATE `user` SET `password`='$password' WHERE iduser='$id'";
            $result=mysqli_query($konek_db, $query);

            if($result) header('location:login.php');
            else echo "Data Gagal Disimpan";
        }
    ?>
</body>
</html>