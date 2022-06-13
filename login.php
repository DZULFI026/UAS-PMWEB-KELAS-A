<?php
    session_start();

    if(isset($_SESSION["login"])){
        header("Location: index.php");
        exit;
    }

    if(isset($_POST["login"])) {
        unset($error);
        $username = $_POST["username"];
        $password = $_POST["password"];

        if($username == 'user') {
            if($password == 'user1') {
                $_SESSION["login"] = true;
                header("Location: index.php");
                exit;
            }
        }
        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>
    <div class="wrapper">
        <div class="login-container">
            <div class="content-wrapper">
                <div class="login-content">
                    <p id="login-title">WELCOME!</p>
                    <?php if(isset($error)) { ?>
                        <p class="error">username / password salah</p>
                    <?php } ?>
                    <form action="" method="POST">
                        <div class="input-wrapper">
                            <input class="input-action" type="text" name="username" placeholder="Username">
                        </div>
                        <div class="input-wrapper">
                            <input class="input-action" type="password" name="password" placeholder="Password">
                        </div>
                        <input class="input-action" id="btn-login" type="submit" name="login" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>