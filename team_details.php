<?php
require_once("action.php");
$page = basename($_SERVER['PHP_SELF']);
$page_title = "";
require_once("header.php"); ?>


<?php
if (isset($_GET["team"])) {
	$where = array(
		"name" => str_replace("-", " ", $_GET["team"]),
	);
	$row = $obj->selectData("team", $where);
}
?>
<!-- BREADCRUMB
			============================================= -->
<div id="breadcrumb" class="division">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class=" breadcrumb-holder">

					<!-- Breadcrumb Nav -->
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>

							<li class="breadcrumb-item active" aria-current="page">Our Doctors</li>
						</ol>
					</nav>

					<!-- Title -->
					<h4 class="h4-sm steelblue-color"><?php echo isset($row["name"]) ? $row["name"] : ""; ?></h4>

				</div>
			</div>
		</div> <!-- End row -->
	</div> <!-- End container -->
</div> <!-- END BREADCRUMB -->




<!-- DOCTOR-2 DETAILS -->
<section id="doctor-2-details" class="wide-70 doctor-details-section division">
	<div class="container">
		<div class="row">


			<!-- DOCTOR PHOTO -->
			<div class="col-md-5 col-xl-5">
				<div class="doctor-photo mb-30 text-center">

					<!-- Photo -->
					<img class="img-fluid" src="images/<?php echo isset($row["img"]) ? $row["img"] : ""; ?>" alt="doctor-foto">


					<!-- Doctor Contacts -->
					<!-- <div class="doctor-contacts">
						<h4 class="h4-xs"><i class="fas fa-mobile-alt"></i> 1-(800)-569-7890</h4>
						<h4 class="h4-xs blue-color"><i class="fas fa-envelope-open-text"></i>
							<a href="mailto:yourdomain@mail.com" class="blue-color">hello@yourdomain.com</a>
						</h4>
					</div> -->

					<!-- Button -->
					<!-- <a href="appointment.html" class="btn btn-md btn-blue blue-hover">Book an Appointment</a> -->

					<!-- Button -->
					<a href="timetable.php" class="btn btn-md btn-tra-grey grey-hover mt-5">View Timetable</a>

				</div>
			</div> <!-- END DOCTOR PHOTO -->


			<!-- DOCTOR'S BIO -->
			<div class="col-md-6 col-xl-6 offset-xl-1">
				<div class="doctor-bio">

					<!-- Name -->
					<h2 class="h2-sm blue-color"><?php echo isset($row["name"]) ? $row["name"] : ""; ?></h2>
					<h5 class="h5-lg blue-color"><?php echo isset($row["post"]) ? $row["post"] : ""; ?></h5>

					<?php echo isset($row["team_desc"]) ? $row["team_desc"] : ""; ?>

				</div>
			</div> <!-- END DOCTOR BIO -->


		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- END  DOCTOR-2 DETAILS -->




<?php require_once("footer.php"); ?>