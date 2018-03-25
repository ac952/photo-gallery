<?php include('includes/init.php');

$current_page_id = "gallery";

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <title>Gallery</title>
</head>

<body>
<!-- contain all photos -->
<?php include("includes/header.php");?>
<?php include("includes/tags.php");?>

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
<div id="content-wrap2">
<?php
  $records = exec_sql_query($db, "SELECT * FROM pictures")->fetchAll(PDO::FETCH_ASSOC);
  foreach($records as $record){
  echo "<img class= 'image' src =". $record["image"] . ">";
  }
?>
</div>

</body>
</html>
