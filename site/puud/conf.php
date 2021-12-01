<?php
$serverinimi='localhost';
$kasutajanimi='artjom';
$parool='12332';
$adńdmebaasinimi='artjom';
$yhendus=new mysqli($serverinimi,$kasutajanimi,$parool,$adńdmebaasinimi);
$yhendus->set_charset('UTF8');
/*  CREATE TABLE loomad(
    id int primary key AUTO_INCREMENT,
    nimi varchar(50),
    kirjeldus text
);
Insert into loomad(nimi,kirjeldus)
VALUES ('koer','väga hea sõber');

select * from loomad */



/*CREATE TABLE puud(
  id int PRIMARY KEY AUTO_INCREMENT,
    puunimi varchar(20),
    pilt TEXT);*/
?>