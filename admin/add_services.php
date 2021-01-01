<?php
$page = basename($_SERVER['PHP_SELF']);
require_once("header.php"); ?>
<div class="row small-spacing">
	<div class="col-lg-12">
		<div class="box-content">

			<h4>Add services</h4>
			<?php
			if (isset($_GET["id"])) {
				$where = array(
					"id" => $_GET["id"],
				);
				$row1 = $obj->selectData("services", $where);
			}
			?>


			<form data-toggle="validator" role="form" action="action.php" method="post" enctype="multipart/form-data">



				<div class="form-group">
					<label class="control-label mb-10 text-left">
						Title
					</label>
					<input required type="text" class="form-control" name="title" value="<?php echo isset($row1["title"]) ? $row1["title"] : ""; ?>">
				</div>
				<div class="form-group">
					<label class="control-label mb-10 text-left">Page Url</label> <input required type="text" class="form-control" name="page_title" value="<?php echo isset($row1["page_title"]) ? $row1["page_title"] : ""; ?>">
				</div>
				<div class="form-group">
					<label class="control-label mb-10 text-left">Thumb Image</label>

					<input type="file" id="input-file-now-custom-1" class="dropify" <?php if (isset($row1["thumb_img"])) { ?> data-default-file="../images/<?php echo isset($row1["thumb_img"]) ? $row1["thumb_img"] : ""; ?>" <?php } ?> name="thumb_img">
					<span>237*237</span>
				</div>
				<div class="form-group">
					<label class="control-label mb-10 text-left">Image</label>

					<input type="file" id="input-file-now-custom-1" class="dropify" <?php if (isset($row1["img"])) { ?> data-default-file="../images/<?php echo isset($row1["img"]) ? $row1["img"] : ""; ?>" <?php } ?>name="img">

				</div>

				<div class="form-group">
					<label class="control-label mb-10 text-left">Meta Keys</label> <input required type="text" class="form-control" name="meta_keys" value="<?php echo isset($row1["meta_keys"]) ? $row1["meta_keys"] : ""; ?>">
				</div>

				<div class="form-group">
					<label class="control-label mb-10 text-left">Meta Description</label> <input required type="text" class="form-control" name="meta_desc" value="<?php echo isset($row1["meta_desc"]) ? $row1["meta_desc"] : ""; ?>">
				</div>

				<div class="form-group">
					<label class="control-label mb-10 text-left">
						Short Description
					</label>
					<input maxlength="50" required type="text" class="form-control" name="short_desc" value="<?php echo isset($row1["short_desc"]) ? $row1["short_desc"] : ""; ?>">
				</div>

				<div style="margin-top: 10px;" class="box-content">
					<h4 class="box-title">Description</h4>
					<textarea required name="service_desc" id="tinymce">
							<?php echo isset($row1["service_desc"]) ? $row1["service_desc"] : ""; ?>
					</textarea>
				</div>

				<?php if (isset($_GET["id"])) {
				?>
					<input type="hidden" name="id" value="<?php echo isset($row1["id"]) ? $row1["id"] : ""; ?>">
				<?php
				} ?>
				<?php if (isset($_GET["id"])) {
					$act = "edit_service";
				} else {
					$act = "add_service";
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