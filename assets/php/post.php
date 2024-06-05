<?php
require_once __DIR__ . '/../models/Post.php';
$post = new Post();
$post->createPost($_POST['nom'], $_POST['email'], $_POST['message']);
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Methode Post</title>
</head>

<body>
    <ul>
        <?php foreach ($post->getPosts() as $post) : ?>
            <li><?= $post['nom']; ?></li>
            <li><?= $post['email']; ?></li>
            <li><?= $post['message']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>