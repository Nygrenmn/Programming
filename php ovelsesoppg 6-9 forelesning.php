<?php     /* vis-alle-poststeder */
/*
/*    Programmet leser data (postnr og poststed) fra filen "poststed.txt"
/*    Programmet skriver ut alle registrerte poststeder 
*/

include("start.php");
  $filnavn="filer/poststed.txt";  /* filnavn angitt */

  $filoperasjon="r";    /* filoperasjon ("r" - for lesing) angitt  */
  print ("F&oslash;lgende poststeder er registrert <br> <br>");

  $fil = fopen($filnavn,$filoperasjon);    /* filen åpnet */

  while ($linje = fgets ($fil))    /* en linje lest fra fil */
    {
       if ($linje != "")  /* linjen lest fra fil er ikke tom */
        {
          $del = explode (";" , $linje);  /* innholdet av linjen delt opp i postnr og poststed */
          $postnr=$del[0];  /* fornavn hentet ut */
          $poststed=$del[1];  /* etternavn hentet ut */

          print ("$postnr $poststed <br />");
        }
    }

  fclose ($fil);    /* filen lukket */
include("slutt.php");
?>