<!DOCTYPE html>
<html>
<head>
  <title>Vis alle studenter</title>
</head>
<body>
  <h3>Vis alle studenter</h3>
  <p>Trykk fortsett for å se følgende registrerte studenter<p>

  <form method="post" action="" id="visallestudenter" name="visallestudenter">
    <input type="submit" value="Fortsett" id="fortsett" name="fortsett" />
  </form>
  <p><br/></p>
</body>
</html>

<?php

if(isset($_POST["fortsett"])){

$filnavn="/home/265362/public_html/prg120v/innlevering2/student.txt";
$filoperasjon="r";

print("F&oslash;lgende studenter er registrert:<br/><br/>");

$fil=fopen($filnavn,$filoperasjon);

    while($linje=fgets($fil)){

        if($linje!=""){
            $del=explode(";",$linje);
            $brukernavn=trim($del[0]);
            $fornavn=trim($del[1]);
            $etternavn=trim($del[2]);
            $klassekode=trim($del[3]);

            print("$brukernavn, $fornavn $etternavn, $klassekode<br/>");
        }
    }
    fclose($fil);
}
?>