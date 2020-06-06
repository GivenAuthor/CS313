<?php
 
 $date = $_GET['date'];
 $rate = $_GET['rating'];
 $note = $_GET['note'];
 echo($date);
 echo($_GET['date']);

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
    $date = $_GET['date'];
    $rate = $_GET['rating'];
    $note = $_GET['note'];
    echo($date);
    echo($_GET['date']);

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
        echo "<p>note added</p>";
        }
        catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    echo('<p>Submitted</p></body></html>');
?>