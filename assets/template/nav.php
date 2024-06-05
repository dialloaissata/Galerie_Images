<!-- Barre de navigation-->
<h1><?= $trad["index"]["galery"] ?></h1>
<nav>
    <ul>
        <li><a href="index.php"><?= $trad["nav"]["home"] ?></a></li>
        <li><a href="livres.php"><?= $trad["nav"]["book"] ?></a></li>
        <li> <a href="architectures.php"><?= $trad["nav"]["arch"] ?></a></li>
        <li><a href="maquillages.php"><?= $trad["nav"]["makeup"] ?></a></li>
        <li><a href="technologies.php"><?= $trad["nav"]["tech"] ?></a></li>
        <li><a href="form.php"><?= $trad["nav"]["contact"] ?></a></li>
        <li>
            <select id="lang">
                <option value="fr" <?php echo $fr_select ?>>Français</option>
                <option value="en" <?php echo $en_select ?>>English</option>
            </select>
        </li>
    </ul>
    <img src="assets/img/menu_burger.png" alt="Icone menu hamburger">
</nav>