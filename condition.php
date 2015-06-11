<?php 
$nav_en_cours = 'condition';
require_once 'includes/header.php';
$query_select= mysqli_query($connect, "SELECT * FROM conditions");


?>

<titre>Conditions d'entrée en formation.</titre>

<texte>
   

   
<?php while($ligne=mysqli_fetch_assoc($query_select)){
echo html_entity_decode($ligne['message']);


}?>


</texte>

<?php 



require_once 'includes/footer.php';

?>