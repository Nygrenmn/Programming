<!DOCTYPE html>
<head>
<style>
body {
    background-color: rgb(60, 60, 60);
}
h1 {
    color: white;
}
p {
    color: red;
}
form {
    color: white;
}
</style>
</head>
<h1>Oppgave 2-4</h1>
<body>
<p>Er du gift, og har du barn?</p>
<form method="post" action="php2-4.php" id="opg2-4" name="opg2-4">
    Er du gift? (j/n):<input type="text" id="gift" name="gift"/><br/>
    Har du barn? (j/n):<input type="text" id="barn" name="barn"/><br/>

    <input type="submit" id="Submit" name="submit" value="Fortsett"/>
    <input type="reset" id="tilbakestill" name="tilbakestill" value="Tilbakestill"/>
</form>
</body>

<?php
$gift=$_POST["gift"];
$barn=$_POST["barn"];

if(!$gift && !$barn){
    print("Du har hverken svart på om du er gift eller har barn.<br/>");
} elseif($gift && !$barn){
    print("Du har svart på om du er gift, men ikke om du har barn eller ei.<br/>");
} elseif(!$gift && $barn){
    print("Du har ikke svart på om du er gift, men at du har barn eller ei.<br/>");
} elseif($gift=="j" && $barn=="j"){
    print("Du er gift og har barn.<br/>");
} elseif($gift=="j" && $barn=="n"){
    print("Du er gift, men har ikke barn.<br/>");
} elseif($gift=="n" && $barn=="j"){
    print("Du er ikke gift, men har barn.<br/>");
} elseif($gift=="n" && $barn=="n"){
    print("Du er hverken gift eller har barn.<br/>");
}
else{
    print("Du har ikke skrevet inn et gyldig svar på ett eller begge av spørsmålene.<br/>");
}
?>