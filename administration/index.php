<?php  
session_start();
require_once 'includes/header.php';
require_once '../includes/admin/connect.php';


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
        
           
    }else{
        $erreur_connect = "Login ou mot de passe incorrecte";
    }
}
 if (!isset($_SESSION['clef_unique']) || $_SESSION['clef_unique']!=session_id()){
echo "<div id='connexion'><form method='post' action=''>
		 Connexion :<br/>
      Login : <input type='text' name='lelogin' /><br/>
      Password   <input type='password' name='lemdp' /><br/>
        <input type='submit' value='CONNEXION' name='submit'/> ";
    echo "<div id='erreur_connex'>"; if(isset($erreur_connect)){ echo $erreur_connect;} echo "</div>";
	echo "</form>"; 
echo "ou<br/><a href='../index.php'>Retour sur le site</a></div>";
 
 }else{
    echo 'VOUS ETES CONNECTÉ';
 }
  
  require_once 'includes/footer.php';
  