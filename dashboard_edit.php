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

include("./php/include/_connect.php");
include("./php/graphs.php");

$_SESSION['last_page'] = "Edit";

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
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet' />
</head>

<body>
	<section class="section_body">
	<div class = "table">
		<div class="table_header">
			<h1>Home Page</h1>
		</div>
		<div class="table_body">
			<?php showPartTable(1, $connect); ?>
		</div>
	</div>
		
	<div class = "table">
		<div class="table_header">
			<h1>About Us Page</h1>
		</div>
		<div class="table_body">
			<?php showPartTable(2, $connect); ?>
		</div>
	</div>
	</section>
	<div id="edit_window" class="extrawindow not_visible">
		<iframe id="edit_frame" src="https://youtube.com"></iframe>
		<button onclick="closeWindow()">X</button>
	</div>

	<script src="js/edit.js" type="text/javascript"></script>

</body>

</html>