<?php
session_start();
if (isset($_SESSION["admin_email"])) {
	echo "<script>
    window.location.assign('dashboard.php');
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Admin | Login</title>

	<link rel="stylesheet" href="https://unpkg.com/toastmejs@latest/dist/css/toastme.css" />
	<script src="https://unpkg.com/toastmejs@latest/dist/js/toastme.min.js"></script>

	<link rel="stylesheet" href="assets/styles/style.min.css">
	<!-- Waves Effect -->
	<link rel="stylesheet" href="assets/plugin/waves/waves.min.css">

</head>

<body>

	<script>
		//Customize your Notification
		const config = {
			timeout: 15000,
			positionY: "bottom", // top or bottom
			positionX: "right", // right left, center
			distanceY: 20, // Integer value
			distanceX: 20, // Integer value
			zIndex: 100, // Integer value
			theme: "default", // default, ligh or  dark (leave empty for "default" theme)
			duplicates: false, // true or false - by default it's false
		};
		//Create a new Toastmejs class instance
		const mytoast = new Toastme(config);
		//Call it whenever you want!
	</script>

	<?php
	if (isset($_SESSION["msg"])) {
	?>
		<script>
			mytoast.<?php echo $_SESSION['status']; ?>("<?php echo $_SESSION['msg']; ?>");
		</script>
	<?php
		unset($_SESSION["msg"]);
		unset($_SESSION["status"]);
	} ?>
	<div id="single-wrapper">
		<form action="action.php" method="post" class="frm-single">
			<div class="inside">
				<div class="title"><strong>Welcome</strong></div>
				<!-- /.title -->
				<div class="frm-title">Login</div>
				<!-- /.frm-title -->
				<div class="frm-input"><input type="text" name="admin_email" placeholder="Username" class="frm-inp"><i class="fa fa-user frm-ico"></i></div>
				<!-- /.frm-input -->
				<div class="frm-input"><input name="admin_password" type="password" placeholder="Password" class="frm-inp"><i class="fa fa-lock frm-ico"></i></div>
				<!-- /.frm-input -->
				<div class="clearfix margin-bottom-20">
					<div class="pull-left">
						<div class="checkbox primary"><input type="checkbox" id="rememberme"><label for="rememberme">Remember me</label></div>
						<!-- /.checkbox -->
					</div>
					<!-- /.pull-left -->
					<!-- <div class="pull-right"><a href="page-recoverpw.html" class="a-link"><i class="fa fa-unlock-alt"></i>Forgot password?</a></div> -->
					<!-- /.pull-right -->
				</div>
				<!-- /.clearfix -->
				<button type="submit" name="login" value="login" class="frm-submit">Login<i class="fa fa-arrow-circle-right"></i></button>
				<div class="row small-spacing">

					<!-- /.col-sm-12 -->

				</div>

			</div>
			<!-- .inside -->
		</form>

	</div>

	<script src="assets/scripts/jquery.min.js"></script>
	<script src="assets/scripts/modernizr.min.js"></script>
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugin/nprogress/nprogress.js"></script>
	<script src="assets/plugin/waves/waves.min.js"></script>

	<script src="assets/scripts/main.min.js"></script>
</body>

</html>