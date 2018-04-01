<?php include('includes/init.php');

$current_page_id = "search";


if(isset($_POST["submit_delete"])){
    // $sql = "DELETE FROM pictures WHERE image =" . $record['image']. "";
    $sql = "DELETE FROM pictures , tags FROM picture INNER JOIN tags
     WHERE pictures.id = tags.id and pictures.image =". $record['image']. "";
    $records = exec_sql_query($db, "SELECT * FROM pictures")->fetchAll(PDO::FETCH_ASSOC);
    foreach($records as $record){
      unlink($record['image']);
    // exec_sql_query($db, $sql);
  }
}


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
    <script type="text/javascript" src="script/jquery-3.2.1.min.js"></script>
</head>

<body>
<!-- contain all photos -->
<?php include("includes/header.php");?>
<?php include("includes/tags.php");?>

<?php
  if($do_search) {
    ?>
    <?php
        $sql = "SELECT pictures.image FROM pictures LEFT OUTER JOIN image_tags ON
        pictures.id = image_tags.pictures_id WHERE image_tags.tags_id = :category";
        // var_dump($sql);
        $params = array(':category' => $category);

      } else{

        $sql = "SELECT * FROM pictures";
        $params = array();
        ?>

        <?php
        $sql = "SELECT * FROM pictures";
        $params = array();
      }
      $records = exec_sql_query($db, $sql, $params)->fetchAll(PDO::FETCH_ASSOC);
      if (isset($records) and !empty($records)) {
        ?>

    <div id="content-wrap2">
      <?php
      foreach($records as $record) {
        echo "<img class='myImg' src =". $record["image"] . ">";
        ?>
        <div class="btnbtn">
          <button class='edit' name='submit_edit' type='submit'>Edit</button><br>
          <button class='delete' name='submit_delete' type='submit'>Delete</button>
        </div>
        <?php
      }
      ?>
    </div>


    <!-- make a form for deleting image -->
    <!-- execute using mysql -->


    <!-- image tagging information, edit form -->

  <?php
} else {
  echo "<p>No photos for that tag.</p>";
}
?>

<div id="myModal" class="modal">
  <!-- The Close Button -->
  <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">
  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>

<script type = "text/javascript" src="script/gallery.js"></script>

</body>
</html>
