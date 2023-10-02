<?php  /*  Eksempel 2 */
/*
/*    Programmet mottar klassekode fra et HTML-skjema 
/*    Programmet sjekker om klassekode er korrekt fylt ut ved å inkludere en egendefinrt funksjon
*/

include("validering.php"); /* php ovelsesoppg 6-1 forelesning.php */

  $klassekode=$_POST ["klassekode"];

  $lovligKlassekode=validerKlassekode($klassekode); /* funksjonskall d.v.s. at funksjonen utføres */

  if ($lovligKlassekode)  /* klassekode er  korrekt fylt ut */
    {
      print("Klassekode er korrekt fylt ut <br />");
    }
  else  /* klassekode er ikke korrekt fylt ut */
    {
      print("Klassekode er ikke korrekt fylt ut <br />");
    }
 
?>