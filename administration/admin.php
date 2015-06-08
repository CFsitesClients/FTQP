<?php
require_once '../includes/admin/connect.php';


// UPDATE ACCUEIL
if(isset($_POST['update'])){
    $texte_acc = $_POST['texte_accueil'];
    $id = $_POST['id'];
    $uptexte =mysqli_query($connect, "UPDATE accueil SET message='$texte_acc' WHERE id=$id");
}
// fin UPDATE ACCUEIL

// SELECT 
$query_select= mysqli_query($connect, "SELECT * FROM accueil");
//FIN SELECT
while($ligne=mysqli_fetch_assoc($query_select)){
   
  echo 
    "<form action='' method='post' name='upda'>"
    ."<textarea name='texte_accueil'>".$ligne['message']."</textarea>"
    ."<input type='hidden' name='id' value='".$ligne['id']."'></input>"     
    ."<input type='submit' value='Submit' name='update'></input>"      
    ."</form>"   
        ; 
  }



// INSERT INTO ACCUEIL
if(isset($_POST['insertinto'])){
    $inaccueil ="INSERT INTO accueil VALUES message=''";
     "<form action='' method='post' name=''>"
    ."<textarea name=''></textarea>"
    ."<input type='hidden' name='id' value=''></input>"     
    ."<input type='submit' value='Submit' name=''></input>"      
    ."</form>" ;
}
// FIN INSERT INTO


?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="../css/admin_style.css" />
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
        <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
        <div id="logo_admin"></div>
        <div id="menu_admin">
            <ul>
                <li><a href="admin.php">ACCUEIL</a></li>
                <li><a href="condition_admin.php">CONDITIONS</a></li>
                <li><a href="galerie_admin.php">GALERIE</a></li>
                <li><a href="aide_admin.php">AIDE</a></li>
                <li><a href="contact_admin.php">CONTACT</a></li>
            </ul>
        </div>
        <div id="contenu_admin">

        </div>
    </body>
</html>
