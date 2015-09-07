<?php 
session_start();
$nav_en_cours = 'galerie';
require_once 'includes/admin/connect.php';
require_once 'administration/includes/fonctions.php';
require_once 'includes/header.php';
require_once 'includes/pagination.php';

?>
<?php
 if (isset($_SESSION['lelogin']) && $_SESSION['lemdp']){
     // Nb d'enregistrement total
$nb_total = mysqli_query($connect,'SELECT COUNT(*) AS nb_total FROM photo');
$nb_total = mysqli_fetch_array($nb_total);
$nb_total = $nb_total['nb_total'];

// Pagination
$nb_pages = ceil($nb_total / $pagination);
             
$sql = "SELECT p.*, GROUP_CONCAT(r.id) AS idrub, GROUP_CONCAT(r.lintitule SEPARATOR '|||' ) AS lintitule
    FROM photo p
	LEFT JOIN photo_has_rubrique h ON h.photo_id = p.id
    LEFT JOIN rubrique r ON h.rubrique_id = r.id
        GROUP BY p.id
        ORDER BY p.id DESC
        LIMIT $limit_start, $pagination;
    ";
$recup_sql = mysqli_query($connect,$sql) or die(mysqli_error($connect));


// récupération de toutes les rubriques pour le formulaire d'insertion
$sql="SELECT * FROM rubrique ORDER BY lintitule ASC;";
$recup_section = mysqli_query($connect, $sql);
               while($ligne = mysqli_fetch_assoc($recup_sql)){   
                   echo "<div id='affiche-photo'>";
                 echo "<a href='".CHEMIN_RACINE."ftqp/".$dossier_ori.$ligne['lenom'].".".$ligne['letype']."' target='_blank'><img src='".CHEMIN_RACINE."ftqp/".$dossier_mini.$ligne['lenom'].".jpg' alt='' /></a><br/>";
                
                echo "</div>";
               }   
               // Pagination
$nb_pages = ceil($nb_total / $pagination);
echo "<div id='pagination'>" .'<p>Page :';
		// Boucle sur les pages
		for ($i = 1 ; $i <= $nb_pages ; $i++) {
		if ($i == $page )
			echo " $i";
		else
			echo " <a href=\"?page=$i\">$i</a> ";
		}
		echo ' </p>'."</div>";

 }else{
    
              
// Nb d'enregistrement total
$nb_total = mysqli_query($connect,'SELECT COUNT(*) AS nb_total FROM photo_has_rubrique WHERE rubrique_id =2 ');
$nb_total = mysqli_fetch_array($nb_total);
$nb_total = $nb_total['nb_total'];

// Pagination
$nb_pages = ceil($nb_total / $pagination);
             
     
     
     $sql = "SELECT p.*, GROUP_CONCAT(r.id) AS idrub, GROUP_CONCAT(r.lintitule SEPARATOR '|||' ) AS lintitule
    FROM photo p
	LEFT JOIN photo_has_rubrique h ON h.photo_id = p.id
    LEFT JOIN rubrique r ON h.rubrique_id = r.id
        WHERE rubrique_id =2
        GROUP BY p.id
        ORDER BY p.id DESC
        LIMIT $limit_start, $pagination;
    ";
$recup_sql = mysqli_query($connect,$sql) or die(mysqli_error($connect));


// rÃ©cupÃ©ration de toutes les rubriques pour le formulaire d'insertion
$sql="SELECT * FROM rubrique ORDER BY lintitule ASC;";
$recup_section = mysqli_query($connect, $sql);
               while($ligne = mysqli_fetch_assoc($recup_sql)){   
                   echo "<div id='affiche-photo'>";
                 echo "<a href='".CHEMIN_RACINE."ftqp/".$dossier_ori.$ligne['lenom'].".".$ligne['letype']."' data-lightbox='groupe'><img src='".CHEMIN_RACINE."ftqp/".$dossier_mini.$ligne['lenom'].".jpg' alt='' /></a><br/>";
                
                echo "</div>";
               }   
 // Pagination
$nb_pages = ceil($nb_total / $pagination);
echo "<div id='pagination'>" .'<p>Page :';
		// Boucle sur les pages
		for ($i = 1 ; $i <= $nb_pages ; $i++) {
		if ($i == $page )
			echo " $i";
		else
			echo " <a href=\"?page=$i\">$i</a> ";
		}
		echo ' </p>'."</div>";
 }
?>
<?php 
require_once 'includes/footer.php';

?>
