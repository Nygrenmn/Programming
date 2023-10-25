CREATE TABLE KLASSE(
    klassekode varchar(3) NOT NULL,
    klassenavn varchar(50) NOT NULL,
    studiumkode char(5) NOT NULL,
    PRIMARY KEY(klassekode));
    
CREATE TABLE STUDENT(
    brukernavn char(5) NOT NULL,
    fornavn char(30) NOT NULL,
    etternavn char(30) NOT NULL,
    klassekode varchar(3) NOT NULL,
    PRIMARY KEY(brukernavn),
    FOREIGN KEY(klassekode) REFERENCES KLASSE(klassekode));