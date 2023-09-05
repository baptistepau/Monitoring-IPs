<?php
include "json.php";
include "pingIP.php";

function tableauIP(){
  $dict = readJson("json/capteur.json");
  foreach($dict as $ip => $capteur)
      {
          $resultPing = ping($ip);
      
          echo "<tr>";
          echo "<td>$capteur</td>";
          if ($resultPing == true)
          {
              $image = "image/enLigne.png";
          }
          else 
          {
              $image = "image/horsLigne.png";
          }
          echo "<td><img src = $image alt='Reponse'></td>";
          echo "</tr>";
        
      }
    }

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Etat périphérique supervision</title>
      <link rel="stylesheet" href="style/style.css">
      <link rel="icon" href="image/logoFindus.png">
      <meta http-equiv="refresh" content="30">
  </head>
  
  <header>
    <?php
      include "nav.php";
    ?>
  </header>
 <br>
  <br>
  <body>
    <table>
        <tr class='titre'>
          <th>Periphérique</th>
          <th>Etat</th>
        </tr>
        <?php
          tableauIP()
        ?>
      </table>
      <?php include "footer.php" ?>
    </body>
</html>