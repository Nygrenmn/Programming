<?php

$filnavn="/home/265362/public_html/prg120v/ovingsopg04/oppgave5/adresse.txt";
$sok=$_POST["sok"];
$sok=trim($sok);

$filoperasjon="r";

print("Følgende passer til søket:<br/><br/>");

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
        
        if(strtoupper($sok)==strtoupper($fornavn) or strtoupper($sok)==strtoupper($etternavn) 
        or strtoupper($sok)==strtoupper($adresse) or $sok==$postnummer 
        or strtoupper($sok)==strtoupper($poststed))
        {
            print("$fornavn $etternavn, $adresse, $postnummer, $poststed<br/>");
        }
    }
}
fclose($fil);
?>