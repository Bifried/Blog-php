<?php

session_start();
$username = $_SESSION["username"];
$id = $_SESSION["id"];

if(!$_SESSION["admin"]) {
    http_response_code(302);
    header('Location: index.php');
    exit();
}

$pdo = new PDO("mysql:host=database;dbname=data", "root", "password");
$printComments = $pdo->prepare("SELECT content, created, username,comment_id from comments ORDER BY created DESC");
$printComments->execute();
$requete = $printComments->fetchAll();


require("createcomment.php");
require("deleteCommentsAdmin.php");
require("modifyCommentsAdmin.php");

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking</title>
    <link rel="stylesheet" href="./styles/home.css">
</head>
<body>
<h1>Bonjour Admin</h1>
<a href="index.php"><button>Déconnexion</button></a>
<div id="main">
    <form method="POST">
        <input type="text" name="comment" id="submit" placeholder="Exprimez vous !"/>
        <input type="submit" value="Envoyer" id="submit"/>
    </form>

    <form method="POST">
        <input type="text" name="modify" placeholder="Modifier un commentaire"/>
        <input type="text" name="commentId" placeholder="Id du commentaire">
        <input type="submit" value="Modifier" />
    </form>

    <form method="POST">
        <input type="text" name="comment_id" placeholder="Id du commentaire">
        <input type="submit" value="Supprimer" name="delete" />
    </form>
</div>

<div id="content">
    <p>Commentaires</p>
    <?php foreach($requete as $printComments): ?>
        <?="Commentaire de ",$printComments['username'],", " ?><br>
        <div>
            <?=$printComments["content"] ?> <br>
        </div>
        <?="Date: ",$printComments["created"] ?><br>
        <?= "id ",$printComments["comment_id"] ?>
        <hr><br>
        </tr>
    <?php endforeach;?>
</div>
</body>
</html>