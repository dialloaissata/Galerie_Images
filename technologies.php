<!-- 
    Ce code php inclu les 2 fichiers:
    "langue.php": pour changer la langue (fr, en) et 
    "initiateCount.php": qui gere la facon dont les images 
    seront chargé en fonction de l'écran(mobil, pc, ...)"
-->
<?php
require_once "./assets/template/langue.php";
require_once "./assets/php/initiateCount.php";
$allImages = $galerie->getImageBetween($start, $count, "tec");
?>

<!--   ...........CODE HTML..............  -->
<!DOCTYPE html>
<html>
<!--   ...........HEAD..............  -->
<?php
require_once "./assets/template/head.php";
?>
<script src="./assets/js/lang.js?parent=technologies.php" defer></script>
<script src="/assets/js/ajax.js?type=tec" defer></script>

</head>

<body>

    <!--   ...........HEADER..............  -->
    <header>
        <?php
        require_once "./assets/template/nav.php";
        ?>
    </header>

    <!--   ...........MAIN..............  -->
    <?php
    // Inclu le code du main (C'est ici que les images seront affichés)
    require_once "./assets/template/main.php";
    ?>

</body>

</html>