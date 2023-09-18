<!DOCTYPE html>
<html>
<head>
<title>Oppgave 3-4</title>
</head>

<body>
<h1>Oppgave 3-4</h1><br/>

<form method="post" action="" id="opg3-4" name="opg3-4">
    Trykk fortsett for å se summen av tallene fra 1-10: <br/><br/>
    <input type="submit" name="fortsett" id="fortsett" value="Fortsett"/>

</form>
</body>
</html>


<?php
if(isset($_POST["fortsett"])){

print("<br/>");

$sum=0;
for($tall=1;$tall<=1;$tall++){
    $sum=$sum + $tall;
}
print("Summen av tallene fra 1 til 1 er $sum <br/>");

$sum=0;
for($tall=1;$tall<=2;$tall++){
    $sum=$sum + $tall;
}
print("Summen av tallene fra 1 til 2 er $sum <br/>");

$sum=0;
for($tall=1;$tall<=3;$tall++){
    $sum=$sum + $tall;
}
print("Summen av tallene fra 1 til 3 er $sum <br/>");

$sum=0;
for($tall=1;$tall<=4;$tall++){
    $sum=$sum + $tall;
}
print("Summen av tallene fra 1 til 4 er $sum <br/>");

$sum=0;
for($tall=1;$tall<=5;$tall++){
    $sum=$sum + $tall;
}
print("Summen av tallene fra 1 til 5 er $sum <br/>");

$sum=0;
for($tall=1;$tall<=6;$tall++){
    $sum=$sum + $tall;
}
print("Summen av tallene fra 1 til 6 er $sum <br/>");

$sum=0;
for($tall=1;$tall<=7;$tall++){
    $sum=$sum + $tall;
}
print("Summen av tallene fra 1 til 7 er $sum <br/>");

$sum=0;
for($tall=1;$tall<=8;$tall++){
    $sum=$sum + $tall;
}
print("Summen av tallene fra 1 til 8 er $sum <br/>");

$sum=0;
for($tall=1;$tall<=9;$tall++){
    $sum=$sum + $tall;
}
print("Summen av tallene fra 1 til 9 er $sum <br/>");

$sum=0;
for($tall=1;$tall<=10;$tall++){
    $sum=$sum + $tall;
}
print("Summen av tallene fra 1 til 10 er $sum <br/>");
}
?>