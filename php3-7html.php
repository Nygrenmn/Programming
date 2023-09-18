<!DOCTYPE html>
<html>
<head>
<title>Oppgave 3-7</title>
</head>

<body>
<h1>Oppgave 3-7</h1><br/>
<p>Skriv inn et det fulle navnet ditt.</p><br/>
<form method="post" action="" id="opg3-7" name="opg3-7">
    <input type="text" name="navn" id="navn" required/>
    <input type="submit" name="fortsett" id="fortsett" value="Fortsett"/>
    <input type="reset" name="tilbakestill" id="tilbakestill" value="Tilbakestill"/>

</form>
</body>
</html>


<?php
if(isset($_POST["fortsett"])){

$navn=$_POST["navn"];

print("<br/>");

$oppdeltnavn=explode(" ", $navn);
$fornavn=$oppdeltnavn[0];
$etternavn=$oppdeltnavn[1];

print("Fornavn er $fornavn.<br/>");
print("Etternavn er $etternavn.<br/>");
}
?>