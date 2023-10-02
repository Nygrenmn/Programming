<?php

function validerFagkode($fagkode){

$lovligkode=true;

if(!$fagkode){
    $lovligkode=false;
}
    elseif(strlen($fagkode)!=7){
        $lovligkode=false;
    }
        else{
            $del1=substr($fagkode,0,3);
            $del2=substr($fagkode,3,4);

            if(!ctype_alpha($del1)){
                $lovligkode=false;
            }
            if(!ctype_digit($del2)){
                $lovligkode=false;
            }
        }
return $lovligkode;
}

$fagkode=$_POST["fagkode"];
$fagnavn=$_POST["fagnavn"];
$faglærer=$_POST["faglærer"];


$lovligkode=validerFagkode($fagkode);

if(!$lovligkode){
    print("Fagkode $fagkode er ikke riktig utfylt<br/>");
}
    else{
        print("Fagkode $fagkode er riktig utfylt<br/>");
        $filnavn="fag.txt";
        $filoperasjon="a";
        $linje=$fagkode.";".$fagnavn.";".$faglærer."\n";

        $fil=fopen($filnavn,$filoperasjon);
        fwrite($fil,$linje);
        print("<br/>");
        fclose($fil);

        print("$linje");
    }

?>