<?php
$parool='kala';//$_REQUEST['pass'];
$sool='vagavagatekst';
$krypt=crypt($parool, $sool);
echo $krypt;
//CREATE TABLE laps(
//id int not null PRIMARY KEY AUTO_INCREMENT,
//nimi varchar(50),
//perenimi varchar(50),
//synniaasta int)