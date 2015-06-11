<?php 
$nav_en_cours = 'aide';
require_once 'includes/header.php';
$query_select= mysqli_query($connect, "SELECT * FROM aide");


?>

<titre>Aide à l'embauche.</titre>

<texte>
   

   
<?php while($ligne=mysqli_fetch_assoc($query_select)){
echo html_entity_decode($ligne['message']);


}?>


</texte>

<?php 



require_once 'includes/footer.php';

?>