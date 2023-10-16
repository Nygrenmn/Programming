<!DOCTYPE html>
<html>
<head>
<title>6-2</title>
</head>
<body>
<h1>6-2</h1><br/>

    <form method="post" action="" id="6-2" name="6-2">
        Fagkode <input type="text" id="fagkode" name="fagkode" required/><br/>
        Oppgavenr <input type="text" id="oppgavenr" name="oppgavenr" required/><br/>
        Frist <input type="text" id="frist" name="frist" required/><br/>
        <input type="submit" value="Fortsett" id="fortsett" name="fortsett"/>
        <input type="reset" value="Tilbakestill" id="tilbakestill" name="tilbakestill"/>
</form>
</body>
</html>

<?php

if(isset($_POST["fortsett"]))
{

    $filnavn="oppgave.txt";

    function validerFagkode($fagkode){

        $lovligkode=true;
        
        if(!$fagkode){
            $lovligkode=false;
        }
            elseif(strlen($fagkode)!=7){
                $lovligkode=false;
            }
                else{
                    $del1=substr($fagkode,0,3);
                    $del2=substr($fagkode,3,4);
        
                    if(!ctype_alpha($del1)){
                        $lovligkode=false;
                    }
                    if(!ctype_digit($del2)){
                        $lovligkode=false;
                    }
                }
        return $lovligkode;
        }

        function validerOppgavenr($oppgavenr)
        {
            $lovligOppgavenr=true;

            if(!$oppgavenr)
            {
                $lovligOppgavenr=false;
            }
            elseif(strlen($oppgavenr)!=1)
            {
                $lovligOppgavenr=false;
            }
            elseif(!ctype_digit($oppgavenr)){
                $lovligOppgavenr=false;
            }
        return $lovligOppgavenr;
        }

$fagkode=$_POST["fagkode"];
$oppgavenr=$_POST["oppgavenr"];
$frist=$_POST["frist"];

$lovligOppgavenr=validerOppgavenr($oppgavenr);
$lovligkode=validerFagkode($fagkode);


if(!$lovligOppgavenr){
    print("Oppgavenummer er ikke riktig utfylt<br/>");
}

if(!$lovligkode){
    print("Fagkode er ikke riktig utfylt<br/>");
}

if(!$frist){
    print("Frist er ikke riktig utfylt<br/>");
}

if($lovligkode and $lovligOppgavenr and $frist){
        print("Oppgavenummer er riktig utfylt<br/>");
        $filoperasjon="a";
        $linje=$fagkode.";".$oppgavenr.";".$frist."\n";

        $fil=fopen($filnavn,$filoperasjon);
        fwrite($fil,$linje);
        print("<br/>");
        fclose($fil);

        print("$linje");
    }
}

?>