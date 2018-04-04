<?php include('includes/init.php');
$current_page_id = "login";

// $db = open_or_init_sqlite_db("website.sqlite", "init/init.sql");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <title>Log in</title>
</head>

<body>
  <?php include("includes/header.php");?>
  <?php include("includes/tags.php");?>

  <div id="content-wrap">
  <h1>Log in</h1>

  <?php
  print_messages();
  ?>

  <form action="login.php" method="post">

        <label>Username:</label>
        <input type="text" name="username" required/><br>

        <label>Password:</label>
        <input type="password" name="password" required/></br>

        <button name="login" type="submit">Log In</button>
  </form>
</div>

</body>
</html>
