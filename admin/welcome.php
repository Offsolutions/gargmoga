<?php
$page = basename($_SERVER['PHP_SELF']);
require_once("header.php"); ?>
<div class="row small-spacing">
	<div class="col-xs-12">
		<div class="box-content">
			<h4 class="box-title">Welcome</h4>
			<?php
			$where = array(
				"id" => 1,
			);
			$row = $obj->selectData("welcome", $where);
			// print_r($row);
			if ($row) {
			?>

				<form action="action.php" method="post" enctype="multipart/form-data">


					<div class="row">
						<div class="col-lg-12">

							<div class="form-group">
								<label class="control-label mb-10 text-left">
									Title
								</label>
								<input required type="text" class="form-control" name="title" value="<?php echo isset($row["title"]) ? $row["title"] : ""; ?>">


							</div>

							<div class="form-group">
								<label class="control-label mb-10 text-left">Image</label>

								<input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="../images/<?php echo $row["img"] ?>" name="img">

							</div>


						</div>
						<div class="col-lg-12">
							<div style="margin-top: 10px;" class="box-content">
								<h4 class="box-title">Description</h4>
								<textarea required name="w_desc" id="tinymce">
							<?php echo $row["w_desc"]; ?>
					</textarea>
							</div>
						</div>
					</div>

					<button type="submit" name="edit_welcome" value="edit_welcome" class="btn btn-primary btn-anim"><i class="icon-rocket"></i><span class="btn-text">Update</span></button>
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