<!DOCTYPE html>
<html>
<head>
<title>Oppgave 3-3</title>
</head>

<body>
<h1>Oppgave 3-3</h1><br/>

<form method="post" action="" id="opg3-3" name="opg3-3">
    Trykk fortsett for å se tre kolonner med tall: <br/><br/>
    <input type="submit" name="fortsett" id="fortsett" value="Fortsett"/>

</form>
</body>
</html>


<?php
if(isset($_POST["fortsett"])){

print("<br/>");

for($tall=1;$tall<=10;$tall++){
    print("$tall"." ");
}
print("<br/>");
for($tall=11;$tall<=20;$tall++){
    print("$tall"." ");
}
print("<br/>");
for($tall=21;$tall<=30;$tall++){
    print("$tall"." ");
}
print("<br/>");
}
?>