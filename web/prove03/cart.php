<?php
echo("
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>View Cart</title>
</head>
<body>
    <h2>Your shopping cart contains the following:</h2>");
    
    session_start();
    $cat1 = $_SESSION['kitten1'];
    $cat2 = $_SESSION['kitten2'];
    $cat3 = $_SESSION['kitten3'];
    if ($_POST["kitten1"] == 'yes') {
        echo ("Sam");
    }
    if ($_POST["kitten2"] == 'yes') {
        echo ("Theodore");
    }
    if ($_POST["kitten3"] == 'yes') {
        echo ("Starscream");
    }
    echo("
    <br>
    <form action='Checkout.php'>
        <input type='submit' name='submit' value='Add To Cart'>
    </form>
    <a href='prove-03.html'>Browse More</a>
</body>
</html>");
?>