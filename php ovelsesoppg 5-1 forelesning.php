<?php  /*  Eksempel 1 */
/*
/*    Programmet mottar postnr fra et HTML-skjema 
/*    Programmet sjekker om postnr er korrekt fylt ut
*/
  $postnr=$_POST ["postnr"];

  $lovligPostnr=true;

  if (!$postnur)  /* postnr er ikke fylt ut */
    {
      print("Postnr er ikke fylt ut <br />");
      $lovligPostnr=false;
    }
  else if (strlen($postnr)!=4)  /* postnr består ikke av 4 tegn */
    {
      print("Postnr best&aring;r ikke av 4 tegn <br />");
      $lovligPostnr=false;
    }
  else if (!ctype_digit($postnr))  /* minst ett av tegnene er ikke et siffer */
    {
      print("Postnr best&aring;r ikke bare av siffre  <br />");
      $lovligPostnr=false;
    }

  if ($lovligPostnr)  /* postnr er  korrekt fylt ut, $lovligPostnr betyr $lovligPostnr==true */
    {
      print("Postnr er korrekt fylt ut <br />");
    }
?>