<?php
echo("
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Signup</title>
</head>
<body>
    <h3>Please enter a username and passsword</h3>
    <br>
    <label for='username'>Username:</label>
    <input type='text' id='username'>
    <br>
    <label for='passwd'>Password:</label>
    <input type='password' id='passwd'>
    <br>
    <form action='signIn.html' method='POST'>
        <button>Return to sign in</button>
    </form>
</body>
</html>
");
?>