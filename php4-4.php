<?php

$filnavn="/home/265362/public_html/prg120v/ovingsopg04/oppgave1/navn.txt";
$navn=$_POST["navn"];
$navn=trim($navn);

$filoperasjon="r";

print("Følgende passer til kriteriet:<br/><br/>");

$fil=fopen($filnavn,$filoperasjon);

while($linje=fgets($fil))
{
    if($linje!="")
    {
        $del=explode(";",$linje);
        $fornavn=trim($del[0]);
        $etternavn=trim($del[1]);
        
        if(strtoupper($navn)==strtoupper($fornavn) or strtoupper($navn)==strtoupper($etternavn))
        {
            print("$fornavn, $etternavn<br/>");
        }
    }
}
fclose($fil);