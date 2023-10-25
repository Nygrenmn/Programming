<?php  /* registrer-poststed */
/*
/*  Programmet lager et html-skjema for å registrere et poststed
/*  Programmet registrerer data (postnr og poststed) i databasen
*/
?> 

<h3>Registrer poststed </h3>

<form method="post" action="" id="registrerPoststedSkjema" name="registrerPoststedSkjema">
  Postnr <input type="text" id="postnr" name="postnr" required /> <br/>
  Poststed <input type="text" id="poststed" name="poststed" required /> <br/>
  <input type="submit" value="Registrer poststed" id="registrerPoststedKnapp" name="registrerPoststedKnapp" /> 
  <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>

<?php 
  if (isset($_POST ["registrerPoststedKnapp"]))
    {
      $postnr=$_POST ["postnr"];
      $poststed=$_POST ["poststed"];

      if (!$postnr || !$poststed)
        {
          print ("B&aring;de postnr og poststed m&aring; fylles ut");

        }
      else
        {
          include("php 07 01.php");  
          /* "db-tilkobling.php" tilkobling til database-serveren utført og valg av database foretatt */

          $sqlSetning="SELECT * FROM poststed WHERE postnr='$postnr';"; /* eks SELECT * FROM poststed WHERE postnr='$3117';*/
          $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
            /* SQL-setning sendt til database-serveren */

        $antallRader=mysqli_num_rows($sqlResultat);
            /* antall rader i resultatet beregnet */

          if ($antallRader!=0)  /* poststedet er registrert fra før */
            {
              print ("Poststedet er registrert fra f&oslashr");
            }
          else /* poststedet er registrert fra før */
            {
            $sqlSetning="INSERT INTO poststed VALUES('$postnr','$poststed');";
                /* eks INSERT INTO poststed VALUES('$3183','Horten')*/
            mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");
                /* SQL-setning sendt til database-serveren */

              print ("F&oslash;lgende poststed er n&aring; registrert: $postnr $poststed"); 
            }
        }
    }
?> 