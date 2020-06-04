<?php
echo("
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Home</title>
    <h3>Thank you for submitting</h3>
    <form method='POST' action='home.php'>
    <button type='submit'>To homepage</button>
    </form>
");

    $date = $_POST[date];
    $rate = $_POST[rating];
    $note = $_POST[note];

    $dbHost = $dbOpts["host"];
    $dbPort = $dbOpts["port"];
    $dbUser = $dbOpts["user"];
    $dbPassword = $dbOpts["pass"];
    $dbName = ltrim($dbOpts["path"],'/');

    // connect
    try
    {
        // REPLACE THIS WITH ENTERED INFO
      $user = 'postgres';
      $password = '1Wickles';
      $db = new PDO("pgsql:host=$dbHost;", $user, $password);
    }
    catch (PDOException $ex)
    {
      echo 'Error!: ' . $ex->getMessage();
      die();
    }
    
    // insert the date
    try {
        $sql = "INSERT INTO day (day_date) VALUES ($date)";
        $conn->exec($sql);
        echo "date added";
        }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    
    // insert the rating for the day
    try {
        $sql = "INSERT INTO rating (day_rating) VALUES ($rating)";
        $conn->exec($sql);
        echo "rating aded";
        }
    catch(PDOException $e) {
         echo $sql . "<br>" . $e->getMessage();
    }

    // insert the notes for the day
    try {
        $sql = "INSERT INTO note (note_contents) VALUES ($note)";
        $conn->exec($sql);
        echo "note added";
        }
        catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    echo('<p>Submitted</p>');
?>