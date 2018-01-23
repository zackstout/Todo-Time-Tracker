<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    require_once('connect.php');

// Post task
    if(isset($_POST['sub'])) {
      //The string in quotes has to match what its named on the index:
      $title = $_POST["title"];
      $description = $_POST["description"];

      // echo "$title: $description";

      $query = "INSERT INTO todos (id, title, description) VALUES (NULL, ?, ?);";

      $stmt = mysqli_prepare($connection, $query);

      mysqli_stmt_bind_param($stmt, "ss", $title, $description);

      mysqli_stmt_execute($stmt);

      $affected_rows = mysqli_stmt_affected_rows($stmt);

      if ($affected_rows == 1) {
        echo 'entered';

        mysqli_stmt_close($stmt);
        mysqli_close($connection);
      } else {

        // echo mysqli_error();

        mysqli_stmt_close($stmt);
        mysqli_close($connection);
      }
    } else {
      echo 'error';
    }



     ?>

     <a href="/">Go back</a>
  </body>
</html>
