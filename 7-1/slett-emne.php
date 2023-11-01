<?php
include("start.php");
?>

<script src="funksjoner.js"></script>

<h3>Slett emne</h3>

<form method="post" id="slettEmneSkjema" name="slettEmneSkjema" onsubmit="return bekreft()">
Emnekode<input type="text" id="emnekode" name="emnekode" required/><br/>
<input type="submit" value="Slett emne" id="slettEmneKnapp" name="slettEmneKnapp"/>
</form>

<?php
if(isset($_POST["slettEmneKnapp"]))
{
    include("db-tilkobling.php");

    $emnekode=$_POST["emnekode"];

    $sqlSetning="DELETE FROM emne WHERE emnekode='$emnekode';";
    mysqli_query($db,$sqlSetning) or die("Ikke mulig å slette data i databasen");

    print("Følgende studium er nå slettet: $emnekode");
}
include("slutt.php");
?>