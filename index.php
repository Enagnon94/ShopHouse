<?php
session_start();

//require('./libs/smarty/Smarty.class.php');

try {
    $bdd = new PDO("mysql:host=localhost;dbname=ShopHouseDB", "Enagnon",  "bdd");
    $bdd->query("SET NAMES UTF8");
} catch (Exception $e) {
    echo "Problème de connexion à la base de donnée !";
    die();
}
echo("Ça marche !!!");
header("Location: public/accueil.php");


?>