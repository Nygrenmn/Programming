<?php
include("start.php");
?>

<h3>Registrer studium </h3>

<form method="post" action="" id="registrerStudiumSkjema" name="registrerStudiumSkjema">
Studiumkode <input type="text" id="studiumkode" name="studiumkode" required /> <br/>
Studiumnavn <input type="text" id="studiumnavn" name="studiumnavn" required /> <br/>
<input type="submit" value="Registrer studium" id="registrerStudiumKnapp" name="registrerStudiumKnapp" />
<input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>

<?php
if(isset($_POST["registrerStudiumKnapp"]))
{
    $studiumkode=$_POST["studiumkode"];
    $studiumnavn=$_POST["studiumnavn"];

    if(!$studiumkode or !$studiumnavn)
    {
        print("Alle felt må fylles ut.");
    }

    else
    {
        include("db-tilkobling.php");

        $sqlSetning="SELECT * FROM studium WHERE studiumkode='$studiumkode';";
        $sqlResultat=mysqli_query($db,$sqlSetning) or die("Ikke mulig å hente data fra databasen");
        $antallRader=mysqli_num_rows($sqlResultat);

        if($antallRader!=0)
        {
            print("Studiet er registrert fra før");
        }

        else
        {
            $sqlSetning="INSERT INTO studium (studiumkode,studiumnavn) VALUES('$studiumkode','$studiumnavn');";
            mysqli_query($db,$sqlSetning) or die("Ikke mulig å registrere data i databasen");

            print("Følgende studium er nå registrert: $studiumkode $studiumnavn");
        }
    }
}
include("slutt.php");
?>