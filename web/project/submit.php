<?php
echo("
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Submission</title>
</head>
<body>
    <form>
    <label for='date'>Date:</label>
    <input type='date' id='date'>
    <br>
    <label for='rating'>Day rating:</label>
    <input type='number' id='rating'>
    <br>
    <label for='note'>Note info:</label>
    <input type='text' id='note'>
    <br>
    <button type='submit'>Submit</button>
    </form>
</body>
</html>
");
?>