<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    require_once('connect.php');

    // Post list
        if(isset($_POST['sub2'])) {
          $name = $_POST["list"];
          // $text = $_POST["test"];
          echo "$name";

          $query = "INSERT INTO lists (id, title) VALUES (NULL, ?);";

          $stmt = mysqli_prepare($connection, $query);

          mysqli_stmt_bind_param($stmt, "s", $name);

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
