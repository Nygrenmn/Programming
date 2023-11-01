<?php
include("start.php");
include("db-tilkobling.php");

$sqlSetning="SELECT * FROM emne ORDER BY emnekode;";
$sqlResultat=mysqli_query($db,$sqlSetning) or die("Ikke mulig å hente data fra databasen");
$antallRader=mysqli_num_rows($sqlResultat);

print("<h3>Registrerte emner</h3>");
print("<table border=1>");
print("<tr><th align=left>emnekode</th><th align=left>emnenavn</th><th align=left>studiumkode</th></tr>");

for($r=1;$r<=$antallRader;$r++)
 {
    $rad=mysqli_fetch_array($sqlResultat);
    $emnekode=$rad["emnekode"];
    $emnenavn=$rad["emnenavn"];
    $studiumkode=$rad["studiumkode"];

    print("<tr><td>$emnekode</td><td>$emnenavn</td><td>$studiumkode</td></tr>");
 }
print("</table>");

include("slutt.php");
?>