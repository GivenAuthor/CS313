<?php

$query = $db->prepare('SELECT * FROM day');
    $query->execute();
    $days = $query->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($days);

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
echo("</body></html>")
?>