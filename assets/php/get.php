<?php
require_once __DIR__ . '/../models/Post.php';
$get = new Post();
$get->createPost($_GET['nom'], $_GET['email'], $_GET['message']);
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Methode Get</title>
</head>

<body>
    <ul>
        <?php foreach ($get->getPosts() as $get) : ?>
            <li><?= $get['nom']; ?></li>
            <li><?= $get['email']; ?></li>
            <li><?= $get['message']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>