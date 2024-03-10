
<?php require_once("config2.php");
require_once("validation.php");
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add user</title>

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
                        <h1 class="page-head-line">Add Slider</h1>
                        <h1 class="page-subhead-line"> 
                            <a href="dashboard.php">Dashboard</a>>>Add Slider
                        </h1>
                    </div>
                </div>
                <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <?php require_once("include/message.php"); ?>
                        <div class="panel-body">
                            <form role="form" action="slider-save.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <p class="help-block" style="color:red;">
                                                <?php 
                                                    if(isset($_SESSION["title_error"])) {
                                                        echo $_SESSION["title_error"];
                                                        unset($_SESSION["title_error"]);
                                                    }
                                                ?>
                                            </p>
                                            <input class="form-control" type="text" name="title" value="<?= $_SESSION["title"]??'' ?>">
                                            
                                        </div>
                                 <div class="form-group">
                                            <label>Odering</label>
                                            <p class="help-block" style="color:red;">
                                                <?php 
                                                    if(isset($_SESSION["oder_error"])) {
                                                        echo $_SESSION["oder_error"];
                                                        unset($_SESSION["oder_error"]);
                                                    }
                                                ?>
                                            </p>
                                            <input class="form-control" type="number" name="oder" value="<?= $_SESSION["oder"]??'' ?>">
                                     
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <p class="help-block" style="color:red;">
                                                <?php 
                                                    if(isset($_SESSION["status_error"])) {
                                                        echo $_SESSION["status_error"];
                                                        unset($_SESSION["status_error"]);
                                                    }
                                                ?>
                                            </p>
                                           <select class="form-control" name="status">
                                                <option value="" selected disabled>Select</option>
                                                <option value="1"<?= (($_SESSION["status"]??"")==1)?"selected":"" ?>>Enable</option>
                                                <option value="2"<?= (($_SESSION["status"]??"")==2)?"selected":"" ?>>Disable</option>
                                                
                                            </select>
                                            
                                        </div>
                                        <div class="form-group">
                        <label class="control-label col-lg-4">Image Upload</label>
                        <p class="help-block" style="color:red;">
                                              
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input type="file" name="image" value='<?= $_SESSION["image"]??"" ?>'>
                                </span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                        <p class="help-block" style="color:red;">
                          <?php 
                                 if(isset($_SESSION["image_error"])) {
                                     echo $_SESSION["image_error"];
                                     unset($_SESSION["image_error"]);
                                 }
                             ?>
                        </p>
                        </div>
                                 
                                        <button type="submit" class="btn btn-info">Save</button>

                                    </form>
                                 
                            </div>
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

  <?php
unset($_SESSION["title"]);
unset($_SESSION["oder"]);
unset($_SESSION["status"]); 
unset($_SESSION["file"]);
?>
</body>
</html>
