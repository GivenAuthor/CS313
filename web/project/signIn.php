<?php
echo("
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Sign in</title>
</head>
<body>

    <h1>Welcome! Please Sign in</h1>
    <form action='dBConnect()' method='POST'>
    <label for='name'>Username:</label>
    <input type='text' id='name'>
    <br>
    <label for='passwd'>Password:</label>
    <input type='password' id='passwd'>
    <br>
    <button type='submit' value='sign in'>Sign in</button>
    </form>

    <br>
    <h3>No account?</h3>
    <br>
    <form action='signup.php' method='POST'>
    <input type='submit' value='sign up'> 
    </form>

</body>
</html>
");

function dBConnect() {
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

// with given info from user
    $username = $_POST["name"];
    $password = $_POST["passwd"];
    $stmt = $this->pdo->query('SELECT username FROM user_name WHERE user_name = $username');
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
}
?>