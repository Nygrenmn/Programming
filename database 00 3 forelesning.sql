INSERT INTO poststed VALUES ('3117' , 'Tønsberg'); /*char og varchar, derfor apostrofer*/
INSERT INTO poststed VALUES ('3124' , 'Tønsberg'); 
INSERT INTO poststed VALUES ('3229' , 'Sandefjord'); 

INSERT INTO ansatt VALUES ('1001' , 'Andersen' , 'Storgt. 1' , '3124' , 10000); /*int trenger ikke apostrofer*/
INSERT INTO ansatt VALUES ('1002' , 'Hansen' , 'Storgt. 2' , '3229' , 20000); 
INSERT INTO ansatt VALUES ('1003' , 'Olsen' , NULL, NULL, NULL); 
INSERT INTO ansatt VALUES ('1004' , 'Jensen' , 'Storgt. 4' , '3124' , 40000); 
INSERT INTO ansatt (ansattnr, navn) VALUES ('1005' , 'Carlsen'); /*angi felter som skal fylles*/