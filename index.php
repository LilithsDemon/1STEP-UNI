<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>1 S T E P | Home</title>
	<link rel="stylesheet" href="css/mainStyle.css" />
	<link rel="stylesheet" href="css/slider.css" />
	<link rel="stylesheet" href="css/alt_block_info.css"/>
	<script src="https://kit.fontawesome.com/a29f3f1e4b.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
</head>

<body>

	<?php include 'php/navbar.php' ;?>
	<?php include 'php/include/_connect.php';?>
	<?php include 'php/loadParts.php';?>

	<section class="home home_section" id="home">
		<?php loadPage(1, $connect); ?>
	</section>

	<?php include 'php/footer.php'?>

	<script langauge="Javascript" type="text/javascript" src="js/main.js"></script>
	<script langauge="Javascript" type="text/javascript" src="js/slider.js"></script>
</body>

</html>