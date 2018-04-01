<header>
  <h1 id="title"></h1>
  <nav role="sub">
    <ul>
      <?php
      const PICTURES_PATH = "uploads/";

      const SEARCH_FIELDS = [
        "1" => "Landscape",
        "2" => "Cities",
        "3" => "Animals",
        "4" => "Food",
        "5" => "Personal"
      ];

      // make tag fields
      // if 1 (landscape is selected, then do SELECT... id = 1)
      // check if search and category are empty or not
      if (isset($_GET['category'])) {
        $do_search = TRUE;
        $category = filter_input(INPUT_GET,'category', FILTER_SANITIZE_STRING);
        if (in_array($category, array_keys(SEARCH_FIELDS))){
          $search_field = $category;
        } else {
          $search_field = NULL;
          array_push($messages, "Invalid category for search");
          $do_search = FALSE;
        }
      } else {
        $do_search = FALSE;
        $category = NULL;
      }

      // if current user logged in, they will have access to the gallery
      if ($current_user){
        foreach($pages as $i => $value) {
          if ($current_page_id == $i) {
            $id =  "id='current_page'";
          } else {
            $id = "";
          }
          echo "<li><a class='btn' ". $id. " href='". $i. ".php'>$value</a></li>";
        }
      }else {
        echo "<li><a class='btn' href=''>Gallery</a></li>";
      }
      ?>


<!-- checkboxes for each tag, form action or results occur on search.php-->
      <form action="search.php" method="get">
        <?php
        foreach(SEARCH_FIELDS as $field_name => $label){
          ?>
          <label class="container">
            <input name="category" type="checkbox" value="<?php echo $field_name;?>"><?php echo $label;?><br>
            <span class="checkmark"></span>
          </label>
          <?php
        }
        ?>
      <button type="submit">Search Tags</button>
      </form>
      <!-- if the tag field is not empty, do search -->
    </ul>
  </nav>
</header>
