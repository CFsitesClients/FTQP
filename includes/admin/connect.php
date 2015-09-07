<?php 
header('Content-Type: text/html; charset=utf-8');

$connect = @mysqli_connect("localhost", "root", "", "ftqp")
                or die ("Erreur de connexion à la BDD");

mysqli_set_charset($connect, "utf8");