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
    <h1>Previous data</h1>
    <form method='post' action'getData()'>
    <input type='submit' value='fetch data'> 
    </form>
</body>
</html>
");

function getData() {

// connect
    try
    {
        // REPLACE THIS WITH ENTERED INFO
      $user = 'postgres';
      $password = 'password';
      $db = new PDO('pgsql:host=localhost;dbname=postgresql-fitted-13004', $user, $password);
    }
    catch (PDOException $ex)
    {
      echo 'Error!: ' . $ex->getMessage();
      die();
    }

    // get dates, ratings, and notes
        $stmt = $this->pdo->query('SELECT * FROM day');
        $days = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt1 = $this->pdo->query('SELECT * FROM rating WHERE rating_id = day_id');
        $rating = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt1 = $this->pdo->query('SELECT * FROM note WHERE note_id = note_id');
        $note = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>