<?php

$klassekode=$_POST["klassekode"];

$lovligkode=true;

if(!$klassekode)
{
    print("Klassekode ikke utfylt");
    $lovligkode=false;
}
    elseif(strlen($klassekode)!=3)
    {
        print("Klassekode består ikke av 3 tegn");
        $lovligkode=false;
    }
    else
    {
        $tegn1=$klassekode[0];
        $tegn2=$klassekode[1];
        $tegn3=$klassekode[2];

        if(!ctype_alpha($tegn1))
        {
            print("Første tegn er ikke en bokstav");
            $lovligkode=false;
        }
        if(!ctype_alpha($tegn2))
        {
            print("Andre tegn er ikke en bokstav");
            $lovligkode=false;
        }
        if(!ctype_digit($tegn3))
        {
            print("Tredje tegn er ikke et siffer");
            $lovligkode=false;
        }
    }
if($lovligkode)
{
    print("Klassekode er korrekt fylt ut");
}
?>