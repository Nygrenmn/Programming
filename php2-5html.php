<!DOCTYPE html>
<html>
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
<h1>Oppgave 2-5</h1>
<body>
<p>Skriv inn to tall. Skriv inn 1=addisjon, 2=subtraksjon, 3=multiplikasjon, 4=divisjon i den siste boksen.</p>
<form method="post">
    Første tallet:<input type="text" id="tall1" name="tall1" required/><br/>
    Andre tallet:<input type="text" id="tall2" name="tall2" required/><br/>
    Regneoperasjon:<input type="text" id="regneop" name="regneop" required/><br/>

    <input type="submit" id="Fortsett" name="Fortsett" value="Fortsett"/>
    <input type="reset" id="Tilbakestill" name="Tilbakestill" value="Tilbakestill"/>
</form>
</body>
</html>

<?php
if(isset($_POST["Fortsett"])){
$tall1=$_POST["tall1"];
$tall2=$_POST["tall2"];
$regneop=$_POST["regneop"];

if($regneop==1){
    $resultat=$tall1+$tall2;

    print("<br/>Tall 1 er $tall1<br/>");
    print("Tall 2 er $tall2<br/><br/>");
    print("Regneoperasjon er Addisjon<br/>");
    print("Resultatet av regneoperasjonen er $resultat<br/>");
}
elseif($regneop==2){
    $resultat=$tall1-$tall2;

    print("<br/>Tall 1 er $tall1<br/>");
    print("Tall 2 er $tall2<br/><br/>");
    print("Regneoperasjon er Subtraksjon<br/>");
    print("Resultatet av regneoperasjonen er $resultat<br/>");
}
elseif($regneop==3){
    $resultat=$tall1*$tall2;

    print("<br/>Tall 1 er $tall1<br/>");
    print("Tall 2 er $tall2<br/><br/>");
    print("Regneoperasjon er Multiplikasjon<br/>");
    print("Resultatet av regneoperasjonen er $resultat<br/>");
}
elseif($regneop==4){
    $resultat=$tall1/$tall2;

    print("<br/>Tall 1 er $tall1<br/>");
    print("Tall 2 er $tall2<br/><br/>");
    print("Regneoperasjon er Divisjon<br/>");
    print("Resultatet av regneoperasjonen er $resultat<br/>");
}
else{
    print("<br/>Det er ikke angitt en gyldig regneoperasjon.<br/>");
}
}
?>