<!DOCTYPE html>
<html>
<head>
<title>Registrer klasse</title>
</head>
<body>
<h1>Registrer klasse</h1><br/>

    <form method="post" action="" id="registrerklasse" name="registrerklasse">
        Klassekode <input type="text" id="klassekode" name="klassekode" required/><br/>
        Klassenavn <input type="text" id="klassenavn" name="klassenavn" required/><br/>
        Studiumkode <input type="text" id="studiumkode" name="studiumkode" required/><br/>
        <input type="submit" value="Fortsett" id="fortsett" name="fortsett"/>
        <input type="reset" value="Tilbakestill" id="tilbakestill" name="tilbakestill"/>
</form>
</body>
</html>
<?php

if(isset($_POST["fortsett"])){

$klassekode=$_POST["klassekode"];
$klassenavn=$_POST["klassenavn"];
$studiumkode=$_POST["studiumkode"];

if(!$klassekode or !$klassenavn or !$studiumkode){
    print("Alle feltene må fylles ut");
}
    else{
        $filnavn="klasse.txt";
        $filoperasjon="a";
        $linje=$klassekode.";".$klassenavn.";".$studiumkode."\n";

        $fil=fopen($filnavn,$filoperasjon);
        fwrite($fil,$linje);
        fclose($fil);

        print("$klassekode, $klassenavn og $studiumkode er n&aring; registrert p&aring; fil");
    }
}
?>