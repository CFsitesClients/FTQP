<?php 

require_once 'admin/connect.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
        <script src="./lightbox/js/jquery-1.11.0.min.js"></script>
	<script src="./lightbox/js/lightbox.min.js"></script>
	<link href="./lightbox/css/lightbox.css" rel="stylesheet" />
	<link href="./galerie_lightbox.css" rel="stylesheet" />
        <link type="text/css" rel="stylesheet" href="css/style-slider.css" />
        <link type="text/css" rel="stylesheet" href="css/media.css" />
        		
        <title>
            FTQP
        </title>
    </head>
    <body>
    
        <div id="header">
         <div id="slider">
            <figure>
                <img src="./images/01.jpg" alt="">
                <img src="./images/02.jpg" alt="">
                <img src="./images/03.jpg" alt="">
            </figure>
         </div>
            
         <div id="placeur-contenu-header">
                <div id="fondlogo"></div>
                <div id="logo" ><img src="./images/logo/ftqp.png" alt=""/></div>                
                <div id="texte">Formation et Travail en Quartier Populaire.</div>
         
         </div>     
         
        </div>
        
          <?php 

include 'menu.php'; ?>

        <div id="conteneur">

            <div id="contenu">
     
                <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>	