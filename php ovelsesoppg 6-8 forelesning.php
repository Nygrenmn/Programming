<?php  /* registrer-poststed */
/*
/*    Programmet lager et html-skjema for å registrere et poststed
/*    Programmet skriver data (postnr og poststed) til filen "poststed.txt"
*/
include("start.php");

?> 

<h3>Registrer poststed </h3>

<form method="post" action="" id="registrerPoststedSkjema" name="registrerPoststedSkjema">
  Postnr <input type="text" id="postnr" name="postnr" required /> <br/>
  Poststed <input type="text" id="poststed" name="poststed" required /> <br/>
  <input type="submit" value="Registrer poststed" id="registrerPoststedKnapp" name="registrerPoststedKnapp" /> 
  <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>

<?php 
  $filnavn="filer/poststed.txt";  /* filnavn angitt */

  if (isset($_POST ["registrerPoststedKnapp"]))  /* knappen for å skrive til fil trykket  */
    {
      $postnr=$_POST ["postnr"];
      $poststed=$_POST ["poststed"];

      if (!$postnr || !$poststed)
        {
          print ("B&aring;de postnr og poststed m&aring; fylles ut");
        }
      else
        {
          $filoperasjon="a";  /* filoperasjon ("a" - for tilføying) angitt  */

          $linje=trim($postnr) . ";" .trim( $poststed) . "\n";  /* linjen som skal skrives til fil opprettet */
								
          $fil = fopen($filnavn,$filoperasjon);  /* filen åpnet */

          fwrite ($fil,$linje);  /* en linje skrevet til fil */

          fclose ($fil);  /* filen lukket */

          print ("F&oslash;lgende poststed er n&aring; registrert: $postnr $poststed");
        }
    }
include("slutt.php");

?> 