<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un appareil</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="image/logoFindus.png">
</head>
<header>
<?php
    include "nav.php";                     
?>
<body>
    <h1>Suppression d'une IP</h1>
    <form method="post" action="suppr-traitement.php">
        <p>Selectionner :</p>
        <select name="ip" id="ip">
            <?php
                $jsonContent = file_get_contents("json/capteur.json");
                $donnes = json_decode($jsonContent, true);
                $cles = array_values($donnes);
                foreach ($cles as $cle) {
                    echo '<option value="' . $cle . '">' . $cle . '</option>';
                }
            ?>
        </select>
        <br>
        <button class ="boutonValider" type="submit">Valider</button>
    </form>
    <br><button class = "boutonCancel" onclick="window.location.href='index.php'">Annuler</button>
    <?php include "footer.php" ?>
</body>
</header>