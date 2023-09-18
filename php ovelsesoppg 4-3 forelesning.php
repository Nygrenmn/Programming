<?php     /* Eksempel 3 */
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
    if($line!="") /* hvis linjen lest fra ikke er tom */
    {
       $del=explode(";",$linje); /* innhold av linjen delt opp i fornavn og etternavn */
       $fornavn=$del[0];
       $etternavn=$del[1];

       print("$fornavn $etternavn"); /* atl eks: print("$etternavn, $fornavn"); */
    }
    }
    fclose($fil); /* tekstfil lukket */

?>