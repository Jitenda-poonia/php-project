<?php 
require_once("admin/config2.php"); 

$selQuery = "SELECT * FROM `pages` WHERE status=1 ORDER BY ordering ASC";
$result = $con->query($selQuery);
// dd($result);

?> 
 
 <!-- info section -->
 <section class="info_section long_section">

<div class="container">
  <div class="contact_nav">
    <a href="">
      <i class="fa fa-phone" aria-hidden="true"></i>
      <span>
        Call : 7232026292
      </span>
    </a>
    <a href="">
      <i class="fa fa-envelope" aria-hidden="true"></i>
      <span>
        Email : jitendrakuamr00632@gmail.com
      </span>
    </a>
    <a href="">
      <i class="fa fa-map-marker" aria-hidden="true"></i>
      <span>
        Location
      </span>
    </a>
  </div>

  <div class="info_top ">
    <div class="row ">
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="info_links">
          <h4>
            QUICK LINKS
          </h4>
          <div class="info_links_menu">
            <a class="" href="index.php">Home <span class="sr-only">(current)</span></a>
            
            
            <?php 
              while($_page_data = mysqli_fetch_assoc($result)) { 
                $title = $_page_data['title']; 
                $title= preg_replace("/[^a-zA-Z]/", "", $title);
                $url_key = strtolower($title); 
                ?>
           
               <a class="" href="page.php?id=<?= $url_key ?>"><?= $_page_data['title'] ?></a>
              
                <?php } ?> 
            <!-- <a class="" href="about.html"> About</a>
            <a class="" href="furniture.html">Furniture</a>
            <a class="" href="blog.html">Blog</a> -->
            <a class="" href="contact.php">Contact Us</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 mx-auto">
        <div class="info_post">
          <h5>
            INSTAGRAM FEEDS
          </h5>
          <div class="post_box">
            <div class="img-box">
              <img src="images/f1.png" alt="">
            </div>
            <div class="img-box">
              <img src="images/f2.png" alt="">
            </div>
            <div class="img-box">
              <img src="images/f3.png" alt="">
            </div>
            <div class="img-box">
              <img src="images/f4.png" alt="">
            </div>
            <div class="img-box">
              <img src="images/f5.png" alt="">
            </div>
            <div class="img-box">
              <img src="images/f6.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="info_form">
          <h4>
            SIGN UP TO OUR NEWSLETTER
          </h4>
          <form action="">
            <input type="text" placeholder="Enter Your Email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
          <div class="social_box">
            <a href="https://www.facebook.com/jitendrapoonia">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="https://www.twitter.com/@5jitendrapoonia">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="https://www.linkedin.com/jitendrapoonia72">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com/jitendrapoonia72">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- end info_section -->

<footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->


  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->
