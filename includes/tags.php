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
        echo "<li><a class='btn' ". $id. " href='". $i. ".php'>$value</a></li>";

      }
      ?>
      <!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_portfolio_gallery_filter -->
      <div id="myBtnContainer">
      <li><button class="btn" onclick="filterSelection('landscape')"> Landscape</button></li>
      <li><button class="btn" onclick="filterSelection('cities')">Cities</button></li>
      <li><button class="btn" onclick="filterSelection('food')"> Food</button></li>
      <li><button class="btn" onclick="filterSelection('animals')"> Animals</button></li>
      <li><button class="btn" onclick="filterSelection('personal')"> Personal</button></li>
      </div>
    </ul>
  </nav>
</header>
