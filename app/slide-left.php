<div class="col-lg-3">
  <h3 class="my-4">
    <a href="index.php"> <img src="../public/uploads/logo.png" style="width:200px";></a>
  </h3>
  <div class="list-group">
    <?php
        $sql = "select * from catalogs ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) { ?>
              <a href="catalogs.php?catalog_id=<?php echo $row["id"]; ?>"
                class="list-group-item"><?php echo $row["name"]; ?></a>
          <?php   }
        }
      ?>
  </div>
</div>

