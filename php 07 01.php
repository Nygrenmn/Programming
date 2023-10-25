<?php  /* db-tilkobling */
/*  Programmet foretar tilkobling til database-server og valg av database
*/

  $vert="localhost"; /*server*/
  $bruker="265362";
  $passord="dYpX+UW5";
  $database="265362"; /* verdier satt for vert, bruker, passord og database for tilkobling til databaseserver */

    $db=mysqli_connect($vert,$bruker,$passord,$database) or die("ikke kontakt med databaseserver")
    /*lage egen variabel*/

    /* tilkobling til database-serveren utført */
?>