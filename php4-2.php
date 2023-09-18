<?php

$filnavn="/home/265362/public_html/prg120v/ovingsopg04/oppgave1/navn.txt";
$filoperasjon="r";

print("Følgende personer er registrert:<br/><br/>");

$fil=fopen($filnavn,$filoperasjon);

while($linje=fgets($fil))
{
    if($linje!="")
    {
        $del=explode(";",$linje);
        $fornavn=trim($del[0]);
        $etternavn=trim($del[1]);

        print("$fornavn $etternavn<br/>");
    }
}
fclose($fil);