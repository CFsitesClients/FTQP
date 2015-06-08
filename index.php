<?php 
require_once 'includes/header.php';
$query_select= mysqli_query($connect, "SELECT * FROM accueil");


?>

<titre>Présentation du centre FTQP asbl.</titre>

<texte>
   

   
<?php while($ligne=mysqli_fetch_assoc($query_select)){
echo html_entity_decode($ligne['message']);


}?>


</texte>

<?php 



require_once 'includes/footer.php';

?>