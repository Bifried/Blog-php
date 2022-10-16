<?php
session_start();
$_SESSION["connecte"] = false;

require("config.php");
require("loginverification.php")
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<a href="index.php"> Home </a>
<br>
<div id="login-form">
    <h2 class="header">Login</h2>
    <div>
<form method="POST">
    <label for="username"><b>Nom d'utilisateur</b></label>
    <input type="text" placeholder="Entrer le nom d'utilisateur" id="username" name="username" required>
    <br>

    <label for="password"><b>Mot de passe</b></label>
    <input type="password" placeholder="Entrer le mot de passe" id="password" name="password" required>
    <br>
    <input type="submit" name="submit" id='submit' value='LOGIN' >
    <br>
    <a href="register.php">You don't have an account ? Sign up</a>

</form>
    </div>
</div>
</body>
<br><br>
</html>
