<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>php timetracker</title>
  <script src="vendors/jquery.min.js" charset="utf-8"></script>
  <script src="vendors/jquery-ui/jquery-ui.min.js" charset="utf-8"></script>
  <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.structure.min.css">
  <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.theme.min.css">

  <link rel="stylesheet" href="styles/style.css">
  <script src="scripts/client.js" charset="utf-8"></script>

</head>
<body>
  <h1>Zack's Task Time Tracker!</h1>


<p>Add a list:</p>
<form action="process_lists.php" method="post">
  Title: <input type="text" name="list" value="">
  <input type="submit" name="sub2" value="Submit">
</form>

<br><br>
<p>Add a task:</p>
<form action="process_tasks.php" method="post">
  Title: <input type="text" name="title" value="">
  Description: <input type="textarea" name="description" value="">
  <!-- Due: <input type="datetime-local" name="due"> -->
  <input type="submit" name="sub" value="Submit">
</form>

<br><br>


<?php
require_once('connect.php');

if(mysqli_connect_errno()) {
  echo "error" . mysqli_connect_error();
} else {
  $query = 'SELECT * FROM todos;';
  $result = mysqli_query($connection, $query);
}

while($row = mysqli_fetch_array($result)) {
  $title = $row["title"];
  $description = $row["description"];

  echo "<div class='box'>$title: $description</div><br>";

}

?>

</body>
</html>
