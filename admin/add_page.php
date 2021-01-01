<?php
$page = basename($_SERVER['PHP_SELF']);
require_once("header.php"); ?>
<div class="row small-spacing">
	<div class="col-xs-12">
		<div class="box-content">
			<h4 class="box-title">Add/Edit Page</h4>
			<?php
			if (isset($_GET["id"])) {
				$where = array(
					"id" => $_GET["id"],
				);
				$row = $obj->selectData("pages", $where);
			}
			?>
			<form action="action.php" method="post" enctype="multipart/form-data" data-toggle="validator">
				<div class="form-group">
					<label class="control-label mb-10 text-left">Title</label> <input required type="text" class="form-control" name="title" value="<?php echo isset($row["title"]) ? $row["title"] : ""; ?>">
				</div>
				<div class="form-group">
					<label class="control-label mb-10 text-left">Page Url</label> <input required type="text" class="form-control" name="page_title" value="<?php echo isset($row["page_title"]) ? $row["page_title"] : ""; ?>">
				</div>
				<div class="form-group">
					<label class="control-label mb-10 text-left">Meta Keys</label> <input  type="text" class="form-control" name="meta_keys" value="<?php echo isset($row["meta_keys"]) ? $row["meta_keys"] : ""; ?>">
				</div>

				<div class="form-group">
					<label class="control-label mb-10 text-left">Meta Description</label> <input  type="text" class="form-control" name="meta_desc" value="<?php echo isset($row["meta_desc"]) ? $row["meta_desc"] : ""; ?>">
				</div>
				<div class="dropdown js__drop_down">
					<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
				</div>
				<label class="control-label mb-10 text-left">Image</label>
				<!-- /.dropdown js__dropdown -->
				<input type="file" id="input-file-now" data-default-file="../images/<?php echo isset($row["img"]) ? $row["img"] : ""; ?>" name="img" class="dropify" />

				<div style="margin-top: 10px;" class="box-content">
					<h4 class="box-title">Description</h4>
					<textarea required name="page_desc" id="tinymce">
							<?php echo isset($row["page_desc"]) ? $row["page_desc"] : ""; ?>
					</textarea>
				</div>
				<?php if (isset($_GET["id"])) {
				?>
					<input type="hidden" name="id" value="<?php echo isset($row["id"]) ? $row["id"] : ""; ?>">
				<?php
				} ?>
				<?php if (isset($_GET["id"])) {
					$act = "edit_page";
				} else {
					$act = "add_page";
				} ?>
				<div class="form-group">
					<button type="submit" name="<?php echo $act; ?>" value="<?php echo $act; ?>" class="btn btn-primary waves-effect waves-light">Save</button>
				</div>
			</form>

		</div>
		<!-- /.box-content -->
	</div>
	<!-- /.col-xs-12 -->
</div>
<?php require_once("footer.php"); ?>