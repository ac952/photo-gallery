<?php include('includes/init.php');
$current_page_id = "logout";

log_out();
if (!$current_user) {
  record_message("You've been successfully logged out.");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <title>Log out</title>
</head>

<body>
  <?php include("includes/header.php");?>
  <?php include("includes/tags.php");?>

  <div id="content-wrap">
    <h1>Log Out</h1>

    <?php
    print_messages();
    ?>

  </div>
</body>
</html>
