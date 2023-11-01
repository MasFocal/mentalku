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
    session_start();
    include "koneksi.php";
        if (isset($_POST['email']) && isset($_POST['pass'])){
            $email =$_POST['email'];
            $pass = $_POST['pass'];
                $sql = "SELECT * FROM user WHERE email='$email' AND password='$pass'";

                $result = mysqli_query($konek_db, $sql);

                $data= mysqli_num_rows($result);

                if($data > 0){
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $pass;
                    header("location: user/index.php");
                    exit();
                }else{
                    echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Login Gagal');
                    window.location.href='login.php';
                    </script>");
                    exit();
                }
            }
    ?>
    <form method="post">
        <img src="asset/img/logo.png">
        <h2>LOGIN USER</h2>
        <label>Email</label>
        <input type="text" name="email" placeholder="Email" required>
        <label>Password</label>
        <input type="password" name="pass" placeholder="Password" required>
        <p>Lupa Password ? <a href="lupa-password.php">klik disini</a> </p>
        <p>Belum Punya Akun ? <a href="register.php">register</a></p>
        <button type="submit">LOGIN</button>
    </form>
</body>
</html>