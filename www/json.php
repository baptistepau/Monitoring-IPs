<?php
    function readJson($fichier) {
        
        $contenuJSON = file_get_contents($fichier);
        $donnees = json_decode($contenuJSON, true);
        return $donnees ;
    }

    function valeur($nomFichier, $cle) {
        $contenuJSON = file_get_contents($nomFichier);
        $donnees = json_decode($contenuJSON, true);
        if (isset($donnees[$cle])) {
          return $donnees[$cle];
        } else {
          return null;
        }
      }
    
      function cle($nomFichier, $valeur) {
        $contenuJSON = file_get_contents($nomFichier);
        $donnees = json_decode($contenuJSON, true);
      
        $cleTrouvee = array_search($valeur, $donnees);
        return $cleTrouvee ;
      }

      function witreJson($nomFichier, $nouvellesDonnees) {
        // Charger le contenu existant du fichier JSON dans un tableau associatif
        $contenuJSON = file_get_contents($nomFichier);
        $donneesExistantes = json_decode($contenuJSON, true);
      
        // Fusionner les données existantes avec les nouvelles données
        $donneesMisesAJour = array_merge($donneesExistantes, $nouvellesDonnees);
      
        // Convertir le tableau associatif en JSON
        $contenuMajJSON = json_encode($donneesMisesAJour, JSON_PRETTY_PRINT);
      
        // Enregistrer le contenu mis à jour dans le fichier JSON
        file_put_contents($nomFichier, $contenuMajJSON);
      }

      function supprJSON($nomFichier, $cleASupprimer) {
         // Étape 1 : Lire le contenu du fichier JSON
        $jsonContent = file_get_contents($nomFichier);
        $donnees = json_decode($jsonContent, true);

        //Étape 2 : Supprimer la clé et sa valeur correspondante
        unset($donnees[$cleASupprimer]);
        

        // Étape 3 : Encoder le tableau modifié en JSON
        $contenuMajJSON = json_encode($donnees, JSON_PRETTY_PRINT);

        // Étape 4 : Écrire le contenu JSON mis à jour dans le fichier
        file_put_contents($nomFichier, $contenuMajJSON);
      }
      
      function obtenirClesListe($nomFichier) {
        $contenuJSON = file_get_contents($nomFichier);
        $dictionnaire = json_decode($contenuJSON, true);
        $cles = array_keys($dictionnaire);
        return $cles;
    }
?>