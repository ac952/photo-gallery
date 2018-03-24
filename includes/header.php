<header>
  <h1 id="title"></h1>
  <nav role="main">
    <ul>
      <?php
      foreach($homepages as $i => $value) {
        if ($current_page_id == $i) {
          $id =  "id='current_page'";
        } else {
          $id = "";
        }
        echo "<li><a ". $id. " href='". $i. ".php'>$value</a></li>";
      }
      ?>
    </ul>
    <p>
    <?php
    if ($current_user) {
      echo "Logged in as $current_user";
    }
    ?>
  </p>
  </nav>
</header>
