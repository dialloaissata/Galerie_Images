<?php
require_once "./assets/models/Galerie.php";
// Get parameters
$start = 0;
$count = 6;

// Check if the user is on a mobile device or tablet
if (isset($_SERVER['HTTP_USER_AGENT'])) {
    if (preg_match('/(tablet|ipad|android(?!.*mobile))/i', $_SERVER['HTTP_USER_AGENT'])) {
        $count = 2; // Load 2 projects initially on tablet devices
    } elseif (preg_match('/mobile/i', $_SERVER['HTTP_USER_AGENT'])) {
        $count = 1; // Load 1 project initially on mobile devices
    }
}

$galerie = new Galerie();
