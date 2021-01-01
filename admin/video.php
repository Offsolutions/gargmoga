<?php
$page = basename($_SERVER['PHP_SELF']);
require_once("header.php"); ?>
<div class="row small-spacing">
	<div class="col-lg-4">
		<div class="box-content">

			<h4>Add/Edit Video</h4>
			<?php
			if (isset($_GET["id"])) {
				$where = array(
					"id" => $_GET["id"],
				);
				$row1 = $obj->selectDatavideo("video", $where);
			}
			?>
			<form data-toggle="validator" role="form" action="action.php" method="post" enctype="multipart/form-data">
				<div class="">
					<div class="form-group">
						<label class="control-label mb-10 text-left">
							Title
						</label>
						<input required type="text" class="form-control" name="title" value="<?php echo isset($row1["t1"]) ? $row1["t1"] : ""; ?>">


					</div>
				</div>
				<div class="">
					<div class="form-group">
						<label class="control-label mb-10 text-left">
							Link
						</label>
						<input required type="text" class="form-control" name="link" value="<?php echo isset($row1["link"]) ? $row1["link"] : ""; ?>">


					</div>
				</div>
				<div class="">
					<div class="form-group mb-30">
						<label class="control-label mb-10 text-left">select</label>
						<select required name="cat_id" class="form-control">
							<option value="" selected disablesd>Select Category</option>
							<?php
							$recordgc = $obj->getData("gallery_category");
							if ($recordgc) {
								$sr = 0;
								foreach ($recordgc as $rowgc) {
									$sr++;
							?>
									<option <?php
											if (isset($row1)) {
												if ($row1["cat_id"] == $rowgc["id"]) {
													echo "selected";
												}
											}
											?> value="<?php echo $rowgc["id"]; ?>"><?php echo $rowgc["title"]; ?></option>
							<?php

								}
							} else {
								echo "";
							} ?>
						</select>
					</div>
				</div>



				<?php if (isset($_GET["id"])) {
				?>
					<input type="hidden" name="id" value="<?php echo isset($row1["id"]) ? $row1["id"] : ""; ?>">
				<?php
				} ?>
				<?php if (isset($_GET["id"])) {
					$act = "edit_video";
				} else {
					$act = "add_video";
				} ?>


				<div class="form-group">
					<button type="submit" name="<?php echo $act; ?>" value="<?php echo $act; ?>" class="btn btn-primary btn-anim"><i class="icon-rocket"></i><span class="btn-text">Save</span></button>
				</div>
			</form>
		</div>
		<!-- /.box-content -->
	</div>

	<div class="col-lg-8">
		<div class="box-content">
			<h4 class="box-title">video</h4>
			<table id="myTable1" class="table table-hover table-striped display table-bordered pb-30">
				<thead class="text text-dark">
					<tr>
						<th>Title</th>
						<!-- <th>Link</th> -->
						<th>Category</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$record = $obj->getDatavideo("video");
					if ($record) {
						$sr = 0;
						foreach ($record as $row) {
							$sr++;
					?>
							<tr>
								<td><?php echo $row["gt"]; ?></td>
								<!-- <td><?php echo $row["link"]; ?></td> -->
								<td><?php echo $row["title"]; ?></td>

								<td class="text-nowrap">

									<a href="video.php?id=<?php echo $row["id"]; ?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i style="font-size:20px;" class="fa fa-pencil text-inverse m-r-10"></i> </a>
									<a style="margin-left: 10px;" onclick="confirm(<?php echo $row['id']; ?>);" data-toggle="tooltip" data-original-title="Delete"> <i style="font-size:20px;" class="fa fa-trash-o text-danger"></i> </a> </td>
							</tr>

					<?php

						}
					} else {
						echo "<h2>Record not found</h2>";
					} ?>
				</tbody>
			</table>
		</div>
		<!-- /.box-content -->
	</div>
	<!-- /.col-xs-12 -->
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
			window.location.href = "action.php?del_video=" + id;
		});
		return false;


	}
</script>


<?php require_once("footer.php"); ?>