<?php
$page = basename($_SERVER['PHP_SELF']);
require_once("header.php"); ?>
<div class="row small-spacing">
	<div class="col-lg-4">
		<div class="box-content">

			<h4>Add/Edit Partners</h4>
			<?php
			if (isset($_GET["id"])) {
				$where = array(
					"id" => $_GET["id"],
				);
				$row1 = $obj->selectData("clients", $where);
			}
			?>
			<form data-toggle="validator" role="form" action="action.php" method="post" enctype="multipart/form-data">


				<div class="">
					<div class="form-group">
						<label class="control-label mb-10 text-left">Title</label>
						<input required type="text" class="form-control" name="title" value="<?php echo isset($row1["title"]) ? $row1["title"] : ""; ?>">
					</div>
				</div>
				<div class="">
					<div class="form-group mb-30">
						<label class="control-label mb-10 text-left">Image</label>

						<input type="file" id="input-file-now-custom-1" class="dropify" <?php if (isset($row1["img"])) { ?> data-default-file="../images/<?php echo isset($row1["img"]) ? $row1["img"] : ""; ?>" <?php } ?> name="img">
						
					</div>
				</div>

				<?php if (isset($_GET["id"])) {
				?>
					<input type="hidden" name="id" value="<?php echo isset($row1["id"]) ? $row1["id"] : ""; ?>">
				<?php
				} ?>
				<?php if (isset($_GET["id"])) {
					$act = "edit_clients";
				} else {
					$act = "add_clients";
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
			<h4 class="box-title">Our Partners</h4>
			<table id="myTable1" class="table table-hover table-striped display table-bordered  pb-30">
				<thead class="text text-dark">
					<tr>
						<th>Title</th>
						<th>Image</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$record = $obj->getData("clients");
					if ($record) {
						$sr = 0;
						foreach ($record as $row) {
							$sr++;
					?>

							<tr>
								<td>
									<?php echo $row["title"]; ?>
								</td>
								<td><img width="50px" src="../images/<?php echo $row["img"]; ?>" alt="" srcset=""></td>
								<td class="text-nowrap">

									<a href="clients.php?id=<?php echo $row["id"]; ?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i style="font-size:20px;" class="fa fa-pencil text-inverse m-r-10"></i> </a>
									<a style="margin-left: 10px;" onclick="confirm(<?php echo $row['id']; ?>);" data-toggle="tooltip" data-original-title="Delete"> <i style="font-size:20px;" class="fa fa-trash text-danger"></i> </a> </td>
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
			window.location.href = "action.php?del_clients=" + id;
		});
		return false;


	}
</script>

<?php require_once("footer.php"); ?>