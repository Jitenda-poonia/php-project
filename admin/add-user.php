<?php
require_once ("config2.php");
require_once ("validation.php");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add user</title>

    <?php require_once ("include/header.php"); ?>
</head>

<body>

    <div id="wrapper">
        <?php include_once ("include/navbar-top.php"); ?>
        <!-- /. NAV TOP  -->
        <?php include_once ("include/nav-barSide.php"); ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                        <h1 class="page-subhead-line">Add user </h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-info">
                            <?php include_once ("include/message.php"); ?>
                            <div class="panel-body">

                                <form role="form" action="user-save.php" method="post">
                                    <div class="form-group">
                                        <label>Enter Name</label>
                                        <input class="form-control" type="text" name="name"
                                            value="<?= $_SESSION["names"] ?? '' ?>">
                                        <p class="help-block" style="color:red;">
                                            <?php
                                            if (isset($_SESSION["name_error"])) {
                                                echo $_SESSION["name_error"];
                                                unset($_SESSION["name_error"]);
                                            }
                                            ?>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Email</label>
                                        <input class="form-control" type="email" name="email"
                                            value="<?= $_SESSION["mail"] ?? '' ?>">
                                        <p class="help-block" style="color:red;">
                                            <?php
                                            if (isset($_SESSION["email_error"])) {
                                                echo $_SESSION["email_error"];
                                                unset($_SESSION["email_error"]);
                                            }
                                            ?>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Mobile number</label>
                                        <input class="form-control" type="tel" name="phone"
                                            value="<?= $_SESSION["phone"] ?? '' ?>">
                                        <p class="help-block" style="color:red;">
                                            <?php
                                            if (isset($_SESSION["phone_error"])) {
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
                                                <input type="radio" name="gender" id="optionsRadios1" value="Male"
                                                    <?= (($_SESSION["gndr"] ?? '') == "Male") ? "checked" : "" ?>>Male
                                            </label>
                                        </div>
                                        <p class="help-block" style="color:red;">
                                            <?php
                                            if (isset($_SESSION["gender_error"])) {
                                                echo $_SESSION["gender_error"];
                                                unset($_SESSION["gender_error"]);
                                            }
                                            ?>
                                        </p>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="gender" id="optionsRadios2" value="Female"
                                                    <?= (($_SESSION["gndr"] ?? '') == "Female") ? "checked" : "" ?>>Female
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Designation</label>
                                        <input class="form-control" type="text" name="designation"
                                            value="<?= $_SESSION["des"] ?? '' ?>">
                                        <p class="help-block" style="color:red;">
                                            <?php
                                            if (isset($_SESSION["designation_error"])) {
                                                echo $_SESSION["designation_error"];
                                                unset($_SESSION["designation_error"]);
                                            }
                                            ?>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <div class="input-group">
                                            <input class="form-control" type="password" name="password" id="password">
                                            <span class="input-group-addon toggle-password"
                                                onclick="togglePassword('password')">
                                                <i class="fa fa-eye"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Re-enter Password</label>
                                        <div class="input-group">
                                            <input class="form-control" type="password" name="confirm_password"
                                                id="confirm_password">
                                            <span class="input-group-addon toggle-password"
                                                onclick="togglePassword('confirm_password')">
                                                <i class="fa fa-eye"></i>
                                            </span>
                                        </div>
                                        <p class="help-block" style="color:red;">
                                            <?php
                                            if (isset($_SESSION["password_error"])) {
                                                echo $_SESSION["password_error"];
                                                unset($_SESSION["password_error"]);
                                            }
                                            ?>
                                        </p>
                                    </div>
                                    <button type="submit" class="btn btn-info">Save</button>
                                </form>
                            </div>
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
    <?php
    unset($_SESSION["names"]);
    unset($_SESSION["mail"]);
    unset($_SESSION["phone"]);
    unset($_SESSION["gndr"]);
    unset($_SESSION["des"]);

    include_once ("include/footer.php");
    ?>

    <script>
        function togglePassword(fieldId) {
            var field = document.getElementById(fieldId);
            var icon = field.nextElementSibling.querySelector('i');
            if (field.type === "password") {
                field.type = "text";
                icon.className = 'fa fa-eye-slash';
            } else {
                field.type = "password";
                icon.className = 'fa fa-eye';
            }
        }
    </script>
</body>

</html>