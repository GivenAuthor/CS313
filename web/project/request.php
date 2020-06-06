<?php
echo("
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Info</title>
</head>
<body>
    <h1>Previous day's data</h1>
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
  /*

  $stmt = $this->pdo->query('SELECT * FROM day');
  $days = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo($days);

  $stmt1 = $this->pdo->query('SELECT * FROM rating WHERE rating_id = day_id');
  $rating = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo("<br>");
  echo($rating);

  $stmt1 = $this->pdo->query('SELECT * FROM note WHERE note_id = note_id');
  $note = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo("<br>");
  echo($note);
  */
echo("</body></html>")
?>