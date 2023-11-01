<?php
include("start.php");
?>

<h3>Registrer emne</h3>

<form method="post" action="" id="registrerEmneSkjema" name="registrerEmneSkjema">
Emnekode<input type="text" id="emnekode" name="emnekode" required /> <br/>
Emnenavn<input type="text" id="emnenavn" name="emnenavn" required /> <br/>
Studiumkode<input type="text" id="studiumkode" name="studiumkode" required /> <br/>
<input type="submit" value="Registrer emne" id="registrerEmneKnapp" name="registrerEmneKnapp" />
<input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>

<?php
if(isset($_POST["registrerEmneKnapp"]))
{
    $emnekode=$_POST["emnekode"];
    $emnenavn=$_POST["emnenavn"];
    $studiumkode=$_POST["studiumkode"];

    if(!$emnekode or !$emnenavn or !$studiumkode)
    {
        print("Alle felt må fylles ut.");
    }

    else
    {
        include("db-tilkobling.php");

        $sqlSetning="SELECT * FROM emne WHERE emnekode='$emnekode';";
        $sqlResultat=mysqli_query($db,$sqlSetning) or die("Ikke mulig å hente data fra databasen");
        $antallRader=mysqli_num_rows($sqlResultat);

        if($antallRader!=0)
        {
            print("Emnet er registrert fra før");
        }

        else
        {
            $sqlSetning="INSERT INTO emne (emnekode,emnenavn,studiumkode) VALUES('$emnekode','$emnenavn','$studiumkode');";
            mysqli_query($db,$sqlSetning) or die("Ikke mulig å registrere data i databasen");

            print("Følgende studium er nå registrert: $emnekode $emnenavn $studiumkode");
        }
    }
}
include("slutt.php");
?>