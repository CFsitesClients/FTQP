<?php  
session_start();

require_once '../includes/admin/connect.php';
require_once 'includes/header.php';


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
  