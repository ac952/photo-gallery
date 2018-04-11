<?php include('includes/init.php');

$current_page_id = "gallery";

const IMAGE_UPLOADS_PATH = "uploads/pictures/";
const BOX_UPLOADS_PATH = "uploads/documents/";

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <script type="text/javascript" src="script/jquery-3.2.1.min.js"></script>

  <title>Gallery</title>
</head>

<body>
<!-- contain all photos -->
<?php include("includes/header.php");?>
<?php include("includes/tags.php");?>

<?php
  if($do_search) {
    ?>
    <?php
    // if user clicks on a tag checkbox
        $sql = "SELECT pictures.id, pictures.image, pictures.image_name FROM
        pictures LEFT OUTER JOIN image_tags ON pictures.id = image_tags.pictures_id
        WHERE image_tags.tags_id = :category";
        // var_dump($sql);
        $params = array(':category' => $category);
        // var_dump("d");
      } else{
        $sql = "SELECT * FROM pictures";
        $params = array();
        // var_dump($params);
        ?>
        <?php
        $sql = "SELECT * FROM pictures";
        $params = array();
        // var_dump("f");
      }
      $records = exec_sql_query($db, $sql, $params)->fetchAll(PDO::FETCH_ASSOC);
      // var_dump($records);
      if (isset($records) and !empty($records)) {
        ?>
    <div id="content-wrap2">
      <?php
      foreach($records as $record) {
        echo "<div class='img-container'><img class='myImg' src =" .IMAGE_UPLOADS_PATH. $record["image"] . "/>";
        echo "<p class='image_name_text'> Image #: ".$record['id']."</p>";
        echo "<p class='image_name_text'> Image Name: ".$record['image_name']."</p></div>";
      ?>
        <?php
      }
}
?>
<!-- add uploaded images to gallery from the box.php page -->
<?php
$records = exec_sql_query($db, "SELECT * FROM documents")->fetchAll(PDO::FETCH_ASSOC);
// var_dump("doc");
foreach($records as $record){
  echo "<div class='img-container'>
  <img class = 'myImg' src=\"" . BOX_UPLOADS_PATH . $record["id"] . "." . $record["file_ext"] . "\">";
  echo "<p class='image_name_text'> Image #: ".$record['id']."</p>";
  echo "<p class='image_name_text'>Image Name: ".$record['file_name']."</p></div>";
  ?>
  <?php
}
?>
</div>

<!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_modal_img -->
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

<!-- image sources -->
<!-- https://iso.500px.com/10-perfectly-reflected-landscapes-by-jaewoon-u/
http://blog.topazlabs.com/10-breathtaking-landscapes-in-iceland/
https://www.fodors.com/news/photos/out-of-this-world-the-25-most-surreal-landscapes-on-the-planet
http://www.ejphoto.com/Landscpes.htm
http://allthatsinteresting.com/surreal-landscapes-photos
http://www.miraclefishmovie.com/what-is-landscape-photography-application-for-filming/land
https://www.todojujuy.com/tecnologias-y-tendencias/en-40-anos-desaparecio-la-mitad-la-fauna-salvaje-n26187
http://www.slate.com/blogs/wild_things/2015/09/02/why_are_animals_cute_scientists_on_twitter_compete_in_cuteoff_of_adorable.html
http://listverse.com/2017/06/23/10-amazing-ways-animals-are-superior-to-man/
https://www.zoo.org/animals
https://twitter.com/sandiegozoo/status/914521600401297408
https://www.treehugger.com/animals/what-it-about-horses-13-quotes-explain-allure.html
http://www.bigapplecurry.com/2013/01/14/how-to-order-at-an-indian-restaurant-for-the-first-time/
https://coach.nine.com.au/2017/01/23/11/48/japanese-food
https://pixabay.com/en/japanese-food-japan-food-ramen-2199962/
https://realfood.tesco.com/recipes/florentine-pizza.html
http://tickets.hellojoburg.co.za/event/greek-and-mediterranean-evening/
https://www.tripadvisor.com/Hotel_Review-g60763-d518280-Reviews-Room_Mate_Grace-New_York_City_New_York.html
https://www.homedit.com/20-diy-desks-that-really-work-for-your-home-office/
https://dodington.wordpress.com/tag/jungle-drawing/
-->
