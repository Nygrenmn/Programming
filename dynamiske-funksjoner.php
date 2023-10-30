<?php   /*  dynamiske funksjoner */

function listeboksPostnr()
{
  include("db-tilkobling.php");  /* tilkobling til database-server og valg av database utfÃ¸rt */
      
  $sqlSetning="SELECT * FROM poststed ORDER BY postnr;"; /* order by sortert rekkefølge i rekkelisten*/
  $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen"); 
    /* SQL-setning sendt til database-serveren */
      
  $antallRader=mysqli_num_rows($sqlResultat);  /* antall rader i resultatet beregnet */

  for ($r=1;$r<=$antallRader;$r++)
    {
      $rad=mysqli_fetch_array($sqlResultat);  /* ny rad hentet fra spÃ¸rringsresultatet */
      $postnr=$rad["postnr"]; 
      $poststed=$rad["poststed"];

      print("<option value='$postnr'>$postnr $poststed </option>");  /* ny verdi i listeboksen laget */
    }
}


function sjekkbokserPostnr()
{
  include("db-tilkobling.php");  /* tilkobling til database-server og valg av database utfÃ¸rt */
      
  $sqlSetning="SELECT * FROM poststed ORDER BY postnr;";
  $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");  
    /* SQL-setning sendt til database-serveren */
      
  $antallRader=mysqli_num_rows($sqlResultat);  /* antall rader i resultatet beregnet */

  for ($r=1;$r<=$antallRader;$r++)
    {
      $rad=mysqli_fetch_array($sqlResultat);  /* ny rad hentet fra spÃ¸rringsresultatet */
      $postnr=$rad["postnr"];       
      $poststed=$rad["poststed"];    

      print("<input type='checkbox' id='postnr' name='postnr[]' value='$postnr'/> $postnr $poststed <br/>");  
        /* ny sjekkboks laget */
    }
}


?>