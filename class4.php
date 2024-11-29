
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>document</title>
  </head>
  <body>
  <form action="">
    <input type="email" class="email" placeholder="Enter email">
    <input type="password" class="password"  placeholder="Password">
  <button type="submit" class="btn btn-primary" name="insert">Insert</button>
</form>

  <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ghazala";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Could not connect. ".$conn->connect_error);
}
else {
    echo "database connected ";
}

?>


  </body>
</html>
