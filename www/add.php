<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un appareil</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="image/logoFindus.png">
</head>
<header>
<?php
    include "nav.php";                     
?>
</header>
<body>
    <form method="post" action="add-traitement.php">
        <h1>Ajout d'une IP</h1>
        <p>Choisir une IP :</p>
        <select name="ip" id="ip">
            <?php
                $jsonContent = file_get_contents("json/listeip.json");
                $donnes = json_decode($jsonContent, true);

                foreach ($donnes["iplist"] as $ip) {
                    echo '<option value="' . $ip . '">' . $ip . '</option>';
                }
            ?>
        </select>
        <br>
        <p>Description :</p>
        <input type="text" name="message" id="message" >
        <br>
        <button class ="boutonValider" type="submit">Valider</button>
    </form>
    <br><button class = "boutonCancel" onclick="window.location.href='index.php'">Annuler</button>
    <?php include "footer.php" ?>           
</body>