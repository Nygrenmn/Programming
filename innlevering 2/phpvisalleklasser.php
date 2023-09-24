<!DOCTYPE html>
<html>
<head>
  <title>Vis alle klasser</title>
</head>
<body>
  <h3>Vis alle klasser</h3>
  <p>Trykk fortsett for å se følgende registrerte klasser<p>

  <form method="post" action="" id="visalleklasser" name="visalleklasser">
    <input type="submit" value="Fortsett" id="fortsett" name="fortsett" />
  </form>
  <p><br/></p>
</body>
</html>



<?php

if(isset($_POST["fortsett"])){

$filnavn="/home/265362/public_html/prg120v/innlevering2/klasse.txt";
$filoperasjon="r";

print("F&oslash;lgende klasser er registrert:<br/><br/>");

$fil=fopen($filnavn,$filoperasjon);

    while($linje=fgets($fil)){

        if($linje!=""){
            $del=explode(";",$linje);
            $klassekode=trim($del[0]);
            $klassenavn=trim($del[1]);
            $studiumkode=trim($del[2]);

            print("$klassekode, $klassenavn, $studiumkode<br/>");
        }
    }
    fclose($fil);
}
?>