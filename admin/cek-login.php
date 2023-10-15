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

        if(empty($uss) && empty($pass)){
            header("Location: ../admin.php?error=Username dan Password harap diisi");
            exit();
        }
        else if(empty($uss)){
            header("Location: ../admin.php?error=Username harap diisi");
            exit();
        }else if(empty($pass)){
            header("Location: ../admin.php?error=Password harap diisi");
            exit();
        }else{
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
                header("Location: ../admin.php?error=Username atau Password Salah");
                exit();
            }
        }
    }else{
        header("Location: ../admin.php");
        exit();
    }
?>