<?php 
    session_start();

    if(isset($_SESSION['idadmin']) & isset($_SESSION['username'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style-admin.css">
    <title>Dashboard Admin</title>
</head>
<body>
    <h1>HALLO, <?php echo $_SESSION['nama']; ?></h1>
    <a href="../admin.php">logout</a>
</body>
</html>

<?php
    }else{
        header("Location: ../admin.php");
        exit();
    }
?>