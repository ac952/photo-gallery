<header>
  <h1 id="title"></h1>
  <nav role="sub">
    <ul>
      <?php
      foreach($pages as $i => $value) {
        if ($current_page_id == $i) {
          $id =  "id='current_page'";
        } else {
          $id = "";
        }
        echo "<li><a ". $id. " href='". $i. ".php'>$value</a></li>";

      }
      ?>
      <!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_portfolio_gallery_filter -->
      <div id="myBtnContainer">
      <li><button class="btn active" onclick="filterSelection('all')"> Show all</button></li>
      <li><button class="btn" onclick="filterSelection('nature')"> Nature</button></li>
      <li><button class="btn" onclick="filterSelection('cars')"> Cars</button></li>
      <li><button class="btn" onclick="filterSelection('people')"> People</button></li>
      </div>
    </ul>
  </nav>
</header>
