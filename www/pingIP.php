<?php
function ping($ip) {
  $pingResult = shell_exec("ping -n 1 $ip");
  if (strpos($pingResult,"Impossible") != true && strpos($pingResult,"attente de la demande") != true && strpos($pingResult,"perte 100%") != true ) {
    return true;
  } else {
    return false;
  }
}
?>