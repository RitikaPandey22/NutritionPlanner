<header class="header">

   <div class="flex">

      <a href="#" class="logo">Nutritions planner</a>

      <nav class="navbar">
         <a href="admin.php">Add food items</a>
         <a href="products.php">View food items</a>
         <a href="log.php">User log</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `planner`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">Diet Chart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>