<?php  /*  Eksempel 2 */
/*
/*    Programmet mottar klassekode fra et HTML-skjema 
/*    Programmet sjekker om klassekode er korrekt fylt ut
*/
  $klassekode=$_POST ["klassekode"];

  $lovligKlassekode=true;

  if (!$klassekode)  /* klassekode er ikke fylt ut */
    {
      print("Klassekode er ikke fylt ut <br />");
      $lovligKlassekode=false;
    }
  else if (strlen($klassekode)!=3)  /* klassekode består ikke av 3 tegn */
    {
      print("Klassekode best&aring;r ikke av 3 tegn <br />");
      $lovligKlassekode=false;
    }
  else
    {
        $tegn1=$klassekode[0]; /* første tegn i klasesekoden */
        $tegn2=$klassekode[1]; /* andre tegn i klasesekoden */
        $tegn3=$klassekode[2]; /* tredje tegn i klasesekoden */
        
      if (!ctype_alpha($tegn1))  /* tegn1 er ikke bokstav */ 
        {
          print("F&oslash;rste tegn er ikke en bokstav <br />");
          $lovligKlassekode=false;
        }
		
      if (!ctype_alpha($tegn2))  /* tegn2 er ikke bokstav */
        {
          print("Andre tegn er ikke en bokstav <br />");
          $lovligKlassekode=false;
        }
		
      if (!ctype_digit($tegn3))  /* tegn3 er ikke et siffer */ 
        {
          print("Siste tegn er ikke et siffer  <br />");
          $lovligKlassekode=false;
        }
    }

  if ($lovligKlassekode)  /* klassekode er  korrekt fylt ut */
    {
      print("Klassekode er korrekt fylt ut <br />");
    }
?>