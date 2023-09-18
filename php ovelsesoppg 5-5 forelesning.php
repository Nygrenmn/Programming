<?php  /* Eksempel 5 */
/*
/*    Programmet mottar et søkeord fra et html-skjema 
/*    Programmet skriver ut alle registrerte personer der søkeordet er en del av fornavnet eller en del av etternavnet
*/
  $filnavn="filer/navn.txt";  /* filnavn angitt */

  $sokeord=$_POST ["sokeord"];
  $sokeord=trim($sokeord);  /* mellomrom i starten og slutten "trimmet" vekk */	

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

          if (stripos($fornavn,$sokeord)!==false || stripos($etternavn,$sokeord)!==false)
            {   /* søkeordet er en del av fornavnet eller etternavnet */
              print ("$fornavn $etternavn <br />");						
            }
        }							
    }

  fclose ($fil);  /* filen lukket */
?> 