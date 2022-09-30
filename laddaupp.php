<?php
  session_start();

  $anvandarnamn = $_SESSION["användarnamn"];
  $filen = $_POST["filAttLaddaUpp"];

if ($anvandarnamn && $filen) {
  $loginHistory = fopen("logins.txt","a") or die("Filen gick inte att öppnas!");
  fwrite($loginHistory, "$anvandarnamn: $filen<br>");
  fclose($loginHistory);
   $loginfilen = fopen("logins.txt", "r") or die("Unable to open file!");
   echo fread($loginfilen,filesize("logins.txt"));
  fclose($loginfilen);  
}
 else {
   echo "filen saknas!";
 }

echo "<a href='localhost/uppdaterat_inlamning3/formular.php'>Tillbaka till inloggningen</a>";

?> 
