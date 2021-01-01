<?php
$page = basename($_SERVER['PHP_SELF']);
require_once("header.php"); ?>
<div class="row small-spacing">
	<div class="col-lg-12">
		<div class="box-content">
			<div class="pull-right">
				<a href="add_testimonials.php" class="btn btn-primary">Add</a>
			</div>
			<h4 class="box-title">Testimonials</h4>

			<table id="myTable1" class="table table-hover table-striped display table-bordered pb-30">
				<thead class="text text-dark">
					<tr>
						<th>Name</th>
						<th>Image</th>
						<th>Title</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$record = $obj->getData("testimonials");
					if ($record) {
						$sr = 0;
						foreach ($record as $row) {
							$sr++;
					?>
							<tr>
								<td><?php echo $row["t_name"]; ?></td>
								<td><img width="50px" src="../images/<?php echo $row["t_img"]; ?>" alt="" srcset=""></td>
								<td><?php echo $row["t_title"]; ?></td>

								<td class="text-nowrap">
									<a href="add_testimonials.php?id=<?php echo $row['id']; ?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i style="font-size:20px;" class="fa fa-pencil text-inverse m-r-10"></i> </a>
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
			window.location.href = "action.php?del_testimonials=" + id;
		});
		return false;


	}
</script>


<?php require_once("footer.php"); ?>