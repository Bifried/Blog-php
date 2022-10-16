<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $modify = filter_input(INPUT_POST, "modify");
    $comment_id = filter_input(INPUT_POST, "commentId");

    if ($modify && $comment_id) {
        $pdo = new PDO("mysql:host=database;dbname=data", "root", "password");
        $requete = $pdo->prepare(" UPDATE comments SET content=:modify WHERE comment_id = :comment_id");
        $requete->execute([
            ":modify" => $modify,
            ":comment_id" => $comment_id
        ]);
        header('Location: admin.php');
        exit();
    }
}