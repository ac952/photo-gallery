<?php include('includes/init.php');

$current_page_id = "edit";

?>
<!DOCTYPE html>
<html lang ="en">

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
if (isset($_GET['category']) or isset($_GET['search'])){
  $do_search = TRUE;
  $search = filter_input(INPUT_GET,'search', FILTER_SANITIZE_STRING);
  $category = filter_input(INPUT_GET,'category', FILTER_SANITIZE_STRING);
  $search = trim($search);
  if(in_array($category, array_keys(SEARCH_FIELDS))){
    $search_field = $category;
  } else{
    $search_field = NULL;
    array_push($messages, "Invalid tag for search");
    $do_search = FALSE;
    }
  } else{
    $do_search = FALSE;
    $category = NULL;
    $search = NULL;
  }
?>

<div id="content-wrap">
  <h1>View Tag(s):</h1>
  <p>**Image name is case sensitive.</p>
  <form  action="edit.php" method="get" enctype="multipart/form-data">
    <!-- search by tag name -->
    <label>Image Name:</label>
    <input type="text" name ="search"><br>

    <button class="uploadbtn" type="submit" name="view_tag">View Tag</button>
  </form>

  <?php
    $sql = "SELECT tags.tag_name FROM tags LEFT OUTER JOIN image_tags ON
              tags.id = image_tags.tags_id LEFT OUTER JOIN pictures ON
              pictures.id = image_tags.pictures_id WHERE pictures.image_name = :search";
    $params = array(':search' => $search);
    $records = exec_sql_query($db, $sql, $params)->fetchAll(PDO::FETCH_ASSOC);
    if(isset($records) and !empty($records)){
      foreach ($records as $record){
        echo "<p id='viewTag'>".$record['tag_name']."</p>";
      }
  }
  ?>

<h1>Add A Tag to Photo:</h1>
<p>**Must submit image number.</p>
<form action="edit.php" method="post" enctype="multipart/form-data">
  <!-- search by tag name -->
  <label>Image #:</label>
  <input type="number" name ="search">
  <select name="category">
    <option value="" selected disabled>Tag Name:</option>
    <?php
    foreach(SEARCH_FIELDS as $field_name => $label){
      ?>
      <option value="<?php echo $field_name;?>"><?php echo $label;?></option>
      <?php
    }
    ?>
  </select>
  <button class="uploadbtn" type="submit" name="submit_add_tag">Add Tag</button>
</form>

<?php
if(isset($_POST["submit_add_tag"])){
    $category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
    $search = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_NUMBER_INT);

    $sql = "INSERT INTO image_tags (pictures_id, tags_id) VALUES (:search, :category)";
    $params = array(
          ':search' => $search,
          ':category' => $category
      );
var_dump($params);
    $result = exec_sql_query($db, $sql, $params);
      if ($result){
        echo "<p class='tagsuccess'>Tag is added to the photo</p>";
      }else{
        echo"<p class='tagfail'>Tag is not added to the photo</p>";
      }
    }

?>

<div id="deleteformat">
<h1>Delete A Tag From Photo:</h1>
<p>**Must submit image number.</p>
<form action="edit.php" method="post" enctype="multipart/form-data">
    <label>Image #:</label>
    <input type="number" name ="search">
  <select name="category">
    <option value="" selected disabled>Tag Name:</option>
    <?php
    foreach(SEARCH_FIELDS as $field_name => $label){
      ?>
      <option value="<?php echo $field_name;?>"><?php echo $label;?></option>
      <?php
    }
    ?>
  </select>
  <button class="dltbtn" type="submit" name="submit_delete_tag">Remove Tag</button>
</form>


  <?php

  if(isset($_POST["submit_delete_tag"])){
      $category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
      $search = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_NUMBER_INT);

      $sql = "DELETE FROM image_tags WHERE pictures_id = (:search) AND tags_id = (:category)";
      $params = array(
            ':search' => $search,
            ':category' => $category
        );

  var_dump($params);
      $result = exec_sql_query($db, $sql, $params);
        if ($result){
          echo "<p class='tagsuccess'>Tag is deleted from the photo</p>";
        }else{
          echo"<p class='tagfail'>Tag is not deleted from the photo</p>";
        }
      }

  ?>
</div>


</div>


</body>
</html>
