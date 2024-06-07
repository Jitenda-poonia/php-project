<?php require_once ("config2.php");

require_once ("validation.php");

$selQuery = "SELECT * FROM `enquiries`";
$result = $con->query($selQuery);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Enquiry</title>

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
                        <h1 class="page-head-line">Enquiry List</h1>
                        <?php require_once ("include/message.php"); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <!--   Kitchen Sink -->
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <?php include_once ("include/message.php"); ?>
                                    <table class="table table-striped table-bordered table-hover display" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Messages</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            if ($result->num_rows) {

                                                $i = 1;
                                                while ($_enquiry = mysqli_fetch_assoc($result)) { ?>
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $_enquiry["name"] ?></td>
                                                        <td><?= $_enquiry["email"] ?></td>
                                                        <td><?= $_enquiry["phone"] ?></td>
                                                        <td><?= $_enquiry["message"] ?></td>
                                                        <td id="status_id<?= $_enquiry['id'] ?>">
                                                            <?php if ($_enquiry["status"] == 1) { ?>
                                                                <button data-id="<?= $_enquiry['id'] ?>"
                                                                    class="btn btn-danger status_class">Unread</button>
                                                            <?php } else { ?>

                                                                <button class="btn btn-success">Read</button>
                                                            <?php } ?>

                                                        </td>
                                                    </tr>
                                                <?php }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- End  Kitchen Sink -->
                    </div>
                </div>

            </div>
        </div>

        <?php include_once ("include/footer.php"); ?>

        <script>
            $(document).ready(function () {
                $(".status_class").click(function () {
                    ids = $(this).attr('data-id');
                    $.ajax({
                        url: 'enquiry-save.php',
                        type: 'POST',
                        data: { s_id: ids },
                        success: function (resutl) {
                            // console.log(resutl);
                            // alert(resutl);
                            $("#status_id" + ids).html(resutl);
                            // window.location.reload(); 
                        },
                        error: function (er) {
                            alert(er);
                        }
                    });
                });
            });
        </script>
</body>

</html>