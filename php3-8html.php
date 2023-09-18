<!DOCTYPE html>
<html>
<head>
<title>Oppgave 3-8</title>
</head>

<body>
<h1>Oppgave 3-8</h1><br/>
<p>Skriv inn fem forskjellige tall.</p><br/>
<form method="post" action="" id="opg3-8" name="opg3-8">
    <input type="number" name="nummer1" id="nummer1" required/>
    <input type="number" name="nummer2" id="nummer2" required/>
    <input type="number" name="nummer3" id="nummer3" required/>
    <input type="number" name="nummer4" id="nummer4" required/>
    <input type="number" name="nummer5" id="nummer5" required/>
    <input type="submit" name="fortsett" id="fortsett" value="Fortsett"/>
    <input type="reset" name="tilbakestill" id="tilbakestill" value="Tilbakestill"/>

</form>
</body>
</html>


<?php
if(isset($_POST["fortsett"])){

$nummer1=$_POST["nummer1"];
$nummer2=$_POST["nummer2"];
$nummer3=$_POST["nummer3"];
$nummer4=$_POST["nummer4"];
$nummer5=$_POST["nummer5"];

print("<br/>");

$tallarray=array($nummer1,$nummer2,$nummer3,$nummer4,$nummer5);

for($tall=0;$tall<=4;$tall++){
    print($tallarray[$tall]." ");
}

print("<br/>");

for($tall=4;$tall>=0;$tall--){
    print($tallarray[$tall]." ");
}
}
?>