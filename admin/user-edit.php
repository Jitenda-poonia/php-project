 <?php require_once("config2.php"); 
$editId = $_GET["id"]??0;
$selQuery = "SELECT * FROM `users` where id=$editId";
$userQuery= $con->query($selQuery);
$userData = mysqli_fetch_assoc($userQuery);
// dd($userData);
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
                        <h1 class="page-head-line">Edit user</h1>
                        <h1 class="page-subhead-line"> </h1>
                    </div>
                </div>
                <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           User detail update
                        </div>
                        <div class="panel-body">
                            <form role="form" action="user-update.php" method="post">
                                <input type="hidden" name="id" value="<?= $userData["id"] ?>">
                                        <div class="form-group">
                                            <label>Enter Name</label>
                                            <input class="form-control" type="text" name="name" value="<?= $userData["name"]??"" ?>">
                                            <p class="help-block" style="color:red;">
                                                <?php 
                                                    if(isset($_SESSION["name_error"])) {
                                                        echo $_SESSION["name_error"];
                                                        unset($_SESSION["name_error"]);
                                                    }
                                                ?>
                                            </p>
                                            
                                        </div>
                                 <div class="form-group">
                                            <label>Enter Email</label>
                                            <input class="form-control" type="email" name="email" value="<?= $userData["email"]??'' ?>">
                                             <p class="help-block" style="color:red;">
                                             <?php 
                                                 if(isset($_SESSION["email_error"])) {
                                                     echo $_SESSION["email_error"];
                                                     unset($_SESSION["email_error"]);
                                                 }
                                             ?>
                                         </p>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Mobile number</label>
                                            <input class="form-control" type="tel" name="phone" value="<?= $userData["phone"]??'' ?>">
                                            <p class="help-block" style="color:red;">
                                                <?php 
                                                    if(isset($_SESSION["phone_error"])) {
                                                        echo $_SESSION["phone_error"];
                                                        unset($_SESSION["phone_error"]);
                                                    }
                                                ?>
                                            </p>
                                        </div>
                                        <div class="form-group">
                                            <label> Select Gender</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="optionsRadios1" value="Female" <?= (($userData["gender"]??'')=="Female")? "checked":''?> >Female
                                                </label>
                                                 <p class="help-block" style="color:red;">
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="gender" id="optionsRadios2" value="Male" <?= (($userData["gender"]??"")=="Male")? "checked":''?> >Male
                                                    </label>
                                                </div>
                                                <p class="help-block" style="color:red;">
                                                <?php 
                                                    if(isset($_SESSION["gender_error"])) {
                                                        echo $_SESSION["gender_error"];
                                                        unset($_SESSION["gender_error"]);
                                                    }
                                                ?>
                                            </p>
                                            
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Designation</label>
                                            <input class="form-control" type="text" name="designation" value="<?= $userData["designation"]??'' ?>">
                                            <p class="help-block" style="color:red;">
                                                <?php 
                                                    if(isset($_SESSION["designation_error"])) {
                                                        echo $_SESSION["designation_error"];
                                                        unset($_SESSION["designation_error"]);
                                                    }
                                                ?>
                                            </p>
                                        </div>
                                            <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="password" name="password" value="<?= $userData["password"]??'' ?>">
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Re Enter password</label>
                                            <input class="form-control" type="password" name="confirm-pass" value="<?= $userData["password"]??'' ?>">
                                            <p class="help-block" style="color:red;">
                                                <?php 
                                                    if(isset($_SESSION["password_error"])) {
                                                        echo $_SESSION["password_error"];
                                                        unset($_SESSION["password_error"]);
                                                    }
                                                ?>
                                            </p>
                                        </div>
                                 
                                        <button type="submit" class="btn btn-info">Save </button>

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

