
<?php ////// configuration de connexion //////
if(isset($_POST['lelogin'])&& isset($_POST['lemdp'])){   
    $lelogin = htmlspecialchars(strip_tags($_POST['lelogin'],ENT_QUOTES));
    $lemdp = htmlspecialchars(strip_tags($_POST['lemdp'],ENT_QUOTES));	
    $recup_util = mysqli_query($connect,"SELECT * FROM utilisateur WHERE lelogin='$lelogin' AND  lemdp='$lemdp'; ") or die("Erreur: ".mysqli_error($connect));
	 
	 
	 if(mysqli_num_rows($recup_util)){
        $recup_tab = mysqli_fetch_assoc($recup_util);
		$_SESSION['clef_unique']=  session_id();
		$_SESSION['lid'] = $recup_tab['id'];
                $_SESSION['lelogin'] = $recup_tab['lelogin'];
                $_SESSION['lemdp'] = $recup_tab['lemdp'];	    
		$_SESSION['droit_id'] = $recup_tab['droit_id'];
        
           
    }else{
        $erreur_connect = "Login ou mot de passe incorrecte";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="../css/admin_style.css" />
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
        <script src="../lightbox/js/jquery-1.11.0.min.js"></script>
	<script src="../lightbox/js/lightbox.min.js"></script>
	<link href="../lightbox/css/lightbox.css" rel="stylesheet" />
	<link href="../galerie_lightbox.css" rel="stylesheet" />
        <script src="ckeditor/ckeditor.js"></script>
        <script>
            function supprime(id) {
    var question = confirm("Voulez-vous vraiment supprimer le proverbe dont l'id est " + id);
    if (question) { // si on répond ok
        // on redirige sur la page actuelle en donnant l'id à supprimer
        document.location.href = "?delete=" + id;
    }else{
        return false;
    }
}
        </script>
         <title></title>
    </head>
    <body>
 
     <div id="conteneur" >
         <div id="gauche">
            <div id="logo_admin"></div>
          <?php require_once 'includes/menu.php'; ?>
        </div>
   
        <div id="droite">

             <div id="contenu_admin">
                 