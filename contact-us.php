<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>1 S T E P | Contact Us</title>
	<link rel="stylesheet" href="css/mainStyle.css" />
	<link rel="stylesheet" href="css/contact.css" />
	<script src="https://kit.fontawesome.com/a29f3f1e4b.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
</head>

<body>
	<?php include 'php/navbar.php' ;?>
	<section class="section contact_section" id="contact">
		<div class="row title" z-index="0">
			<h2>Get in touch!</h2>
		</div>
		<div class="row">
			<div class="contact_details">
				<p><i class="fa-solid fa-phone"></i>  Phone: +44 7485 000000</p>
				<p><i class="fa-solid fa-envelope"></i>  Email: 1step@gmail.com</p>
				<p><i class="fa-solid fa-map-location-dot"></i>  Address: 4710 Natomas Blvd, Sacramento, CA</p>
			</div>
		</div>
		<div class="contact_part">
			<div class="contact_container">
				<div class="contact-box" id="contact_form">
					<div class="left"></div>
					<div class="right">
						<h2>Contact Us</h2>
						<input type="text" required class="field" placeholder="Your Name: * ">
						<input type="text" required class="field" placeholder="Company Name: * ">
						<input type="text" class="field" placeholder="Email Address: ">
						<textarea reqired placeholder="Message: *" class="field"></textarea>
						<button class="btn">Send</button>
					</div>
				</div>
			</div>
		</div>
		<div class="contact_part">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3115.5767205542015!2d-121.51154218436267!3d38.658611968588325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809ad0e12b283c71%3A0xa49c6a4186ebd92!2sStep%201%20Dance%20%26%20Fitness!5e0!3m2!1sen!2suk!4v1668465579716!5m2!1sen!2suk"
				 height="450" width="70%" style="border-radius:20px;" allowfullscreen="" loading="lazy"
				referrerpolicy="no-referrer-when-downgrade" id="map"></iframe>
		</div>
	</section>
	
	<?php include 'php/footer.php'?>

	<script language="Javascript" type="text/javascript" src="js/main.js"></script>
</body>