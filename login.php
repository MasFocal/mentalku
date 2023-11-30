<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE USER</title>
    <link rel="stylesheet" href="asset/css/register.css">
</head>
<body>
    <?php
        session_start();
        include "koneksi.php";
    ?>
    <form method="post">
        <img src="asset/img/logo.png">
        <h2>LOGIN USER</h2>
        <label>Email</label>
        <input type="text" name="email" placeholder="Email" required>
        <label>Password</label>
        <input type="password" name="pass" placeholder="Password" required>
        <p>Lupa Password ? <a href="lupa-password.php">Klik Disini</a> </p>
        <p>Belum Punya Akun ? <a href="register.php">Register</a></p>
        <button type="submit">LOGIN</button>
    </form>
    <?php
        if (isset($_POST['email']) && isset($_POST['pass'])){
            $email  = $_POST['email'];
            $pass   = $_POST['pass'];
    
            $query  = mysqli_query($konek_db, "SELECT * FROM user WHERE email='$email' AND password='$pass'");
            $result = mysqli_fetch_assoc($query);
    
            if($result > 0){
                $_SESSION['email']      = $email;
                $_SESSION['password']   = $pass;
                $_SESSION['id']         = $result['iduser'];
                header("location: user/index.php");
                exit();
            }else{
                echo ("
                    <script LANGUAGE='JavaScript'>
                    window.alert('Login Gagal');
                    window.location.href='login.php';
                    </script>
                    ");
                    exit();
            }
        }
    ?>
</body>
</html>