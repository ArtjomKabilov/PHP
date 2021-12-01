<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Kabilov PHP leht</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/lego.css">
    <link rel="stylesheet" type="text/css" href="css/puzzle.css">
    <link rel="stylesheet" href="css/calculator.css" type="text/css">
    <script src="JS/lego.js"></script>
    <script src="JS/puzzle.js"></script>
    <script src="JS/cal.js"></script>
</head>
<body>
<?php
    include('header.php');
    include('nav-n.php');

?>
<!--main-->
<main>
    <?php
    if(isset($_GET['leht'])){
        include('content/'.$_GET['leht'].'.php');
    }else{
        include('content/_main.php');
    }
    ?>
</main>
<?php
include('footer.php');
?>
</body>
</html>
