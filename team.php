<?php
require_once("action.php");
$page = basename($_SERVER['PHP_SELF']);
$page_title = "";
require_once("header.php"); ?>



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
							<li class="breadcrumb-item"><a href="demo-1.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Meet the Doctors</li>
						</ol>
					</nav>

					<!-- Title -->
					<h4 class="h4-sm steelblue-color">Meet the Doctors</h4>

				</div>
			</div>
		</div> <!-- End row -->
	</div> <!-- End container -->
</div> <!-- END BREADCRUMB -->


<?php
$record_team = $obj->getData("team");
if ($record_team) {
?>

	<!-- DOCTORS-3
			============================================= -->
	<section id="doctors-3" class="bg-lightgrey wide-60 doctors-section division">
		<div class="container">
			<div class="row">

				<?php
				$sr = 0;
				foreach ($record_team as $row_team) {
					$sr++;
				?>
					<!-- DOCTOR #1 -->
					<div class="col-md-6 col-lg-4">
						<div class="doctor-2">

							<!-- Doctor Photo -->
							<div class="hover-overlay">
								<img class="img-fluid" src="images/<?php echo $row_team["img"]; ?>" alt="doctor-foto">
							</div>

							<!-- Doctor Meta -->
							<div class="doctor-meta">

								<h5 class="h5-xs blue-color"><?php echo $row_team["name"]; ?></h5>
								<span><?php echo $row_team["post"]; ?></span>

								<!-- Button -->
								<a class="btn btn-sm btn-blue blue-hover mt-15" href="team_details.php?team=<?php echo str_replace(" ","-",$row_team["name"]); ?>" title="">View More Info</a>

							</div>

						</div>
					</div> <!-- END DOCTOR #1 -->

				<?php } ?>



			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END DOCTORS-3 -->

<?php


} else {
	echo "";
} ?>



<?php require_once("footer.php"); ?>