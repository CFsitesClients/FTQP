<?php
session_start();
require_once '../includes/admin/connect.php';
require_once 'includes/config.php';
require_once 'includes/fonctions.php';
require_once 'includes/header.php';

// récupérations des images dans la table photo
$sql = "SELECT p.lenom,p.letype,p.letitre,p.ladesc,
    GROUP_CONCAT(r.id) AS rubid, 
    GROUP_CONCAT(r.lintitule SEPARATOR '~~') AS lintitule 
    FROM photo p
    INNER JOIN utilisateur u ON u.id = p.utilisateur_id
    LEFT JOIN photo_has_rubrique h ON h.photo_id = p.id
    LEFT JOIN rubrique r ON h.rubrique_id = r.id
    GROUP BY p.id
    ORDER BY p.id DESC; 
    ";
$recup_sql = mysqli_query($connect,$sql) or die(mysqli_error($connect)); 
//////////////////////////////////////////////////////




////////////////RAJOUT IMAGE/////////////////////////

// si on a envoyÃ© le formulaire et qu'un fichier est bien attachÃ©
if(isset($_FILES['lefichier'])){
    
    // traitement des chaines de caractÃ¨res
  
    
    // rÃ©cupÃ©ration des paramÃ¨tres du fichier uploadÃ©
    $limage = $_FILES['lefichier'];

    // appel de la fonction d'envoi de l'image, le rÃ©sultat de la fonction est mise dans la variable $upload
    $upload = upload_originales($limage,$dossier_ori,$formats_acceptes);
    
    // si $upload n'est pas un tableau c'est qu'on a une erreur
    if(!is_array($upload)){
        // on affiche l'erreur
        echo $upload;
        
    // si on a pas d'erreur, on va insÃ©rer dans la db et crÃ©er la miniature et grande image   
    }else{
        //var_dump($upload);
        
        // crÃ©ation de la miniature centrÃ©e et coupÃ©e
        $min_ok = creation_img($dossier_ori, $upload['nom'],$upload['extension'],$dossier_mini,$mini_large,$mini_haute,$mini_qualite,false);
        
        
     
        
        
        // si la crÃ©ation des 2 images sont effectuÃ©es
        if($min_ok==true){
            //var_dump($_POST);
            // prÃ©paration de la requÃªte (on utilise un tableau venant de la fonction upload_originales, de champs de formulaires POST traitÃ©s et d'une variable de session comme valeurs d'entrÃ©e)
            $sql= "INSERT INTO photo (lenom,letype,lepoids,lahauteur,lalargeur,utilisateur_id) 
	VALUES ('".$upload['nom']."','".$upload['extension']."',".$upload['poids'].",".$upload['hauteur'].",".$upload['largeur'].",".$_SESSION['lid'].");";
            
            mysqli_query($connect,$sql) or die(mysqli_error($connect));
            
            // rÃ©cupÃ©ration de la derniÃ¨re id insÃ©rÃ©e par la requÃªte qui prÃ©cÃ¨de (dans photo par l'utilisateur actuel)
            $id_photo = mysqli_insert_id($connect);
            
            // vÃ©rification de l'existence des sections cochÃ©es dans le formulaire
            if(isset($_POST['section'])){
            foreach($_POST['section'] AS $clef => $valeur){
                if(ctype_digit($valeur)){
                    mysqli_query($connect,"INSERT INTO photo_has_rubrique VALUES ($id_photo,$valeur);")or die(mysqli_error($connect));
                }
            }
            }
            
        }else{
            echo 'Erreur lors de la création des images redimenssionnées';
        }
        
    }    
}



// si on confirme la suppression
if(isset($_GET['delete'])&& ctype_digit($_GET['delete'])){
    $idphoto = $_GET['delete'];
    $idutil = $_SESSION['id'];
    
    // rÃ©cupÃ©ration du nom de la photo
    $sql1="SELECT lenom, letype FROM photo WHERE id=$idphoto;";
    $nom_photo = mysqli_fetch_assoc(mysqli_query($connect,$sql1));
    
    // supression dans la table photo_has_rubrique (sans l'utilisation de la clef Ã©trangÃ¨re)
    $sql2="DELETE FROM photo_has_rubrique WHERE photo_id = $idphoto";
    mysqli_query($connect,$sql2);
    
    // puis suppression dans la table photo
    $sql3="DELETE FROM photo WHERE id = $idphoto AND utilisateur_id = $idutil;";
    mysqli_query($connect,$sql3);
    echo $dossier_ori.$nom_photo['lenom'].".".$nom_photo['letype'];
    
    // supression physique des fichiers
    unlink($dossier_ori.$nom_photo['lenom'].".".$nom_photo['letype']);
    unlink($dossier_mini.$nom_photo['lenom'].".jpg");
}



$sql = "SELECT p.lenom,p.letype,p.letitre,p.ladesc,p.id,u.lelogin,
    GROUP_CONCAT(r.id) AS rubid, 
    GROUP_CONCAT(r.lintitule SEPARATOR '~~') AS lintitule 
    FROM photo p    
    INNER JOIN utilisateur u ON u.id = p.utilisateur_id
    LEFT JOIN photo_has_rubrique h ON h.photo_id = p.id
    LEFT JOIN rubrique r ON h.rubrique_id = r.id
    GROUP BY p.id
    ORDER BY p.id DESC       
        "; 
$recup_sql = mysqli_query($connect,$sql) or die(mysqli_error($connect));

// rÃ©cupÃ©ration de toutes les rubriques pour le formulaire d'insertion
$sql="SELECT * FROM rubrique ORDER BY lintitule ASC;";
$recup_section = mysqli_query($connect, $sql);
?>
<form action="" enctype="multipart/form-data" method="POST" name="onposte">
                   
                    <input type="file" name="lefichier" required /><br/>                                  
                    <input type="submit" value="Envoyer le fichier" /><br/>
                    Sections : <?php
                    // affichage des sections
                    while($ligne = mysqli_fetch_assoc($recup_section)){
                        echo $ligne['lintitule']." : <input type='checkbox' name='section[]' value='".$ligne['id']."' > - ";
                    }
                    ?>
                </form>
<?php




// rÃ©cupÃ©rations des images de l'utilisateur connectÃ© dans la table photo avec leurs sections mÃªme si il n'y a pas de sections sÃ©lectionnÃ©es (jointure externe avec LEFT)

///////////////////////////////////////////////////////////////////

 // affichez les miniatures de chaques photos dans la db par id Desc, avec le titre au dessus et la description en dessous, et affichage de la grande photo dans une nouvelle fenêtre lors du clic, Bonus : afficher lelogin de l'auteur de l'image
               while($ligne = mysqli_fetch_assoc($recup_sql)){
                 echo "<div class='miniatures'>";
              
                 echo "<a href='".CHEMIN_RACINE."ftqp/".$dossier_ori.$ligne['lenom'].".".$ligne['letype']."' target='_blank'><img src='".CHEMIN_RACINE."ftqp/".$dossier_mini.$ligne['lenom'].".jpg' alt='' /></a><br/>";
              
                echo "</div>";
                echo "<img onclick='supprime(".$ligne['id'].");' src='image_admin/supprimer.png' alt='supprimer' />Supprimer";
               }                


                
           //     if(isset($_SESSION['clef_unique'])&&$_SESSION['clef_unique']==session_id()&&$_SESSION['droit_id']==1 ){}
                
 ?>               

         