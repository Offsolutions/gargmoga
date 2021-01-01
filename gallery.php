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
							<li class="breadcrumb-item active" aria-current="page">Our Gallery</li>
						</ol>
					</nav>

					<!-- Title -->
					<h4 class="h4-sm steelblue-color">Our Gallery</h4>

				</div>
			</div>
		</div> <!-- End row -->
	</div> <!-- End container -->
</div> <!-- END BREADCRUMB -->




<!-- GALLERY-3
			============================================= -->
<div id="gallery-3" class="gallery-section division">
	<div class="container">



		<!-- GALLERY IMAGES HOLDER -->
		<div class="row">
			<div class="col-md-12 gallery-items-list">
				<div class="masonry-wrap grid-loaded">
					<?php

					$record = $obj->getData("gallery");

					if ($record) {
						$sr = 0;
						foreach ($record as $row) {
							$sr++;
					?>

							<!-- IMAGE #1 -->
							<div class="gallery-item dental">
								<div class="hover-overlay">

									<!-- Gallery Image -->
									<img class="img-fluid" src="images/<?php echo $row["img"]; ?>" alt="galley-image" />
									<div class="item-overlay"></div>

									<!-- Image Zoom -->
									<div class="image-zoom">
										<a class="image-link" href="images/<?php echo $row["img"]; ?>" title=""><i class="fas fa-search-plus"></i></a>
									</div>

								</div>
							</div> <!-- END IMAGE #1 -->
					<?php

						}
					} else {
						echo "";
					} ?>

				</div>
			</div>
		</div> <!-- END GALLERY IMAGES HOLDER -->


	</div> <!-- End container -->
</div> <!-- END GALLERY-3 -->

<?php require_once("footer.php"); ?>