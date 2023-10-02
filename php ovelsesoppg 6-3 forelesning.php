<?php  /*  validering.php */

function validerKlassekode($klassekode)
{
/*
/*  Hensikt
/*    Funksjonen sjekker om klassekode er korrekt er fylt ut
/*  Parametre
/*    klassekode = klassekoden som skal sjekkes
/*  Funksjonsverdi/Returverdi
/*    Funksjonen returnerer true hvis klassekode er korrekt er fylt ut
/*    Funksjonen returnerer false ellers
*/

$lovligKlassekode=true;


if (!$klassekode)  /* klassekode er ikke fylt ut */
{
  $lovligKlassekode=false;
}
else if (strlen($klassekode)!=3)  /* klassekode består ikke av 3 tegn */
{
  $lovligKlassekode=false;
}
else 
{
  $tegn1=$klassekode[0];   /* første tegn i klassekoden  */
  $tegn2=$klassekode[1];   /* andre tegn i klassekoden  */
  $tegn3=$klassekode[2];   /* tredje tegn i klassekoden  */

  if (!ctype_alpha($tegn1))  /* tegn1 er ikke bokstav */ 
    {
      $lovligKlassekode=false;
    }
    
  if (!ctype_alpha($tegn2))  /* tegn2 er ikke bokstav */
    {
      $lovligKlassekode=false;
    }
    
  if (!ctype_digit($tegn3))  /* tegn3 er ikke et siffer */ 
    {
      $lovligKlassekode=false;
    }
}

return $lovligKlassekode;


}

?>