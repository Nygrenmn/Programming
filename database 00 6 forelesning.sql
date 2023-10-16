SELECT * FROM ansatt;						/* viser 4 rader og 5 kolonner, alle kolonner og rader */ 

SELECT navn, adresse, postnr FROM ansatt;			/* viser 4 rader og 3 kolonner */ 

SELECT * FROM ansatt WHERE postnr='3124';			/* viser 2 rader og 5 kolonner (stjerne betyr alle kolonner)*/

SELECT navn, adresse, postnr FROM ansatt WHERE postnr='3124';	/* viser 2 rader og 3 kolonner */