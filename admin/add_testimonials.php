<?php
$page = basename($_SERVER['PHP_SELF']);
require_once("header.php"); ?>
<div class="row small-spacing">
	<div class="col-lg-12">
		<div class="box-content">

			<h4>Add Testimonials</h4>

			<?php
			if (isset($_GET["id"])) {
				$where = array(
					"id" => $_GET["id"],
				);
				$row = $obj->selectData("testimonials", $where);
			}
			?>


			<form data-toggle="validator" role="form" action="action.php" method="post" enctype="multipart/form-data">

				<div class=" ">
					<div class="form-group">
						<label class="control-label mb-10 text-left">Name</label>
						<input required type="text" class="form-control" name="t_name" value="<?php echo isset($row["t_name"]) ? $row["t_name"] : ""; ?>">
					</div>
				</div>
				<div class=" ">
					<div class="form-group">
						<label class="control-label mb-10 text-left">
							Title
						</label>
						<input required type="text" class="form-control" name="t_title" value="<?php echo isset($row["t_title"]) ? $row["t_title"] : ""; ?>">


					</div>
				</div>

				<div class=" ">
					<div class="form-group">
						<label class="control-label mb-10 text-left">Image</label>

						<input type="file" id="input-file-now-custom-1" class="dropify" <?php if (isset($row["t_img"])) { ?> data-default-file="../images/<?php echo isset($row["t_img"]) ? $row["t_img"] : ""; ?>" <?php } ?>name="t_img">

					</div>

				</div>

				<div style="margin-top: 10px;" class="box-content">
					<h4 class="box-title">Description</h4>
					<textarea required name="t_desc" id="tinymce">
							<?php echo isset($row["t_desc"]) ? $row["t_desc"] : ""; ?>
					</textarea>
				</div>




				<?php if (isset($_GET["id"])) {
				?>
					<input type="hidden" name="id" value="<?php echo isset($row["id"]) ? $row["id"] : ""; ?>">
				<?php
				} ?>
				<?php if (isset($_GET["id"])) {
					$act = "edit_testimonials";
				} else {
					$act = "add_testimonials";
				} ?>


				<div class="form-group">
					<button type="submit" name="<?php echo $act; ?>" value="<?php echo $act; ?>" class="btn btn-primary btn-anim"><i class="icon-rocket"></i><span class="btn-text">Save</span></button>
				</div>

			</form>
		</div>
		<!-- /.box-content -->
	</div>


</div>


<script>
	function confirm(id) {
		var id = id;

		swal({
			title: "Are you sure?",
			text: "You will not be able to recover this imaginary file!",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#fec107",
			confirmButtonText: "Yes, delete it!",
			closeOnConfirm: false
		}, function() {
			window.location.href = "action.php?del_gallery=" + id;
		});
		return false;


	}
</script>


<?php require_once("footer.php"); ?>