<?php
require_once ("admin/config2.php");
$urlKey = $_GET["url_key"];  //nav-top se url_key
// dd($_id);
$selQuery = "SELECT * FROM `pages`where url_key='$urlKey'";
$page = $con->query($selQuery);
// dd($page);
$_page = mysqli_fetch_assoc($page);

$_title = $_page["title"];
$_img = $_page['banner_image'];
$_heading = $_page['heading'];
$_description = $_page["description"];



?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Edgecut</title>


  <?php require_once ("header.php"); ?>

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <?php require_once ("nav-top.php"); ?>
    <!-- end header section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding long_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="admin/<?= $_img ?>" alt="" style="width:500px;height:300px">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">


            <div class="heading_container">
              <h1>

                <?= $_heading ?>


              </h1>
            </div>
            <p>
              <?= $_description ?>
            </p>

            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->





  <!-- footer section -->
  <?php require_once ("footer.php"); ?>
</body>

</html>