<?php
include("start.php");
?>

<h3>Registrer fag</h3>

<form method="post" action="" name="6-3" id="6-3">
    Fagkode<input type="text" id="fagkode" name="fagkode" required/><br/>
    Fagnavn<input type="text" id="fagnavn" name="fagnavn" required/><br/>
    Faglærer<input type="text" id="faglærer" name="faglærer" required/><br/>
    <input type="submit" value="Fortsett" id="fortsett" name="fortsett"/>
    <input type="reset" value="Tilbakestill" id="tilbakestill" name="tilbakestill"/>
</form>

<?php
if(isset($_POST["fortsett"]))
{
    $filnavnfag="fag.txt";

    function validerFagkode($fagkode)
    {

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

$fagkode=$_POST["fagkode"];
$fagnavn=$_POST["fagnavn"];
$faglærer=$_POST["faglærer"];

$lovligkode=validerFagkode($fagkode);

if(!$lovligkode){
    print("Fagkode er ikke riktig utfylt.");
}

if(!$lovligkode or !$fagnavn or !$faglærer){
    print("Alle felter må fylles ut.");}

if($lovligkode and $fagnavn and $faglærer)
{
    print("Informasjonen er registrert.");
    $filoperasjon="a";
    $linje=$fagkode.";".$fagnavn.";".$faglærer."\n";

    $fil=fopen($filnavnfag,$filoperasjon);
    fwrite($fil,$linje);
    print("<br/>");
    fclose($fil);

    print("$linje");
}
}
include("slutt.php");
?>