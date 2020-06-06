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

  $sql = "SELECT day_date FROM day";
  $result = $db->query($sql);
  echo json_decode($result);

  $stmt = $this->pdo->query('SELECT day_date FROM day');
  $days = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($days);

  $stmt1 = $this->pdo->query('SELECT day_rating FROM rating WHERE rating_id = day_id');
  $rating = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo($rating);

  $stmt1 = $this->pdo->query('SELECT note_contents FROM note WHERE note_id = note_id');
  $note = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo($note);

echo("</body></html>");
?>