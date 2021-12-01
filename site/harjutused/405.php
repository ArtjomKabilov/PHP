<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Ülesanne 405</title>
</head>
<style>
    table, td{
        background-color: limegreen;
        padding: 10px;
        border: solid 2px black;
        text-align: center;
    }


</style>
<body>
<h1>Ülesanne 405 - Korrustaabel 2 tsükliga</h1>
<?php
    echo "<table>";
    for ($i=1; $i<=10; $i++){
        echo "<tr>";

        for ($t=1;$t<=10; $t++){
            echo "<td>".$i*$t."</td>";
        }
        echo "</tr>";
}


    echo "</table>";


?>
<a href="../test.php"> Homepage</a>
</body>
</html>