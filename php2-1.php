<?php
$dittsvar=$_POST["svar"];

if ($dittsvar=="9"){
    print("Gratulerer, $dittsvar er det riktige svaret!");
} else {
    print("Beklager, $dittsvar er feil. Prøv igjen.");
}
?>