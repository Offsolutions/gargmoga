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
							<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
						</ol>
					</nav>

					<!-- Title -->
					<h4 class="h4-sm steelblue-color">Contact Us</h4>

				</div>
			</div>
		</div> <!-- End row -->
	</div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3426.0285914278625!2d75.16283521451248!3d30.829864987997187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a0862733cc67b%3A0x1bfa26e39b2c4d4d!2sGarg%20Hospital!5e0!3m2!1sen!2sin!4v1609316848101!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<!-- CONTACTS-1
			============================================= -->
<section id="contacts-1" class="wide-60 contacts-section division">
	<div class="container">


		<!-- SECTION TITLE -->
		<div class="row">
			<div class="col-lg-10 offset-lg-1 section-title">

				<!-- Title 	-->
				<h3 class="h3-md steelblue-color">Have a Question? Get In Touch</h3>

				<!-- Text -->
				<p>Have a question? Want to book an appointment for yourself or your children? Give us a call
					or send an email to contact the MedService.
				</p>

			</div>
		</div>


		<div class="row">


			<!-- CONTACTS INFO -->
			<div class="col-md-5 col-lg-4">

				<!-- General Information -->
				<div class="contact-box mb-40">
					<h5 class="h5-sm steelblue-color">General Information</h5>
					<?php echo isset($admin["address"]) ? strip_tags($admin["address"]) : ""; ?>
					<p>Phone: <?php echo isset($admin["phone"]) ? $admin["phone"] : ""; ?></p>
					<p>Email: <a href="mailto:<?php echo isset($admin["admin_email"]) ? $admin["admin_email"] : ""; ?>" class="blue-color"><?php echo isset($admin["admin_email"]) ? $admin["admin_email"] : ""; ?></a></p>
				</div>



			</div> <!-- END CONTACTS INFO -->


			<!-- CONTACT FORM -->
			<div class="col-md-7 col-lg-8">
				<div class="form-holder mb-40">
					<form action="" method="POST" name="" class="row contact-form">

						<!-- Contact Form Input -->
						<div id="input-name" class="col-md-12 col-lg-6">
							<input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required>
						</div>

						<div id="input-email" class="col-md-12 col-lg-6">
							<input type="text" name="email" class="form-control email" placeholder="Enter Your Email*" required>
						</div>

						<div id="input-phone" class="col-md-12 col-lg-6">
							<input type="tel" name="phone" class="form-control phone" placeholder="Enter Your Phone Number*" required>
						</div>

					

					

						<div id="input-message" class="col-lg-12 input-message">
							<textarea class="form-control message" name="msg" rows="6" placeholder="Your Message ..." required></textarea>
						</div>

						<!-- Contact Form Button -->
						<div class="col-lg-12 mt-15 form-btn">
							<button name="send" value="send" type="submit" class="btn btn-blue blue-hover ">Send Your Message</button>
						</div>

						

					</form>

				</div>
			</div> <!-- END CONTACT FORM -->


		</div> <!-- End row -->


	</div> <!-- End container -->
</section> <!-- END CONTACTS-1 -->


<?php require_once("footer.php"); ?>




<?php


if (isset($_POST["send"])) {
//echo "<pre>";
//print_r($_POST);
//exit;

	$from = 'info@faqirchandjimarble.com';
	$fromName = $_POST["name"];

	$subject = $_POST["name"];

	$message = '<html><body>';
	$message .= '<h1>Garg Hospital Moga</h1>';
	$message .= '</body></html>';

	$message = '<html><body>';

	$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
	$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
	$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";

	$message .= "<tr><td><strong>Phone</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";

	$message .= "<tr><td><strong>Message</strong> </td><td>" . strip_tags($_POST['msg']) . "</td></tr>";

	
	$message .= "</table>";
	$message .= "</body></html>";


	$msg = $_POST['msg'];


	// Set content-type header for sending HTML email 
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// Additional headers 
	$headers .= 'From: ' . $fromName . '<' . $from . '>' . "\r\n";

	$headers .= 'Reply-To:' . $_POST["email"] . "\r\n";
//print_r($message);
//exit;
	// Send email 
	if (mail("rana.officialsolutions@gmail.com", $subject, $message, $headers)) {
		echo "<script>
        alert('Mail Sent');
        </script>";
	}
}


?>