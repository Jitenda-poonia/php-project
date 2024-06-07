<?php
// Set the default timezone
date_default_timezone_set('Asia/Kolkata');

// Include Composer's autoloader
require '../vendor/autoload.php';

use Carbon\Carbon;



// Initialize last login time as 'N/A'
$lastLoginTime = 'N/A';

if (isset($_SESSION['user_id'])) {
    // SQL query to fetch the second most recent user log
    $selectQuery = "SELECT * FROM user_logs WHERE user_id=" . $_SESSION['user_id'] . " ORDER BY id DESC LIMIT 1,1";
    $conQuery = $con->query($selectQuery);

    if ($conQuery->num_rows) {
        $_data = mysqli_fetch_assoc($conQuery);
        $lastLoginTimeRaw = $_data['create_at'];


        $lastLoginTime = Carbon::parse($lastLoginTimeRaw)->diffForHumans();
    }
}
?>

<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="assets/img/user.jpg" class="img-thumbnail" />
                    <div class="inner-text">
                        <?= $_SESSION["name"] ?>
                        <br />
                        <small><?= $_SESSION["email"] ?></small><br>
                        <small>Last Login: <?= $lastLoginTime ?></small>
                    </div>
                </div>
            </li>
            <li>
                <a class="active-menu" href="dashboard.php"><i class="fa fa-dashboard"></i>Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-user"></i> Manage User<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="add-user.php"><i class="fa fa-user"></i>Add User</a>
                    </li>
                    <li>
                        <a href="user-list.php"><i class="fa fa-users"></i>User List</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-sliders"></i>Manage Slider<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="add-slider.php"><i class="fa fa-sliders"></i>Add Slider</a>
                    </li>
                    <li>
                        <a href="slider-list.php"><i class="fa fa-sliders"></i>Slider List</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-yelp"></i> Manage Pages<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="add-page.php"><i class="fa fa-file-text-o"></i>Add Page</a>
                    </li>
                    <li>
                        <a href="page-list.php"><i class="fa fa-file-text-o"></i>Page List</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-desktop"></i> Manage Block<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="add-block.php"><i class="fa fa-sliders"></i>Add Block</a>
                    </li>
                    <li>
                        <a href="block-list.php"><i class="fa fa-sliders"></i>Block List</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="enquire-list.php"><i class="fa fa-bell"></i> Enquiry<span></span></a>
            </li>

            <li>
                <a href="logout.php"><i class="fa fa-sign-out"></i>LogOut<span></span></a>
            </li>

        </ul>
    </div>
</nav>