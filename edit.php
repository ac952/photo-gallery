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

<?php
if (isset($_GET['tagname'])){
  $do_search = TRUE;
  $tagname = filter_input(INPUT_GET,'tagname', FILTER_SANITIZE_STRING);
  if(in_array($tagname, array_keys(SEARCH_FIELDS))){
    $tagsearch = $tagname;
  } else{
    $tagsearch = NULL;
    array_push($messages, "Invalid tag for search");
    $do_search = TRUE;
    }
  } else{
    $do_search = FALSE;
    $tagname = NULL;
  }




?>


<div id="content-wrap">
  <h1>View Tag(s):</h1>
  <p>**Image name is case sensitive.</p>
  <form  action="edit.php" method="post" enctype="multipart/form-data">
    <!-- search by tag name -->
    <label>Image Name:</label>
    <input type="text" name ="imagename"></input><br>

    <button class="uploadbtn" type="submit" name="view_tag">View Tag</button>
  </form>



<h1>Add A Tag to Photo:</h1>
<p>**Image name is case sensitive.</p>
<form  action="edit.php" method="post" enctype="multipart/form-data">
  <!-- search by tag name -->
  <label>Image Name:</label>
  <input type="text" name ="imagename"></input>
  <select name="tag">
    <option value="" selected disabled>Tag Name:</option>
    <?php
    foreach(SEARCH_FIELDS as $field_name => $label){
      ?>
      <option value="<?php echo $field_name;?>"><?php echo $label;?></option>
      <?php
    }
    ?>
  <select>
  <button class="uploadbtn" type="submit" name="submit_add_tag">Add Tag</button>
</form>


<div id="deleteformat">
<h1>Delete A Tag From Photo:</h1>
<p>**Image name is case sensitive.</p>
<form action="edit.php" method="post" enctype="multipart/form-data">
    <!-- search by image name -->
    <label>Image Name:</label>
  <input type="text" name ="imagename"></input>
  <select name="tag">
    <option value="" selected disabled>Tag Name:</option>
    <?php
    foreach(SEARCH_FIELDS as $field_name => $label){
      ?>
      <option value="<?php echo $field_name;?>"><?php echo $label;?></option>
      <?php
    }
    ?>
  <select>
  <button class="dltbtn" type="submit" name="submit_delete_tag">Remove Tag</button>
</form>
</div>

</div>


</body>
</html>
