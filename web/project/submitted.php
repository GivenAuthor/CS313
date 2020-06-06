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
    <h3>Thank you for submitting</h3>
    <form method='POST' action='home.php'>
    <button type='submit'>To homepage</button>
    </form>
");

try
{
  session_name('daytracking');
  session_start();
  $dbUrl = getenv('DATABASE_URL');
  $dbOpts = parse_url($dbUrl);
  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');
    
  $user = 'postgres';
  $password = '1Wickles';
  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch (PDOException $ex)
  {
    echo 'Error!: ' . $ex->getMessage();
    die();
  }
    $date = date('Y-m-d', strtotime($_GET['date']));
    $rate = $_GET['rating'];
    $note = $_GET['note'];
/*
    // insert the rating for the day
    try {
        $sql = "INSERT INTO rating (day_rating) VALUES ($rating)";
        $conn->exec($sql);
        echo "<p>rating aded</p>";
        }
    catch(PDOException $e) {
         echo $sql . "<br>" . $e->getMessage();
    }

    // insert the notes for the day
    try {
        $sql = "INSERT INTO note (note_contents) VALUES ($note);";
        $conn->exec($sql);
        echo "<p>note added</p>";
    }
    catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
    }

    try {
        $sql = "INSERT INTO day (day_date) VALUES (TO_DATE($date, 'DD/MM/YYYY'))";
        $conn->exec($sql);
        echo "<p>date added</p>";
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    echo('<p>Submitted</p></body></html>');*/

    // insert the date

    // insert the rating for the day
    try {
        $sql = $db->prepare('INSERT INTO rating (day_rating) VALUES (?)');
        $sql->execute([$rating]);
        // redirect here

        // $sql = "INSERT INTO rating (day_rating) VALUES ($rating)";
        // $conn->exec($sql);
        echo "<p>rating aded</p>";
        }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    // insert the notes for the day
    try {
        $sql = $db->prepare('INSERT INTO note (note_contents) VALUES (?)');
        $sql->execute([$note]);
        // redirect here

        // $sql = "INSERT INTO note (note_contents) VALUES ($note)";
        // $conn->exec($sql);
        echo "<p>note added</p>";
        }
        catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

        try {
            $sql = $db->prepare('INSERT INTO day (day_date) VALUES (?)');
            $sql->execute([$date]);
            // redirect here.
    
            // $sql = "INSERT INTO day (day_date) VALUES ($date)";
            // $conn->exec($sql);
            echo "<p>date added</p>";
            }
        catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    echo('<p>Submitted</p></body></html>');
?>