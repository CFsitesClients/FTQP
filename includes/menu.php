
     <!--   <div id="menu">
            <div id="centrage-menu">
     -->
     <div id="centrage-menu"> <nav role='navigation'>
  <label for="checkbox">Menu</label>
  <input type="checkbox" name="checkbox" id="checkbox" />
     
                <ul> 
                    <li>
                       <a href="./index.php" <?php if ($nav_en_cours == 'index') {echo ' id="en-cours"';} ?>>ACCUEIL</a>
                    </li>
                    <li><a href="condition.php"<?php if ($nav_en_cours == 'condition') {echo ' id="en-cours"';} ?>>CONDITIONS</a></li>
                    <li><a href="galerie.php"<?php if ($nav_en_cours == 'galerie') {echo ' id="en-cours"';} ?>>GALERIE</a></li>
                    <li><a href="aide.php"<?php if ($nav_en_cours == 'aide') {echo ' id="en-cours"';} ?>>AIDE</a></li>
                    <li><a href="contact.php"<?php if ($nav_en_cours == 'contact') {echo ' id="en-cours"';} ?>>CONTACT</a></li>
                    
                </ul>
     </nav>
  </div>
         <!--   </div>
        </div>   -->
