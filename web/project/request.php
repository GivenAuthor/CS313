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

  try
  {
    $queryDay = $db->prepare('SELECT * FROM day');
    $queryDay->execute();
    $responseDay = $queryDay->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($responseDay);

    $queryRating = $db->prepare("SELECT * FROM rating");
    $queryRating->execute();
    $responseRating = $queryRating->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($responseRating);

    $queryNote = $db->prepare("SELECT * FROM note");
    $queryNote->execute();
    $resonseNote = $queryNote->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($responseNote);

  }
  catch (PDOException $ex) {

  }

  /*
  $sql = "SELECT day_date FROM day";
  $result = $db->query($sql);
  echo json_encode($result);

  $sql = "SELECT day_rating FROM rating WHERE rating_id = day_id";
  $result = $db->query($sql);
  echo json_encode($result);

  $sql = "SELECT note_contents FROM note WHERE note_id = note_id";
  $result = $db->query($sql);
  echo json_encode($result);
  */

echo("</body></html>");
?>