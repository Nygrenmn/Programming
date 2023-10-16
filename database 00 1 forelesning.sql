CREATE TABLE poststed ( 
  postnr CHAR(4) NOT NULL, 
  poststed VARCHAR(30) NOT NULL, 
  PRIMARY KEY (postnr));


CREATE TABLE ansatt ( 
  ansattnr CHAR(4) NOT NULL, 
  navn VARCHAR(50) NOT NULL, 
  adresse VARCHAR(50), 
  postnr CHAR(4), 
  mndloenn INT,  
  PRIMARY KEY (ansattnr),
  FOREIGN KEY (postnr) REFERENCES poststed (postnr));