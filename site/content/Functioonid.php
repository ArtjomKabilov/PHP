<?php
// vanuse leidmine funk.
function getVanus(){
    echo '<form method="post" action="">';
    echo 'Palun sinu sunnipaev';
    echo '<input type="date" name="age">';
    echo '<input type="submit" name="arvuta"value="Arvuta vanus">';
    echo '</form>';
    if(isset($_POST['arvuta'])){
        $synd=$_POST['age'];
        $diff=date_diff(date_create($synd),date_create('16.11.21'));
        echo '<br>';
        echo $diff->format('%y'). 'aastat vana';
    }
}

function getHolidays(){
    $date1=date_create("2021-11-16");
    $date2=date_create("2021-12-20");
    $diff=date_diff($date1,$date2);
    echo 'Talve koolivaheajani on '.$diff->format('%a'). ' paeva';
}

function getHooaeg(){
    // vastavalt tänase kuupäeva naitab hooaja pilti
    //piltide massiv
    $pildid=array(
        "summer"=>"img/summer.jpg",
        "winter"=>"img/winter.jpg",
        "spring"=>"img/spring.jpg",
        "autumn"=>"img/autumn.jpg");
    $paev=date("z");
    $autumn_algus=date("z", strtotime("September 1"));
    $autumn_lopp=date("z", strtotime("November 30"));
    $winter_algus=date("z", strtotime("September 1"));
    $winter_lopp=date("z", strtotime("November 30"));
    $spring_algus=date("z", strtotime("September 1"));
    $spring_lopp=date("z", strtotime("November 30"));
    $summer_algus=date("z", strtotime("September 1"));
    $summer_lopp=date("z", strtotime("November 30"));
    //paev algus ja lopu vahel
    if($paev>$autumn_algus && $paev<=$autumn_lopp){
        $hooaeg="autumn";
    }
    elseif($paev>$winter_algus && $paev<=$winter_lopp){
        $hooaeg="winter";
    }
    elseif($paev>$spring_algus && $paev<=$spring_lopp){
        $hooaeg="spring";
    }
    else{
        $hooaeg="summer";
    }

    $hooaegjepilt=$pildid[$hooaeg];
    echo $hooaegjepilt;
}
?>

