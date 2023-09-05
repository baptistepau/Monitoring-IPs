<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste capteur</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="image/logoFindus.png">
</head>
<body>
<?php include "nav.php"?>
<div id ="backblock">
    <?php include "json.php"?>
    <br>
    <br>
    <table >
    <tr class = "titre" >
        <th>IP</th>
        <th>Nom</th>
    </tr>
    <?php 
    foreach ( readJson("json/capteur.json") as $cle => $valeur): ?>
        <tr>
            <td><?php echo $cle; ?></td>
            <td><?php echo $valeur; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</div>
<footer>
    <br><br>
    <button class = "boutonCancel" onclick="window.location.href='index.php'">Retour</button>
</footer>
</body>
</html>