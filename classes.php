<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>1 S T E P | Classes</title>
	<link rel="stylesheet" href="css/mainStyle.css" />
	<link rel="stylesheet" href="css/classes.css" />
	<link rel="stylesheet" href="css/title.css" />
	<link rel="stylesheet" href="css/full_screen.css" />
	<script src="https://kit.fontawesome.com/a29f3f1e4b.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
</head>

<body>
	<?php include 'php/navbar.php' ;?>
	<?php include 'php/include/_connect.php' ;?>
	<?php include 'php/loadParts.php'; ?>

	<section class="classes classes_section" id="classes">
		<?php loadFullScreen(1, $connect); ?>
		<div class="section-container">
			<div class="row title">
				<h2>Services</h2>
			</div>
			<div class="row">
				<div class="service_container">
					<div class="service_inner">
						<div class="icon">
							<i class="fa-solid fa-house"></i>
						</div>
						<h3>We provide a place to call home</h3>
						<p>We want our young dancers to feel as comfortable as possible
							so we offer the best place we can.
							Somwhere safe they can be, just like home.
						</p>
					</div>
				</div>
				<div class="service_container">
					<div class="service_inner">
						<div class="icon">
							<i class="fa-solid fa-person-chalkboard"></i>
						</div>
						<h3>The best teaching</h3>
						<p>We offer some of the best teaching you can get
							we always strive to make our dancers the best
							they can be and accept anyone
						</p>
					</div>
				</div>
				<div class="service_container">
					<div class="service_inner">
						<div class="icon">
						<i class="fa-solid fa-camera"></i>
						</div>
						<h3>The best Artwork</h3>
						<p>We provide art for our dancers some abstract and some realistic
							to allow them to see more art in their dance.
						</p>
					</div>
				</div>

			</div>
			<div class="row title">
				<h2>Ballet Booking</h2>
			</div>
			<div class="row timetable">
				<?php loadBalletTimeTable($connect); ?>
			</div>
			<div class="row title">
				<h2>Abstract Dance Booking</h2>
			</div>

			<div class="row timetable">
				<?php loadAbstractTimetable($connect); ?>
	</section>

	<?php include 'php/footer.php'?>

	<script language="Javascript" type="text/javascript" src="js/main.js"></script>
</body>