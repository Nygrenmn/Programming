<?php  /* vis-alle-poststeder */
/*  Programmet skriver ut alle registrerte poststeder
*/
    include("db 07 01.php");
  /* tilkobling til database-serveren utført og valg av database foretatt */

      $sqlSetning="SELECT * FROM poststed;"; /*første ; fra sql kode, andre fra php*/
    /* print("$sqlSetning");*/ /*for å sjekke evt feilmelding*/
      $sqlResultat=mysqli_query($db,$sqlSetning) or die("ikke mulig å hente data fra databasen");
      /*sende noe til db serveren*/
  /* SQL-setning sendt til database-serveren */

  $antallRader=mysqli_num_rows($sqlResultat);
  /* antall rader i resultatet beregnet */

  print ("<h3>Registrerte poststeder</h3>");
  print ("<table border=1>");  
  print ("<tr><th align=left>postnr</th> <th align=left>poststed</th></tr>"); 

  for ($r=1;$r<=$antallRader;$r++) /*få funksjonen til å gå så mange gange som eksisterende rader*/
    {
        $rad=mysqli_fetch_array($sqlResultat); /*henter èn rad*/
        /* ny rad hentet fra spørringsresultatet */

        $postnr=$rad["postnr"]; /* numerisk kunne vært: $postnr=$rad[0];*/
        $poststed=$rad["poststed"]; /*eller $poststed=$rad[1];*/

      print ("<tr> <td> $postnr </td> <td> $poststed </td> </tr>");
    }
  print ("</table>"); 
?>