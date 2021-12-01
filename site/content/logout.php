<?php
session_start();
if(!isset($_SESSION['tuvustamine'])) {
    header('Location:login.php');
    exit();
}
if (isset($_POST['logout'])){
    session_destroy();
    //aadressi reas avatakse login.php fail
    header('Location:loginAndmebaas.php');
    exit();
}
?>
/*CREATE TABLE kasutajad(
id int not null PRIMARY KEY AUTO_INCREMENT,
nimi varchar(15),
parool varchar(200),
onAdmin tinyint,
koduleht varchar(100))
*/
