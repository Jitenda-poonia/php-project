<?php 
require_once("config2.php");

require_once("validation.php");
?>
 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dasbord</title>

   <?php require_once("include/header.php");  ?>
</head>
<body>
    <div id="wrapper">
        <?php  include_once("include/navbar-top.php"); ?>
        <!-- /. NAV TOP  -->
        <?php  include_once("include/nav-barSide.php"); ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                        <?php require_once("include/message.php"); ?>
                    </div>
                </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    </div>
    <!-- /. WRAPPER  -->
    <!-- /. FOOTER  -->

  <?php include_once("include/footer.php");  ?>
</body>
</html>
