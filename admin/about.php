<?php
$page = basename($_SERVER['PHP_SELF']);
require_once("header.php"); ?>
<div class="row small-spacing">
	<div class="col-xs-12">
		<div class="box-content">
			<h4 class="box-title">About Us</h4>
			<?php
			$where = array(
				"id" => 1,
			);
			$row = $obj->selectData("about", $where);
			// print_r($row);
			if ($row) {
			?>
				<form action="action.php" method="post" enctype="multipart/form-data" data-toggle="validator">

					<div class="form-group">
						<label class="control-label mb-10 text-left">Meta Keys</label> <input required type="text" class="form-control" name="meta_keys" value="<?php echo $row["meta_keys"]; ?>">
					</div>

					<div class="form-group">
						<label class="control-label mb-10 text-left">Meta Description</label> <input required type="text" class="form-control" name="meta_desc" value="<?php echo $row["meta_desc"]; ?>">
					</div>
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
					</div>
					<label class="control-label mb-10 text-left">Image</label>
					<!-- /.dropdown js__dropdown -->
					<input type="file" id="input-file-now" data-default-file="../images/<?php echo $row["about_img"] ?>" name="about_img" class="dropify" />

					<div style="margin-top: 10px;" class="box-content">
						<h4 class="box-title">Description</h4>
						<textarea required name="about_desc" id="tinymce">
							<?php echo $row["about_desc"]; ?>
					</textarea>
					</div>
					<div class="form-group">
						<button type="submit" name="edit_about" value="edit_about" class="btn btn-primary waves-effect waves-light">Submit</button>
					</div>
				</form>
			<?php
			} else {
				echo "";
			}
			?>
		</div>
		<!-- /.box-content -->
	</div>
	<!-- /.col-xs-12 -->
</div>
<?php require_once("footer.php"); ?>