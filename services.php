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
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Our Services</li>
						</ol>
					</nav>

					<!-- Title -->
					<h4 class="h4-sm steelblue-color">Our Services</h4>

				</div>
			</div>
		</div> <!-- End row -->
	</div> <!-- End container -->
</div> <!-- END BREADCRUMB -->


<section id="services-5" class="bg-lightgrey wide-100 services-section division">
	<div class="container">


		<!-- SECTION TITLE -->
		<div class="row">
			<div class="col-lg-10 offset-lg-1 section-title">

				<!-- Title 	-->
				<h3 class="h3-md steelblue-color">Total Health Care Solutions</h3>

				<!-- Text -->
				<p>
					Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero at tempus,
					blandit posuere ligula varius congue cursus porta feugiat
				</p>

			</div>
		</div>


		<!-- SERVICES CONTENT -->
		<div class="row">


			<?php
			$record_services = $obj->getData("services");
			if ($record_services) {
				$sr = 0;
				foreach ($record_services as $row_services) {
					$sr++;
			?>
					<div class="col-lg-3">
						<!-- SERVICE BOX #1 -->
						<div class="sbox-5">

							<!-- Image -->
							<a href="service_details.php?service=<?php echo $row_services["page_title"]; ?>"> <img class="img-fluid" style="width: 80px; margin-top: 10px;" src="images/<?php echo $row_services["thumb_img"]; ?>" alt="content-image" /></a>

							<!-- Text -->
							<div class="sbox-5-txt">

								<!-- Title -->
								<a href="service_details.php?service=<?php echo $row_services["page_title"]; ?>">
									<h5 data-toggle="tooltip" data-placement="top" title="<?php echo $row_services["title"]; ?>" class="h5-sm blue-color"><?php echo substr($row_services["title"], 0, 10); ?>...</h5>
								</a>

								<!-- Text -->
								<p>
									<?php echo $row_services["short_desc"]; ?>...
								</p>

							</div>

						</div>
					</div>

			<?php

				}
			} else {
				echo "";
			} ?>


		</div> <!-- END SERVICES CONTENT -->


	</div> <!-- End container -->
</section>



<?php require_once("footer.php"); ?>