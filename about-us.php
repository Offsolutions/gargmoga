<?php
require_once("action.php");


	$wheremeta = array(
		"id" => 10,
	);
	$rowmeta = $obj->selectData("pages", $wheremeta);
	$meta_desc = $rowmeta["meta_desc"];
	$meta_keys = $rowmeta["meta_keys"];


$page = basename($_SERVER['PHP_SELF']);
require_once("header.php"); ?>
<?php

$wherepg = array(
	"id" => 1,
);
// $rowpg = $obj->selectDataLimit("banners");

?>
<?php

	$where = array(
		"id" => 10,
	);
	$row = $obj->selectData("pages", $where);

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
							<li class="breadcrumb-item active" aria-current="page">About Us</li>
						</ol>
					</nav>

					<!-- Title -->
					<h4 class="h4-sm steelblue-color">About Us</h4>

				</div>
			</div>
		</div> <!-- End row -->
	</div> <!-- End container -->
</div> <!-- END BREADCRUMB -->




<!-- INFO-4
			============================================= -->
<section id="info-4" class="wide-100 info-section division">
	<div class="container">


		<!-- TOP ROW -->
		<div class="top-row mb-80">
			<div class="row d-flex align-items-center">


				<!-- INFO IMAGE -->
				<div class="col-lg-6">
					<div class="info-4-img text-center wow fadeInUp" data-wow-delay="0.6s">
						<img class="img-fluid" src="images/<?php echo $row["img"]; ?>" alt="info-image">
					</div>
				</div>


				<!-- INFO TEXT -->
				<div class="col-lg-6">
					<div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s">

						<!-- Section ID -->
						<span class="section-id blue-color">About Us</span>

						<!-- Title -->
						<h3 class="h3-md steelblue-color"><?php echo $row["title"]; ?></h3>

						<?php echo $row["page_desc"]; ?>

					</div>
				</div> <!-- END TEXT BLOCK -->


			</div> <!-- End row -->
		</div> <!-- END TOP ROW -->


	

	</div> <!-- End container -->
</section> <!-- END INFO-4 -->




<?php require_once("footer.php"); ?>