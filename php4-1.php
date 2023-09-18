<?php

$fornavn=$_POST["fornavn"];
$etternavn=$_POST["etternavn"];

$filnavn="navn.txt";
$filoperasjon="a";
$linje=$fornavn.";".$etternavn;

$fil=fopen($filnavn,$filoperasjon);
fwrite($fil,$linje);
fclose($fil);

print("$fornavn $etternavn er nå registrert.");