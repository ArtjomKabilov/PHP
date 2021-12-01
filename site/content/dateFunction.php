<h1>Kuupaeva Functionid</h1>
<ol>
    <li>time()</li>
    <li>date)</li>
    <li>tmktime()</li>
    <li>strtotime()</li>
    <li>date_default_timezone_set()</li>
</ol>
<h1>Ulesanded</h1>
<section>
    <h2>Kuuupäev ja aeg formaadis m/d/y h:i</h2>
    <?php
    echo date("d/m/Y g:i");
    ?>
</section>
<section>
    <h2>Kasuta Vanus 16.11.2021</h2>
    <?php
    include("Functioonid.php");

    echo getVanus();
    ?>

</section>
<section>
    <h2>Järgmine kooli vaheaeg</h2>
    <?php
    getHolidays();
    ?>
    <h2>2022 uue aastani on </h2>
    <?php
    //tanane aasta
    $year=date('Y');
    $last_day=strtotime('last day of December');
    $date_today=strtotime("now");
    $diff_today_last_day=$last_day-$date_today;
    echo $year." aasta lopuni ".floor($diff_today_last_day/(60*60*24))." paeva ";
    ?>
</section>
<section>
    <h2>Hooja pilt</h2>
    <img src="content/<?php getHooaeg();?>" alt="pilt">
</section>
