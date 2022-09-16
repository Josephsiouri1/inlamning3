<?php
  session_start();

  $anvandarnamn = $_SESSION["användarnamn"];
  $filen = $_POST["filAttLaddaUpp"];

  $loginHistory = fopen("logins.txt","a") or die("Filen gick inte att öppnas!");
  fwrite($loginHistory, "$anvandarnamn: $filen<br>");
  fclose($loginHistory);
  //file_put_contents("logins.txt", "");

  $loginfilen = fopen("logins.txt", "r") or die("Unable to open file!");
  echo fread($loginfilen,filesize("logins.txt"));
  fclose($loginfilen);  

?> 
