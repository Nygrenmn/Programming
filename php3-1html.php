<!DOCTYPE html>
<html>
<head>
<title>Oppgave 3-1</title>
</head>

<body>
<h1>Oppgave 3-1</h1><br/>

<form method="post" action="" id="opg3-1" name="opg3-1">
    Trykk fortsett for å ramse opp tall fra 1 til 10 <br/>
    <input type="submit" name="fortsett" id="fortsett" value="Fortsett"/>

</form>
</body>
</html>

<?php

for($tall=1;$tall<=10;$tall++){
    print("$tall<br/>");
}
?>