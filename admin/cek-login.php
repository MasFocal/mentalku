<?php
session_start();
include "../koneksi.php";
    if (isset($_POST['uss']) && isset($_POST['pass'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $uss = validate($_POST['uss']);
        $pass = validate($_POST['pass']);
            $sql = "SELECT * FROM admin WHERE username='$uss' AND password='$pass'";

            $result = mysqli_query($konek_db, $sql);

            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if($row['username'] === $uss && $row['password'] === $pass){
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['nama'] = $row['nama'];
                    $_SESSION['idadmin'] = $row['idadmin'];
                    header("Location: dashboard-1.php");
                    exit();
                }else{
                header("Location: ../admin.php?error=Username atau Password Salah");
                exit();
                }
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Gagal');
                window.location.href='../admin.php';
                </script>");
            }
    }else{
        header("Location: ../admin.php");
        exit();
    }
?>