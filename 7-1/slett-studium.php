<?php
include("start.php");
?>

<script src="funksjoner.js"></script>

<h3>Slett studium</h3>

<form method="post" id="slettStudiumSkjema" name="slettStudiumSkjema" onsubmit="return bekreft()">
Studiumkode<input type="text" id="studiumkode" name="studiumkode" required/><br/>
<input type="submit" value="Slett studium" id="slettStudiumKnapp" name="slettStudiumKnapp"/>
</form>

<?php
if(isset($_POST["slettStudiumKnapp"]))
{
    include("db-tilkobling.php");

    $studiumkode=$_POST["studiumkode"];

    $sqlSetning="DELETE FROM studium WHERE studiumkode=$'studiumkode';";
    mysqli_query($db,$sqlSetning) or die("Ikke mulig å slette data i databasen");

    print("Følgende studium er nå slettet: $studiumkode");
}
include("slutt.php");
?>