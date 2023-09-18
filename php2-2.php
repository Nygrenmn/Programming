<?php
$svar=$_POST["svar"];

if($svar="y"){
    print("Du har svart ja på spørsmålet om at du er student.")
} elseif($svar="n"){
    print("Du har svart nei på spørsmålet om at du er student.")
} elseif($svar=<0){
    print("Du har ikke svart på spørsmålet om at du er student.")
} else{
    print("Du har hverken svart ja eller nei på spørsmålet om at du er student.")
}
?>