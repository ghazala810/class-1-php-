<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>document</title>
  </head>
  <body>
  <form action="" method="post">
  <div class="form-group">
    <label for="exampleI nputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
  </div>

  <button type="submit" class="btn btn-primary" name="insert">Insert</button>
</form>


        <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ghazala";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection lost ".$conn->connect_error);
}

$email = $_REQUEST['email'];
$password = $_REQUEST['pass'];

$insert = "INSERT INTO test VALUES ('$email', '$password')";

if (mysqli_query($conn, $insert)) {
    echo "data stored successfully";

} else {
    echo "Sorry . ". mysqli_error($conn);
}

mysqli_close($conn);
?>


     
  </body>
</html>