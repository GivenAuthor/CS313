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
    <form method='post' action='submit()'>
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

function submit() {
    echo("Submit called");
    $date = $_POST[date];
    $rate = $_POST[rating];
    $note = $_POST[note];

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
}

?>