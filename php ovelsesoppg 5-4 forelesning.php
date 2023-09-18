<?php  /* Eksempel 4 */
/*
/*    Programmet mottar et søkeord fra et html-skjema 
/*    Programmet skriver ut alle registrerte personer der søkeordet er en del av fornavnet eller en del av etternavnet
*/
  $filnavn="filer/navn.txt";  /* filnavn angitt */

  $navn=$_POST ["navn"];
  $navn=trim($navn);  /* mellomrom i starten og slutten "trimmet" vekk */	

  $filoperasjon="r";  /* filoperasjon ("r" - for lesing) angitt  */
	
  print ("F&oslash;lgende personer passer til s&oslash;kekriteriet <br> <br>"); 

  $fil = fopen($filnavn,$filoperasjon);  /* filen åpnet */

  while ($linje = fgets ($fil))  /* en linje lest fra fil */
    {
      if ($linje != "")  /* linjen lest fra fil er ikke tom */
        {
          $del = explode (";" , $linje);  /* innholdet av linjen delt opp i fornavn og etternavn */
          $fornavn=trim($del[0]);  /* fornavn hentet ut */
          $etternavn=trim($del[1]);  /* etternavn hentet ut */

          if (strtoupper($navn)==strtoupper($fornavn) || $ strtoupper($navn)==strtoupper($etternavn))
            {   /* fornavn eller etternavn er lik mottatt navn */
              print ("$fornavn $etternavn <br />");						
            }
        }							
    }

  fclose ($fil);  /* filen lukket */
?> 