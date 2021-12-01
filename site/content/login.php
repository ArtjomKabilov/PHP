<?php
//Logi vorm doodis kirjutatud kasutajanimega ja prooliga
session_start();
if(isset($_SESSION['tuvustamine'])){
    header('Location: puuLeht.php');
    exit();
}
//login ja pass kontorll
if (!empty($_POST['login']) && !empty($_POST['pass'])){
    $login=$_POST['login'];
    $pass=$_POST['pass'];
    if ($login=='admin' && $pass='artem') {
        $_SESSION['tuvustamine'] = 'niilihtne';
        header('Location: puuLeht.php');
    }
}


?>
<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Login</title>
</head>
<body>
<h1>Login vorm</h1>

<form action="" method="post">
    Login:
    <input type="text" name="login" placeholder="kasutaja nimi">
    <br>
    Parool:
    <input type="password" name="pass">
    <br>
    <input type="submit" value="Logi sisse">


</form>



</body>
</html>

