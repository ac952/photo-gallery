<?php include('includes/init.php');

$current_page_id = "box";

// $db = open_or_init_sqlite_db('box.sqlite', "init/init.sql");

const MAX_FILE_SIZE = 1000000;
// const BOX_UPLOADS_PATH = "uploads/documents/";
// const BOX_UPLOADS_PATH = "images/";
const BOX_UPLOADS_PATH = "uploads/documents/";
// const BOX_UPLOADS_PATH = "gallery/";

if (isset($_POST["submit_upload"])) {
  $upload_info = $_FILES["box_file"];
  // $upload_desc = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);

  if ($upload_info['error'] == UPLOAD_ERR_OK) {
    $upload_name = basename($upload_info["name"]);
    $upload_ext = strtolower(pathinfo($upload_name, PATHINFO_EXTENSION) );

    // $sql = "INSERT INTO documents (file_name, file_ext, description) VALUES (:filename, :extension, :description)";
    $sql = "INSERT INTO documents (file_name, file_ext) VALUES (:filename, :extension)";
    $params = array(
      ':extension' => $upload_ext,
      ':filename' => $upload_name,
      // ':description' => $upload_desc,
    );
    $result = exec_sql_query($db, $sql, $params);

    if ($result) {
      $file_id = $db->lastInsertId("id");
      if (move_uploaded_file($upload_info["tmp_name"], BOX_UPLOADS_PATH . "$file_id.$upload_ext")){
        array_push($messages, "Your file has been uploaded.");
      }
    } else {
      array_push($messages, "Failed to upload file.");
    }
  } else {
    array_push($messages, "Failed to upload file.");
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <title>Upload Photos</title>
</head>

<body>
<!-- contain upload form -->
<?php include("includes/header.php");?>
<?php include("includes/tags.php");?>
<div id="content-wrap">

    <?php
    print_messages();
    ?>

    <h1>Upload a Photo to Your Gallery</h2>

    <form action="box.php" method="post" enctype="multipart/form-data">
      <ul>

          <label>Photo Name:</label>
          <input type="text" name="text" required><br>
          <label>Upload Photo:</label>
          <!-- MAX_FILE_SIZE must precede the file input field -->
          <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_FILE_SIZE; ?>" />
          <input type="file" name="box_file" required>
          <button name="submit_upload" type="submit">Upload</button>
      </ul>
    </form>

    <h2>Saved Files</h2>
    <ul>
      <?php
    // $records = exec_sql_query($db, "SELECT * FROM documents")->fetchAll(PDO::FETCH_ASSOC);
    $records = exec_sql_query($db, "SELECT * FROM documents")->fetchAll(PDO::FETCH_ASSOC);
    foreach($records as $record){

      // echo "<li><a href=\"" . BOX_UPLOADS_PATH . $record["id"] . "." . $record["file_ext"] . "\">".$record["file_name"]."</a> - " . $record["description"] . "</li>";
      // echo "<li><a href=\"" . BOX_UPLOADS_PATH . $record["id"] . "." . $record["file_ext"] . "\">".$record["file_name"]."</a></li>";
      echo "<li><a href=\"" . BOX_UPLOADS_PATH . $record["id"] . "." . $record["file_ext"] . "\">".$record["file_name"]."</a></li>";
    }
    ?>
    </ul>
  </div>

</body>
</html>
