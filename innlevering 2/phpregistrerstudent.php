<!DOCTYPE html>
<html>
<head>
<title>Registrer student</title>
</head>
<body>
<h1>Registrer student</h1><br/>

    <form method="post" action="" id="registrerstudent" name="registrerstudent">
        Brukernavn <input type="text" id="brukernavn" name="brukernavn" required/><br/>
        Fornavn <input type="text" id="fornavn" name="fornavn" required/><br/>
        Etternavn <input type="text" id="etternavn" name="etternavn" required/><br/>
        Klassekode <input type="text" id="klassekode" name="klassekode" required/><br/>
        <input type="submit" value="Fortsett" id="fortsett" name="fortsett"/>
        <input type="reset" value="Tilbakestill" id="tilbakestill" name="tilbakestill"/>
</form>
</body>
</html>


<?php

if(isset($_POST["fortsett"])){

$brukernavn=$_POST["brukernavn"];
$fornavn=$_POST["fornavn"];
$etternavn=$_POST["etternavn"];
$klassekode=$_POST["klassekode"];

if(!$brukernavn or !$fornavn or !$etternavn or !$klassekode){
    print("Alle feltene må fylles ut");
}
    else{
        $filnavn="student.txt";
        $filoperasjon="a";
        $linje=$brukernavn.";".$fornavn.";".$etternavn.";".$klassekode."\n";

        $fil=fopen($filnavn,$filoperasjon);
        fwrite($fil,$linje);
        fclose($fil);

        print("$brukernavn, $fornavn, $etternavn og $klassekode er n&aring; registrert p&aring; fil");
    }
}
?>