<?php
    include "json.php";
    $adresseIP = $_POST['ip'];
    $nom = $_POST['message'];
    $dictionnaire = readJson("json/capteur.json");
    $verif = array_key_exists($adresseIP,$dictionnaire);
    if ($verif==false)
    {
        $dict = array($adresseIP=>$nom);
        witreJson("json/capteur.json",$dict);
        $ecrit = true;
    }
    else 
    {
        $ecrit = false;
    }
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
    <?php
    if ($ecrit == true)
    {
        echo "<h1> Enregistrement ajouté </h1>" ;
    }
    else 
    {
        echo "<h1> L'ip est déjà utilisée </h1>" ;
    }
    ?>
    <br><br><br>
    <a class ="back" href="add.php">Ajouter un nouvel enregistrement</a><br><br><br>
    <a class="back" href="index.php">Retour à l'accueil</a>
</div>  
</body>