<!DOCTYPE html>
<html>
<head>
<title>Oppgave 2-6</title>
    <link rel="stylesheet" href="cssopg2-6.css">
</head>
<body>
<h1>Oppgave 2-6</h1><br/>
<p>Sammenlign tallene</p><br/>

<form method="post" action="" id="opg2-6" name="opg2-6">
    Første tallet:<input type="number" id="tall1" name="tall1" required/><br/>
    Andre tallet:<input type="number" id="tall2" name="tall2" required/><br/>

    <input type="submit" id="fortsett" name="Fortsett" value="Fortsett"/>
    <input type="reset" id="tilbakestill" name="tilbakestill" value="Tilbakestill"/>
</form>
</body>
</html>


<?php
if(isset($_POST["Fortsett"])){

$tall1=$_POST["tall1"];
$tall2=$_POST["tall2"];

print("<br/>Tall 1 er $tall1<br/>");
print("Tall 2 er $tall2<br/><br/>");

if($tall1>$tall2){
    print("Tall 1 er større enn tall 2.");
}
elseif($tall1<$tall2){
    print("Tall 1 er mindre enn tall 2.");
}
elseif($tall1==$tall2){
    print("Tall 1 og 2 er like.");
}
else{
    print("Det er ikke angitt gyldige tegn.");
}
}
?>