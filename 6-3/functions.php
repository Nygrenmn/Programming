<?php

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

function validerOppgavenr($opgnr){

    $lovligopgnr=true;

    if(!$opgnr){
        $lovligopgnr=false;
    }

        elseif(strlen($opgnr)!=1){
            $lovligopgnr=false;
        }

            elseif(!ctype_digit($opgnr)){
                $lovligopgnr=false;
            }
return $lovligopgnr;
}
?>