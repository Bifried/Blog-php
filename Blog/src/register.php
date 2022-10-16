<?php
session_start();
$_SESSION["connecte"] = false;
$_SESSION["admin"] = false;

require('registerverification.php')
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<a href="index.php"> Home </a>

<div id="login-form">
    <h2 class="header">Sign in</h2>
    <div>
<form method="POST">
    <label for="username"><b>Nom d'utilisateur</b></label>
    <input type="text" placeholder="Entrer le nom d'utilisateur" id="username" name="username" required>
    <br>

    <label for="password"><b>Mot de passe</b></label>
    <input type="password" placeholder="Entrer le mot de passe" id="password" name="password" required>
    <br>

    <input type="submit" id='submit' value='SIGN IN' >
    <br>
    <a href="login.php">Already have an account ? login</a>
</form>
    </div>
</div>
</body>
<br>
</html>
<!-- Popapoo784lol >
