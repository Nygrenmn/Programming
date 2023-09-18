<?php  /*  Eksempel 3 */
/*
/*    Programmet mottar emnekode fra et HTML-skjema 
/*    Programmet sjekker om emnekode er korrekt fylt ut
*/
  $emnekode=$_POST ["emnekode"];

  $lovligEmnekode=true;

  if (!$emnekode)  /* emnekode er ikke fylt ut */
    {
      print("Emnekode er ikke fylt ut <br />");
      $lovligEmnekode=false;
    }
  else if (strlen($emnekode)!=7)  /* emnekode består ikke av 7 tegn */
    {
      print("Emnekode best&aring;r ikke av 7 tegn <br />");
      $lovligEmnekode
    }
  else 
    {
        $del1= substr($emnekode, 0, 3); /* henter ut de 3 første tegnene */
        $del2= substr($emnekode, 3, 3); /* henter ut de 3 neste tegnene */
        $del3= substr($emnekode, 6, 1); /* henter ut de 3 neste tegnene */

      if(!ctype_alpha($del1))  /* de 3 første tegnene inneholde ikke bare bokstaver */
        {
          print("Tegn 1-3 inneholder ikke bare bokstaver <br />");
          $lovligEmnekode=false;
        }

      if(!ctype_digit($del2))  /* de 3 neste tegnene inneholde ikke bare siffre */
        {
          print("Tegn 4-6 inneholder ikke bare siffre <br />");
          $lovligEmnekode=false;
        }
	 
      if(!ctype_alpha($del3) && !ctype_digit($del3))  /* det siste tegnet inneholde ikke bokstav eller siffer */
        {
          print("Det siste tegnet inneholde ikke bokstav eller siffer <br />");
          $lovligEmnekode=false;
        }
	  
    }

  if ($lovligEmnekode)  /* emnekode er korrekt fylt ut */
    {
      print ("Emnekode er korrekt fylt ut <br />");    
    }
?>