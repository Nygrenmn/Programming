<!DOCTYPE html>
<html>
<head>
<title>Oppgave 3-2</title>
</head>

<body>
<h1>Oppgave 3-2</h1><br/>

<form method="post" action="" id="opg3-2" name="opg3-2">
    Trykk fortsett for å se kvadratrot av tall fra 1-10 <br/>
    <input type="submit" name="fortsett" id="fortsett" value="Fortsett"/>

</form>
</body>
</html>


<?php
if(isset($_POST["fortsett"])){

print("<br/>");

for($tall=1;$tall<=10;$tall++){

    $kvadrat=$tall * $tall;
    print("Kvadratroten av $tall er $kvadrat<br/>");
}
}
?>