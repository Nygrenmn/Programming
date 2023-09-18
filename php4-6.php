<?php

$filnavn="/home/265362/public_html/prg120v/ovingsopg04/oppgave5/adresse.txt";
$filoperasjon="r";

print("Følgende opplysninger er registrert:<br/><br/>");

$fil=fopen($filnavn,$filoperasjon);

while($linje=fgets($fil))
{
    if($linje!="")
    {
        $del=explode(";",$linje);
        $fornavn=trim($del[0]);
        $etternavn=trim($del[1]);
        $adresse=trim($del[2]);
        $postnummer=trim($del[3]);
        $poststed=trim($del[4]);

        print("$fornavn $etternavn, $adresse, $postnummer, $poststed<br/>");
    }
}
fclose($fil);
?>