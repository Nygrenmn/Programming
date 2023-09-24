<?php

$emnekode=$_POST["emnekode"];
$lovligkode=true;

if(!$emnekode){
    print("Emnekode ikke fylt ut");
    $lovligkode=false;
}
    elseif(strlen($emnekode)!=7){
        print("Emnekode må være 7 tegn");
        $lovligkode=false;
    }
    else{
        $del1=substr($emnekode,0,3);
        $del2=substr($emnekode,3,3);
        $del3=substr($emnekode,6,1);

        if(!ctype_alpha($del1)){
            print("De tre første tegnene er ikke bokstaver");
            $lovligkode=false;
        }
        if(!ctype_digit($del2)){
            print("Tegn 4-6 inneholder ikke kun sifre");
            $lovligkode=false;
        }
        if(!ctype_alpha($del3) and !ctype_digit($del3)){
            print("Det siste tegnet er hverken en bokstav eller et siffer");
            $lovligkode=false;
        }
    }
if($lovligkode){
    print("Emnekode er korrekt fylt ut");
}


?>