SELECT * FROM ansatt ORDER BY navn;		/ *A-Å */
SELECT * FROM ansatt ORDER BY mndloenn;		/ * 0-9*/

SELECT * FROM ansatt ORDER BY navn ASC;		/ *A-Å */
SELECT * FROM ansatt ORDER BY mndloenn ASC; 	/ * 0-9*/

SELECT * FROM ansatt ORDER BY navn DESC; 	/ *Å-A */
SELECT * FROM ansatt ORDER BY mndloenn DESC; 	/ * 9-0 */

SELECT * FROM ansatt ORDER BY navn, mndloenn; 	/* først på navn, så på mndloenn */