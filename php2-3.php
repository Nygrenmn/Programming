<?php
$svar=$_POST["svar"];

if(!$svar){
    print("Du har ikke svart på spørsmålet.<br/>");
} elseif($svar=="j"||$svar=="ja"||$svar=="J"||$svar=="JA"||$svar=="Ja"){
    print("Du har svart ja om at du er student.<br/>");
} elseif($svar=="n"||$svar=="nei"||$svar=="N"||$svar=="NEI"||$svar=="Nei"){
    print("Du har svart nei om at du er student.<br/>");
} else{
    print("Du har hverken svart ja eller nei på spørsmålet.<br/>");
}
?>