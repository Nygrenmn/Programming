<?php
include("start.php");
?>

<script src="funksjoner.js"></script>

<h3>Slett klasse</h3>

<form method="post" id="slettKlasseSkjema" name="slettKlasseSkjema" onsubmit="return bekreft()">
Klasse<select id="klassekode" name="klassekode">
    <?php print("<option value=''>velg klasse</option>");
    include("dynamiske-funksjoner.php"); listeboksKlassekode(); ?>
    </select><br/>
<input type="submit" value="Slett klasse" id="slettKlasseKnapp" name="slettKlasseKnapp"/>
</form>

<?php
if(isset($_POST["slettKlasseKnapp"]))
{
    include("db-tilkobling.php");

    $klassekode=$_POST["klassekode"];

    $sqlSetning="DELETE FROM KLASSE WHERE klassekode='$klassekode';";
    mysqli_query($db,$sqlSetning) or die("Ikke mulig å slette data i databasen");

    print("Følgende klasse er nå slettet: $klassekode");
}
include("slutt.php");
?>