<?php

$fornavn=$_POST["fornavn"];
$etternavn=$_POST["etternavn"];
$adresse=$_POST["adresse"];
$postnummer=$_POST["postnummer"];
$poststed=$_POST["poststed"];

$filnavn="adresse.txt";
$filoperasjon="a";
$linje=$fornavn.";".$etternavn.";".$adresse.";".$postnummer.";".$poststed."\n";

$fil=fopen($filnavn,$filoperasjon);
fwrite($fil,$linje);
print("<br/>");
fclose($fil);

print("$fornavn $etternavn, samt adresse er nå registrert.");
?>