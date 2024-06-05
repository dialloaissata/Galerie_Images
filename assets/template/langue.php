<!-- PHP pour traduire les pages-->
<?php
$en_select = "";
$fr_select = "";
if (isset($_GET['lang']) && $_GET['lang'] == 'en' || !isset($_GET['lang'])) {
    require_once './assets/locales/en.php';
    $en_select = "selected";
} else {
    require_once './assets/locales/fr.php';
    $fr_select = "selected";
}
?>