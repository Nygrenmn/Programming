<?php
$gift=$_POST["gift"];
$barn=$_POST["barn"];

if(!$gift||!$barn){
    print("Du har hverken svart på om du er gift eller har barn.<br/>");
} elseif($gift==j and $barn==j){
    print("Du er gift og har barn.<br/>");
} elseif($gift==j and $barn==n){
    print("Du er gift, men har ikke barn.<br/>");
} elseif($gift==n and $barn==j){
    print("Du er ikke gift, men har barn.<br/>");
} else{
    print("Du har ikke svart ja eller nei på et eller begge av spørsmålene.<br/>");
}
?>