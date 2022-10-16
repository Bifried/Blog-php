<?php
session_start();
$_SESSION["connecte"] = false;

$pdo = new PDO("mysql:host=database:3306;dbname=data", "root", "password");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <link href="style2.css" rel="stylesheet">
</head>
<body>
<ul>
    <li>
        <a href="index.php">Home</a>
    </li>
    <li>
        <a href="login.php">Login</a>
    </li>
    <li>
        <a href="register.php">Sign in</a>
    </li>
    <li>
        <a href="http://localhost:8899/">PhpMyAdmin</a>
    </li>
</ul>
<br>
</body>
</html>


