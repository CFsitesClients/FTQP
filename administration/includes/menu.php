<div id="menu_admin">
                <ul>
                    <li><a href="accueil_admin.php" class="en-cours" >ACCUEIL</a></li>
                   <li><a href="condition_admin.php">CONDITIONS</a></li>
                   <li><a href="galerie_admin.php">GALERIE</a></li>
                   <li><a href="aide_admin.php">AIDE</a></li>
                   <li><a href="contact_admin.php">CONTACT</a></li>
                   <li><a href="membres_admin.php">MEMBRES</a></li>
                   <li><a href="../index.php">RETOUR SITE</a></li>
                   <?php 
                   if(isset($_SESSION['clef_unique'])&&$_SESSION['clef_unique']==session_id()){
                       echo "<li><a href='../includes/admin/deconnect.php'>SE DECONNECTER</a></li>";
                   }
                   ?>
                </ul>    
            </div>