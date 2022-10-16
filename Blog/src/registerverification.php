<?php
$pdo = new PDO("mysql:host=database;dbname=data", "root", "password");

if($_SERVER["REQUEST_METHOD"] == "POST")  {
    $username= filter_input(INPUT_POST, "username");
    $password = filter_input(INPUT_POST, "password");

    if($username && $password) {
        $password = password_hash(filter_input(INPUT_POST, "password"),PASSWORD_DEFAULT);
        $maRequete = $pdo->prepare("INSERT INTO users (username,password,admin) VALUES(:username,:password,0)");
        $maRequete->execute([
            ":username" => $username,
            ":password" => $password,
        ]);

        $_SESSION["connecte"] = true;
        $_SESSION["admin"] = false;
        $_SESSION["username"] = $username;
        $_SESSION["id"] = $pdo->lastInsertId();
        http_response_code(302);
        header('Location: connected.php');
        exit();
    }

}
?>