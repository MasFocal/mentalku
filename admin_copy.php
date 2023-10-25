<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE ADMIN</title>
    <link rel="stylesheet" href="asset/css/login-admin.css">
</head>
<body>
<?php
session_start();
include "koneksi.php";
    if (isset($_POST['button'])){
        $uss =$_POST['uss'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM admin WHERE username='$uss' AND password='$pass'";

        $result = mysqli_query($konek_db, $sql);

        $data= mysqli_fetch_array($result);

            if($data['username']==$uss && $data['password']==$pass){
                $_SESSION['username'] = $uss;
	            header("location: admin/dashboard-1.php");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Login Gagal');
                window.location.href='admin_copy.php';
                </script>");;
            }
        }
?>
    <form method="post">
        <img src="asset/img/logo.png">
        <h2>LOGIN ADMIN</h2>
        <label>Username</label>
        <input type="text" name="uss" placeholder="Username" required>
        <label>Password</label>
        <input type="password" name="pass" placeholder="Password" required>

        <button name="button">LOGIN</button>
    </form>
</body>
</html>