<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentation</title>
    <link rel="stylesheet" href="style/styleDoc.css">
    <link rel="icon" href="image/logoFindus.png">
</head>
<header>
<?php
    include "nav.php";                      
?>
</header>
<br>
<body>
    <h1>Comment fonction l'application</h1>
    <p>L'application fonctionne avec un serveur web local (Uwamp) pour se connecter à l'interface taper 'localhost' ou '127.0.0.1' dans la barre d'adresse du navigateur.</p>
    <hr>
    <h1>Comment ajouter un appareil réseau à contrôler ?</h1>
    <div class ="alignImage"><img class="image" src="image/doc/user/image1.png" alt=""></div>
    <p>Rendez-vous dans la section 'Ajouter' (Cercle rouge)</p>
    <div class ="alignImage"><img class="image" src="image/doc/user/image3.png" alt=""></div>
    <p>Choisissez l'IP dans la liste déroulante qui correspond à l'IP de votre appareil  (Cercle rouge) *Possible de changer la plage d'IP voir documentation technique</p>
    <p>/!\ Les Adresses IP dans la liste déroulante ne son pas forcement des IP libre ce sont tout les IP disponible dans la plage réseau </p>
    <p>Ecrivez le nom a quoi correspond cette IP (Cercle bleu)</p>
    <p>Une fois votre IP choisie et votre IP sélectionner appuyer sur le bouton sélectionner(Cercle jaune)</p>
    <p>Si vous ne souhaitez pas ajouter une entrer appuyer sur le bouton 'annuler' (Cercle vert)</p>
    <p>Pour consulter les IP déjà rajouter appuyer sur le bouton 'Liste capteur ajouter' (Cercle violet)</p>
    <hr>
    <h1>Comment supprimer un appareil ?</h1>
    <div class ="alignImage"><img class="image" src="image/doc/user/image2.png" alt=""></div>
    <p>Rendez-vous dans la section ajouter supprimer (Cercle rouge)</p>
    <div class ="alignImage" ><img class="image" src="image/doc/user/image4.png" alt=""></div>
    <p>Appuyer sur le bouton supprimer (Cercle rouge)</p>
    <div class ="alignImage"><img class="image" src="image/doc/user/image5.png" alt=""></div>
    <p>Sélectionner dans la liste déroulante l'appareil que vous voulez supprimer (Cercle Rouge)</p>
    <p>Une fois votre appareil choisi appuyer sur le bouton sélectionner (Cercle Vert)</p>
    <p>Pour consulter les appareil ajouter appuyer sur le bouton 'Liste Capteur ajouter'(Cercle jaune)</p>
    <hr>
    <h1>Comment fonctionne la page d'accueil de l'application ? </h1>
    <div class ="alignImage"><img class="image" src="image/doc/user/image6.png" alt=""></div>
    <p>La colonne 'Etat' permet de savoir l'état de connexion au réseau des appareils ajouter (Cercle rouge)</p>
    <ul>
        <li>Carré vert : Appareil connecter</li>
        <li>Carré rouge : Appareil non connecter </li>
    </ul>
    <p>La colonne 'Périphérique' permet de voir chaque appareil connecter (Cercle jaune)</p>
    <p>Pour rendre dans la page ajouter supprimer appuyer sur le texte 'ajouter supprimer' en haut a gauche de la page (Cercle vert)</p>
    <p>Pour revenir à la page d'accueil de l'application appuyer sur le texte 'accueil' en haut au centre de la page (Cercle bleu)</p>
    <p>Pour se rendre dans la page de documentation appuyer sur le texte 'documentation' en haut a droite de la page (cercle violet)</p>
    <hr>
    <h1>Comment fonctionne la page d'accueil de l'application ?</h1>
    <div class ="alignImage"><img class="image" src="image/doc/user/image7.png" alt=""></div><br><br>
    <div class ="alignImage"><img class="image" src="image/doc/user/image8.png" alt=""></div><br><br>
    <div class ="alignImage"><img class="image" src="image/doc/user/image9.png" alt=""></div>
    <p>Pour se rendre à la page vous pouvez y accéder de trois façons différentes</p>
    <ol>
        <li>Depuis la page d'accueil du logiciel en bas du tableau (Image 1) </li>
        <li>Depuis la page d'ajouts de capteur (Image 2)</li>
        <li>Depuis la page de suppressions de capteur (Image 3) </li>
    </ol>
    <div class ="alignImage"><img class="image" src="image/doc/user/image10.png" alt=""></div>
    <p>Une fois sur la page vous pouvez consulter les IP que vous avez déjà rajouter (Cercle rouge)</p>
    <p>Et voir à quel capteur correspond chaque IP (Cercle bleu)</p>

    <footer>
        <br><br>
        <button onclick="window.location.href='index.php'">Retour a l'accueil</button>
        <br><br>
        <button onclick="window.location.href=''">Documentation Technique</button>
    </footer>

</body>
</html>