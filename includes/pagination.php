<?php // Numero de page (1 par défaut)
if( isset($_GET['page']) && is_numeric($_GET['page']) )
    $page = $_GET['page'];
else
    $page = 1;

// Nombre d'info par page
$pagination = 4;
// Numéro du 1er enregistrement à lire
$limit_start = ($page - 1) * $pagination;

// Préparation de la requête
$sql = "SELECT * FROM photo LIMIT $limit_start, $pagination";

// Requête SQL
$resultat = mysqli_query($connect,$sql);

// Traitement et affichage des données
while ( $donnee = mysqli_fetch_assoc($resultat) ) {

    /* ICI VOTRE CODE NORMAL */
    /* Affichage d'un élément */

}


