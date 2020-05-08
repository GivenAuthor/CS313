<?php
session_start();
echo("
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Checkout</title>
</head>
<body>
    <h1>Checkout</h1>
    <form action='confirmation.php'>
        <input type='text' name='street' value='street' required><br>
        <input type='text' name='city' value='city' required><br>
        <input type='text' name='zip' value='zip' required><br>
        <input type='text' name='state' value='state' required><br>
        <input type='submit' name='submit' value='confirm'><br>
    </form>
    
</body>
</html>");
?>