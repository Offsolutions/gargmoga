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
							<li class="breadcrumb-item active" aria-current="page">Timetable</li>
						</ol>
					</nav>

					<!-- Title -->
					<h4 class="h4-sm steelblue-color">Timetable</h4>

				</div>
			</div>
		</div> <!-- End row -->
	</div> <!-- End container -->
</div> <!-- END BREADCRUMB -->



<?php
$record_team = $obj->getData("team");
if ($record_team) {
?>

	<!-- SCHEDULE TIMETABLE
			============================================= -->
	<div id="timetable-page" class="timetable-section division">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">Image</th>
								<th scope="col">Name</th>
								<th scope="col">Mon</th>
								<th scope="col">Tue</th>
								<th scope="col">Wed</th>
								<th scope="col">Thu</th>
								<th scope="col">Fri</th>
								<th scope="col">Sat</th>
								<th scope="col">Sun</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$sr = 0;
							foreach ($record_team as $row_team) {
								$sr++;
							?>
								<tr>
									<th scope="row"><img width="50" src="images/<?php echo $row_team["img"]; ?>" alt="" srcset=""></th>
									<td><b><?php echo $row_team["name"]; ?></b><br>
										<?php echo $row_team["post"]; ?>
									</td>
									<td>
									 <i class="fa fa-<?php echo ($row_team["mon"]==1)?"check":"times" ?>"></i>
									
									
								
									
									
								
									
									</td>
									<td> <i class="fa fa-<?php echo ($row_team["tue"]==1)?"check":"times" ?>"></i></td>
									<td> <i class="fa fa-<?php echo ($row_team["wed"]==1)?"check":"times" ?>"></i></td>
									<td>	<i class="fa fa-<?php echo ($row_team["thu"]==1)?"check":"times" ?>"></i></td>
									<td> <i class="fa fa-<?php echo ($row_team["fri"]==1)?"check":"times" ?>"></i></td>
									<td> <i class="fa fa-<?php echo ($row_team["sat"]==1)?"check":"times" ?>"></i></td>
									<td> <i class="fa fa-<?php echo ($row_team["sun"]==1)?"check":"times" ?>"></i></td>
								
								</tr>


							<?php } ?>
						</tbody>
					</table>


				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</div> <!-- END SCHEDULE TIMETABLE -->
<?php


} else {
	echo "";
} ?>



<?php require_once("footer.php"); ?>