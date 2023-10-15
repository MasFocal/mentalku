<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE ADMIN</title>
    <link rel="stylesheet" href="asset/css/login-admin.css">
</head>
<body>
    <form action="admin/cek-login.php" method="post">
        <img src="asset/img/logo.png">
        <h2>LOGIN ADMIN</h2>
        <?php if(isset($_GET['error'])) { ?>
            <p class="error">
                <?php echo $_GET['error']; ?>
            </p>
        <?php } ?>
        <label>Username</label>
        <input type="text" name="uss" placeholder="Username">
        <label>Password</label>
        <input type="password" name="pass" placeholder="Password">

        <button type="submit">LOGIN</button>
    </form>
</body>
</html>