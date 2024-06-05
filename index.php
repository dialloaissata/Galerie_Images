<?php
require_once "./assets/template/langue.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $trad["index"]["title"] ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="./assets/css/index.css" />
    <link rel="stylesheet" href="./assets/css/style_header.css" />

    <script src="./assets/js/script_nav.js" defer></script>
    <script src="./assets/js/lang.js?parent=index.php" defer></script>
</head>

<body>
    <!--   ...........HEADER..............  -->
    <header>
        <?php
        require_once "./assets/template/nav.php";
        ?>
    </header>

    <!--   ...........MAIN(Section: A_propos et Section Contenu)..............  -->
    <main>
        <!--   ...........A propos..............  -->
        <section id="a_propos">
            <figure class="photo_profil">
                <img src="./assets/img/profil.jpg" alt="Image d'une fleur rouge">
            </figure>
            <section class="paraph_info">
                <p><?= $trad["a_propos"]["p"] ?></p>
            </section>
        </section>
        <!--   ...........Contenu ..............  -->
        <section id="contenu">
            <article class="overlay">
                <a href="livres.php"><img src="./assets/img/livre1.jpg" alt="Image d'un livre ouvert avec un bouquet de rose dessus"></a>
                <span class="texte_overlay"><?= $trad["contenu"]["cd"] ?></span>
            </article>
            <article class="overlay">
                <a href="architectures.php"><img src="./assets/img/architecture1.jpg" alt="Image d'un temple en pierre, avec un chat posé sur des tapis anciens"></a>
                <span class="texte_overlay"><?= $trad["contenu"]["cd"] ?></span>
            </article>
            <article class="overlay">
                <a href="maquillages.php"><img src="./assets/img/maquillage1.jpg" alt="Image du fille maquillé avec les mains levés au visage"></a>
                <span class="texte_overlay"><?= $trad["contenu"]["cd"] ?></span>
            </article>
            <article class="overlay">
                <a href="technologies.php"><img src="./assets/img/tech1.jpg" alt="Image d'un ordinateur ouvert avec des couleurs arc en ciel au tour"></a>
                <span class="texte_overlay"><?= $trad["contenu"]["cd"] ?></span>
            </article>
        </section>
    </main>

    <!--   ...........FOOTER..............  -->
    <footer>
        <ul>
            <li>
                <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
            </li>
            <li>
                <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
            </li>
            <li>
                <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
            </li>
        </ul>
    </footer>

</body>

</html>