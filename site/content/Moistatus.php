<?php
echo "<h3>Arva ära kaks arvu</h3>";
$arv1=8;
$arv2=4;
//kahe arvude liitmine +
echo "Kui liidame kokku, vaatus on ".($arv1+$arv2);
//jagamine
echo "<br>";
echo "Kui esimene arv jagame teise arvuga, siis vaastus ".($arv1/$arv2);
echo "<br>";
//esimene arv ruudus
echo "Esimene arv ruudus ". pow($arv1, 2);
echo "<br>";
//lahutamine
echo "Kui teisest arvust lahutada esimene, siis vastus on ". ($arv1-$arv2);
echo "<br>";
//korrutis
echo "kahe arvude korrutis = ". ($arv1*$arv2);

echo "<br>";

echo "<a href='content/harjutused/vastus.php'>Õiged vastused</a>";

echo "<br>";
echo "<h2>Arva ära EESTI LINNANIMI</h2>";
$nimi="Loksa";

//teksti pikkus
echo "<br>Linnanimi pikkus -  ".strlen($nimi);
//esimene täht
echo "<br>Linnanimi esimene täht -  ".substr($nimi, 0,1);

echo "<br>Linnanimi kaks tähed -  ".substr($nimi,3,);

echo "<br>Linnanimi random -  ".str_shuffle($nimi);
echo "<br>";
echo "<a href='content/harjutused/vastus2.php'>Õiged vastused</a>";

?>


