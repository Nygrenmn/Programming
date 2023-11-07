<?php
function listeboksKlassekode()
 {
   include("db-tilkobling.php");

   $sqlSetning="SELECT * FROM KLASSE ORDER BY klassekode;";
   $sqlResultat=mysqli_query($db,$sqlSetning) or die("Ikke mulig å hente data fra databasen");

   $antallRader=mysqli_num_rows($sqlResultat);

   for($r=1;$r<=$antallRader;$r++)
     {
        $rad=mysqli_fetch_array($sqlResultat);
        $klassekode=$rad["klassekode"];
        $klassenavn=$rad["klassenavn"];
        $studiumkode=$rad["studiumkode"];

        print("<option value='$klassekode'>$klassekode $klassenavn $studiumkode</option>");
     }
 }

function listeboksBrukernavn()
 {
   include("db-tilkobling.php");

   $sqlSetning="SELECT * FROM STUDENT ORDER BY brukernavn;";
   $sqlResultat=mysqli_query($db,$sqlSetning) or die("Ikke mulig å hente data fra databasen");

   $antallRader=mysqli_num_rows($sqlResultat);

   for($r=1;$r<=$antallRader;$r++)
    {
      $rad=mysqli_fetch_array($sqlResultat);
      $brukernavn=$rad["brukernavn"];
      $fornavn=$rad["fornavn"];
      $etternavn=$rad["etternavn"];

      print("<option value='$brukernavn'>$brukernavn $fornavn $etternavn</option>");
    }
 }
?>