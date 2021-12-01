<?php
require('conf.php');

session_start();
if(!isset($_SESSION['tuvustamine'])){
    header('Location: loginLaps.php');
    exit();
}


//функция, которая удаляет из адресной строки переменные
function clearVarsExcept($url, $varname){
    return strtok(basename($_SERVER['REQUEST_URI']), "?")."?$varname=".$_REQUEST[$varname];
}
global $yhendus;
//lisamine ISERT INTO
if(!empty($_REQUEST['lapsnimi'])){
    $kask=$yhendus->prepare('INSERT INTO laps(nimi,perenimi,synniaasta) VALUES(?, ?, ?)');
    $kask->bind_param('ssi', $_REQUEST['lapsnimi'],$_REQUEST['perenimi'], $_REQUEST['synniaasta']);
    $kask->execute();
    //изменяет адресную строку
    //$_SERVER[PHP_SELF] - до имени файла
    header("Location:" .basename($_SERVER['REQUEST_URI']));

}
//kustuta
if(isset($_REQUEST['kustuta'])){
    $kask=$yhendus->prepare('DELETE FROM laps WHERE id=?');
    $kask->bind_param("i",$_REQUEST['kustuta']);
    $kask->execute();
}
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Andmetabeli sisu lisamine naitamine</title>
</head>
<body>
<div class="knopka">
    <p><?= $_SESSION["kasutaja" ]?> on sisse loogitud</p>
    <form action="logoutLaps.php" method="post">
        <input type="submit" value="Logi välja" name="logout">
    </form>
</div>
<h1>
    Andmetabeli "laps" sisu naitamine
</h1>
<?php
global $yhendus;
//tabeli sisu näitamine
$kask=$yhendus->prepare("SELECT id, nimi, perenimi, synniaasta FROM laps");
$kask->bind_result($id,$nimi,$perenimi,$synniaasta);
$kask->execute();
echo "<table>";
echo "<tr>
<th>id</th>
<th>Nimi</th>
<th>Perenimi</th>
<th>Synniaasta</th>
</tr>";
//fetch() - извлечение данных из набора данных
while ($kask->fetch()) {
    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$nimi</td>";
    echo "<td>$perenimi</td>";
    echo "<td>$synniaasta</td>";

if ($_SESSION['onAdmin']==1){  echo "<td><a href='".clearVarsExcept(basename($_SERVER['REQUEST_URI']), "leht")."&kustuta=$id'>Kustuta</a></td>";}
    echo "</tr>";
}
echo "</table>";
?>
<?php
if ($_SESSION['onAdmin']==1){
    echo "
    <form class='foorm' action='' method='post'>
        <input type='hidden' name='muuda' value='jah'>
        <label for='lapsnimi'>lapsnimi</label>
        <input type='text' name='lapsnimi' id='lapsnimi'>
        <br>
        <label for='perenimi''>perenimi</label>
        <input type='text' name='perenimi' id='perenimi''>
        <br>
        <label for='synniaasta'>synniaasta</label>
        <input type='number' name='synniaasta' id='synniaasta'>
        <input class='but' type='submit' value='Lisa'>
    </form>
";
}
?>
<?php
$yhendus->close();
?>
</body>
</html>


</body>
</html>


