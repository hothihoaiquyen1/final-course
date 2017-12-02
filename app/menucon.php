<?php
  define("URL_ADMIN", "http://localhost:8080/final-course/app/admin/");
?>   

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand my-logo pr-2" href="../../index.php">SÀI GÒN TRÀ SỮA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="../../index.php" class="nav-link">HOME</a></li>
          
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USERS</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="<?php echo URL_ADMIN; ?>users/index.php">DANH SÁCH USERS</a>
            <a class="dropdown-item" href="<?php echo URL_ADMIN; ?>users/new.php">THÊM MỚI USERS</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PRODUCTS</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="<?php echo URL_ADMIN; ?>products/index.php">DANH SÁCH USERS</a>
            <a class="dropdown-item" href="<?php echo URL_ADMIN; ?>products/new.php">THÊM MỚI USERS</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CATALOGS</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="<?php echo URL_ADMIN; ?>catalogs/index.php">DANH SÁCH CATALOGS</a>
            <a class="dropdown-item" href="<?php echo URL_ADMIN; ?>catalogs/new.php">THÊM MỚI CATALOGS</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</div>
