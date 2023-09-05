<?php
include "json.php";
$adresseIp = cle("json/capteur.json",$_POST["ip"]);

supprJSON("json/capteur.json",$adresseIp)

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="image/logoFindus.png">
</head>
<body>
<div id="backblock">
    <h1>Enregistrement supprimé</h1>
    <br><br><br>
    <a class ="back" href="suppr.php">Supprimer un autre appareil</a><br><br><br>
    <a class="back" href="index.php">Retour à l'accueil</a>
</div>  
</body>