<?php
session_start();
echo ("<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Shopping Cart</title>
</head>
<body>
    <h1>The Kitten Shop</h1><br>
    <h3>Please select which kitten(s) you would like to purchase.</h3>
    <form action='cart.php' method='post'>
        <input type='checkbox' name='kitten1' value='yes'><p>Sam</p><br>
        <input type='checkbox' name='kitten2' value='yes'><p>Theodore</p><br>
        <input type='checkbox' name='kitten3' value='yes'><p>Starscream</p><br>
        <input type='submit' name='submit' value='Add To Cart'>
    </form>
    
</body>
</html>");
?>