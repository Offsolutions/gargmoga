<?php
require_once("action.php");

if (isset($_GET["service"])) {
	$wheremeta = array(
		"page_title" => $_GET["service"],
	);
	$rowmeta = $obj->selectData("services", $wheremeta);
	$meta_desc = $rowmeta["meta_desc"];
	$meta_keys = $rowmeta["meta_keys"];
}

$page = basename($_SERVER['PHP_SELF']);
require_once("header.php"); ?>
<?php



?>
<?php
if (isset($_GET["service"])) {
	$where = array(
		"page_title" => $_GET["service"],
	);
	$row = $obj->selectData("services", $where);
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
							<li class="breadcrumb-item active" aria-current="page">Our Services</li>
						</ol>
					</nav>

					<!-- Title -->
					<h4 class="h4-sm steelblue-color"><?php echo isset($row["title"]) ? $row["title"] : ""; ?></h4>

				</div>
			</div>
		</div> <!-- End row -->
	</div> <!-- End container -->
</div> <!-- END BREADCRUMB -->




<!-- TABS-2
			============================================= -->
<section id="tabs-2" class="wide-100 tabs-section division">
	<div class="container">
		<div class="row">


			<!-- TABS NAVIGATION -->
			<div class="col-lg-4">
				<div id="tabs-nav" class="list-group text-center clearfix">
					<ul class="nav nav-pills" id="pills-tab" role="tablist">
						<?php
						$recordsss = $obj->getData("services");
						if ($recordsss) {
							$sr = 0;
							foreach ($recordsss as $rowsss) {
								$sr++;
						?>
								<!-- TAB-1 LINK -->
								<li class="nav-item icon-xs">
									<a class="nav-link <?php if ($rowsss['page_title'] == $_GET['service']) {
															echo "active";
														} ?>" id="tab11-list" href="service_details.php?service=<?php echo $rowsss["page_title"]; ?>">
										<?php echo $rowsss["title"]; ?>
									</a>
								</li>
						<?php
							}
						} else {
							echo "";
						}
						?>


					</ul>

				</div>
			</div> <!-- END TABS NAVIGATION -->


			<!-- TABS CONTENT -->
			<div class="col-lg-8">
				<div class="tab-content" id="pills-tabContent">


					<!-- TAB-1 CONTENT -->
					<div class="tab-pane fade show active" id="tab-11" role="tabpanel" aria-labelledby="tab11-list">
						<!-- Title -->
						<h3 class="h3-md steelblue-color"><?php echo isset($row["title"]) ? $row["title"] : ""; ?></h3>


						<!-- Image -->
						<div class="tab-img">
							<img class="img-fluid" src="images/<?php echo isset($row["img"]) ? $row["img"] : ""; ?>" alt="tab-image" />
						</div>

						<?php echo isset($row["service_desc"]) ? $row["service_desc"] : ""; ?>



					</div> <!-- END TAB-1 CONTENT -->





				</div> <!-- END TABS CONTENT -->


			</div>
		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- END TABS-2 -->




<?php require_once("footer.php"); ?>