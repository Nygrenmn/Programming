<?php     /* Eksempel 3 */
/*
/*    Programmet legger inn de 4 navn i et array
/*    Programmet skriver ut de 4 navnene
*/

$navn=array("Geir","Marius","Tove",);
$navn[3]="Siv";

  print("Det f&oslash;rste navnet er $navn[0) <br/><br/>");

  print("Alle navnene er <br/>");

  for($nr=0;$nr<=count($navn);$nr++);
  {
    print("$navn[$nr]<br/>");
  }

  for ()
    {
    }
?>

<?php     /* Eksempel 4 */
/*
/*    Programmet legger inn antall dager i hver måned i et array
/*    Programmet skriver ut antall dager i hver måned
*/  

  $antallDager=array(1=>31,28,31,30,31,30,31,31,30,31,30,31);
    /* 12 tall lagt inn i et array (det første med indeks 1) */ 

  print("Antall dager i september er $antallDager[9] <br/><br/>");

  for ($mnd;$mnd<=12;$mnd++)
    {
        print("Antall dager i måned $mnd er $antallDager[$mnd] <br/>");
    }
?>


<?php     /* Eksempel 5 */
/*
/*    Programmet legger inn antall dager i hver måned i et array
/*    Programmet skriver ut antall dager i hver måned
*/

  $antallDager=array("januar"=>31,"februar"=>28,"mars"=>31,"april"=>30,"mai"=>31,"juni"=>30,
    "juli"=>31,"august"=>31,"september"=>30,"oktober"=>31,"november"=>30,"desember"=>31);
      /* 12 tall lagt inn i et array (med tekstlige indekser) */  

  $antall=$antallDager["september"];
  print("Antall dager i september er $antall <br/><br/>");

  foreach ($antallDager as $mnd => $antall) /*gå gjennom array, kall indeks for mnd og verdi for antall*/
    {
        print("Antall dager i $mnd er $antall <br/>");
    }

/*
$antallDager: array
$mnd: navn på indeks
$antall: navn på verdi
*/
?>


<?php     /* Eksempel 6 */
/*
/*    Programmet deler opp en tekststreng ved bruk av oppdelingsfunksjonen explode
*/
  $tekst="Geir Bjarvin Universitetslektor USN";
    /* en tekststreng opprettet bestående av fornavn, etternavn, yrke og arbeidssted (atskilt med mellomrom) */

$del=explode(" ",$tekst); /* teksstrengen deles oppved bruk av funksjonen explode */

$fornavn=$del[0]; /* fornavn hentet ut av arrayet*/
$etternavn=$del[1];

  print ("Hele tekststrengen er: $tekst <br /> <br />");
  print ("Fornavnet er:  $fornavn <br />");
  print ("Etternavnet er:  $etternavn <br />");
?>