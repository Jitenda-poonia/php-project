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

<style>
    .error{
        color:red;
    }
</style>
<?php require_once("header.php"); ?>
 

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <?php require_once("nav-top.php"); ?>
    <!-- end header section -->
  </div>

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
<?php  require_once("footer.php");?>
  
</body>

</html>