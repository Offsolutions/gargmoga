<?php
$page = basename($_SERVER['PHP_SELF']);
require_once("header.php"); ?>
<div class="row small-spacing">
	<div class="col-lg-12">
		<div class="box-content">

			<h4>Add Features</h4>
			<?php
			if (isset($_GET["id"])) {
				$where = array(
					"id" => $_GET["id"],
				);
				$row1 = $obj->selectData("features", $where);
			}
			?>


			<form data-toggle="validator" role="form" action="action.php" method="post" enctype="multipart/form-data">



				<div class="form-group">
					<label class="control-label mb-10 text-left">
						Title
					</label>
					<input required type="text" class="form-control" name="title" value="<?php echo isset($row1["title"]) ? $row1["title"] : ""; ?>">
				</div>
				<!-- <div class="form-group">
					<label class="control-label mb-10 text-left">
						Icon
					</label>
					<input  type="text" class="form-control" name="icon" value="<?php echo isset($row1["icon"]) ? $row1["icon"] : ""; ?>">
				</div> -->
				<div class="form-group">
					<label class="control-label mb-10 text-left">Image</label>

					<input type="file" id="input-file-now-custom-1" class="dropify" <?php if (isset($row1["img"])) { ?> data-default-file="../images/<?php echo isset($row1["img"]) ? $row1["img"] : ""; ?>" <?php } ?>name="img">

				</div>



				<div style="margin-top: 10px;" class="box-content">
					<h4 class="box-title">Description</h4>
					<textarea required name="f_desc" id="tinymce">
							<?php echo isset($row1["f_desc"]) ? $row1["f_desc"] : ""; ?>
					</textarea>
				</div>

				<?php if (isset($_GET["id"])) {
				?>
					<input type="hidden" name="id" value="<?php echo isset($row1["id"]) ? $row1["id"] : ""; ?>">
				<?php
				} ?>
				<?php if (isset($_GET["id"])) {
					$act = "edit_features";
				} else {
					$act = "add_features";
				} ?>


				<div class="form-group">
					<button type="submit" name="<?php echo $act; ?>" value="<?php echo $act; ?>" class="btn btn-primary btn-anim"><i class="icon-rocket"></i><span class="btn-text">Save</span></button>
				</div>

			</form>
		</div>
		<!-- /.box-content -->
	</div>

</div>


<?php require_once("footer.php"); ?>