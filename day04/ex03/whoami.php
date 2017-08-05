<?php
  session_start();
  $login =  $_SESSION['loggued_on_user'];
  if ($login)
  {
    if($login === "")
      echo "ERROR\n";
    else
      echo "$login\n";
  }
  else {
    echo "ERROR\n";
  }
?>
