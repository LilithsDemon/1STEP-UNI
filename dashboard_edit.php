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
</head>

<body>
	<nav>

	</nav>
</body>

</html>