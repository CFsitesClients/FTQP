<?php 
$nav_en_cours = 'contact';
require_once 'includes/header.php';
$query_select= mysqli_query($connect, "SELECT * FROM contact");

if (isset($_POST['message'])) {
    
    $nom = strip_tags(trim($_POST['nom']));
    $mail = strip_tags(trim($_POST['lemail']));
    $texte = strip_tags(trim($_POST['message']));
    // votre mail
    $monmail = "dio.crea@outlook.be";
    $entete = 'Expéditeur : '.$nom."\r\n". 'Email : ' .$mail . "\r\n" ."\r\n". 'Message : ' ."\r\n"."\r\n". $texte . "\r\n" ;

    mail($monmail, $texte, $entete);
 
  
}
?>

                

<?php if (!isset($_POST['message'])) {
                   
echo "    <titre_contact>Contactez-Nous</titre_contact>";
}    

        ?>
                   

<?php if (isset($_POST['message'])) {
    echo "<titre_contact>Votre Message a bien été envoyé</titre_contact>";
    
}
?>


<div id="page_contact">
    
    
    <form action="" method="post" name="page_contact" id="contact">
    
    <div id="form_contact">
    
        <input type="text" name="nom" placeholder="Votre Nom"/>
   
        
        <input type="email" name="lemail" placeholder="Votre Courrier" />
    
        <textarea name="message" placeholder="Votre Message" ></textarea>
        
        <input type="submit" id="submit" value="Envoyer" />
    </form>
   </div>
        <div id="info_contact">
            <?php while($ligne=mysqli_fetch_assoc($query_select)){
echo html_entity_decode($ligne['message']);


}?>


        </div>
    
        <div id="clearmaps"></div>
    <div id="google-maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2520.439266851019!2d4.32935!3d50.823027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c43f10f7e125%3A0xe644926db645fcd7!2sRue+des+Alli%C3%A9s+303%2C+1190+Forest!5e0!3m2!1sfr!2sbe!4v1433323701148"  frameborder="0" style="border:0"></iframe>
    </div>

</div>

<?php 


require_once 'includes/footer.php';

?>
