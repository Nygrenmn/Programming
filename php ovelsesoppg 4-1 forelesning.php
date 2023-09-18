<?php     /* Eksempel 1 */
/*
/*    Programmet mottar fra et HTML-skjema et fornavn og et etternavn
/*    Programmet skriver data (fornavn og etternavn) til filen "navn.txt"
*/

  $fornavn=$_POST ["fornavn"];
  $etternavn=$_POST ["etternavn"];   

  if (!$fornavn ||!$etternavn)
    {
      print ("Begge feltene må fylles ut");
    }
  else
    {
    $filnavn="navn.txt";
    $filoperasjon="a"; /* filoperasjon a (append)(for tilføying) angitt */
    $linje=$fornavn . ";" . $etternavn . "\n"; /* punktum for å skjøte sammen tekst,\n er for linjeskift */

    $fil=fopen($filnavn;$filoperasjon); /* tekstfil åpnet. f for fil, kan være fclose etc */
    fwrite($fil,$linje); /* en linje skrevet til fil */
    fclose($fil); /* tekstfil lukket */

    print ("$fornavn $etternavn er n&aring; registrert p&aring; fil"); 
    }

?>