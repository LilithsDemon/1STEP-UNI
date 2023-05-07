<?php

session_start();

if (!isset($_SESSION['username'])) {
	$_SESSION['username'] = "Blank";
}

if (!isset($_SESSION['auth']))
{
	$_SESSION['auth'] = false;
	header("Location: index.php");
}

if ($_SESSION['auth'] == false)
{
	header("Location: index.php");
}

$_SESSION['last_page'] = "Home";


include("./php/include/_connect.php");

?>

<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>1 S T E P | Home</title>
	<link rel="stylesheet" href="css/dashboard.css" />
	<link rel="stylesheet" href="css/inner_dashboard.css" />
	<script src="https://kit.fontawesome.com/a29f3f1e4b.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
	<section class="full-screen">
		<div class="width_2">
			<div class="card">
				<div class="title">
					<h3>Notifications</h3>
				</div>
				<div class="body">
					<p>No new notifications</p>
				</div>
			</div>
			<div class="card">
				<div class="title">
					<h3>Customer Satisfaction</h3>
				</div>
				<div class="body">
					<p>91% Satisfied<br>9% Unsatisfied</p>
				</div>
			</div>
		</div>
	</section>

</body>

</html>