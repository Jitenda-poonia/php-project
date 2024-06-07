<?php

require_once ("config2.php");
$selQuery = "SELECT status FROM enquiries where status=1";
$enquiry = $con->query($selQuery);

// SQL query to fetch the  recent user log
$selectQuery = "SELECT * FROM user_logs WHERE user_id=" . $_SESSION['user_id'];
$conQuery = $con->query($selectQuery);

$_data = mysqli_fetch_assoc($conQuery);
$loginTime = $_data['create_at'];

?>
<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="">TeachZento Solutions</a>
    </div>

    <div class="header-right">
        <?= ' Login' . '  ' . $loginTime ?>
        <a href="enquire-list.php" class="btn btn-info" title="New Message"><b><?= $enquiry->num_rows ?></b><i
                class="fa fa-envelope-o fa-2x"></i></a>

        <a href="logout.php" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

    </div>
</nav>