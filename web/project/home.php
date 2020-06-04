<?php
echo("
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Home</title>
</head>
<body>
    <h1>Welcome</h1>
    <form action='submit.php'>
    <button>Add data for today</button>
    </form>
    <br>
    <form action='requested.php' method='POST'>
    <button>See previous days</button>
    </form>
</body>
</html>
");
?>