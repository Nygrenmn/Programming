<?php

$postnummer=$_POST["postnummer"];

$lovligpostnr=true;

if(!$postnummer)
{
    print("Postnummer er ikke fylt ut");
    $lovligpostnr=false;
}
elseif(strlen($postnummer)!=4)
{
    print("Postnummer består ikke av 4 tegn");
    $lovligpostnr=false;
}
elseif(!ctype_digit($postnummer))
{
    print("Postnummer består ikke av bare sifre");
    $lovligpostnr=false;
}
if($lovligpostnr)
{
    print("Postnummer er korrekt fylt ut");
}








?>