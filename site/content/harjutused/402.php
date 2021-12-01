<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Ülesanne 402</title>
</head>
<body>
<h1>Ülesanne 402</h1>
<h2>1. 20 Checkbox tsükliga</h2>
<?php
    $i=1;
    while ($i<=20){
        echo "<input type='checkbox' id='$i' name='box[]' value='$i'>";
        echo "<label for='$i'>box".$i."</label><br>";
    $i++;
}
echo '<h2>2. 20 radio tsükliga</h2>';
$l=1;
while ($l<=20){
    echo "<input type='radio' id='l.$l' name='value[]' value='$l'>";
    echo "<label for='l.$l'>cell".$l."</label><br>";
    $l++;
}
echo '<h2>3. 20 text tsükliga</h2>';
$e=1;
while ($e<=20){
    echo "<input type='text' id='t.$e' name='cell[]' value='$l'>";
    echo "<label for='t.$e'>cell".$e."</label><br>";
    $e++;
}



?>
<a href="../test.php"> Homepage</a>

</body>
</html>


