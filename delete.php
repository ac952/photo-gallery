<?php include('includes/init.php');

$current_page_id = "delete";

const SEARCH = [
  // image_name is the name of the image
  "image_name" => "Image Name",
];


if (isset($_GET['search']) and isset($_GET['category'])) {
  $do_search = TRUE;
  // $search = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_STRING);
  $category = filter_input(INPUT_GET, 'category', FILTER_SANITIZE_STRING);
  $search = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_STRING);
  $search = trim($search);
  if (in_array($category, array_keys(SEARCH))) {
    $search_field = $category;
  } else {
    $search_field = NULL;
    array_push($messages, "Invalid category for search.");
    $do_search = FALSE;
  }
} else {
  // No search provided, so set the product to query to NULL
  $do_search = FALSE;
  $category = NULL;
  $search = NULL;
}

// $messages = array();

// var_dump("no");
if (isset($_GET["submit_delete"])) {

  }

  //
  // $sql = "DELETE FROM ";
  // unlink($record["image"]);
  // var_dump("delete");


?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <!-- <script type="text/javascript" src="script/jquery-3.2.1.min.js"></script> -->

  <title>Delete Photo</title>
</head>

<body>
<!-- contain all photos -->
<?php include("includes/header.php");?>
<?php include("includes/tags.php");?>

  <h1>Select Photo to Delete</h1>
  <!-- <form action="box.php" method="post" enctype="multipart/form-data"> -->
  <form action="delete.php" method="get">
    <select name="category">
        <option value="" selected disabled>Search By</option>
        <?php
        foreach(SEARCH as $field_name => $label){
          ?>
          <option value="<?php echo $field_name;?>"><?php echo $label;?></option>
          <?php
        }
        ?>
      </select>
      <input type="text" name="search"/>
      <button name="submit_delete" type="submit">Delete</button>
  </form>


  <?php
  if($do_search) {
    // $sql = "SELECT * FROM pictures WHERE ".$search_field." LIKE '%' || :search || '%'";
    $sql = "SELECT image FROM pictures WHERE image_name =  :search ";
    $params = array(':search' => $search);
    var_dump("print");
  } else{

    $sql = "SELECT image FROM pictures WHERE image_name =  :search ";
    $params = array(':search' => $search);

  }
  $records = exec_sql_query($db, $sql, $params)->fetchAll(PDO::FETCH_ASSOC);
  if (isset($records) and !empty($records)) {
      foreach($records as $record) {
        // $sql = "DELETE FROM pictures WHERE image = " . $record['image']. "";
        // unlink($record["image"]);
        $record["image"];
        var_dump($record["image"]);
        // var_dump($record["image"]);
      }
  }

  ?>

</body>
</html>
