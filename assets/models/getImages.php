<?php

require_once 'Galerie.php';
// Récupérer les paramètres de démarrage et de comptage de la requête AJAX.
$start = $_GET["start"];
$count = $_GET["count"];
$type = $_GET["type"];
// Créer une nouvelle instance de la classe Galerie pour interagir avec la base de données.
$galerie = new Galerie();
//Récupérer les images demandés à partir de la base de données.
$projectImage = $galerie->getImageBetween($start, $count, $type);
// Convertir les données  en une chaîne encodée en JSON.
$jsonData = json_encode($projectImage);
// Définir l'en-tête de type de contenu sur "application/json".
header("Content-Type: application/json");
// Envoyer les données encodées en JSON au client à l'aide de la fonction "echo"
echo $jsonData;
