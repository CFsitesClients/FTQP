<?php
// prÃ©paration des constantes de connexion Ã  mysql
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_MDP", "");
define("DB_NAME", "ftqp");

// constant contenant la racine du site
define("CHEMIN_RACINE", "http://localhost/ftqp/");

// nom des dossiers de destination des images (chemin relatif)
$dossier_ori = "../images/originales/"; // dossier de l'image originale
$dossier_mini = "../images/miniatures/"; // dossier des miniatures




// taille des miniatures coupÃ©es et centrÃ©es en pixels
$mini_large = 100; // taille maximale en largeur
$mini_haute = 120; // taille maximale en hauteur


// qualitÃ© de l'image de la miniature (jpg de 0 Ã  100)
$mini_qualite = 60;

// formats acceptÃ©s en minuscule dans un tableau, sÃ©parÃ© par des ','
$formats_acceptes = array('jpg','jpeg','png');