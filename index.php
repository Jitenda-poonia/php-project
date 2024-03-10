<?php
require_once("admin/config2.php");
$selQuery = "SELECT * FROM blocks";
$blog = $con->query($selQuery);
// dd($blog);
$_blog = mysqli_fetch_assoc($blog);
$_title = $_blog["title"];
$img = $_blog["banner_image"];
$heading = $_blog["heading"];
$_description = $_blog["description"];
// die();
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
  
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Edgecut</title>

<?php require_once("header.php"); ?>
  

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <?php require_once("nav-top.php"); ?>
    <!-- end header section -->
    <!-- slider section -->
    <?php require_once("slider-section.php"); ?>
    <!-- end slider section -->
  </div>

  <!-- furniture section -->

  <section class="furniture_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Furniture
        </h2>
        <p>
          which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, 
          you need to be sure there isn't an
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/f1.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                brown Chair Design
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>$</span> 100.00
                </h6>
                <a href="">
                  Buy Now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/f2.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Double Bed Design
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>$</span> 200.00
                </h6>
                <a href="">
                  Buy Now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/f3.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                House Chair Design
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>$</span> 200.00
                </h6>
                <a href="">
                  Buy Now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/f4.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                brown Table Design
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>$</span> 100.00
                </h6>
                <a href="">
                  Buy Now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/f5.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Blue Chair Design
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>$</span> 200.00
                </h6>
                <a href="">
                  Buy Now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/f6.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Brown Table Design
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>$</span> 200.00
                </h6>
                <a href="">
                  Buy Now
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end furniture section -->


  <!-- about section -->

  <section class="about_section layout_padding long_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolorem eum consequuntur ipsam repellat dolor soluta aliquid laborum, eius odit consectetur vel quasi in quidem, eveniet ab est corporis tempore.
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

  <!-- blog section -->

  <section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
        <?= $_title ?>
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="admin/<?= $img ?>" alt="" style="width:300px;height:250px;">
            </div>
            <div class="detail-box">
              <h5>
              <?= $heading ?>
              </h5>
              <p>
              <?= $_description ?>
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/b2.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Anything embarrassing hidden in the middle
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/b3.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Molestias magni natus dolores odio commodi. Quaerat!
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Testimonial
        </h2>
      </div>
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                      <h6>
                        Siaalya
                      </h6>
                    </div>
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable cIt is a long established fact
                      that a reader will be distracted by the readable c
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                      <h6>
                        Siaalya
                      </h6>
                    </div>
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable cIt is a long established fact
                      that a reader will be distracted by the readable c
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                      <h6>
                        Siaalya
                      </h6>
                    </div>
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable cIt is a long established fact
                      that a reader will be distracted by the readable c
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- contact section -->
  <section class="contact_section  long_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Contact Us
              </h2>
            </div>
            <form action="contact-save.php" method="post" id="form">
              <div>
              <?php
                    if(isset($_SESSION["name_error"])){ ?>
                    <span class="error">
                      <?php

                      echo $_SESSION["name_error"];
                      unset($_SESSION["name_error"]);
                      ?>
                    </span>
                   <?php }

                    ?>
                <input type="text" placeholder="Your Name" name="name"/>
               
              </div>
              <div>
                    <?php
                    if(isset($_SESSION["phone_error"])){ ?>
                    <span class="error">
                      <?php

                      echo $_SESSION["phone_error"];
                      unset($_SESSION["phone_error"]);
                      ?>
                    </span>
                   <?php }

                    ?>
                <input type="text" placeholder="Phone Number" name="phone" />
              </div>
              <div>
                <?php
                    if(isset($_SESSION["email_error"])){ ?>
                    <span class="error">
                      <?php

                      echo $_SESSION["email_error"];
                      unset($_SESSION["email_error"]);
                      ?>
                    </span>
                   <?php }

                    ?>
                <input type="email" placeholder="Email" name="email"/>
              </div>
              <div>
                <?php
                    if(isset($_SESSION["message_error"])){ ?>
                    <span class="error">
                      <?php

                      echo $_SESSION["message_error"];
                      unset($_SESSION["message_error"]);
                      ?>
                    </span>
                   <?php }

                    ?>
                <input type="text" class="message-box" placeholder="Message" name="message" />
              </div>
             
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
           
      
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->
  
  <!-- end info_section -->


  <!-- footer section -->
<?php require_once("footer.php"); ?>
</body>

</html>