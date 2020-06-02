<?php
echo("
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Signup</title>
</head>
<body>
    <h3>Please enter a username and passsword</h3>
    <br>
    <label for='username'>Username:</label>
    <input type='text' id='username'>
    <br>
    <label for='passwd'>Password:</label>
    <input type='password' id='passwd'>
    <br>
    <form action='signIn.php' method='POST'>
        <button>Return to sign in</button>
    </form>
</body>
</html>
");

function signUp() {
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
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    try {
    $sql = "INSERT INTO user_name (username) VALUES ($username)";
    $conn->exec($sql);
    echo "Username created";
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    try {
        $sql = "INSERT INTO account_password (password_contents) VALUES ($password)";
        $conn->exec($sql);
        echo "Password created";
        }
        catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
}

?>