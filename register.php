<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER PAGE USER</title>
    <link rel="stylesheet" href="asset/css/register.css">
</head>
<body>
    <?php
        include "koneksi.php";
    ?>
    <form method="post">
        <img src="asset/img/logo.png">
        <h2>REGISTER USER</h2>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Nama" required>
        <label>Email</label>
        <input type="text" name="email" placeholder="Email" required>
        <label>Password</label>
        <input type="password" name="pass" placeholder="Password" required>
        <p>Sudah Punya Akun ? <a href="login.php">Login</a></p>
        <button type="submit" name="register">REGISTER</button>
    </form>
    <?php
        if(isset($_POST['register'])){
            $nama       = $_POST['nama'];
            $email      = $_POST['email'];
            $password   = $_POST['pass'];

            $query="INSERT INTO `user`(`nama`, `email`, `password`) VALUES ('$nama', '$email', '$password')";
            $result=mysqli_query($konek_db, $query);

            if($result) header('location:user/profile.php');
            else echo "Data Gagal Disimpan";
                
        }
    ?>
</body>
</html>