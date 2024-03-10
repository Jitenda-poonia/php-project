<?php 
 
require_once("config2.php");
$selQuery = "SELECT status FROM enquiries where status=1";
$enquiry = $con->query($selQuery);
// dd($enquiry)

 ?>
 <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">COMPANY NAME</a>
            </div>

            <div class="header-right">
                
                <a href="message-task.html" class="btn btn-info" title="New Message"><b>30</b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="enquire-list.php" class="btn btn-primary" title="New Task"><b><?= $enquiry->num_rows ?></b><i class="fa fa-bars fa-2x"></i></a>
                <a href="logout.php" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
