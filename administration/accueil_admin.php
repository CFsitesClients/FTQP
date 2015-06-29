<?php
session_start();
require_once '../includes/admin/connect.php';
require_once 'includes/header.php';


////// configuration de connexion //////
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
        /* header("Location: ./");*/
           
    }else{
        $erreur_connect = "Login ou mot de passe incorrecte";
    }
}
////////////////////////////////////////
//
// UPDATE ACCUEIL
if(isset($_POST['content'])){
    $texte_acc =htmlentities($_POST['content'],ENT_QUOTES);
    $id = $_POST['id'];
    $uptexte =mysqli_query($connect, "UPDATE accueil SET message='$texte_acc' WHERE id=$id");
}
// fin UPDATE ACCUEIL

// SELECT 
$query_select= mysqli_query($connect, "SELECT * FROM accueil");
//FIN SELECT
while($ligne=mysqli_fetch_assoc($query_select)){





// INSERT INTO ACCUEIL
if(isset($_POST['insertinto'])){
    $inaccueil ="INSERT INTO accueil VALUES message=''";
     "<form action='' method='post' name=''>"
    ."<div contenteditable='true'><textarea name=''></textarea></div>"
    ."<input type='hidden' name='id' value=''></input>"     
    ."<input type='submit' value='Submit' name=''></input>"      
    ."</form>" ;
}
// FIN INSERT INTO


?>


                 
                <?php 
                
                
                if(isset($_SESSION['clef_unique'])&&$_SESSION['clef_unique']==session_id()){
                /* formulaire d'update de la page */
                     
                echo 
                "<div id='index_admin'><form action='' method='post' name='upda'>"
                ."<div class='editeur'><textarea id='edit' name='content'>".$ligne['message']."</textarea></div>"
                ."<input type='hidden' name='id' value='".$ligne['id']."'></input>"     
                ."<input type='submit' value='Editer' name='editer'></input>"      
                ."</form></div>"   
                ; 
                
                ///////////fin du formulaire d'update de la page////////////////
                }
                else {
                    header("Location: ./");
                }
                ?>
        

<?php   }require_once 'includes/footer.php';?>