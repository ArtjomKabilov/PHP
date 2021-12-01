<?php
$data=[
    "nimi"=>"Artjom Kabilov",
    "aadres"=>"Nooruse 8, Loksa",
    "pilt"=>"index.jpg",
    "koduleht"=>"https://kabilov20.thkit.ee"
];
?>
<h1>Ülesanne 401</h1>
<p> <b>
        <?=$data["nimi"]?>
    </b></p>
<p> <i>
        <?=$data["aadres"]?>
    </i></p>
<img src="<?=$data["pilt"]?>" alt="pildike">
<br>
<a href="<?=$data["koduleht"]?>" target="_blank">kabilov20.thkit.ee</a>

<h1>Ülesanne401/var 2 - array()</h1>
<?php
$array=array("Artjom Kabilov","Loksa","index.jpg","https://kabilov20.thkit.ee");
echo "<b>Nimi".$array[0]."</b><br>";
echo "<i>aadres".$array[1]."</i><br>";
echo "<img src='$array[2]'alt='pildike''>";
echo "<br><a href='htpps://$array[3]'>koduleht</a>";


?>
<br>
<a href="../test.php"> Homepage</a>
