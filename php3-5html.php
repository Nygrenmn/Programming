<!DOCTYPE html>
<html>
<head>
<title>Oppgave 3-5</title>
</head>

<body>
<h1>Oppgave 3-5</h1><br/>

<form method="post" action="" id="opg3-5" name="opg3-5">
    Trykk fortsett for å se gjennomsnittet til summen av tallene fra 1-10: <br/><br/>
    <input type="submit" name="fortsett" id="fortsett" value="Fortsett"/>

</form>
</body>
</html>


<?php
if(isset($_POST["fortsett"])){

print("<br/>");

$sum=0;

for($tall=1;$tall<=10;$tall++){
    $sum=$sum + $tall;
}
$gjennomsnitt=$sum / 10;
print("Gjennomsnittet av summen($sum) er $gjennomsnitt");
}
?>