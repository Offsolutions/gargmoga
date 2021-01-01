<?php
$page = basename($_SERVER['PHP_SELF']);
require_once("header.php"); ?>
<div class="row small-spacing">
	<div class="col-xs-12">
		<div class="box-content">
			<h4 class="box-title">Edit Admin Details</h4>
			<?php
			$where = array(
				"id" => 1,
			);
			$row = $obj->selectData("admin", $where);
			// print_r($row);
			if ($row) {
			?>
				<form data-toggle="validator" role="form" action="action.php" method="post" enctype="multipart/form-data">

					<div class=" ">
						<div class="form-group">
							<label class="control-label mb-10 text-left">Admin Name</label>
							<input required type="text" class="form-control" name="admin_name" value="<?php echo $row["admin_name"]; ?>">
						</div>
					</div>
					<div class=" ">
						<div class="form-group">
							<label class="control-label mb-10 text-left">
								Email</label>
							<input required type="text" class="form-control" name="admin_email" value="<?php echo $row["admin_email"]; ?>">


						</div>
					</div>


					<div class=" ">
						<div class="form-group">
							<label class="control-label mb-10 text-left">
								Phone no.</label>
							<input required type="text" class="form-control" name="phone" value="<?php echo $row["phone"]; ?>">
						</div>
					</div>
					<div class=" ">
						<div class="form-group">
							<label class="control-label mb-10 text-left">
								Alternative Phone no.</label>
							<input required type="text" class="form-control" name="phone2" value="<?php echo $row["phone2"]; ?>">
						</div>
					</div>
					<div class=" ">
						<div class="form-group">
							<label class="control-label mb-10 text-left">
								Whatsapp</label>
							<input required type="text" class="form-control" name="whatsapp" value="<?php echo $row["whatsapp"]; ?>">
						</div>
					</div>
					<div class=" ">
						<div class="form-group">
							<label class="control-label mb-10 text-left">
								Facebook</label>
							<input required type="text" class="form-control" name="facebook" value="<?php echo $row["facebook"]; ?>">
						</div>
					</div>
					<div class=" ">
						<div class="form-group">
							<label class="control-label mb-10 text-left">
								Instagram</label>
							<input type="text" class="form-control" name="insta" value="<?php echo $row["insta"]; ?>">
						</div>
					</div>
					<div class=" ">
						<div class="form-group">
							<label class="control-label mb-10 text-left">
								Youtube</label>
							<input type="text" class="form-control" name="youtube" value="<?php echo $row["youtube"]; ?>">
						</div>
					</div>
					<div class=" ">
						<div class="form-group">
							<label class="control-label mb-10 text-left">
								Twitter</label>
							<input type="text" class="form-control" name="twitter" value="<?php echo $row["twitter"]; ?>">
						</div>
					</div>
					<div class=" ">
						<div class="form-group">
							<label class="control-label mb-10 text-left">
								Password</label>
							<input value="<?php echo $row["admin_password"]; ?>" required type="text" class="form-control" name="admin_password">
						</div>
					</div>
					<div class=" ">
						<div class="form-group">
							<label class="control-label mb-10 text-left">
								Schedule</label>
							<input required type="text" class="form-control" name="open_time" value="<?php echo $row["open_time"]; ?>">
						</div>
					</div>
					<div class=" ">
						<div class="form-group">
							<label class="control-label mb-10 text-left">
								Meta Keys</label>
							<input required type="text" class="form-control" name="meta_keys" value="<?php echo $row["meta_keys"]; ?>">
						</div>
					</div>
					<div class=" ">
						<div class="form-group">
							<label class="control-label mb-10 text-left">
								Meta Description</label>
							<input required type="text" class="form-control" name="meta_desc" value="<?php echo $row["meta_desc"]; ?>">
						</div>
					</div>
					<div class=" ">
						<div class="form-group">
							<label class="control-label mb-10 text-left">Logo</label>

							<input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="../images/<?php echo $row["logo"]; ?>" name="logo">

						</div>
					</div>
					<div class=" ">
						<div class="form-group">
							<label class="control-label mb-10 text-left">Footer Logo</label>

							<input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="../images/<?php echo $row["flogo"]; ?>" name="flogo">

						</div>
					</div>
					<div style="margin-top: 10px;" class="box-content">
						<h4 class="box-title">Address</h4>
						<textarea required name="address" id="tinymce">
							<?php echo $row["address"]; ?>
					</textarea>
					</div>

					<div style="margin-top: 10px;" class="box-content">
						<h4 class="box-title">Site Description</h4>
						<textarea required name="admin_desc" id="tinymce1">
							<?php echo $row["admin_desc"]; ?>
					</textarea>
					</div>



					<div class="form-group">
						<button type="submit" name="edit_admin" value="edit_admin" class="btn btn-primary btn-anim"><i class="icon-rocket"></i><span class="btn-text">Save</span></button>
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