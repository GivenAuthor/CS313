<?php
echo("
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Confirmation</title>
</head>
<body>
    <h1>Confirm Order</h1>");
    echo("Your items will be delivered to:");
    echo $_POST["street"]; echo("<br>"); echo $_POST["city"]; ("<br>"); echo $_POST["state"]; ("<br>"); echo $_POST["zip"];
    echo("<br>
    <p>Your order includes:</p>");
    if ($_SESSION["cat1"] == 'yes') {
        echo("Sam");
    }
    if ($_SESSION[cat2] == 'yes') {
        echo("Theodore");
    }
    if ($_SESSION[cat3] == 'yes') {
        echo("Starscream");
    }
    echo("
</body>
</html>");
?>