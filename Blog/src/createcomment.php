<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = filter_input(INPUT_POST, "comment");
    $username = $_SESSION["username"];
    $id = $_SESSION["id"];

    if ($comment) {
        $pdo = new PDO("mysql:host=database:3306;dbname=data", "root", "password");
        $requete = $pdo->prepare("INSERT INTO comments (content,username,id) values (:content,:username,:id)");
        $requete->execute([
            ":content" => $comment,
            ":username" => $username,
            ":id" => $id
        ]);
        header('Location: connected.php');
        exit();
    }
}