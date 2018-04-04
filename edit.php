<?php include('includes/init.php');

$current_page_id = "edit";

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

  <title>Edit</title>
</head>

<body>
<!-- contain all photos -->
<?php include("includes/header.php");?>
<?php include("includes/tags.php");?>
<div id="content-wrap">
<h1>Add A Tag to Photo:</h1>
<form  action="edit.php" method="post" enctype="multipart/form-data">
  <!-- search by tag name -->
  <select name="category">
    <option value="" selected disabled>Search By</option>



  <select>
  <input type="text" name ="search"></input>
  <button type="submit" name="submit_add_tag">Add Tag</button>

</form>



<h1>Delete A Tag From Photo:</h1>
<form action="edit.php" method="post" enctype="multipart/form-data">
  <!-- search by tag name -->
  <select name="category">
    <option value="" selected disabled>Search By</option>


  <select>


    <!-- search by image name -->
  <input type="text" name ="search"></input>
  <button type="submit" name="submit_delete_tag">Remove Tag</button>
</form>

</div>
</body>
</html>
