<?php
$student=$_POST["student"];
$alder=$_POST["alder"];

if(!$student or !$alder){
    print("Du har ikke svart på hverken av spørsmålene.<br/>");
} elseif(($student=="j" or $student=="ja" or $student=="J" or $student=="JA") and !$alder){
    print("Du er student, men du har ikke svart på hvor gammel du er.<br/>");
} elseif(!$student and $alder>=20){
    print("Du har ikke svart om du er student, men er $alder år gammel.<br/>");
} elseif(($student=="j" or $student=="ja" or $student=="J" or $student=="JA") and $alder>=20){
    print("Du er student, og er over 20 år<br/>");
} elseif(($student=="n" or $student=="nei" or $student=="Nei" or $student=="NEI") and $alder<20){
    print("Du er ikke student, og er under 20 år<br/>");
} elseif(($student=="n" or $student=="nei" or $student=="Nei" or $student=="NEI") and $alder>=20){
    print("Du er ikke student, og er under 20 år<br/>");
} else{
    print("Du har ikke svart med gyldige svar.<br/>");
}

?>