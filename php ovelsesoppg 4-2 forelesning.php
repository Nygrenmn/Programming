<?php     /* Eksempel 2 */
/*
/*    Programmet leser data (fornavn og etternavn) fra filen "navn.txt"
/*    Programmet skriver ut alle registrerte personer på formen fornavn;etternavn
*/

$filnanv="filer/navn.txt";
$filoperasjon="r"; /* filoperasjon r (for lesing) angitt */

  print ("F&oslash;lgende personer er registrert <br> <br>"); 

$fil=fopen($filnavn,$filoperasjon); /* tekstfil åpnet */

  while ($linje=fgets($fil)) /* en linje lest fra fil */  
    {
        print("$linje <br/>");
    }
    fclose($fil); /* tekstfil lukket */

?>