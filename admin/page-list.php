<?php 
require_once("config2.php"); 
require_once("validation.php");
$selQuery = "SELECT * FROM `pages`";
$result = $con->query($selQuery);
// dd($res);

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>page list</title>

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
                        <h1 class="page-head-line">page List</h1>
                        <h1 class="page-subhead-line"> 
                            <a href="dashboard.php">Dashboard</a>>>
                            <a href="add-page.php">Add Page</a>>>Page list
                        </h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                            <?php include_once("include/message.php"); ?>
                                <table class="table table-striped table-bordered table-hover display" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>Sr.No</th>
                                            <th>Title</th>
                                            <th>Heading</th>
                                            <th>Ordering</th>
                                            <th>satuts</th>
                                            <th>Image</th>
                                            <th>Url key</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            <?php
                                            if($result->num_rows) {
                                              
                                            
                                                    $i = 1;
                                                    while($_page = mysqli_fetch_assoc($result)) { ?>
                                                    <tr>
                                                         <td><?= $i++ ?></td>
                                                         <td><?= $_page["title"] ?></td>
                                                         <td><?= $_page["heading"] ?></td>
                                                         <td><?= $_page["ordering"] ?></td>
                                                         <td><?= ($_page["status"]==1)?"Enable":"Disable" ?></td>
                                                         <td style="width:5%;">
                                                              <img src="<?= $_page["banner_image"] ?>" alt="" style="width:100%;">
                                                        </td> 
                                                        <td><?= $_page["url_key"] ?></td>
                                                         
                                                         <td>
                                                         <a href="page-edit.php?id=<?= $_page["id"] ?>" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i>Edit</a>
                                                         <a href="page-delete.php?id=<?= $_page["id"] ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>Delete</a>
                                                         </td>
                                                    </tr>
                                                  <?php } } ?>
                                            
                                            
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
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
  <script>
    $(document).ready(function(){
        $('#myTable').DataTable();
    });
  </script>
  
</body>
</html>
