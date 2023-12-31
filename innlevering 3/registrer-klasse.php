<?php
include("start.php");
?>

<h3>Registrer klasse</h3>

<form method="post" action="" id="registrerKlasseSkjema" name="registrerKlasseSkjema">
Klassekode <input type="text" id="klassekode" name="klassekode" required /> <br/>
Klassenavn <input type="text" id="klassenavn" name="klassenavn" required /> <br/>
Studiumkode <input type="text" id="studiumkode" name="studiumkode" required /> <br/>
<input type="submit" value="Registrer klasse" id="registrerKlasseKnapp" name="registrerKlasseKnapp" />
<input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>

<?php
if(isset($_POST["registrerKlasseKnapp"]))
{
    $klassekode=$_POST["klassekode"];
    $klassenavn=$_POST["klassenavn"];
    $studiumkode=$_POST["studiumkode"];

    if(!$klassekode or !$klassenavn or !$studiumkode)
    {
        print("Alle felt må fylles ut.");
    }

    else
    {
        include("db-tilkobling.php");

        $sqlSetning="SELECT * FROM KLASSE WHERE klassekode='$klassekode';";
        $sqlResultat=mysqli_query($db,$sqlSetning) or die("Ikke mulig å hente data fra databasen");
        $antallRader=mysqli_num_rows($sqlResultat);

        if($antallRader!=0)
        {
            print("Klassen er registrert fra før");
        }

        else
        {
            $sqlSetning="INSERT INTO KLASSE (klassekode,klassenavn,studiumkode) VALUES('$klassekode','$klassenavn','$studiumkode');";
            mysqli_query($db,$sqlSetning) or die("Ikke mulig å registrere data i databasen");

            print("Følgende klasse er nå registrert: $klassekode $klassenavn $studiumkode");
        }
    }
}
include("slutt.php");
?>