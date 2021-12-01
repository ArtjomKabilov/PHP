<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Ülesanne 403</title>
</head>
<body>
<h1>Ülesanne 403</h1>
<?php
$array=array('Gold','AliceBlue','Aquamarine',
    'Beige','Black','Blue','BlueViolet',
    'CadetBlue','DarkGoldenRod','Cyan','DarkOrange','DarkMagenta',
    'DeepPink','Gray','LightCoral');
//tsükliga kuvame värvid massiivist
for($i=0; $i <15; $i++){
    echo "<span style='color: $array[$i]' >$array[$i]</span><br>";

}
?>
<a href="../test.php"> Homepage</a>

</body>
</html>

