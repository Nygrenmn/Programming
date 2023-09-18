<!DOCTYPE html>
<html>
<head>
<title>Oppgave 3-6</title>
</head>

<body>
<h1>Oppgave 3-6</h1><br/>
<p>Skriv inn et tall. Det vil kjøre gjennom alle tallene dine.</p><br/>
<form method="post" action="" id="opg3-6" name="opg3-6">
    <input type="number" name="nummer" id="nummer" value="Nummer" required/>
    <input type="submit" name="fortsett" id="fortsett" value="Fortsett"/>

</form>
</body>
</html>


<?php
if(isset($_POST["fortsett"])){

$nummer=$_POST["nummer"];

print("<br/>");

if($nummer<=0){
    print("Tallet er ikke et positivt tall.");
}
    else{
        for($tall=1;$tall<=$nummer;$tall++);
    }
    print("$tall<br/>");
}
?>