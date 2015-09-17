<?php
session_start();
require_once '../includes/admin/connect.php';
require_once 'includes/header.php';


    if(isset($_SESSION['clef_unique'])&&$_SESSION['clef_unique']==session_id()&&$_SESSION['droit_id']==1 ){
        
        
              if(isset($_POST['lelogin2'])){
                  foreach($_POST['lelogin2'] AS $clef => $valeur){
            $lelogin2 =htmlentities($_POST['lelogin2'][$clef],ENT_QUOTES);
            $lemdp2 =htmlentities($_POST['lemdp2'][$clef],ENT_QUOTES);
            $idd2 = $_POST['droit_id2'][$clef];
            $upmembres =mysqli_query($connect, "UPDATE utilisateur SET lelogin='$lelogin2',lemdp='$lemdp2' WHERE id=$idd2");
        }
              }
        
        
           $query_select= mysqli_query($connect, "SELECT * FROM utilisateur"); 
     while($ligne=mysqli_fetch_assoc($query_select)){
     echo "<form action='' method='post' name='updamembres'>"
         . "<label>Login : </label><input type='text' name='lelogin2[".$ligne['id']."]' value='".$ligne['lelogin']."'></input> "; 
     echo " <label>Mot de pass : </label><input type='text' name='lemdp2[".$ligne['id']."]' value='".$ligne['lemdp']."'></input>"; 
   
     echo "<select></select><input type='text' name='droit_id2[".$ligne['droit_id']."]' value='".$ligne['droit_id']."'></input> <br/>" ;
     
      }  
    echo "<input type='submit' value='Envoyer' name=''></input></form>"  ;
  
             

    }
    if(isset($_POST)) var_dump ($_POST);