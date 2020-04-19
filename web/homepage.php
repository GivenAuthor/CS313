<?php
    function openGoogle() {
        header("Location: www.google.com")
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="homepage.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jared Green</title>
</head>
<body>
    <h1>Jared Green's Homepage</h1>
    <hr>
    <div class="hasButton">
    <input type="button" value="Assignments" onclick="window.location.href = 'homework.html'">
    </div>
    </form>
    <p>My name is Jared Green, I am a 19 year old student majoring in software engineering. 
        I am from the Detroit are of Michigan.</p>
    <div id="hasButton2">
        <input type="button" value="To Google" onclick=openGoogle()>
    </div>
</body>
</html>