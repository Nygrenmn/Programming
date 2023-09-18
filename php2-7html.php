<!DOCTYPE html>
<html>
<head>
<title>Oppgave 2-7</title>
    <link rel="stylesheet" href="css2-7.css"/>
</head>
<body>
<h1>Oppgave 2-7</h1><br/>
<p>Sammenlign tallene</p><br/>
<form method="post" action="" id="opg2-7" name="opg2-7">
    Tall 1=<input type="number" id="tall1" name="tall1" required/><br/>
    Tall 2=<input type="number" id="tall2" name="tall2" required/><br/>
    Tall 2=<input type="number" id="tall3" name="tall3" required/><br/>

    <input type="submit" id="fortsett" name="fortsett" value="Fortsett"/>
    <input type="reset" id="nullstill" name="nullstill" value="Nullstill"/>
</form>
</body>
</html>


<?php
if(isset($_POST["fortsett"])){

$tall1=$_POST["tall1"];
$tall2=$_POST["tall2"];
$tall3=$_POST["tall3"];

print("<br/>Tall 1 er $tall1<br/>");
print("Tall 2 er $tall2<br/>");
print("Tall 3 er $tall3<br/>");
print("<br/>");

if($tall1<$tall2){
    print("Tall 1 er mindre enn tall 2<br/>");
}
elseif($tall1>$tall2){
    print("Tall 1 er større enn tall 2<br/>");
}
elseif($tall1==$tall2){
    print("Tall 1 og 2 er like<br/>");
}

if($tall1<$tall3){
    print("Tall 1 er mindre enn tall 3<br/>");
}
elseif($tall1>$tall3){
    print("Tall 1 er større enn tall 3<br/>");
}
elseif($tall1==$tall3){
    print("Tall 1 og tall 3 er like<br/>");
}

if($tall2<$tall3){
    print("Tall 2 er mindre enn tall 3<br/>");
}
elseif($tall2>$tall3){
    print("Tall 2 er større enn tall 3<br/>");
}
elseif($tall2==$tall3){
    print("Tall 2 og tall 3 er like<br/>");
}
}
?>