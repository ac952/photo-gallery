<?php include('includes/init.php');

$current_page_id = "search";

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

</head>

<body>
<!-- contain all photos -->
<?php include("includes/header.php");?>
<?php include("includes/tags.php");?>

<?php
  if($do_search) {
    ?>
    <?php
        // $sql = "SELECT * FROM pictures WHERE ".$search_field." LIKE '%' || :category || '%'";
        $sql = "SELECT pictures.image FROM pictures LEFT OUTER JOIN image_tags ON pictures.id = image_tags.pictures_id WHERE image_tags.tags_id = :category";
        var_dump($sql);
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
        echo "<img class= 'myImg' src =". $record["image"] . ">";
      }
      ?>
      </div>
  <?php
} else {
  echo "<p>No photos for that tag.</p>";
}
?>



</body>
</html>
