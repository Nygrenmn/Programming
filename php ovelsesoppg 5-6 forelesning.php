<?php  /*  Eksempel 6 */
/*
/*    Programmet tester ut tidspunkter
*/
?> 

<h3>Dato og klokkeslett </h3>

<form method="post" action="" id="tidSkjema" name="tidSkjema">
  Dato <input type="text" id="dato" name="dato"> (format: &aring;&aring;&aring;&aring;-mm-dd) <br/>
  <input type="submit" value="Fortsett" id="fortsett" name="fortsett" /> 
  <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>

<?php 
  if (isset($_POST ["fortsett"]))
    {
      $dato=$_POST ["dato"];  /* dato har format åååå-mm-dd */

      $aar=substr($dato,0,4);
      $mnd=substr($dato,5,2);
      $dag=substr($dato,8,2);
      $time=0;
      $minutt=0;
      $sekund=0;

      if (!checkdate($mnd,$dag,$aar))
        {
          print ("Ulovlig dato <br/>");
        }
      else
        {
          $ukedag=array(1=>"mandag","tirsdag","onsdag","torsdag","fredag","l&oslash;rdag","s&oslash;ndag");
          $maaned=array(1=>"jan","feb","mar","apr","mai","jun","jul","aug","sep","okt","nov","des");

          $dagensTimestamp=time();			
          $gittTimestamp=mktime($time,$minutt,$sekund,$mnd,$dag,$aar); 
		  
          $gittDato=date("Y-m-d",$gittTimestamp);
          $dagensDato=date("Y-m-d");  /* eller $dagensDato=date("Y-m-d",$dagensTimestamp);*/
          $dagensKlokkeslett=date("H:i");
		  
          $dagensUkedagnr=date("N");  /* nummeret på ukedagen (1=mandag .. 7=søndag) */
          $dagensUkedagnavn=$ukedag[$dagensUkedagnr];  /* navnet på ukedagen (oppslag i array) */
          $dagensMndnr=date("n");  /* nummeret på måneden (1=jan .. 12=des) */
          $dagensMndnavn=$maaned[$dagensMndnr];  /* navnet på måneden (oppslag i array) */
          $dagensUkenr=date("W");  /* ukenummeret (01..52) */

          $gittUkedagnr=date("N",$gittTimestamp);  /* nummeret på ukedagen (1=mandag .. 7=søndag) */
          $gittUkedagnavn=$ukedag[$gittUkedagnr];  /* navnet på ukedagen (oppslag i array) */
          $gittMndnr=date("n",$gittTimestamp);  /* nummeret på måneden (1=jan .. 12=des) */
          $gittMndnavn=$maaned[$gittMndnr];  /* navnet på måneden (oppslag i array) */
          $gittUkenr=date("W",$gittTimestamp);  /* ukenummeret (01..52) */

          print("<strong>Dagens dato</strong> <br/>");
          print("Dato: $dagensDato <br/>");
          print("Klokkeslett: $dagensKlokkeslett <br/>");
          print("Ukedag: $dagensUkedagnavn <br/>");
          print("M&aring;ned: $dagensMndnavn <br/>");
          print("Ukenr: $dagensUkenr <br/><br/>");
		  
          print("<strong>Gitt dato</strong> <br/>");
          print("Dato: $gittDato <br/>");
          print("Ukedag: $gittUkedagnavn <br/>");
          print("M&aring;ned: $gittMndnavn <br/>");
          print("Ukenr: $gittUkenr <br/>");
        }
    }
?>