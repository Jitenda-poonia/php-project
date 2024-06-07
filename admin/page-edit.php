<?php
require_once ("config2.php");
require_once ("validation.php");

$editId = $_GET["id"] ?? 0;
$selQuery = "SELECT * FROM `pages` where id=$editId";
$pageQuery = $con->query($selQuery);
$pageData = mysqli_fetch_assoc($pageQuery);
// dd($sliderData);
// die();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Edit page</title>
	<?php include_once ("include/header.php"); ?>
</head>

<body>
	<div id="wrapper">
		<?php include_once ("include/navbar-top.php"); ?>
		<?php include_once ("include/nav-barside.php"); ?>
		<div id="page-wrapper">
			<div id="page-inner">
				<div class="row">
					<div class="col-md-12">
						<h1 class="page-head-line">Edit Pages</h1>
						<span class="page-subhead-line"><strong><a href="dashboard.php">Dashboard</a> >> Edit Pages
						</span>

					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-sm-6 col-xs-12">
						<div class="panel panel-info">
							<div class="panel-body">
								<?php include_once ("include/message.php"); ?>

								<form action="page-update.php" method="POST" enctype="multipart/form-data">
									<input type="hidden" name="id" value="<?= $pageData["id"] ?>">
									<div class="form-group">
										<label>Enter Title</label>
										<input class="form-control" name="title" type="text"
											value="<?= $pageData['title'] ?? '' ?>">
									</div>
									<div class="form-group">
										<label>Enter Heading</label>
										<input class="form-control" name="heading" type="text"
											value="<?= $pageData['heading'] ?? '' ?>">
									</div>
									<div class="form-group">
										<label>Enter Ordering</label>
										<input class="form-control" name="ordering" type="number"
											value="<?= $pageData['ordering'] ?? '' ?>">
									</div>


									<div class="form-group">
										<label>Status</label>
										<select name="status" class="form-control">
											<option value="" selected disabled>Select</option>
											<option value="1" <?= (($pageData["status"] ?? "") == 1) ? "selected" : "" ?>>
												Enable
											</option>
											<option value="2" <?= (($pageData["status"] ?? "") == 2) ? "selected" : "" ?>>
												Disable
											</option>
										</select>
									</div>
									<div class="form-group">
										<label>Enter url key </label>
										<input class="form-control" name="url_key" type="text"
											value="<?= $pageData['url_key'] ?? '' ?>">
									</div>
									<div class="form-group">
										<label>Enter description </label>
										<textarea name="description" id="" cols="30"
											rows="10"><?= $pageData['description'] ?? '' ?></textarea>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-default">
												<div class="panel-body">

													<div class="form-group">
														<label class="control-label col-lg-4"><strong>Banner
																Image</strong></label>
														<div class="">
															<div class="fileupload fileupload-new"
																data-provides="fileupload">
																<span class="fileupload-preview"></span>
																<a href="#" class="close fileupload-exists"
																	data-dismiss="fileupload" style="float: none">×</a>
															</div>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-lg-4"></label>
														<div class="">
															<div class="fileupload fileupload-new"
																data-provides="fileupload">
																<div class="fileupload-preview thumbnail"
																	style="width: 200px; height: 150px;">
																	<img src="<?= $pageData['banner_image'] ?>" alt="">
																</div>

																<div>
																	<span class="btn btn-file btn-success">
																		<span class="fileupload-new">Select image</span>
																		<span class="fileupload-exists">Change</span>
																		<input type="file" name="image">
																	</span>
																	<a href="#" class="btn btn-danger fileupload-exists"
																		data-dismiss="fileupload">Remove</a>
																</div>
															</div>
														</div>
													</div>

												</div>
											</div>

										</div>
									</div>


									<button class="btn btn-info">Update</button>

								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- /. PAGE INNER  -->
		</div>
		<!-- /. PAGE WRAPPER  -->
	</div>
	<!-- /. WRAPPER  -->

	<script src="https://cdn.tiny.cloud/1/do4xutgtb0ws8yotpwqm9xapdw3dgmy9iv047kgf9mhmqa0w/tinymce/6/tinymce.min.js"
		referrerpolicy="origin"></script>
	<script>
		tinymce.init({
			selector: 'textarea',
			plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
			toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
			tinycomments_mode: 'embedded',
			tinycomments_author: 'Author name',
			mergetags_list: [{
				value: 'First.Name',
				title: 'First Name'
			},
			{
				value: 'Email',
				title: 'Email'
			},
			],
			ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
		});
	</script>

	<?php include_once ("include/footer.php"); ?>



</body>

</html>