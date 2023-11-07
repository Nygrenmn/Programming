<?php
include("start.php");
?>

<script src="funksjoner.js"></script>

<h3>Slett student</h3>

<form method="post" id="slettStudentSkjema" name="slettStudentSkjema" onsubmit="return bekreft()">
Student<select id="brukernavn" name="brukernavn">
    <?php print("<option value=''>velg student</option>");
    include("dynamiske-funksjoner.php"); listeboksBrukernavn(); ?>
</select><br/>
<input type="submit" value="Slett student" id="slettStudentKnapp" name="slettStudentKnapp"/>
</form>

<?php
if(isset($_POST["slettStudentKnapp"]))
{
    include("db-tilkobling.php");

    $brukernavn=$_POST["brukernavn"];

    $sqlSetning="DELETE FROM STUDENT WHERE brukernavn='$brukernavn';";
    mysqli_query($db,$sqlSetning) or die("Ikke mulig å slette data i databasen");

    print("Følgende student er nå slettet: $brukernavn");
}
include("slutt.php");
?>