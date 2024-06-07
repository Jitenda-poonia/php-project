<?php
// require_once("admin/config2.php"); 

$selQuery = "SELECT * FROM `sliders`";
$result = $con->query($selQuery);
$result1 = $con->query($selQuery);

?>
<section class="slider_section long_section">
  <div id="customCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">

      <?php
      $i = 1;
      while ($_image = mysqli_fetch_assoc($result)) { ?>
        <div class="carousel-item <?php echo ($i) ? 'active' : '';
        $i = 0; ?>">
          <div class="container ">
            <div class="row">
              <div class="col-md-5">
                <div class="detail-box">
                  <h1>
                    For All Your <br>
                    Furniture Needs
                  </h1>
                  <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus quidem maiores perspiciatis,
                    illo maxime voluptatem a itaque suscipit.
                  </p>
                  <div class="btn-box">
                    <a href="" class="btn1">
                      Contact Us
                    </a>
                    <a href="" class="btn2">
                      About Us
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="img-box">
                  <img src="admin/<?= $_image["image"] ?>" alt="" width="200px" height="250px">
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>

    </div>
    <ol class="carousel-indicators">
      <?php while ($_image = mysqli_fetch_assoc($result1)) { ?>
        <li data-target="#customCarousel" data-slide-to="0" <?= ($i) ? 'active' : '' ?>></li>
      <?php } ?>

    </ol>
  </div>
</section>