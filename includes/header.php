<header>
  <nav>
    <ul>
      <!-- show entire top (horizontal navigation - logout and add photo) if user is logged in -->
      <?php
      if ($current_user){
        echo "<li id='login'> Logged in as ". $current_user."</li>";
        foreach($everything as $i => $value) {
          if ($current_page_id == $i) {
            $id =  "id='current_page'";
          } else {
            $id = "";
          }
          echo "<li><a ". $id. " href='". $i. ".php'>$value</a></li>";
        }
// otherwise only show home and login
      } else if (!$current_user) {
        foreach($homepages as $i => $value) {
          if ($current_page_id == $i) {
            $id =  "id='current_page'";
          } else {
            $id = "";
          }
          echo "<li><a ". $id. " href='". $i. ".php'>$value</a></li>";
        }
      }

      ?>
    </ul>
  </nav>
</header>
