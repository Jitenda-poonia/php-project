<?php require_once("config2.php"); 
require_once("validation.php");

$editId = $_GET["id"]??0;
$selQuery = "SELECT * FROM `sliders` where id=$editId";
$sliderQuery= $con->query($selQuery);
$sliderData = mysqli_fetch_assoc($sliderQuery);
// dd($sliderData);
// die();
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>user edit</title>

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
                        <h1 class="page-head-line">Edit Slider</h1>
                        <h1 class="page-subhead-line"> </h1>
                    </div>
                </div>
                <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Slider detail update
                        </div>
                        <div class="panel-body">
                        <form role="form" action="slider-update.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $sliderData["id"] ?>">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" type="text" name="title" value="<?= $sliderData["title"]??'' ?>">
                                            
                                        </div>
                                 <div class="form-group">
                                            <label>Odering</label>
                                            <input class="form-control" type="number" name="oder"  value="<?= $sliderData["ordering"]??'' ?>">
                                     
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                           <select class="form-control" name="status">
                                                <option value="" selected disabled>Select</option>
                                                <option value="1"<?= (($sliderData["satuts"]??"")==1)?"selected":"" ?>>Enable</option>
                                                <option value="2"<?= (($sliderData["satuts"]??"")==2)?"selected":"" ?>>Disable</option>
                                                
                                            </select>
                                            
                                        </div>
                                        <div class="form-group">
                        <label class="control-label col-lg-4">Image Upload</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;">
                            <img src="<?= $sliderData["image"]??''?>" alt="">
                            </div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="image"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
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
</body>
</html>

